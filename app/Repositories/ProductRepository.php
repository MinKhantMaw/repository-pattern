<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\Interfaces\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{
    public function allProducts()
    {
        // TODO: Implement allProducts() method.
        return Product::with('category')->latest()->paginate(5);
    }

    public function storeProduct($data)
    {
        // TODO: Implement storeProduct() method.
        return Product::create($data);
    }

    public function findProduct($id)
    {
        // TODO: Implement findProduct() method.
        return Product::find($id);
    }

    public function updateProduct($data, $id)
    {
        // TODO: Implement updateProduct() method.
        $product = Product::where('id', $id)->first();
        $product->name = $data['name'];
        $product->price = $data['price'];
        $product->category_id = $data['category_id'];
        $product->save();
    }

    public function destroyProduct($id)
    {
        $product = Product::findByID($id);
        $product->delete();
    }
}
