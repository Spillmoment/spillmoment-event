<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $data['product'] = Product::with(['category', 'vendor'])
            ->latest()->get();
        $data['category'] = Product::with(['category', 'vendor'])
            ->latest()->get();
        $data['discount'] = Product::where('discount', 'NOT LIKE', '0%')
            ->latest()->get();
        return view('web.home.index', $data);
    }
}
