<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{   
    protected $fillable = [
        'section_name',
        'subtitle',
        'addtitle',
        'address',
        'calltitle',
        'call',
        'emailtitle',
        'email',
        'map',
    ];
    use HasFactory;
}
