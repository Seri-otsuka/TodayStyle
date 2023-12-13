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
    <body class="font-sans text-gray-900 antialiased">
        <!--全体の背景の範囲-->
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-300">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>
            <!--入力ブロックの範囲-->
            <div class="w-full sm:max-w-xl mt-6 px-6 py-4 bg-gray-300 shadow-md overflow-hidden sm:rounded-lg">
                 <form method="POST" action="{{ route('register') }}">
                 @csrf
                     <!-- アイコン-->
                     <!--ノースリーブ-->
                    <div class="flex justify-center items-center gap-2">
                    <div class="mt-4 focus:border-indigo-500 focus:ring-indigo-500 ">
                        <img class="w-16 rounded-md bg-white" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1701305492/icon_R_0295_tdbsc2.png">
                        <x-input-label class="mx-7" for="email" :value="__('ノースリーブ')" />
                    </div>
                    
                    <!--スカート-->
                    <div class="mt-4 focus:border-indigo-500 focus:ring-indigo-500 ">
                        <img class="w-16 rounded-md bg-white" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1701305492/icon_R_0295_tdbsc2.png">
                        <x-input-label class="mx-7" for="email" :value="__('スカート')" />
                    </div>
                    
                    <!--半袖-->
                    <div class="mt-4 focus:border-indigo-500 focus:ring-indigo-500 ">
                        <img class="w-16 rounded-md bg-white" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/T%E3%82%B7%E3%83%A3%E3%83%84%E3%82%A2%E3%82%A4%E3%82%B3%E3%83%B39_zsyouc.png">
                        <x-input-label class="mx-7" for="email" :value="__('半袖')" />
                    </div>
                    
                     <!--長袖-->
                    <div class="mt-4 focus:border-indigo-500 focus:ring-indigo-500 ">
                        <img class="w-16 rounded-md bg-white" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/%E3%83%AD%E3%83%B3%E3%82%B0T%E3%82%B7%E3%83%A3%E3%83%84%E3%82%A2%E3%82%A4%E3%82%B3%E3%83%B32_tall3d.png">
                        <x-input-label class="mx-7" for="email" :value="__('長袖')" />
                    </div>
                    
                     <!--シャツ-->
                    <div class="mt-4 focus:border-indigo-500 focus:ring-indigo-500 ">
                        <img class="w-16 rounded-md bg-white" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/Y%E3%82%B7%E3%83%A3%E3%83%84%E3%81%AE%E3%82%A4%E3%83%A9%E3%82%B9%E3%83%88%E7%B4%A0%E6%9D%905_scezds.png">
                        <x-input-label class="mx-7" for="email" :value="__('シャツ')" />
                    </div>
                    </div>
                    
                   <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                            {{ __('すでに登録していますか？') }}
                        </a>
            
                        <x-primary-button class="ml-4">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>