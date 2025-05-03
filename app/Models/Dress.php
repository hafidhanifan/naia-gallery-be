<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dress extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'description',
        'price_per_day',
        'stock',
        'image',
    ];
}
