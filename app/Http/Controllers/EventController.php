<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('pages.event.index');
    }

    public function detail()
    {
        return view('pages.event.detail');
    }
}
