<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Models\EventRegister;

class EventRegisterControlller extends Controller
{

    public function index()
    {
        if (request()->ajax()) {
            $query = EventRegister::query()->with(['users', 'event', 'event.speaker'])
                ->latest();
            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '<a class="btn btn-primary btn-sm font-weight-bold" href="' . route('admin.event-register.show', $item->id) . '"> Detail </a>';
                })
                ->addColumn('name', function ($item) {
                    return $item->users->name;
                })
                ->addColumn('email', function ($item) {
                    return $item->users->email;
                })
                ->addColumn('event', function ($item) {
                    return $item->event->title;
                })
                ->addColumn('speaker', function ($item) {
                    return $item->event->speaker->name;
                })
                ->rawColumns(['action'])
                ->make();
        }
        return view('admin.event-register.index');
    }


    public function show(EventRegister $eventRegister)
    {
        return view('admin.event-register.detail', [
            'event' => $eventRegister
        ]);
    }
}
