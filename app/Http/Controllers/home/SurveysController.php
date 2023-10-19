<?php

namespace App\Http\Controllers\home;

use App\Models\Answers;
use App\Models\Questions;
use App\Models\Service;
use App\Models\Surveys;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSurveysRequest;
use App\Http\Requests\UpdateSurveysRequest;

class SurveysController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home.survey', [
            'title' => 'Mulai Survey',
            'questions' => Questions::all(),
            'answers' => Answers::all(),
            'services' => Service::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSurveysRequest $request)
    {
    

        $rules = [
            'date' => 'required',
            'time' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'education' => 'required',
            'service' => 'required',
        ];
        $validatedData = $request->validate($rules);
        $validatedData['code_user'] = now();
        $validatedData['total_ikp'] = ($request->no_1 + $request->no_2 + $request->no_3 + $request->no_4 + $request->no_5 + $request->no_6 + $request->no_7 + $request->no_8 + $request->no_9) * 25 / 9;
        Surveys::create($validatedData);
        $notification = [
            'message' => 'Survey Berhasil Ditambahkan!',
            'alert-type' => 'success'
        ];

        return redirect()->route('home')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(Surveys $surveys)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Surveys $surveys)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSurveysRequest $request, Surveys $surveys)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Surveys $surveys)
    {
        //
    }
}
