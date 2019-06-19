@extends('layouts.master')
    @section('content')
        <div class="container">
            <form action="{{ route('teacher.thematic.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="courseId">Khóa học</label>
                    <select name="courseId" id="courseId" class="form-control">
                        <option value="">Choose...</option>
                        @foreach(auth()->user()->courses as $course)
                            <option value="{{ $course->id }}">{{ $course->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Tên chuyên đề</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="description">Mô tả</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control rounded-0"></textarea>
                </div>
                <div class="form-group text-center  ">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
        @endsection

@section('script')
    @endsection