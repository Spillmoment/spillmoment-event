<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function index()
    {
        return view('web.category.index');
    }

    public function detail($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $product = Product::with(['category'])
            ->where('category_id', $category->id)
            ->latest()
            ->get();
        return view('web.category.detail', [
            'category' => $category,
            'product'  => $product
        ]);
    }
}
