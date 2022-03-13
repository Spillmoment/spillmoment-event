<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PartnerRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Partner;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class PartnerController extends Controller
{

    public function index()
    {
        if (request()->ajax()) {
            $query = Partner::latest()->get();
            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return view('admin.partner.action', compact('item'));
                })
                ->rawColumns(['action'])
                ->make();
        }

        return view('admin.partner.index');
    }

    public function create()
    {
        return view('admin.partner.create');
    }

    public function store(PartnerRequest $request)
    {
        $data = $request->all();
        $name = $data['name'];
        $data['slug'] = Str::slug($name, '-');

        Partner::create($data);
        Alert::success('Success', 'Partner event berhasil ditambahkan')
            ->autoClose(3000);
        return to_route('admin.partner.index');
    }

    public function edit(Partner $partner)
    {
        return view('admin.partner.edit', compact('partner'));
    }

    public function update(PartnerRequest $request, Partner $partner)
    {
        $data = $request->all();
        $name = $data['name'];
        $data['slug'] = Str::slug($name, '-');

        $partner->update($data);
        Alert::success('Success', 'Partner event berhasil diupdate')
            ->autoClose(3000);;
        return to_route('admin.partner.index');
    }

    public function destroy(Partner $partner)
    {
        $partner->delete();
        Alert::success('Success', 'Partner event berhasil dihapus')
            ->autoClose(3000);
        return to_route('admin.partner.index');
    }
}
