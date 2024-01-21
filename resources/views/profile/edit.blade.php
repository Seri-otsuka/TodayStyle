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

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-300">
                <a href="/">
                    <center class="my-6">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                    </center>
                </a>
                 <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center dropdown">
                    <!--ここからのやつはcomponentから持ってきてます-->
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <!--現在ログインしているユーザーの名前が表示されるようになっている-->
                                <div>{{ Auth::user()->name }}</div>
                      <!--  <div>テストユーザー</div> -->
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                             <x-dropdown-link :href="route('main')">
                                {{ __('メインページ') }}
                            </x-dropdown-link>
                            
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('プロフィール') }}
                            </x-dropdown-link>
    
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
    
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('ログアウト') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
          <div>
        </div>
            <!-- Page Content -->
            <main>
                <div class="py-12">
                    <div class="max-w-xl mx-auto sm:px-6 lg:px-8 space-y-6">
                        <div class="p-4 sm:p-8 bg-gray-300 shadow sm:rounded-lg">
                            <div class="max-w-xl">
                                @include('profile.partials.update-profile-information-form')
                            </div>
                        </div>
                        
                    
                         <div class="p-4 sm:p-8 bg-gray-300 shadow sm:rounded-lg">
                            <div class="max-w-xl">
                                @include('profile.partials.update-fashon-form')
                            </div>
                        </div>
                        
            
                        <div class="p-4 sm:p-8 bg-gray-300 shadow sm:rounded-lg">
                            <div class="max-w-xl">
                                @include('profile.partials.update-password-form')
                            </div>
                        </div>
            
                        <div class="p-4 sm:p-8 bg-gray-300 shadow sm:rounded-lg">
                            <div class="max-w-xl">
                                @include('profile.partials.delete-user-form')
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>

   