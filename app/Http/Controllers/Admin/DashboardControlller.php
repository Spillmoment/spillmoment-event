<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{Event, EventCategory, EventRegister, Speaker};

class DashboardControlller extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index', [
            'category' => EventCategory::all()->count(),
            'speaker' => Speaker::all()->count(),
            'event' => Event::all()->count(),
            'users' => EventRegister::all()->count(),
            'user_event' => EventRegister::with(['users', 'event'])->latest()->take(5)->get()
        ]);
    }
}
