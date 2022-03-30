<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Vendor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $data['product'] = Product::with(['category', 'vendor'])
            ->latest()->get();
        $data['category'] = Product::with(['category', 'vendor'])
            ->latest()->get();
        return view('web.home.index', $data);
    }
}
