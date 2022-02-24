<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Models\EventCategory;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class KategoriEventController extends Controller
{

    public function index()
    {
        if (request()->ajax()) {
            $query =  EventCategory::latest()->get();
            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return view('admin.category.action', compact('item'));
                })
                ->rawColumns(['action'])
                ->make();
        }
        return view('admin.category.index');
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(CategoryRequest $request)
    {
        $data = $request->all();
        $nama_kat = $data['name'];
        $data['slug'] = Str::slug($nama_kat, '-');
        EventCategory::create($data);

        Alert::success('Success', 'Kategori event berhasil ditambahkan')
            ->autoClose(3000);
        return redirect()->route('admin.kategori.index');
    }

    public function show($id)
    {
        return abort(404);
    }

    public function edit(EventCategory $kategori)
    {
        return view('admin.category.edit', compact('kategori'));
    }

    public function update(CategoryRequest $request, EventCategory $kategori)
    {
        $data = $request->all();
        $nama_kat = $data['name'];
        $data['slug'] = Str::slug($nama_kat, '-');

        $kategori->update($data);
        Alert::success('Success', 'Kategori event berhasil diupdate')
            ->autoClose(3000);;
        return redirect()->route('admin.kategori.index');
    }

    public function destroy(EventCategory $kategori)
    {
        $kategori->delete();
        Alert::success('Success', 'Kategori event berhasil dihapus')
            ->autoClose(3000);;
        return back();
    }
}
