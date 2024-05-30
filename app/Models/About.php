<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{   
    protected $fillable = [
        'section_name',
        'title',
        'list_1',
        'list_2',
        'list_3',
        'description'
    ];
    use HasFactory;
}
