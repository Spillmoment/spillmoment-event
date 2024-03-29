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
                    return '<a class="btn btn-primary btn-sm font-weight-bold" href="' . route('admin.register-event.show', $item->id) . '"> Detail </a>';
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


    public function show($id)
    {
        $eventRegister = EventRegister::findOrFail($id);
        return view('admin.event-register.detail', [
            'event' => $eventRegister
        ]);
    }

	 public function confirm($id, $state)
	 {
		//  dd($state != 'success');
		if ($state == 'success' || $state == 'pending') {
			EventRegister::where('id', $id)->update(['pay_status' => $state]);
			return redirect()->back()->with('success', 'Update status konfirmasi berhasil.');
		} else {
			return redirect()->back()->withErrors(['msg' => 'Status tidak ditemukan']);
		}
		
	 }
}
