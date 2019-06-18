<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Question;
use App\Models\Thematic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('teacher.question.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        dd(1);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function makeTest(Request $request)
    {
        $id = $request->id;

        $all = Thematic::findOrFail(12)->questions;
        dd($all);
        $easy = Thematic::findOrFail(12)->questions->where('level', '==', Question::EASY);
        $normal = Thematic::findOrFail(12)->questions->where('level', '==', Question::NORMAL);
        $hard = Thematic::findOrFail(12)->questions->where('level', '==', Question::HARD);
        $data = [
            'easy' => $easy,
          'normal' => $normal,
            'hard' => $hard,
        ];
        dd($data);
    }
}
