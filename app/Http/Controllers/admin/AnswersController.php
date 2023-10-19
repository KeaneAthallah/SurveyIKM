<?php

namespace App\Http\Controllers\admin;

use App\Models\Answers;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAnswersRequest;
use App\Http\Requests\UpdateAnswersRequest;
use App\Models\Questions;

class AnswersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.answers.all', [
            'title' => 'Semua Jawaban',
            'profile' => auth()->user(),
            'answers' => Answers::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.answers.add', [
            'title' => 'Tambah Jawaban',
            'profile' => auth()->user(),
            'questions' => Questions::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnswersRequest $request)
    {
        Answers::create([
            'name' => $request->name,
            'questions_id' => $request->questions_id,
            'value' => $request->value,
        ]);
        $notification = [
            'message' => 'Jawaban Berhasil Ditambahkan!',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.answers')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(Answers $answers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Answers $answers, $id)
    {
        return view('admin.pages.answers.edit', [
            'title' => 'Jawaban',
            'profile' => auth()->user(),
            'questions' => Questions::all(),
            'answers' => Answers::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnswersRequest $request, Answers $answers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Answers $answers, $id)
    {
        Answers::findOrFail($id)->delete();
        $notification = [
            'message' => 'Answers Deleted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);
    }
}
