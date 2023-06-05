@extends('layout.siteLayout')
@section('title')
Home Page
@endSection
@section('content')
    <!-- login -->

        <div class="row justify-content-center bg-image mx-0 mb-5">
            <div class="col-lg-6 py-5">
                <div class="bg-white p-5 my-5">
                    <h1 class="text-center mb-4">Change Password </h1>
                    <form method="POST" action="{{ route('editpasswordPost') }}">
                    @csrf   
                    <div class="form-row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="password" name="old_password" class="form-control bg-light border-0"  placeholder="Your old Password" style="padding: 30px 20px;" >
                                    @error('old_password')
                                    <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control bg-light border-0" placeholder="Your New Password" style="padding: 30px 20px;">
                                    @error('password')
                                    <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
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
                                <button class="btn btn-primary btn-block" type="submit" style="height: 60px;">CHANGE</button>
                            </div>
                            @error('message')
                            <p style="color: red;">{{$message}}</p>
                                    @endIf
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  
@endSection
