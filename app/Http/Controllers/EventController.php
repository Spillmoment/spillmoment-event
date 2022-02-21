<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventCategory;
use App\Models\EventRegister;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $category = EventCategory::all();
        $event = Event::all();
        $status = Event::where('status', 'online')
            ->orWhere('status', 'offline')
            ->groupBy('status')
            ->get();
        $type = Event::where('type', 'paid')
            ->orWhere('type', 'free')
            ->groupBy('type')
            ->get();

        return view('pages.event.index', [
            'category' => $category,
            'events' => $event,
            'status' => $status,
            'type' => $type
        ]);
    }

    public function detail($slug)
    {
        $event = Event::where('slug', $slug)->first();
        $register = EventRegister::where('event_id', $event->id)->count();
        return view('pages.event.detail', [
            'events' => $event,
            'registers' => $register
        ]);
    }
}
