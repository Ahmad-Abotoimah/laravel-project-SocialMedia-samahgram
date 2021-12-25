<!DOCTYPE html>
<html lang="lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<!-- Mirrored from demo.foxthemes.net/instellohtml/form-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Dec 2021 07:49:32 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link href="assets/images/favicon.png" rel="icon" type="image/png">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Basic Page Needs
    ================================================== -->
    <title>{{ config('app.name', 'Samahgram') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Instello - Sharing Photos platform HTML Template">


    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="assets/css/icons.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="assets/css/uikit.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/tailwind.css">

</head>

<body class="bg-gray-100">


<div id="wrapper" class="flex flex-col justify-between h-screen">

    <!-- header-->
    <div class="bg-white py-4 shadow dark:bg-gray-800">
        <div class="max-w-6xl mx-auto">


            <div class="flex items-center lg:justify-between justify-around">

                <a href="{{ url('/') }}">
                    <img src="assets/images/logo.png" alt="" class="w-32">
                </a>

                <div class="capitalize flex font-semibold hidden lg:block my-2 space-x-3 text-center text-sm">
                    @guest
                      @if (Route::has('login'))
                        <a class="py-3 px-4" href="{{ route('login') }}" >{{ __('Login') }}</a>
                               @endif
                     @if (Route::has('register'))
                         <a class="bg-pink-500 pink-500 px-6 py-3 rounded-md shadow text-white" href="{{ route('register') }}">{{ __('Register') }}</a>{{--                                </li>--}}
                                @endif
                    @else
                         <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                             <img
                                 alt="dfghj"
                                 src="https://static-media-prod-cdn.itsre-sumo.mozilla.net/static/sumo/img/default-FFA-avatar.png"
                                 style="width: 50px;height: 50px; border-radius: 50%;margin-left: 26px;">
                              {{ Auth::user()->name}}

                         </a>

                         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                                 {{ __('Logout') }}
                              </a>
                               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                       @csrf
                                </form>
                         </div>
                    @endguest
                </div>

            </div>
        </div>


        <main class="py-4">
            @yield('content')
        </main>

    <!-- Footer -->

    <div class="lg:mb-5 py-3 uk-link-reset my-5 ">
        <div class="flex flex-col items-center justify-between lg:flex-row max-w-6xl mx-auto lg:space-y-0 space-y-3">
            <div class="flex space-x-2 text-gray-700 uppercase">
                <a href="#"> About</a>
                <a href="#"> Help</a>
                <a href="#"> Terms</a>
                <a href="#"> Privacy</a>
            </div>
            <p class="capitalize"> © copyright 2021 by Samahgram</p>
        </div>
    </div>

</div>
</div>
<script>

    (function (window, document, undefined) {
        'use strict';
        if (!('localStorage' in window)) return;
        var nightMode = localStorage.getItem('gmtNightMode');
        if (nightMode) {
            document.documentElement.className += ' dark';
        }
    })(window, document);


    (function (window, document, undefined) {

        'use strict';

        // Feature test
        if (!('localStorage' in window)) return;

        // Get our newly insert toggle
        var nightMode = document.querySelector('#night-mode');
        if (!nightMode) return;

        // When clicked, toggle night mode on or off
        nightMode.addEventListener('click', function (event) {
            event.preventDefault();
            document.documentElement.classList.toggle('dark');
            if (document.documentElement.classList.contains('dark')) {
                localStorage.setItem('gmtNightMode', true);
                return;
            }
            localStorage.removeItem('gmtNightMode');
        }, false);

    })(window, document);
</script>

<!-- Scripts
================================================== -->
<script src="assets/js/tippy.all.min.js"></script>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/uikit.js"></script>
<script src="assets/js/simplebar.js"></script>
<script src="assets/js/custom.js"></script>


<script src="../../unpkg.com/ionicons%405.2.3/dist/ionicons.js"></script>
</body>


<!-- Mirrored from demo.foxthemes.net/instellohtml/form-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Dec 2021 07:49:32 GMT -->
