<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VillaInfo extends Model
{
    use HasFactory;
    protected $table = 'villainfo';
    
    protected $fillable = ['villa_id', 'fun_discovery', 'amenities', 'overview'];

    public function villa()
    {
        return $this->belongsTo(Villa::class);
    }
}
