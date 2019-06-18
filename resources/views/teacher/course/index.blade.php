@extends('layouts.master')
@section('content')
    <ul>
        @foreach($courses as $course)
            <li>{{ $course->name }}</li>
            <ul>
                @foreach($course->thematics as $thematic)
                    <li>{{ $thematic->name }}</li>
                @endforeach
                <li><button>Add</button></li>
            </ul>
        @endforeach
    </ul>
@endsection