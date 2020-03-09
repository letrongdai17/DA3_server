<?php


namespace App\Http\Controllers\API;


use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryConroller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function getAll(Request $request)
    {
        $allCategories = $this->categoryService->getAll();

        return response()->json($allCategories, 200);
    }

    public function getCategoryProducts(Request $request)
    {
        $categoryProducts = $this->categoryService->getCategoryProducts($request->id);

        return response()->json($categoryProducts, 200);
    }
}
