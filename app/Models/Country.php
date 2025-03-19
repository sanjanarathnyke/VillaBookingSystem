<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
      // Define the fillable fields
      protected $fillable = [
        'image',
        'name',
        'language_spoke',
        'capital',
        'currency',
        'visa_requirements',
        'area',
        'description',
    ];

    // Define the relationship with the Villa model (One to Many)
    public function villas()
    {
        return $this->hasMany(Villa::class,'country_id');
    }
}
