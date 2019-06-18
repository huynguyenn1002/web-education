@extends('layouts.master')
    @section('content')
        <form action="{{ route('teacher.thematic.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <select name="course-id" id="course">
                    <option value="">Choose...</option>
                    @foreach(auth()->user()->courses as $course)
                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
        @endsection

@section('script')
    @endsection