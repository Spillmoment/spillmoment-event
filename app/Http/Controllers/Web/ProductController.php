<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $data['product'] = Product::with(['category', 'vendor'])
            ->latest()->paginate(6);
        return view('web.products.index', $data);
    }

    public function detail($slug)
    {
        $data['product'] = Product::with(['category', 'vendor'])
            ->where('slug', $slug)
            ->first();
        return view('web.products.detail', $data);
    }
}
