<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index()
    {
        return view('home.comment', [
            'title' => 'Kritik Dan Saran'
        ]);
    }

    public function store(Request $request)
    {
        $rules = [
            'date' => 'required',
            'class' => 'required',
            'comment' => 'required'
        ];
        $validatedData = $request->validate($rules);
        $validatedData['code_user'] = now();
        Comment::create($validatedData);
        $notification = [
            'message' => 'Kritik Dan Saran Berhasil Ditambahkan!',
            'alert-type' => 'success'
        ];

        return redirect()->route('home')->with($notification);
    }
    public function allcomments()
    {
        return view('admin.pages.comment.all', [
            'title' => 'Kritik Dan Saran',
            'comments' => Comment::all(),
            'profile' => auth()->user(),
        ]);
    }
}
