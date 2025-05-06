<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['nama'];

    // Relasi: Satu kategori memiliki banyak dress
    public function dresses()
    {
        return $this->hasMany(Dress::class);
    }
}
