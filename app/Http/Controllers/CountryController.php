<?php

namespace App\Http\Controllers;

use App\Imports\CountryImport;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::paginate(20); // Paginate with 10 items per page
        return view('locations.countries', compact('countries'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'code' => 'string|required|unique:countries,code,',
            'calling_code' => 'integer|required|unique:countries,calling_code,',
            'name' => 'string|required|unique:countries,name,',
            'active' => 'required'
        ], [
            'code.required' => 'The country code is required.',
            'code.string' => 'The country code must be a string.',
            'code.unique' => 'The country code has already been taken.',

            'calling_code.required' => 'The calling code is required.',
            'calling_code.integer' => 'The calling code must be an integer.',
            'calling_code.unique' => 'The calling code has already been taken.',

            'name.required' => 'The country name is required.',
            'name.string' => 'The country name must be a string.',
            'name.unique' => 'The country name has already been taken.',

            'active.required' => 'The use in filters is required.',
        ]);


        // Transform the input data
        $validated['code'] = strtoupper($validated['code']); // Convert code to uppercase
        $validated['name'] = ucwords(strtolower($validated['name'])); // Capitalize the first letter of each word in the name

        Country::create($validated);

        return redirect()->back()->with(['success' => 'Country Saved Successfully']);
    }

    public function uploadCountries(Request $request)
    {
        ini_set('memory_limit', '512M');
        ini_set('max_execution_time', 300); // Increase the execution time to 5 minutes

        $request->validate([
            'file' => 'required|file|mimes:xlsx',
        ]);

        try {
            // Attempt the import
            Excel::import(new CountryImport, $request->file('file'));

            return redirect()->back()->with('success', 'Countries imported successfully!');
        } catch (\Exception $e) {
            // Log the error and redirect back with a failure message
            Log::error('Country import failed: ' . $e->getMessage());

            return redirect()->back()->with('error', 'There was an error importing the file: ' . $e->getMessage());
        }
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $country = Country::findOrFail($id);
        return view('locations.editCountry', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'code' => 'string|required|unique:countries,code,' . $id,
            'calling_code' => 'integer|required|unique:countries,calling_code,' . $id,
            'name' => 'string|required|unique:countries,name,' . $id,
            'active' => 'required'
        ], [
            'code.required' => 'The country code is required.',
            'code.string' => 'The country code must be a string.',
            'code.unique' => 'The country code has already been taken.',

            'calling_code.required' => 'The calling code is required.',
            'calling_code.integer' => 'The calling code must be an integer.',
            'calling_code.unique' => 'The calling code has already been taken.',

            'name.required' => 'The country name is required.',
            'name.string' => 'The country name must be a string.',
            'name.unique' => 'The country name has already been taken.',

            'active.required' => 'The use in filters is required.',
        ]);


        // Find the country by ID
        $country = Country::findOrFail($id);

        // Update the country with validated data
        $country->update($validated);

        return redirect()->back()->with(['success' => 'Country Updated Successfully', 'country' => $country]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
