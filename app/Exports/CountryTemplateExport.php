<?php

namespace App\Exports;

use App\Models\Country;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Events\AfterSheet;

class CountryTemplateExport implements FromArray, WithColumnWidths, WithEvents, WithTitle
{
    public function array(): array
    {
        // Get the existing country data from the database
        $countries = Country::all(['code', 'calling_code', 'name', 'active'])->toArray();

        // Modify the 'active' field to be 'true' for 1 and 'false' for 0
        foreach ($countries as &$country) {
            $country['active'] = $country['active'] == 1 ? 'TRUE' : 'FALSE';
        }

        // Add the instructions, headers, and a sample row before the data
        return array_merge(
            [
                ['Instructions: Please do not modify the headers in row 2, active can be true or false.'],
                ['code', 'calling_code', 'name', 'active'], // Headers
                ['UG', '256', 'Uganda', 'TRUE'], // Sample row
            ],
            $countries // Existing country data
        );
    }


    public function columnWidths(): array
    {
        return [
            'A' => 20,  // Width for 'code'
            'B' => 20,  // Width for 'calling_code'
            'C' => 30,  // Width for 'name'
            'D' => 15,  // Width for 'active'
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                // Freeze header row
                $event->sheet->freezePane('A3');

                // Protect the header row only
                $event->sheet->getDelegate()->getProtection()->setSheet(true);
                $event->sheet->getDelegate()->getStyle('A2:D2')->getProtection()->setLocked(\PhpOffice\PhpSpreadsheet\Style\Protection::PROTECTION_PROTECTED);

                // Allow all other rows to be editable
                $event->sheet->getDelegate()->getStyle('A3:D1000')->getProtection()->setLocked(\PhpOffice\PhpSpreadsheet\Style\Protection::PROTECTION_UNPROTECTED);

                // Optional: Style headers for better readability
                $event->sheet->getStyle('A2:D2')->applyFromArray([
                    'font' => [
                        'bold' => true,
                        'color' => ['argb' => 'FFFFFF'],
                    ],
                    'fill' => [
                        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                        'startColor' => ['argb' => '000000'],
                    ],
                ]);
            },
        ];
    }

    public function title(): string
    {
        return 'Country Template';
    }
}
