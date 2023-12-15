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
                <div class="block font-medium text-sm text-gray-700 mb-10 "><center>以下の情報で登録してよろしいですか？</center></div>
                <!--内容確認-->
                <div class="block font-medium text-sm text-gray-700 border-b-2 border-gray-600 mb-8">名前</div>
                <div class="block font-medium text-sm text-gray-700 border-b-2 border-gray-600 mb-8">Email</div>
                <div class="block font-medium text-sm text-gray-700 border-b-2 border-gray-600 mb-8">パスワード</div>
                <div class="block font-medium text-sm text-gray-700 border-b-2 border-gray-600 mb-8">お住いの地域</div>
                <div class="block font-medium text-sm text-gray-700 border-b-2 border-gray-600 mb-8">暑がりor寒がり</div>
                <div class="block font-medium text-sm text-gray-700 mb-8">所持している服</div>
                <!--ここにアイコンを表示させる-->
                
                
                <div class="flex items-center justify-end mt-4">
                <!--横に編集するボタンも作っておく-->
                <x-primary-button class="ml-4">
                {{ __('編集') }}
                 </x-primary-button>
                <!--ここで正式に新規登録できるようにする-->
                 <x-primary-button class="ml-4">
                {{ __('Register') }}
                 </x-primary-button>
                </div>
            </div>
        </div>
    </body>
</html>
