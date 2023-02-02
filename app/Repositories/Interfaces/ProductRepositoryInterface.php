<?php

namespace App\Repositories\Interfaces;

interface ProductRepositoryInterface
{
    public function allProducts();
    public function storeProduct($data);
    public function findProduct($id);
    public function updateProduct($data, $id);
    public function destroyProduct($id);
}
