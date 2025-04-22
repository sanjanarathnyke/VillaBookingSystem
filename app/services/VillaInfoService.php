<?php

namespace App\Services;

use App\Models\Villa;
use App\Models\VillaInfo;

class VillaInfoService
{
    public function createvillaInfo(array $data)
    {

        VillaInfo::create([
            'villa_id' => $data['villa_id'],
            'fun_discovery' => $data['fun_discovery'],
            'amenities' => $data['amenities'],
            'overview' => $data['overview'],
        ]);
    }
}
