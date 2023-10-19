<?php

namespace App\Http\Controllers\admin;

use App\Models\Questions;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQuestionsRequest;
use App\Http\Requests\UpdateQuestionsRequest;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.questions.all', [
            'title' => 'Semua Pertanyaan',
            'profile' => auth()->user(),
            'questions' => Questions::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.questions.add', [
            'title' => 'Tambah Pertanyaan',
            'profile' => auth()->user()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuestionsRequest $request)
    {
        Questions::create([
            'no' => $request->no,
            'questions_name' => $request->questions_name
        ]);
        $notification = [
            'message' => 'Pertanyaan Berhasil Ditambahkan!',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.questions')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(Questions $questions)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Questions $questions, $id)
    {
        return view('admin.pages.questions.edit', [
            'title' => 'Edit Pertanyaan',
            'profile' => auth()->user(),
            'questions' => $questions
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuestionsRequest $request)
    {
        $pid = $request->id;
        Questions::findOrFail($pid)->update([
            'no' => $request->no,
            'questions_name' => $request->questions_name
        ]);

        $notification = [
            'message' => 'Pertanyaan Berhasil Diubah!',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.questions')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Questions::findOrFail($id)->delete();
        $notification = [
            'message' => 'Questions Deleted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);
    }
}
