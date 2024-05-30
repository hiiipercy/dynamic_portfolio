<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{   protected $fillable = [
    'item'
];

// public function priceplane(){
//     return $this->hasMany(PricePlane::class,'price_id', 'id');
// }
    use HasFactory;

}
