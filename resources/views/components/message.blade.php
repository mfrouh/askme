@if (session('message'))
  <div class="alert alert-success shadow-sm text-@lang('home.left')">
         {{session('message')}}
  </div>
@endif
