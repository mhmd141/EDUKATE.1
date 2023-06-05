@extends('layout.siteLayout')
@section('title')
{{$course->title}}
@endSection
@section('content')
<!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-1">Course Detail</h1>
            <div class="d-inline-flex text-white mb-5">
                <p class="m-0 text-uppercase"><a class="text-white" href="{{route('home')}}">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Course Detail</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Detail Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-5">
                        <div class="section-title position-relative mb-5">
                            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Course Detail</h6>
                            <h1 class="display-4">{{$course->title}}</h1>
                        </div>
                        <img class="img-fluid rounded w-100 mb-4" src="{{$course->image}}" alt="Image">                        
                        <p>{{$course->details}}</p>
                            <div class="courseContent">
                                <p class="head-course">Course Content</p>
                                <ul class="list-les">
                                                      <li>
                                        <div class="accordion">
                                            <p class="faqText">Lessons :</p>
                                            <i class="zmdi zmdi-chevron-down"></i>
                                        </div>
                                        <div class="panel default">
                                        @if($course->lessons->count() > 0)
                                        @foreach ($course->lessons as $lesson)         
                                            <div class="list-lessons">
                                                <div class="name-lesson">
                                                    <i class="zmdi zmdi-play-circle-outline"></i>
                                                    <p>{{$lesson->title}}</p>    
                                                </div>
                                                <div class="act-lessons">
                                                    <time class="number-site">24 : 18 m</time>
                                                    <span>Complete</span>
                                                    <i class="zmdi zmdi-check"></i>
                                                </div>
                                            </div>
                                             @endforeach
                                        @else
                                        <p>No lessons</p>
                                        @endif
                                        </div>
                                    </li>
                                   
                                </ul>
                            </div>
                            <div class="attachments-course">
                                <p class="head-course">Attachments</p>
                                @if($course->attachments->count() > 0)
                                <ul class="list-attach">
                                @foreach ($course->attachments as $attachment)
                                <li>
                                        <div class="name-attach">
                                            <small><i class="icon-{{$attachment->type}}">{{$attachment->type}}</i></small>
                                            <p>{{$attachment->file}}</p>
                                        </div>
                                        <div class="act-attach">
                                            <a>
                                                <span>Download</span>
                                            </a>
                                        </div>
                                    </li>
                                 @endforeach   
                                </ul>
                                @else
                                <p>No Attachments</p>
                                @endif
                            </div>
                            <div class="course-presenter">
                                <p class="head-course">Course Presenter</p>
                                <div class="sec-presenter">
                                    <figure>
                                        <img src="{{$course->instructor->image}}" />
                                    </figure>
                                    <div class="sec-tit">
                                        <h3>{{$course->instructor->name}}</h3>
                                        <p>{{$course->instructor->job}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-course">
                                <p class="head-course">A Comment</p>
                                @if($course->comments->count() > 0)

                                <ul>
                                    @foreach ($course->comments as $comment)
                                    <li>
                                        <div class="name-cooment">
                                            <h5>{{$comment->user->name}}</h5>
                                            <time>{{ $comment->created_at->diffForHumans() }}</time>
                                        </div>
                                        <p>{{$comment->content}}.</p>
                                    </li>
                                    @endforeach
                                </ul>
                                @else
                                <ul>
                                </ul>
                                <p>No Comment Be First</p>
                             </ul>
                                @endIf
                                <form class="add-comment">

                                    <div class="mx-auto mb-5" style="width: 100%; max-width: 600px;">
                                        <div class="input-group">
                                            <input type="text" class="form-control border-light" style="padding: 30px 25px;" placeholder="Write A Comment">
                                            <div class="input-group-append">
                                                <button class="btn btn-secondary px-4 px-lg-5">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                    </div>

                    <h2 class="mb-3">Related Courses</h2>
                    @if($relatedCourses->count() > 0)
                    <div class="owl-carousel related-carousel position-relative" style="padding: 0 30px;">
                 
                    @foreach ($relatedCourses as $relatedCourse)         
                        <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="{{route('course',$relatedCourse->id)}}">
                            <img class="img-fluid" src="{{$relatedCourse->image}}" alt="">
                            <div class="courses-text">
                                <h4 class="text-center text-white px-3">{{$relatedCourse->title}}</h4>
                                <div class="border-top w-100 mt-3">
                                    <div class="d-flex justify-content-between p-4">
                                        <span class="text-white"><i class="fa fa-user mr-2"></i>{{$relatedCourse->instructor->name}}</span>
                                        <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                            <small>(250)</small></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach  

                    </div>
                    @else
                    <p class="text-center">No Courses Yet!</p>
                    @endIf
               </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="bg-primary mb-5 py-3">
                        <h3 class="text-white py-3 px-4 m-0">Course Features</h3>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Instructor</h6>
                            <h6 class="text-white my-3">{{$course->instructor->name}}</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Rating</h6>
                            <h6 class="text-white my-3">4.5 <small>(250)</small></h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Lectures</h6>
                            <h6 class="text-white my-3">15</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Duration</h6>
                            <h6 class="text-white my-3">10.00 Hrs</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Skill level</h6>
                            <h6 class="text-white my-3">{{$course->level}}</h6>
                        </div>
                        <div class="d-flex justify-content-between px-4">
                            <h6 class="text-white my-3">Language</h6>
                            <h6 class="text-white my-3">{{$course->Language}}</h6>
                        </div>
                        <h5 class="text-white py-3 px-4 m-0">Course Price: ${{$course->price}}</h5>
                        <div class="py-3 px-4">
                            <a class="btn btn-block btn-secondary py-3 px-5" href="">Enroll Now</a>
                        </div>
                    </div>

                    <div class="mb-5">
                        <h2 class="mb-3">Categories</h2>
                        <ul class="list-group list-group-flush">
                            @foreach ($categories as $category)
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0">{{$category->name}}</a>
                                <span class="badge badge-primary badge-pill">{{$category->courses_count}}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h2 class="mb-4">Recent Courses</h2>
                        @foreach ($recentCourses as $recentCourse) 
                        <a class="d-flex align-items-center text-decoration-none mb-4" href="{{route('course',$recentCourse->id)}}">
                            <img class="img-fluid rounded" src="{{$recentCourse->image}}" alt="">
                            <div class="pl-3">
                                <h6>{{$recentCourse->title}}</h6>
                                <div class="d-flex">
                                    <small class="text-body mr-3"><i class="fa fa-user text-primary mr-2"></i>{{$recentCourse->instructor->name}}</small>
                                    <small class="text-body"><i class="fa fa-star text-primary mr-2"></i>4.5 (250)</small>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->

    @endSection