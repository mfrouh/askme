@extends('layouts.app')
@section('title')
{{auth()->user()->name}}
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm mt-3">
                <div class="card-header bg-white text-center">@lang('home.myquestions')</div>
                <img src="{{auth()->user()->image}}" class="img-writer">
            </div>
            @foreach ($questions as $question)
            <div class="card shadow-sm mt-3">
                <div class="card-body text-center">
                    {{$question->question}}
                       <br><br>
                       <a class="btn btn-outline-success ml-1 mr-1 brdrd btn-sm @lang('home.right')">{{$question->created_at->diffforhumans()}}</a>
                    @if ($question->from)
                       <a class="btn btn-outline-primary brdrd btn-sm @lang('home.right')">{{$question->from}}</a>
                    @endif
                </div>
            </div>
            @endforeach
            <div class="row">
                <div class="col-12 text-center mt-3">
                    {{$questions->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
