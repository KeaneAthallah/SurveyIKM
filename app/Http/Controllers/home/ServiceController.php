<?php

namespace App\Http\Controllers\home;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index()
    {
        return view('admin.pages.service.all', [
            'title' => 'Semua Service',
            'profile' => auth()->user(),
            'services' => Service::all()
        ]);
    }
    public function create()
    {
        return view('admin.pages.service.add', [
            'title' => 'Tambah Service',
            'profile' => auth()->user()
        ]);
    }
    public function store(Request $request)
    {
        Service::create([
            'no' => $request->no,
            'name' => $request->name
        ]);
        $notification = [
            'message' => 'Service Berhasil Ditambahkan!',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.services')->with($notification);
    }
    public function edit($id)
    {
        return view('admin.pages.service.edit', [
            'title' => 'Edit Service',
            'profile' => auth()->user(),
            'service' => Service::findOrFail($id)
        ]);
    }
    public function update(Request $request)
    {
        $pid = $request->id;
        Service::findOrFail($pid)->update([
            'no' => $request->no,
            'name' => $request->name
        ]);

        $notification = [
            'message' => 'Service Berhasil Diubah!',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.services')->with($notification);
    }
    public function destroy($id)
    {
        Service::findOrFail($id)->delete();
        $notification = [
            'message' => 'Service Deleted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);
    }
}
