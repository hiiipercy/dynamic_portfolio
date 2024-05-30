<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whyus extends Model
{   
    protected $fillable = [
        'name_section',
        'title',
        'subtitle',
        'list_1',
        'list_title_1',
        'list_2',
        'list_title_2',
        'list_3',
        'list_title_3'
    ];
    use HasFactory;
}
