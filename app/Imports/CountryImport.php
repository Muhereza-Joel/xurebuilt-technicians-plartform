<?php

namespace App\Imports;

use App\Models\Country;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CountryImport implements ToModel, WithHeadingRow
{
    /**
     * Define the row where the headers are located.
     *
     * @return int
     */
    public function headingRow(): int
    {
        return 2; // Set to row 2 to skip instructions in row 1
    }

    public function model(array $row)
    {
        // Skip empty rows by checking if all relevant fields are empty
        if (empty($row['code']) && empty($row['calling_code']) && empty($row['name']) && empty($row['active'])) {
            return null; // Skip empty rows
        }

        // Convert name to UTF-8 to ensure special characters are properly handled
        $name = mb_convert_encoding($row['name'], 'UTF-8', 'UTF-8');

        // Check for existing country by code or name
        $existingCountry = Country::where('code', strtoupper($row['code']))
            ->orWhere('name', ucwords(strtolower($name))) // Using the encoded name here
            ->first();

        if ($existingCountry) {
            // Update the existing country if found
            $existingCountry->update([
                'code' => strtoupper($row['code']),
                'calling_code' => $this->sanitizeCallingCode($row['calling_code']),
                'name' => ucwords(strtolower($name)), // Using the encoded name here
                'active' => filter_var($row['active'], FILTER_VALIDATE_BOOLEAN),
            ]);

            return null; // Skip inserting a new country since we updated the existing one
        }

        // If no existing country found, create a new country
        return new Country([
            'code' => strtoupper($row['code']),
            'calling_code' => $this->sanitizeCallingCode($row['calling_code']),
            'name' => ucwords(strtolower($name)), // Using the encoded name here
            'active' => filter_var($row['active'], FILTER_VALIDATE_BOOLEAN),
        ]);
    }


    public function chunkSize(): int
    {
        return 1000; // Adjust based on your system's capability
    }


    private function sanitizeCallingCode($callingCode)
    {
        return (int) preg_replace('/[^0-9]/', '', $callingCode);
    }
}
