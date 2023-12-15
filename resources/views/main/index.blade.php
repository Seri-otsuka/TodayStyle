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
            <div class="hidden sm:flex sm:items-center sm:ml-6 dropdown" style="margin-left:90%;">
                <!--ここからのやつはcomponentから持ってきてます-->
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                    {{--
                            <div>{{ Auth::user()->name }}</div>
                    --}}
                    <div>テストユーザー</div>
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
             <!--ここからしたにコード書いてね～！-->
            
            <div  class="Hiritu"> 
            　　　　　　　
                <center>
                    <div class="WebpageColor_box">
                    
                        <!--日付-->
                        <font size="7"> 
                            <div id="current_date" style="font-family: ravie,fantasy; margin-right: 50%;">
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
                                    document.write("　　"+year+"　"+month+"/"+day+" 　("+week_ja[week]+")　　　　　　　　　　　　　　　　");
                                </script>
                            </div>
                        </font size>
                    
                        <!---天気表示（黒おび）-->
                        <div class="weather_box wrapper weather-contents">
                            <p>
                                <img src="https://res.cloudinary.com/dlfimibcq/image/upload/v1700613658/1696480649456_rvyzkj.png" class="weather-social" />
                            </p>
                            <p class="weather-social-text">
                                32°C
                            </p>
                            <p class="weather-social-text">
                                10%
                            </p>
			                <p>
			                    <img src="https://res.cloudinary.com/dlfimibcq/image/upload/v1700613658/1696480649456_rvyzkj.png" class="weather-social" class="weather-social"/>
			                </p>
                        </div>
                                                
                                                <!---天気表示（黒おび）-->
                        <div class="weather_box wrapper weather-contents">
                            <script>
                                    let lat = 35.6785;
                                    let long = 139.6823;
                        
                                    const apiUrl = 'https://api.open-meteo.com/v1/forecast?latitude=35.6785&longitude=139.6823&current=temperature_2m,weather_code&timezone=Asia%2FTokyo&forecast_days=1';
                                    
                                    fetch(apiUrl)
                                    .then(response => {
                                        return response.json();
                                    })
                                    .then(data =>{
                                        const jsonData = data;
                                        const weather = jsonData.current.weather_code;
                                        const temperature = jsonData.current.temperature_2m;
                        
                                        if(weather === 0){
                                          document.write("晴れです"+ temperature + "℃です");
                                            
                        
                                        }
                                        
                                        else{
                                          document.write("晴れです"+ temperature + "℃です");
                                        }
                        
                                        
                                    })
                                    .catch(error => {
                                        console.error('データ取得に失敗しました',error)
                                    });
                          </script>
                            <p>
                                <img src="https://res.cloudinary.com/dlfimibcq/image/upload/v1700613658/1696480649456_rvyzkj.png" class="weather-social" />
                            <p>
                            <img src="https://res.cloudinary.com/dlfimibcq/image/upload/v1700613658/1696480649456_rvyzkj.png" class="weather-social" class="weather-social"/>
                            </p>
                         
                        </div>

                        <!--温度・湿度の表示-->
                    
                    
                        <!--不快指数の表示-->
                    
                        <!---選んだ服のアイコン-->
                        <body>
                            <table align="center" cellspacing="100">
                                <tr>
                                    <td class="clothes_box1"></td>
                                    <td class="clothes_box1"></td>
                                </tr>
                                <tr>
                                    <td class="clothes_box1"></td>
                                    <td class="clothes_box1"></td>
                                </tr>
                            </table>
                        </body>
                    
                        <!--かご-->
                        <center>
                            <div>
                                <img src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702010268/%E8%B2%B7%E3%81%84%E7%89%A9%E3%81%8B%E3%81%94_xwtyed.png"/   width=150px height=150px;>
                            </div>
                        </center>
                    
                        <!---shop icon-->
                        <center>
                            <div>
                               <button onclick="location.href='https://zozo.jp/'">
                                    <!--zozotown-->
                                 <img src="https://res.cloudinary.com/dlfimibcq/image/upload/v1701914045/zozotown_tyfmb8.png" class="btn-social-square" />
                                </button>
                                <button onclick="location.href='https://jp.shein.com/category-picks.html?url_from=jpgooglebrandshein_shein02_srsa_LJP_category_20230128&cid=19616340873&setid=148607672587&adid=646447699347&pf=GOOGLE&gad_source=1&gclid=Cj0KCQiA4NWrBhD-ARIsAFCKwWt3_edjfdt-I4BF_kUW8z2lLsDCpFr9S8YLMrB3R5nUZvK2N7W9BpAaArYJEALw_wcB'">
                                    <!--SHEIN-->
                                 <img src="https://res.cloudinary.com/dlfimibcq/image/upload/v1701914045/SHEIN_w77ctw.png" class="btn-social-square" />
                                </button>
                                <button onclick="location.href='https://www.grail.bz/'">
                                    <!--GRL-->
                                    <img src="https://res.cloudinary.com/dlfimibcq/image/upload/v1701914045/GRL_mji91c.png" class="btn-social-square" />
                                </button>
                                 <button onclick="location.href='https://www.mono-mart.jp/'">
                                    <!--MONO-MART-->
                                 <img src="https://res.cloudinary.com/dlfimibcq/image/upload/v1701914045/MONO-MART_f41ttj.jpg" class="btn-social-square" />
                                </button>
                            </div>
                        </center>
                    
                    
                    
                        <!--ワンポイントアドバイス-->
                        <table align="center">
                            <tr>
                                <td>
                                     <div class="kaiwa-text-left">
                                        <center>
                    	                    <p class="kaiwa-text ">
                    		                    <font size="6">
                       	                            ワンポイントアドバイス
                    	                        </font>
                                            </p> 
                                            <p class="kaiwa-text">
                                                <font size="4">
                                                    Lorem ipsum dolor sit amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                </font>
                                            </p>
                                         </center>
                                </td>
                                 <td>
                                    <div class="kaiwa">
                                        <figure class="kaiwa-img-right">
                                               <img src="https://res.cloudinary.com/dlfimibcq/image/upload/v1700613658/1696480649456_rvyzkj.png">
                                         </figure>
                                     </div>
                                 </td>
                            </tr>
                        </table>
                     </div>
                </center>
            </body>

<svg class="fill-cyan-500 hover:fill-cyan-700">
  <!-- ... -->
</svg>
        </body>
    </html>