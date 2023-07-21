<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dea</title>

        <!-- Fonts -->
         
        <link href="{{ asset('css/my style.css') }}" rel="stylesheet">

        <!-- Styles -->
        

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                
                <div class="migauthbutton" >
                    
                        <!--
                            <div style="margin:auto;">
                                <a style="text-align: center;" class="navbar-brand m-auto" href="{{ url('/') }}">
                                    {{ config('app.Dea', 'Dea') }}
                                </a>
                            </div>
                        -->
                

                <div class="collapse navbar-collapse m-auto" id="navbarSupportedContent">
                            <br>
                    
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <div style="text-align: center;" >
                                    <a href="{{ route('login') }}">
                                        <button class="button" >{{ __('تسجيل الدخول') }}</button>
                                    </a>
                                </div>

                                <div class="col">
                        </div>
                            @endif

                            <br>

                            @if (Route::has('register'))

                                <div style="text-align: center;"  >
                                    <a href="{{ route('register') }}">
                                        <button class="button" >{{ __('التسجيل بالموقع') }}</button>
                                    </a>
                                </div>

                            @endif

                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
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
                                </li>
                            @endguest
                </div>
                        
                </div>
            </div>
        </nav>

            
            
        </div>
    </body>
</html>
