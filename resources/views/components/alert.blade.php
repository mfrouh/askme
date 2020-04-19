@if (session('errors'))
  <div class="alert alert-danger shadow-sm text-@lang('home.left')">
     @foreach (session('errors')->all() as $error)
         {{$error}}
         <br>
     @endforeach
  </div>
@endif
