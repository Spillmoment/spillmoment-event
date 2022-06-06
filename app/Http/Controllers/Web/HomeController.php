<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\{Category, Product, Spillmoment};
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $data['product'] = Product::with(['category', 'vendor'])
            ->latest()->take(6)->get();
        $data['category'] = Category::latest()->get();
        $data['discount'] = Product::where('discount', 'NOT LIKE', '0%')
            ->latest()->get();
        $data['spill'] = Spillmoment::with(['vendor'])
            ->latest()->get();
        return view('web.home.index', $data);
    }
}
