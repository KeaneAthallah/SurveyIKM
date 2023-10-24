<?php

namespace App\Http\Controllers\home;

use App\Models\Periode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PeriodeController extends Controller
{
    public function index()
    {
        return view('admin.pages.periode.all', [
            'title' => 'Periode',
            'profile' => auth()->user(),
            'periodes' => Periode::all(),
        ]);
    }
    public function create()
    {
        return view('admin.pages.periode.add', [
            'title' => 'Periode',
            'profile' => auth()->user(),
        ]);
    }
    public function store(Request $request)
    {
        Periode::create([
            'mulai' => $request->mulai,
            'akhir' => $request->akhir,
            'target' => $request->target
        ]);
        $notification = [
            'message' => 'Pertanyaan Berhasil Ditambahkan!',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.periode')->with($notification);
    }
    public function edit($id)
    {
        return view('admin.pages.periode.edit', [
            'title' => 'Periode',
            'profile' => auth()->user(),
            'periode' => Periode::findOrFail($id)
        ]);
    }
    public function update(Request $request)
    {
        Periode::where('id', $request->id)->update([
            'mulai' => $request->mulai,
            'akhir' => $request->akhir,
            'target' => $request->target
        ]);
        $notification = [
            'message' => 'Pertanyaan Berhasil Ditambahkan!',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.periode')->with($notification);
    }
}
