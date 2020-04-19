@extends('layouts.app')
@section('title')
{{ __('home.ask') }} {{$user->name}}
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm mt-3">
                <div class="card-header bg-white text-center">{{ __('home.ask') }} {{$user->name}}</div>
                <div class="card-body text-@lang('home.left')">
                   <img src="{{$user->image}}" class="img-writer">
                   <form action="/ask" method="post">
                       @csrf
                       <div class="form-group">
                          <label for="name">@lang('home.name') (@lang('home.optional'))</label>
                          <input type="text" name="from"  class="form-control myclass brdrd" placeholder="@lang('home.name') (@lang('home.optional'))">
                       </div>
                       <div class="form-group">
                         <label for="question">@lang('home.question')</label>
                         <textarea type="text" name="question" rows="3"  class="form-control brdrd" placeholder="@lang('home.question')"></textarea>
                       </div>
                       <input type="hidden" name="user_id" value="{{$user->id}}">
                       <div class="form-group text-center">
                           <input type="submit" class="btn btn-primary brdrd btn-sm" value="@lang('home.ask')">
                      </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
