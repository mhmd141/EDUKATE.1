@extends('layout.siteLayout')
@section('title')
Home Page
@endSection
@section('content')
    <!-- login -->

        <div class="row justify-content-center bg-image mx-0 mb-5">
            <div class="col-lg-6 py-5">
                <div class="bg-white p-5 my-5">
                    <h1 class="text-center mb-4">LOGIN</h1>
                    <form method="POST" action="{{ route('loginPost') }}">
                    @csrf   
                    <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control bg-light border-0" value="{{ old('email') }}" placeholder="Your Email" style="padding: 30px 20px;" >
                                    @error('email')
                                    <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control bg-light border-0" placeholder="Your password" style="padding: 30px 20px;">
                                    @error('password')
                                    <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12">
                                <button class="btn btn-primary btn-block" type="submit" style="height: 60px;">LOGIN</button>
                                <a  href="{{route('forgetpassword')}}">forgate Your Password ?</a>
                            </div>
                            @error('message')
                            <p style="color: red;">{{$message}}</p>
                                    @endIf
                            <div class="text-center col-sm-12">
                                <p>Dont Have Accoute ?</p>  <a  href="{{route('signup')}}">SIGNUP</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  
@endSection
