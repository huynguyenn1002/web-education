@extends('layouts.master')
@section('content')
    <!-- Hero section -->
    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero-slider/1.jpg">
                <div class="hs-text">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="hs-subtitle">Sẽ không bao giờ là muộn nếu có quyết tâm</div>
                                <h2 class="hs-title">ĐẦU TƯ ĐỂ CÓ MỘT MÔI TRƯỜNG HỌC TẬP HIỆU QUẢ</h2>
                                <p class="hs-des">Giáo dục không chỉ là đi học và lấy bằng<br> Đó là việc mở rộng suy nghĩ của bạn về kiến thức và tiếp thu về cuộc sống. Kiến thức là sức mạnh</p>

                                <a href="{{ route('login') }}">
                                    <div class="site-btn">
                                        Hãy sẵn sàng trải nghiệm
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="img/hero-slider/2.jpg">
                <div class="hs-text">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="hs-subtitle">Award Winning UNIVERSITY</div>
                                <h2 class="hs-title">An investment in knowledge pays the best interest.</h2>
                                <p class="hs-des">Education is not just about going to school and getting a degree. It's about widening your<br> knowledge and absorbing the truth about life. Knowledge is power.</p>
                                <a href="{{ route('login') }}">
                                    <div class="site-btn">
                                        GET STARTED
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->

    <!-- Services section -->
    <section class="service-section spad">
        <div class="container services">
            <div class="section-title text-center">
                <h3>OUR SERVICES</h3>
                <p>We provides the opportunity to prepare for life</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="img/services-icons/1.png" alt="1">
                    </div>
                    <div class="service-content">
                        <h4>Toán Học</h4>
                        <p>Toán học thuần túy, theo cách của riêng nó, là thi ca của tư duy logic</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="img/services-icons/2.png" alt="1">
                    </div>
                    <div class="service-content">
                        <h4>Vật Lý</h4>
                        <p>Thật sai lầm khi nghĩ rằng nhiệm vụ của vật lý là tìm ra bản chất của Tự nhiên. Vật lý là điều chúng ta nói về Tự nhiên</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="img/services-icons/3.png" alt="1">
                    </div>
                    <div class="service-content">
                        <h4>English</h4>
                        <p>If you are not willing to learn, no one can help you. If you are determined to learn, no one can stop you</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="img/services-icons/4.png" alt="1">
                    </div>
                    <div class="service-content">
                        <h4>Sinh Học</h4>
                        <p>Sinh học là nền tảng cho công nghệ sinh học phát triển</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="img/services-icons/5.png" alt="1">
                    </div>
                    <div class="service-content">
                        <h4>Văn Học</h4>
                        <p>Văn chương chỉ dung nạp được những người biết đào sâu, biết tìm tòi, khơi những nguồn chưa ai khơi và sáng tạo những cái gì chưa có</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 service-item">
                    <div class="service-icon">
                        <img src="img/services-icons/6.png" alt="1">
                    </div>
                    <div class="service-content">
                        <h4>Hóa Học</h4>
                        <p>Hóa học là bình thường, đam mê là làm được</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services section end -->


    <!-- Enroll section -->
    <section class="enroll-section spad set-bg" data-setbg="img/enroll-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title text-white">
                        <h3>ENROLLMENT</h3>
                        <p>Get started with us to explore the exciting</p>
                    </div>
                    <div class="enroll-list text-white">
                        <div class="enroll-list-item">
                            <span>1</span>
                            <h5>Contact</h5>
                            <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue.</p>
                        </div>
                        <div class="enroll-list-item">
                            <span>2</span>
                            <h5>Consulting</h5>
                            <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue.</p>
                        </div>
                        <div class="enroll-list-item">
                            <span>3</span>
                            <h5>Register</h5>
                            <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 p-lg-0 p-4">
                    <img src="img/encroll-img.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Enroll section end -->


    <!-- Courses section -->
    <section class="courses-section spad">
        <div class="container">
            <div class="section-title text-center">
                <h3>OUR COURSES</h3>
                <p>Building a better world, one course at a time</p>
            </div>
            <div class="row">
                <!-- course item -->
                <div class="col-lg-4 col-md-6 course-item">
                    <div class="course-thumb">
                        <img src="img/course/1.jpg" alt="">
                        <div class="course-cat">
                            <span>BUSINESS</span>
                        </div>
                    </div>
                    <div class="course-info">
                        <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
                        <h4>Certificate Course in Writing<br>for a Global Market</h4>
                        <h4 class="cource-price">$100<span>/month</span></h4>
                    </div>
                </div>
                <!-- course item -->
                <div class="col-lg-4 col-md-6 course-item">
                    <div class="course-thumb">
                        <img src="img/course/2.jpg" alt="">
                        <div class="course-cat">
                            <span>Marketing</span>
                        </div>
                    </div>
                    <div class="course-info">
                        <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
                        <h4>Google AdWords: Get More<br> Customers with Search Marketing </h4>
                        <h4 class="cource-price">$150<span>/month</span></h4>
                    </div>
                </div>
                <!-- course item -->
                <div class="col-lg-4 col-md-6 course-item">
                    <div class="course-thumb">
                        <img src="img/course/3.jpg" alt="">
                        <div class="course-cat">
                            <span>DESIGN</span>
                        </div>
                    </div>
                    <div class="course-info">
                        <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
                        <h4>The Ultimate Drawing Course<br> Beginner to Advanced</h4>
                        <h4 class="cource-price">$180<span>/month</span></h4>
                    </div>
                </div>
                <!-- course item -->
                <div class="col-lg-4 col-md-6 course-item">
                    <div class="course-thumb">
                        <img src="img/course/4.jpg" alt="">
                        <div class="course-cat">
                            <span>DATABASE</span>
                        </div>
                    </div>
                    <div class="course-info">
                        <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
                        <h4>Ultimate MySQL Bootcamp: Go from SQL Beginner to Expert</h4>
                        <h4 class="cource-price">$150<span>/month</span></h4>
                    </div>
                </div>
                <!-- course item -->
                <div class="col-lg-4 col-md-6 course-item">
                    <div class="course-thumb">
                        <img src="img/course/5.jpg" alt="">
                        <div class="course-cat">
                            <span>PROGRAM</span>
                        </div>
                    </div>
                    <div class="course-info">
                        <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
                        <h4>Web Developer Bootcamp<br>Make web  applications</h4>
                        <h4 class="cource-price">$250<span>/month</span></h4>
                    </div>
                </div>
                <!-- course item -->
                <div class="col-lg-4 col-md-6 course-item">
                    <div class="course-thumb">
                        <img src="img/course/6.jpg" alt="">
                        <div class="course-cat">
                            <span>BUSINESS</span>
                        </div>
                    </div>
                    <div class="course-info">
                        <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
                        <h4>How to Start an Amazon<br>FBA Store on a Tight Budget</h4>
                        <h4 class="cource-price">$150<span>/month</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Courses section end-->


    <!-- Fact section -->
    <section class="fact-section spad set-bg" data-setbg="img/fact-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-crown"></i>
                    </div>
                    <div class="fact-text">
                        <h2>50</h2>
                        <p>YEARS</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-briefcase"></i>
                    </div>
                    <div class="fact-text">
                        <h2>80</h2>
                        <p>TEACHERS</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-user"></i>
                    </div>
                    <div class="fact-text">
                        <h2>500</h2>
                        <p>STUDENTS</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-pencil-alt"></i>
                    </div>
                    <div class="fact-text">
                        <h2>800+</h2>
                        <p>LESSONS</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fact section end-->


    <!-- Event section -->
    <section class="event-section spad">
        <div class="container">
            <div class="section-title text-center">
                <h3>OUR EVENTS</h3>
                <p>Our department  initiated a series of events</p>
            </div>
            <div class="row">
                <div class="col-md-6 event-item">
                    <div class="event-thumb">
                        <img src="img/event/1.jpg" alt="">
                        <div class="event-date">
                            <span>24 Mar 2018</span>
                        </div>
                    </div>
                    <div class="event-info">
                        <h4>The dos and don'ts of writing a personal<br>statement for languages</h4>
                        <p><i class="fa fa-calendar-o"></i> 08:00 AM - 10:00 AM <i class="fa fa-map-marker"></i> Center Building, Block A</p>
                        <a href="" class="event-readmore">REGISTER <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 event-item">
                    <div class="event-thumb">
                        <img src="img/event/2.jpg" alt="">
                        <div class="event-date">
                            <span>22 Mar 2018</span>
                        </div>
                    </div>
                    <div class="event-info">
                        <h4>University interview tips:<br>confidence won't make up for flannel</h4>
                        <p><i class="fa fa-calendar-o"></i> 08:00 AM - 10:00 AM <i class="fa fa-map-marker"></i> Center Building, Block A</p>
                        <a href="" class="event-readmore">REGISTER <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Event section end -->


    <!-- Gallery section -->
    <div class="gallery-section">
        <div class="gallery">
            <div class="grid-sizer"></div>
            <div class="gallery-item gi-big set-bg" data-setbg="img/gallery/1.jpg">
                <a class="img-popup" href="img/gallery/1.jpg"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item set-bg" data-setbg="img/gallery/2.jpg">
                <a class="img-popup" href="img/gallery/2.jpg"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item set-bg" data-setbg="img/gallery/3.jpg">
                <a class="img-popup" href="img/gallery/3.jpg"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item gi-long set-bg" data-setbg="img/gallery/5.jpg">
                <a class="img-popup" href="img/gallery/5.jpg"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item gi-big set-bg" data-setbg="img/gallery/8.jpg">
                <a class="img-popup" href="img/gallery/8.jpg"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item gi-long set-bg" data-setbg="img/gallery/4.jpg">
                <a class="img-popup" href="img/gallery/4.jpg"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item set-bg" data-setbg="img/gallery/6.jpg">
                <a class="img-popup" href="img/gallery/6.jpg"><i class="ti-plus"></i></a>
            </div>
            <div class="gallery-item set-bg" data-setbg="img/gallery/7.jpg">
                <a class="img-popup" href="img/gallery/7.jpg"><i class="ti-plus"></i></a>
            </div>
        </div>
    </div>
    <!-- Gallery section -->


    <!-- Blog section -->
    <section class="blog-section spad">
        <div class="container">
            <div class="section-title text-center">
                <h3>LATEST NEWS</h3>
                <p>Get latest breaking news & top stories today</p>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="blog-item">
                        <div class="blog-thumb set-bg" data-setbg="img/blog/1.jpg"></div>
                        <div class="blog-content">
                            <h4>Parents who try to be their children’s best friends</h4>
                            <div class="blog-meta">
                                <span><i class="fa fa-calendar-o"></i> 24 Mar 2018</span>
                                <span><i class="fa fa-user"></i> Owen Wilson</span>
                            </div>
                            <p>Integer luctus diam ac scerisque consectetur. Vimus dot euismod neganeco lacus sit amet. Aenean interdus mid vitae sed accumsan...</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="blog-item">
                        <div class="blog-thumb set-bg" data-setbg="img/blog/2.jpg"></div>
                        <div class="blog-content">
                            <h4>Graduations could be delayed as external examiners</h4>
                            <div class="blog-meta">
                                <span><i class="fa fa-calendar-o"></i> 23 Mar 2018</span>
                                <span><i class="fa fa-user"></i> Owen Wilson</span>
                            </div>
                            <p>Integer luctus diam ac scerisque consectetur. Vimus dot euismod neganeco lacus sit amet. Aenean interdus mid vitae sed accumsan...</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="blog-item">
                        <div class="blog-thumb set-bg" data-setbg="img/blog/3.jpg"></div>
                        <div class="blog-content">
                            <h4>Private schools adopt a Ucas style application system</h4>
                            <div class="blog-meta">
                                <span><i class="fa fa-calendar-o"></i> 24 Mar 2018</span>
                                <span><i class="fa fa-user"></i> Owen Wilson</span>
                            </div>
                            <p>Integer luctus diam ac scerisque consectetur. Vimus dot euismod neganeco lacus sit amet. Aenean interdus mid vitae sed accumsan...</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="blog-item">
                        <div class="blog-thumb set-bg" data-setbg="img/blog/4.jpg"></div>
                        <div class="blog-content">
                            <h4>Cambridge digs in at the top of university league table</h4>
                            <div class="blog-meta">
                                <span><i class="fa fa-calendar-o"></i> 23 Mar 2018</span>
                                <span><i class="fa fa-user"></i> Owen Wilson</span>
                            </div>
                            <p>Integer luctus diam ac scerisque consectetur. Vimus dot euismod neganeco lacus sit amet. Aenean interdus mid vitae sed accumsan...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog section -->


    <!-- Newsletter section -->
    <section class="newsletter-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-7">
                    <div class="section-title mb-md-0">
                        <h3>NEWSLETTER</h3>
                        <p>Subscribe and get the latest news and useful tips, advice and best offer.</p>
                    </div>
                </div>
                <div class="col-md-7 col-lg-5">
                    <form class="newsletter">
                        <input type="text" placeholder="Enter your email">
                        <button class="site-btn">SUBSCRIBE</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter section end -->


@endsection