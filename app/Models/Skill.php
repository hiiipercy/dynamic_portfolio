<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{   
    protected $fillable = [
        'name_section',
        'image',
        'title',
        'subtitle',

        'skill_name_1',
        'skill_percent_1',
        'skill_fill_percent_1',

        'skill_name_2',
        'skill_percent_2',
        'skill_fill_percent_2',

        'skill_name_3',
        'skill_percent_3',
        'skill_fill_percent_3',
    ];
    use HasFactory;
}
