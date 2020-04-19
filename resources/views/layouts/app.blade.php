<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="@lang('home.dir')">
@include('layouts.head')
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-white bg-white shadow-sm" style="position:fixed;width: 100%;z-index: 99999;">
            <div class="container">
                <a class="navbar-brand text-dark" href="{{ url('/') }}">
                    @lang('home.askme')
                </a>
                <button class="navbar-toggler text-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon text-white"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav  @if(app()->getlocale()=='ar') mr-auto text-right @else ml-auto text-left @endif">
                        @auth
                        <li class="nav-item">
                            <a class="nav-link   ml-1 mr-1   smaller" href="/questions">@lang('home.myquestions')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link   ml-1 mr-1   smaller" href="/askme/{{auth()->user()->username}}">@lang('home.askme')</a>
                        </li>
                        @endauth
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav text-black @if(app()->getlocale()=='ar') mr-auto text-right @else ml-auto text-left @endif" >
                        <!-- Authentication Links -->
                            <li class="nav-item dropdown">
                            </li>
                        @guest
                            <li class="nav-item  ">
                                <a class="nav-link  btn-sm btn btn-outline-dark brdrd  smaller" href="{{ route('login') }}"><i class="fas fa-lock"></i> @lang('home.login')</a>
                            </li>
                        @else
                        @php
                            $lang=app()->getlocale();
                        @endphp
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="alink smaller" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @if (auth()->user()->provider)
                                    <img src="{{auth()->user()->image}}" class="userimg">
                                    @else
                                    <img src="{{url('/storage/user')}}/{{auth()->user()->image}}" class="userimg">
                                    @endif
                                    {{auth()->user()->name}}
                                </a>
                                <div class="dropdown-menu dropdown-menu-left text-@lang('home.left') text-white" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item " href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       @lang('home.logout')
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <li class="nav-item  text-dark">
                            @if(app()->getlocale()=='ar')
                            <a class="btn btn-outline-dark brdrd  ml-1 mr-1" href="/lang/en">EN</a>
                            @else
                            <a class="btn btn-outline-dark brdrd  ml-1 mr-1" href="/lang/ar">ع</a>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main  class="py-8" style="padding-top: 5rem!important;">
            <x-alert/>
            <x-message/>
                @yield('content')
        </main>
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
        </div>
    </div>
</body>
@include('layouts.foot')
</html>
