@extends('layout.siteLayout')
@section('title')
Profile
@endSection
@section('content')
    <!-- login -->

        <div class="row justify-content-center bg-image mx-0 mb-5">
            <div class="col-lg-6 py-5">
                <div class="bg-white p-5 my-5">
                    <h1 class="text-center mb-4">Profile</h1>
                    <form method="POST" action="{{ route('updateMyProfile') }}">
                    @csrf   
                    <div class="form-row">

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control bg-light border-0" value="{{$user->name}}" placeholder="Your name" style="padding: 30px 20px;">
                                    @error('password')
                                    <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control bg-light border-0" value="{{$user->email}}" placeholder="Your Email" style="padding: 30px 20px;" >
                                    @error('email')
                                    <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12">
                                <button class="btn btn-primary btn-block" type="submit" style="height: 60px;">Update</button>
                            </div>
                            @if ($errors)
                            @foreach ($errors->all() as $error)
                            <p style="color: red;">{{ $error }}</p>
								@endforeach
                                    @endIf
                                    @if (session('status'))
                                    <p style="color: green;">{{ session('status') }}</p>
                                        @endif        
                            <div class="text-center col-sm-12">
                              <a  href="{{route('editpassword')}}">Need to Change Your Password ?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  
@endSection
