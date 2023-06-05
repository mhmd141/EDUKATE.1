@extends('layout.siteLayout')
@section('title')
{{@$page->title}}
@endSection
@section('content')
<!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-1">{{@$page->title}}</h1>
            <div class="d-inline-flex text-white mb-5">
                <p class="m-0 text-uppercase"><a class="text-white" href="{{route('home')}}">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">{{@$page->title}}</p>
            </div>
        </div>
    </div>
    <!-- Header End -->



    <!-- About Start -->
    <x-about-section :page="$page"/>
    <!-- About End -->




    @endSection
