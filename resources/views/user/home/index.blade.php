@extends('user.master')

@section('title' ,'HomePage')

@section('body')
    <div class="page-hero bg-image overlay-dark" style="background-image: url({{ asset( '/' ) }}/assets/img/banner1.jpg);">
        <div class="hero-section">
            <div class="container text-center wow zoomIn">
                <span class="subhead">Let's make your life happier</span>
                <h1 class="display-4">Healthy Living</h1>
                <a href="#" class="btn btn-success">Let's Consult</a>
            </div>
        </div>
    </div>


    <div class="text-dark" >
        <div class="page-section py-3 mt-md-n5 custom-index">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-secondary text-white">
                                <span class="mai-chatbubbles-outline"></span>
                            </div>
                            <p><span>Chat</span> with a doctors</p>
                        </div>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-success text-white">
                                <span class="mai-shield-checkmark"></span>
                            </div>
                            <p><span>One</span>-Health Protection</p>
                        </div>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-accent text-white">
                                <span class="mai-basket"></span>
                            </div>
                            <p><span>One</span>-Health Pharmacy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .page-section -->

        <div class="page-section pb-0" id="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="400ms">
                        <div class="img-place custom-img-1">
                            <img src="{{ asset( '/' ) }}/assets/img/doctor.png" alt="" style=" height: 480px; width: 400px">
                        </div>
                    </div>
                    <div class="col-lg-6 py-3 wow fadeInUp">
                        <h1>Welcome to Your Health <br> Center</h1>
                        <p class="text-grey mb-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Accusantium aperiam earum ipsa eius, inventore nemo labore eaque porro consequatur ex aspernatur. Explicabo, excepturi accusantium! Placeat voluptates esse ut optio facilis!</p>
                        <a href="{{ route('about') }}" class="btn btn-success">Learn More</a>
                    </div>

                </div>
            </div>
        </div> <!-- .bg-light -->
    </div> <!-- .bg-light -->

    <div class="page-section">
        <div class="container">
            <h1 class="text-center mb-5 wow fadeInUp" >Our Doctors</h1>

            <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
                @foreach($doctors as $doctor)
                    <div class="item">
                        <div class="card-doctor">
                            <div class="header">
                                <img src="{{ asset($doctor->image ) }}" alt="">
                                <div class="meta">
                                    <a href="#"><span class="mai-call"></span></a>
                                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                                </div>
                            </div>
                            <div class="body">
                                <p class="text-xl mb-0">{{ $doctor->name }}</p>
                                <span class="text-sm text-grey">{{ $doctor->speciality }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
    </div>


    <div class="page-section " id="news" >
        <div class="container">
            <h1 class="text-center wow fadeInUp">Latest News</h1>
            <div class="row mt-5">
                    @foreach($allnews as $news)

                    <div class="col-lg-4 py-2 wow zoomIn">
                        <div class="card-blog">
                            <div class="header">

                                <a href="{{ route('blog.details',['id' => $news->id]) }}" class="post-thumb">
                                    <img src="{{ asset($news->image) }}" alt="">
                                </a>
                            </div>
                            <div class="body">
                                <h5 class="post-title"><a href="{{ route('blog.details',['id'=>$news->id]) }}">{{$news->title}}</a></h5>
                                <div class="site-info">
                                    <div class="avatar mr-2">
                                        <div class="avatar-img">
                                            <img src="{{ asset($news->author_image) }}" alt="">
                                        </div>
                                        <span>{{ $news->name }}</span>
                                    </div>
                                    <span class="mai-time">{{ $news->date }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
                <div class="col-12 text-center mt-4 wow zoomIn">
                    <a href="{{ route('news') }}" class="btn btn-success">Read More</a>
                </div>

            </div>
        </div>
    </div> <!-- .page-section -->

    <div class="page-section">
        <div class="container">
            <h1 class="text-center wow fadeInUp">Make an Appointment</h1>
            <form class="main-form" action="{{ route('appointment.create') }}" method="POST">
                @csrf
                <div class="row mt-5 ">
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <input type="text" class="form-control" name="name" placeholder="Full name">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                        <input type="text" class="form-control" name="email" placeholder="Email address">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                        <input type="date" name="date" class="form-control">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                        <select name="doctor" id="departement" class="custom-select">
                            @foreach($doctors as $doctor)
                            <option value="{{$doctor->name}}">{{$doctor->name}} -- Speciality--</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                        <input type="text" name="phone" class="form-control" placeholder="Number">
                    </div>
                    <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                        <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message{{ asset( '/' ) }}"></textarea>
                    </div>

                </div>
                <button type="submit" class="btn btn-success mt-3 wow zoomIn">Submit Request</button>
            </form>
        </div>
    </div> <!-- .page-section -->

@endsection
