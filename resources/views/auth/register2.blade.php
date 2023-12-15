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
                     <!--一段目-->
                     <div class="flex justify-center items-center gap-5">
                     <!--キャミ-->
                    <div class="mt-4">
                        <center>
                        <img class="w-16 rounded-md bg-white pointer-events-auto indigo-500" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702433037/%E7%84%A1%E9%A1%8C287_20231213101833_skqbru.png">
                        <x-input-label class="" for="email" :value="__('キャミ')" />
                        </center>
                    </div>
                    
                     <!--ノースリーブ-->
                    <div class="mt-4 focus:border-indigo-500 focus:ring-indigo-500 ">
                        <center>
                        <img class="w-16 rounded-md bg-white " src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/icon_R_0294_ziqwci.png">
                        <x-input-label class="" for="email" :value="__('ノースリーブ')" />
                        </center>
                    </div>
                    
                    
                    <!--半袖-->
                    <div class="mt-4 focus:border-indigo-500 focus:ring-indigo-500 ">
                        <center>
                        <img class="w-16 rounded-md bg-white" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/T%E3%82%B7%E3%83%A3%E3%83%84%E3%82%A2%E3%82%A4%E3%82%B3%E3%83%B39_zsyouc.png">
                        <x-input-label class="" for="email" :value="__('半袖')" />
                        </center>
                    </div>
                    
                     <!--長袖-->
                    <div class="mt-4 focus:border-indigo-500 focus:ring-indigo-500 ">
                        <center>
                        <img class="w-16 rounded-md bg-white" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/%E3%83%AD%E3%83%B3%E3%82%B0T%E3%82%B7%E3%83%A3%E3%83%84%E3%82%A2%E3%82%A4%E3%82%B3%E3%83%B32_tall3d.png">
                        <x-input-label class="" for="email" :value="__('長袖')" />
                        </center>
                    </div>
                    
                     <!--シャツ-->
                    <div class="mt-4 focus:border-indigo-500 focus:ring-indigo-500 ">
                        <center>
                        <img class="w-16 rounded-md bg-white" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/Y%E3%82%B7%E3%83%A3%E3%83%84%E3%81%AE%E3%82%A4%E3%83%A9%E3%82%B9%E3%83%88%E7%B4%A0%E6%9D%905_scezds.png">
                        <x-input-label class="" for="email" :value="__('シャツ')" />
                        </center>
                    </div>
                    </div>
                    
                    <!--二段目-->
                    <div class="flex justify-center items-center gap-5">
                         <!--カーディガン-->
                        <div class="mt-4 focus:border-indigo-500 focus:ring-indigo-500 ">
                            <center>
                            <img class="w-16 rounded-md bg-white" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/icon_R_0292_co2req.png">
                            <x-input-label class="" for="email" :value="__('カーディガン')" />
                            </center>
                        </div>
                        
                         <!--ジャケット-->
                        <div class="mt-4 focus:border-indigo-500 focus:ring-indigo-500 ">
                            <center>
                            <img class="w-16 rounded-md bg-white" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347926/%E3%82%B8%E3%83%A3%E3%82%B1%E3%83%83%E3%83%88%E3%81%AE%E3%82%A4%E3%83%A9%E3%82%B9%E3%83%88%E7%B4%A0%E6%9D%902_axoaz6.png">
                            <x-input-label class="" for="email" :value="__('ジャケット')" />
                            </center>
                        </div>
                        
                         <!--タートルネック-->
                        <div class="mt-4 focus:border-indigo-500 focus:ring-indigo-500 ">
                            <center>
                            <img class="w-16 rounded-md bg-white" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347926/%E3%82%BF%E3%83%BC%E3%83%88%E3%83%AB%E3%83%8D%E3%83%83%E3%82%AF%E3%81%AE%E7%84%A1%E6%96%99%E3%82%A2%E3%82%A4%E3%82%B3%E3%83%B3_plixtm.png">
                            <x-input-label class="" for="email" :value="__('タートルネック')" />
                            </center>
                        </div>
                        
                         <!--ニット-->
                        <div class="mt-4 focus:border-indigo-500 focus:ring-indigo-500 ">
                            <center>
                            <img class="w-16 rounded-md bg-white" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/icon_R_0287_wfezcx.png">
                            <x-input-label class="" for="email" :value="__('ニット')" />
                            </center>
                        </div>
                        
                         <!--パーカー-->
                        <div class="mt-4 focus:border-indigo-500 focus:ring-indigo-500 ">
                            <center>
                            <img class="w-16 rounded-md bg-white" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/%E3%83%91%E3%83%BC%E3%82%AB%E3%83%BC%E3%82%A2%E3%82%A4%E3%82%B3%E3%83%B32_vl1pu3.png">
                            <x-input-label class="" for="email" :value="__('パーカー')" />
                            </center>
                        </div>
                    </div>
                    
                    <!--三段目-->
                    <div class="flex justify-center items-center gap-5">
                         <!--コート-->
                        <div class="mt-4 focus:border-indigo-500 focus:ring-indigo-500 ">
                            <center>
                            <img class="w-16 rounded-md bg-white" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347926/%E3%83%80%E3%82%A6%E3%83%B3%E3%82%B8%E3%83%A3%E3%82%B1%E3%83%83%E3%83%88%E3%82%A2%E3%82%A4%E3%82%B3%E3%83%B32_mcfxxc.png">
                            <x-input-label class="" for="email" :value="__('コート/ダウン')" />
                            </center>
                        </div>
                        
                         <!--半ズボン-->
                        <div class="mt-4 focus:border-indigo-500 focus:ring-indigo-500 ">
                            <center>
                            <img class="w-16 rounded-md bg-white" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/icon_R_0286_gtidl0.png">
                            <x-input-label class="" for="email" :value="__('半ズボン')" />
                            </center>
                        </div>
                        
                         <!--長ズボン-->
                        <div class="mt-4 focus:border-indigo-500 focus:ring-indigo-500 ">
                            <center>
                            <img class="w-16 rounded-md bg-white" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/icon_R_0285_kuszgu.png">
                            <x-input-label class="" for="email" :value="__('長ズボン')" />
                            </center>
                        </div>
                        
                         <!--スカート-->
                        <div class="mt-4 focus:border-indigo-500 focus:ring-indigo-500 ">
                            <center>
                            <img class="w-16 rounded-md bg-white" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/icon_R_0295_yzvvwv.png">
                            <x-input-label class="" for="email" :value="__('スカート')" />
                            </center>
                        </div>
                        
                         <!--ワンピース-->
                        <div class="mt-4 focus:border-indigo-500 focus:ring-indigo-500 ">
                            <center>
                            <img class="w-16 rounded-md bg-white" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/icon_R_0290_ststiv.png">
                            <x-input-label class="" for="email" :value="__('ワンピース')" />
                            </center>
                        </div>
                    </div>
                    
                    
                   <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                            {{ __('すでに登録していますか？') }}
                        </a>
            
                        <x-primary-button class="ml-4">
                            {{ __('完了') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>