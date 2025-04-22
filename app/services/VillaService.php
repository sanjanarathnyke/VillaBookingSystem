<?php
namespace App\Services;

use App\Models\Villa;

class VillaService
{
    public function create(array $data)
    {
        if (isset($data['image'])) {
            $data['image'] = $data['image']->store('villas', 'public');
        }

        return Villa::create($data);
    }
}
