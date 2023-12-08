 <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>メインページ</title>
            <!-- Fonts -->
            <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="{{ 'css/app.css' }}">
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        </head>
        <body class="antialiased">
            
             <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6 dropdown" style="margin-left:900px;">
                <!--ここからのやつはcomponentから持ってきてます-->
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>
                    <x-slot name="content">
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
             <div class="center">こんにちは</div>
             <!--ここからしたにコード書いてね～！-->
            <!--日付-->
            <font size="6"> 
                <div id="current_date">
                    <script>
                        //今日の日付データを変数に格納
                        //変数は"today"とする
                        var today=new Date(); 
        
                        //年・月・日・曜日を取得
                        var year = today.getFullYear();
                        var month = today.getMonth()+1;
                        var week = today.getDay();
                        var day = today.getDate();

                        var week_ja= new Array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri","Sat");

                        //年・月・日・曜日を書き出す
                    document.write(year+"/"+month+"/"+day+" ("+week_ja[week]+")");
                    </script>
                </div>
            </font size>
            
            <!---天気表示-->
            <body>
                <div class="first">
                </div>
            </body>
             
            <!--アイコン-->
            <center>
                <div>
	                <!--zozotown-->
                    <img src="https://res.cloudinary.com/dlfimibcq/image/upload/v1701914045/zozotown_tyfmb8.png" class="btn-social-square" />
                    <!--SHEIN-->
                    <img src="https://res.cloudinary.com/dlfimibcq/image/upload/v1701914045/SHEIN_w77ctw.png" class="img-list__item btn-social-square" />
                    <!--GRL-->
                    <img src="https://res.cloudinary.com/dlfimibcq/image/upload/v1701914045/GRL_mji91c.png" class="img-list__item btn-social-square" />
                    <!--MONO-MART-->
                    <img src="https://res.cloudinary.com/dlfimibcq/image/upload/v1701914045/MONO-MART_f41ttj.jpg" class="img-list__item btn-social-square" />
                </div>



            <!--ワンポイントアドバイス-->
                <div class="balloon2-right">
                    <p><font size="5">ワンポイントアドバイス</font></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </center>
            

<svg class="fill-cyan-500 hover:fill-cyan-700">
  <!-- ... -->
</svg>
        </body>
    </html>