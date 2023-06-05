@extends('layout.siteLayout')
@section('title')
Home Page
@endSection
@section('content')
    <!-- login -->

        <div class="row justify-content-center bg-image mx-0 mb-5">
            <div class="col-lg-6 py-5">
                <div class="bg-white p-5 my-5">
                    <h1 class="text-center mb-4">SIGNUP</h1>
                    <form method="POST" action="{{ route('signupPost') }}">
                    @csrf   
                    <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control bg-light border-0" value="{{ old('name') }}" placeholder="Your name" style="padding: 30px 20px;" >
                                    @error('name')
                                    <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
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
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="password" name="confirm_password" class="form-control bg-light border-0" placeholder="Your password" style="padding: 30px 20px;">
                                    @error('confirm_password')
                                    <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12">
                                <button class="btn btn-primary btn-block" type="submit" style="height: 60px;">SIGNUP</button>
                            </div>
                            @error('message')
                            <p style="color: red;">{{$message}}</p>
                                    @endIf
                            <div class="text-center col-sm-12">
                                <p>Do You Have Accoute ?</p>  <a  href="{{route('login')}}">LOGIN</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  
@endSection
