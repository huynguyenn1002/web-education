@extends('layouts.master')
@section('content')
    <div class="container">
        <form action="{{ route('teacher.question.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="thematic">Chuyên đề:</label>
                <select name="thematicId" id="thematic" class="form-control">
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
                <select name="level" id="level" class="form-control">
                    <option value="">Choose...</option>
                    <option value="{{ \App\Models\Question::EASY }}">Dễ</option>
                    <option value="{{ \App\Models\Question::NORMAL }}">Vừa</option>
                    <option value="{{ \App\Models\Question::HARD }}">Khó</option>
                </select>
            </div>
            <div class="form-group">
                <label for="question">Câu hỏi: </label>
                <textarea name="question" id="question" cols="10" rows="10" class="form-control rounded-0" required></textarea>
            </div>
            <div class="form-group">
                <label for="answer-A">Đáp án A: </label>
                <input type="text" name="answerA" class="form-control"required>
            </div>
            <div class="form-group">
                <label for="answer-B">Đáp án B: </label>
                <input type="text" name="answerB" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="answer-C">Đáp án C: </label>
                <input type="text" name="answerC" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="answer-D">Đáp án D: </label>
                <input type="text" name="answerD" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="answer_correct">Đáp án: </label>
                <input type="radio" name="answerCorrect" value="{{ \App\Models\Question::A }}">A
                <input type="radio" name="answerCorrect" value="{{ \App\Models\Question::B }}">B
                <input type="radio" name="answerCorrect" value="{{ \App\Models\Question::C }}">C
                <input type="radio" name="answerCorrect" value="{{ \App\Models\Question::D }}">D
            </div>
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection