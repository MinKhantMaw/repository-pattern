<?php

namespace App\Repositories;

use App\Models\Category;
use App\Repositories\Interfaces\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface
{

    public function allCategories()
    {
        // TODO: Implement allCategories() method.
        return Category::latest()->paginate(5);
    }

    public function storeCategory($data)
    {
        // TODO: Implement storeCategory() method.
        return Category::create($data);
    }

    public function findCategory($id)
    {
        // TODO: Implement findCategory() method.
        return Category::find($id);
    }

    public function updateCategory($data, $id)
    {
        // TODO: Implement updateCategory() method.
        $category = Category::where('id', $id)->first();
        $category->name = $data['name'];
        $category->slug = $data['slug'];
        $category->save();
    }

    public function destroyCategory($id)
    {
        // TODO: Implement destroyCategory() method.
        $category = Category::find($id);
        $category->delete();
    }
}
