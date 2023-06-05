@extends('layout.siteLayout')
@section('content')

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-1">Contact</h1>
            <div class="d-inline-flex text-white mb-5">
                <p class="m-0 text-uppercase"><a class="text-white" href="{{route('home')}}">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Contact</p>
            </div>
            <div class="mx-auto mb-5" style="width: 100%; max-width: 600px;">
                @include('partials._search')
            </div>
        </div>
    </div>
    <!-- Header End -->
    <x-contact-section :settings="$settings"/>
@endSection
