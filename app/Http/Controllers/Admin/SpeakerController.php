<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SpeakerRequest;
use App\Models\Speaker;
use Yajra\DataTables\Facades\DataTables;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;

class SpeakerController extends Controller
{

    public function index()
    {
        if (request()->ajax()) {
            $query =  Speaker::latest()->get();
            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return view('admin.speaker.action', compact('item'));
                })
                ->editColumn('photo', function ($item) {
                    if ($item->photo) {
                        return '<img src="' . url('uploads/speaker/' . $item->photo) . '" style="max-height: 40px;"/>';
                    } else {
                        return 'N/A';
                    }
                })
                ->rawColumns(['action', 'photo'])
                ->make();
        }
        return view('admin.speaker.index');
    }

    public function create()
    {
        return view('admin.speaker.create');
    }

    public function store(SpeakerRequest $request)
    {
        $data = $request->all();

        $data['photo'] =  $request->file('photo');
        $extention = $data['photo']->getClientOriginalExtension();
        $filename = time() . '.' . $extention;
        $data['photo']->move('uploads/speaker/', $filename);
        $data['photo'] = $filename;

        Speaker::create($data);
        Alert::success('Success', 'Speaker berhasil ditambahkan')
            ->autoClose(3000);
        return redirect()->route('admin.speaker.index');
    }

    public function show(Speaker $speaker)
    {
        return view('admin.speaker.detail', [
            'speaker' => $speaker
        ]);
    }

    public function edit(Speaker $speaker)
    {
        return view('admin.speaker.edit', [
            'speaker' => $speaker
        ]);
    }

    public function update(SpeakerRequest $request, Speaker $speaker)
    {
        $data = $request->all();

        if ($request->hasFile('photo')) {
            File::delete('uploads/speaker/' . $speaker->photo);
            $data['photo'] =  $request->file('photo');
            $extention = $data['photo']->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $data['photo']->move('uploads/speaker/', $filename);
            $data['photo'] = $filename;
        }

        $speaker->update($data);
        Alert::success('Success', 'Speaker berhasil diupdate')
            ->autoClose(3000);
        return redirect()->route('admin.speaker.index');
    }

    public function destroy(Speaker $speaker)
    {
        $speaker->delete();
        File::delete('uploads/speaker/' . $speaker->photo);
        Alert::success('Success', 'Speaker berhasil dihapus')
            ->autoClose(3000);
        return redirect()->route('admin.speaker.index');
    }
}
