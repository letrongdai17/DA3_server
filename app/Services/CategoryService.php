<?php


namespace App\Services;


use App\Models\Category;

class CategoryService
{
    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function getAll()
    {
        $categories = [];
        $allCategories = $this->category->all();
        foreach ($allCategories as $category)
        {
            $category->products = $category->products()->get()->toArray();
            array_push($categories, $category);
        }

        return $categories;
    }

    public function getCategoryProducts($id)
    {
        $category = $this->category->find($id);
        if (!$category || count($category->toArray()) == 0) {
            return abort(404, 'Category not found');
        }

        $products = $category->products()->get()->toArray();
        return array_merge($category->toArray(), ["products" => $products]);
    }
}
