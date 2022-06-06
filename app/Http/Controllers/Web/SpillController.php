<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Spillmoment;

class SpillController extends Controller
{
    public function index()
    {
        $data['spill'] = Spillmoment::latest()->get();
        return view('web.home.index', $data);
    }
}
