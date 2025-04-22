<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Villa extends Model
{
    use HasFactory;


    protected $table = 'villas';


    protected $fillable = [
        'name',
        'image',
        'address',
        'price',
        'bed_count',
        'bath_count',
        'guest_count',
        'country_id',
    ];


    public function country()
    {
        return $this->belongsTo(Country::class,'country_id');
    }
}
