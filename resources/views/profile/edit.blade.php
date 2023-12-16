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
          <div>
                <a href="/">
                    <center class="mt-6">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                    </center>
                </a>
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

   