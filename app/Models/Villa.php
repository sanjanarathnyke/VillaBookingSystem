<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Villa extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'image', 'price', 'description', 'bed_count', 'guest_count', 'bath_count', 'ratings'
    ];
}
