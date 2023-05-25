@extends('products._header')
@section('content')
<div class="container-fluid row" style="margin-top: 20px;">
            <div class="row">
                @if (session()->has('loginSuccess'))
                    <div class="col-md-6 offset-md-3 p-3">
                        <div class="alert alert-success">{{ session('loginSuccess') }}</div>
{{--                        <div class="alert alert-success">{{ $Admin}}</div>  --}}
                    </div>
                @endif
            </div>
            <div class="row">
                 <h2 class="text-white">Admin Dashboard</h2>
                </div>
            </div>
</div>
@endsection
