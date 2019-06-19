@extends('layouts.master')
@section('content')
    <form action="{{ route('teacher.exam.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Mã/Tên đề thi: </label>
            <input type="text" name="name" class="form-control">
            <input type="hidden" name="thematicId" value="{{ $thematicId }}">
        </div>
        @foreach($questions as $question)
            <div class="form-group">
                <p>{{ nl2br($question->question) }}</p>
            </div>
            <div class="form-group">
                <input type="radio" class="form-control" name="answer" value="{{ \App\Models\Question::A }}">{{ $question->answer_A }}
                <input type="radio" class="form-control" name="answer" value="{{ \App\Models\Question::B }}"> {{ $question->answer_B }}
                <input type="radio" class="form-control" name="answer" value="{{ \App\Models\Question::C }}">{{ $question->answer_C }}
                <input type="radio" class="form-control" name="answer" value="{{ \App\Models\Question::D }}">{{ $question->answer_D }}
                <input type="hidden" name="questionId[]" value="{{ $question->id }}">
                <input type="hidden" name="answerCorrect[]" value="{{ $question->answer_correct }}">
            </div>
        @endforeach
        <div class="form-group">
            <button type="submit" class="btn btn-success">Submit</button>
            <a href="{{ route('teacher.question.form.create') }}" type="button" class="btn btn-primary">Back</a>
        </div>
    </form>
    @endsection