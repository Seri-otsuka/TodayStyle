<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans bg-gray-300 antialiased">
        <div>
            <center>
              <a href="/">
                <img class="w-40 my-8" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1700613658/1696480649456_rvyzkj.png">
                </a>
            </center>
            <!--よくわからないのでとりあえずセンターにもっていって文字はでかめでお願いします！-->
                 <div style="font-family: ravie,fantasy; center: 100%;  font-size: 400%;" class="flex justify-center">
                TodayStyle
                 </div>
                  <div class="flex justify-center">
                     @if (Route::has('login'))
                                @auth
                                    <a href="{{ route('main') }}" class="inline-flex items-center mx-8 px-4 py-2 bg-gray-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">ログイン</a>
                                @else
                                    <a href="{{ route('login') }}" class="inline-flex items-center mx-8 px-4 py-2 bg-gray-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">ログイン</a>
            
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="inline-flex items-center mx-8 px-4 py-2 bg-gray-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">新規登録</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                </div>
        </div>
    </body>
</html>