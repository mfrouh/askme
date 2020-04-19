@extends('layouts.app')
@section('title')
{{ __('home.askme') }}
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-sm mt-3">
                <div class="card-body text-center p-0">
                   <p>@lang('home.askme')</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
