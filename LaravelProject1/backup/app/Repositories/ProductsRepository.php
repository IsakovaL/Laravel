<?php

namespace App\Repositories;

use App\Models\Product;

class ProductsRepository
{
    public function all()
    {
        return Product::all();
    }
    public function byId($id)
    {
        return Product::find($id);
    }
} 