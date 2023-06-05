@extends('layout.siteLayout')
@section('content')
    <!-- Team Start -->
    <x-instructor-section :instructors="$instructors"/>
    <!-- Team End -->
    @endSection
