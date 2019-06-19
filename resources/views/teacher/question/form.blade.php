@extends('layouts.master')
@section('content')
    <form action="{{ route('teacher.question.form.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="thematic">Chuyên đề: </label>
            <select name="thematicId" id="thematicId" class="form-control">
                <option value="">Choose...</option>
                @foreach( auth()->user()->courses as $course)
                    @foreach($course->thematics as $thematic)
                        <option value="{{ $thematic->id }}">{{ $thematic->name }}</option>
                    @endforeach
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="countEasy">Số lượng câu hỏi Dễ: </label>
            <input type="number" name="countEasy" id="countEasy" class="form-control">
        </div>
        <div class="form-group">
            <label for="countNormal">Số lượng câu hỏi Vừa: </label>
            <input type="number" name="countNormal" id="countNormal" class="form-control">
        </div>
        <div class="form-group">
            <label for="countEasy">Số lượng câu hỏi Khó: </label>
            <input type="number" name="countHard" id="countHard" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>

@endsection