@extends('layouts.master')
@section('content')
    <form action="{{ route('teacher.question.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="thematic">Chuyên đề:</label>
            <select name="thematic-id" id="thematic">
                <option value="">Choose...</option>
                @foreach(auth()->user()->courses as $course)
                    @foreach($course->thematics as $thematic)
                        <option value="{{ $thematic->id }}">{{ $thematic->name }}</option>
                    @endforeach
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="level">Độ khó: </label>
            <select name="level" id="level">
                <option value="">Choose...</option>
                <option value="{{ \App\Models\Question::EASY }}}">Dễ</option>
                <option value="{{ \App\Models\Question::NORMAL }}}">Vừa</option>
                <option value="{{ \App\Models\Question::HARD }}}">Khó</option>
            </select>
        </div>
        <div class="form-group">
            <label for="question">Câu hỏi: </label>
            <input type="text" name="question" class="form-control">
        </div>
        <div class="form-group">
            <label for="answer-A">Đáp án A: </label>
            <input type="text" name="answer-A" class="form-control">
        </div>
        <div class="form-group">
            <label for="answer-B">Đáp án B: </label>
            <input type="text" name="answer-B" class="form-control">
        </div>
        <div class="form-group">
            <label for="answer-C">Đáp án C: </label>
            <input type="text" name="answer-C" class="form-control">
        </div>
        <div class="form-group">
            <label for="answer-D">Đáp án D: </label>
            <input type="text" name="answer-D" class="form-control">
        </div>
        <div class="form-group">
            <label for="answer_correct">Đáp án: </label>
            <input type="radio" name="answer_correct" value="{{ \App\Models\Question::A }}">A
            <input type="radio" name="answer_correct" value="{{ \App\Models\Question::B }}">B
            <input type="radio" name="answer_correct" value="{{ \App\Models\Question::C }}">C
            <input type="radio" name="answer_correct" value="{{ \App\Models\Question::D }}">D
        </div>
        <div class="form-group">
            <button type="submit">Submit</button>
        </div>
    </form>

@endsection