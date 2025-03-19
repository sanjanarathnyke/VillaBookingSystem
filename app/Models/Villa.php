<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Villa extends Model
{
    use HasFactory;


    // Define the table name (if not following Laravel's pluralization convention)
    protected $table = 'villas';

    // Define the fillable fields
    protected $fillable = [
        'name',
        'image',
        'description_about',
        'price',
        'bed_count',
        'bath_count',
        'guest_count',
        'country_id', // Foreign key to countries table
    ];

    // Define the relationship with the Country model (Many to One)
    public function country()
    {
        return $this->belongsTo(Country::class,'country_id');
    }
}
