<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EventRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Event;
use App\Models\EventCategory;
use App\Models\Speaker;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class EventController extends Controller
{

    public function index()
    {
        if (request()->ajax()) {
            $query = Event::query()->with(['speaker', 'category'])
                ->latest();
            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return view('admin.events.action', compact('item'));
                })
                ->addColumn('category', function ($item) {
                    return $item->category->name;
                })
                ->addColumn('speaker', function ($item) {
                    return $item->speaker->name;
                })
                ->editColumn('photo', function ($item) {
                    if ($item->photo) {
                        return '<img src="' . url('uploads/events/' . $item->photo) . '" style="max-height: 40px;"/>';
                    } else {
                        return 'N/A';
                    }
                })
                ->rawColumns(['action', 'photo'])
                ->make();
        }
        return view('admin.events.index');
    }

    public function create()
    {
        $category = EventCategory::all();
        $speaker = Speaker::all();
        return view('admin.events.create', [
            'category' => $category,
            'speaker' => $speaker
        ]);
    }

    public function store(EventRequest $request)
    {
        $data = $request->all();

        $name = $data['title'];
        $data['slug'] = Str::slug($name, '-');

        $data['photo'] =  $request->file('photo');
        $extention = $data['photo']->getClientOriginalExtension();
        $filename = time() . '.' . $extention;
        $data['photo']->move('uploads/events/', $filename);
        $data['photo'] = $filename;

        $data['end_time'] = '';
        $data['started'] = '0';

        Event::create($data);
        Alert::success('Success', 'Event berhasil ditambahkan')
            ->autoClose(3000);
        return redirect()->route('admin.event.index');
    }

    public function show(Event $event)
    {
        return view('admin.events.detail', [
            'event' => $event
        ]);
    }

    public function edit(Event $event)
    {
        $category = EventCategory::all();
        $speaker = Speaker::all();
        return view('admin.events.edit', [
            'event' => $event,
            'category' => $category,
            'speaker' => $speaker
        ]);
    }

    public function update(EventRequest $request, Event $event)
    {
        $data = $request->all();

        $name = $data['title'];
        $data['slug'] = Str::slug($name, '-');

        if ($request->hasFile('photo')) {
            File::delete('uploads/events/' . $event->photo);
            $data['photo'] =  $request->file('photo');
            $extention = $data['photo']->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $data['photo']->move('uploads/events/', $filename);
            $data['photo'] = $filename;
        }

        $data['end_time'] = '';

        $event->update($data);
        Alert::success('Success', 'Event berhasil diupdate')
            ->autoClose(3000);
        return redirect()->route('admin.event.index');
    }

    public function destroy(Event $event)
    {
        $event->delete();
        File::delete('uploads/events/' . $event->photo);
        Alert::success('Success', 'Event berhasil dihapus')
            ->autoClose(3000);
        return redirect()->route('admin.event.index');
    }
}
