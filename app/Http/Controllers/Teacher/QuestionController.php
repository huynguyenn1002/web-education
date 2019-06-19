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

    public function showForm()
    {
        return view('teacher.question.form');
    }

    public function makeTest(Request $request)
    {
        $count = 0;
        $countEasy = $request->countEasy;
        $countNormal = $request->countNormal;
        $countHard = $request->countHard;
        $thematicId = $request->thematicId;
        $questions = [];
        $easy = Question::inRandomOrder()->where('thematic_id', '=', $thematicId)->where('level', '=', Question::EASY)->take($countEasy)->get();
        $normal = Question::inRandomOrder()->where('thematic_id', '=', $thematicId)->where('level', '=', Question::NORMAL)->take($countNormal)->get();
        $hard = Question::inRandomOrder()->where('thematic_id', '=', $thematicId)->where('level', '=', Question::HARD)->take($countHard)->get();
        foreach ($easy as $value) {
            $questions[$count++] = $value;
        }
        foreach ($normal as $value) {
            $questions[$count++] = $value;
        }
        foreach ($hard as $value) {
            $questions[$count++] = $value;
        }
        $data = [
            'questions' => $questions,
            'thematicId' => $thematicId,
        ];
        return view('teacher.question.exam', $data);
    }
}
