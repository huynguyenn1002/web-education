@extends('layouts.master')
@section('content')
    <section class="courses-section spad">
        <div class="container">
            <div class="section-title text-center">
                <h3>OUR COURSES</h3>
                <p>Building a better world, one course at a time</p>
            </div>
            <div class="row">
                <!-- course item -->
                @foreach($courses as $course)
                    <div class="col-lg-4 col-md-6 course-item">
                        <div class="course-thumb">
                            <a href="#"><img src="img/course/1.jpg" alt="" style="cursor: unset;"> </a>
                            <div class="course-cat">
                                <span>{{ $course->category->name     }}</span>
                            </div>
                        </div>
                        <div class="course-info">
                            <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
                            <a href="#"><h4>{{ $course->name }}</h4></a>

                            <h4 class="cource-price">{{ $course->cost }} VNĐ<span>/Tháng</span></h4>
                        </div>
                    </div>
                    </ul>
                @endforeach
            </div>
        </div>
    </section>

@endsection