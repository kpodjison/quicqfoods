@extends('products._header')
@section('content')
<div class="container-fluid row" style="margin-top: 90px;">

            <div class="col-md-6 offset-md-3 p-3" id="welcomeMsg">
                <h3 class="text-center">Admin Sign Up</h3>
                <form action="/admin/register" method="POST">
                    @csrf
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                        <label for="username" class="text-black">Username</label>
                        @error('username')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-floating mb-2">
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                        <label for="email" class="text-black">Email</label>
                    </div>
                    <div class="form-floating transparent mb-2">
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                        <label for="password" class="text-black">Password</label>
                    </div>
                    <div class="form-floating transparent mb-2">
                        <input type="password" class="form-control" id="cfm-password" placeholder="Password" name="password_confirmation">
                        <label for="cfm-password" class="text-black">Confirm Password</label>
                        @error('password')
                         <small class="text-danger" >{{$message}}</small>
                        @enderror
                    </div>
                    <input type="submit" value="Sign Up" class="btn btn-primary px-3" style="float:right">
                    <p><small>Already Have an Account? Login </small> <a href="/admin/login">Here</a></p>
                </form>
              
            </div>
</div>
@endsection