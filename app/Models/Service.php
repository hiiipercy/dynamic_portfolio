<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{   
    protected $fillable = [
        'image',
        'ser_title',
        'ser_details'
    ];
    use HasFactory;
}
