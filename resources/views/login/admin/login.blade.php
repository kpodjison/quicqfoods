@extends('products._header')
@section('content')
<div class="container-fluid row" style="margin-top: 20px;">
            <div class="row">
                @if (session()->has('loginSuccess'))
                    <div class="col-md-6 offset-md-3 p-3">
                        <div class="alert alert-success">{{ session('loginSuccess') }}</div>  
                    </div>
                @elseif (session()->has('loginError'))
                    <div class="col-md-6 offset-md-3 p-3">
                        <div class="alert alert-danger">{{ session('loginError')}}</div>  
                    </div>
                @endif
            </div>
            <div class="row">
                    <div class="col-md-6 offset-md-3 p-3" id="welcomeMsg">
                        <h3 class="text-center">Admin Login</h3>
                        <form action="/admin/login" method="POST">
                            @csrf
                            <div class="form-floating mb-2">
                                <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                                <label for="email" class="text-black">Email</label>
                            </div>
                            <div class="form-floating transparent mb-2">
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                                <label for="password" class="text-black">Password</label>
                            </div>
                            <input type="submit" value="Login" class="btn btn-primary px-3" style="float:right">
                        </form>
                        <p><small>Don't Have an Admin Account? SignUp </small> <a href="/admin/register">Here</a></p>
                    </div>
                </div>
            </div>        
</div>
@endsection