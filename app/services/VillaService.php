<?php
namespace App\Services;

use App\Models\Villa;
use Illuminate\Support\Facades\Storage;

class VillaService
{
    public function store(array $data)
    {
        if (isset($data['image'])) {
            $data['image'] = $data['image']->store('villas', 'public');
        }

        return Villa::create($data);
    }
}

