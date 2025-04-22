<?php
namespace App\Services;

use App\Models\Country;
use Illuminate\Support\Facades\Storage;

class CountryService
{
    public function createCountry(array $data, $image)
    {

        $path = $image->store('countries', 'public');

       
        return Country::create([
            'name' => $data['name'],
            'image' => $path,
            'language_spoke' => $data['languagespoke'],
            'capital' => $data['capital'],
            'currency' => $data['currency'],
            'visa_requirements' => $data['visarequimnets'],
            'area' => $data['area'],
            'description' => $data['desctription'],
        ]);
    }
}

