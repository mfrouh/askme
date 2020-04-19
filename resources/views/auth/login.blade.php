@extends('layouts.app')
@section('title')
{{ __('home.login') }}
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-white text-center">{{ __('home.login') }}</div>
                <div class="card-body text-center">
                  <a href="/auth/redirect/facebook" class="btn btn-primary brdrd smaller" ><i class="fa fa-facebook" aria-hidden="true"></i> | @lang('home.loginfb')</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
