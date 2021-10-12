<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    use HasFactory;

    public function categoryProduct()
    {
        return $this->hasOne(CategoryProduct::class, 'id', 'id_category');
    }
}
