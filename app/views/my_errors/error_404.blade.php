@extends('layouts.default_main')
@section('body')
<div class="auth-wrapper maintance">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-center">
                    <img src="{{ asset() }}images/maintance/404.png" alt="" class="img-fluid">
                    <h5 class="text-muted my-4">404 - {{ $message }}</h5>
                    <a href="{{ base_url() }}" class="btn waves-effect waves-light btn-primary mb-4"><i class="feather icon-refresh-ccw mr-2"></i>Ke Beranda</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 