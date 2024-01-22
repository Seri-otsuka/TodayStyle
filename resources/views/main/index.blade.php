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
            
            
             <!--ここからしたにコード書いてね～！-->
             
             
                   
            <div  class="Hiritu">
                <center>
                    
                    <div class="mainColor_box"> 
                        {{--<body>
    			            <header class="header header-contents">--}}
                                <!-- ヘッダー部 -->
                                <div class="header-contents">
                                    <!--日付-->
                                    <font size="7"> 
                                        <div id="current_date" style="font-family: ravie,fantasy; margin-top: 3%;">
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
                                                document.write("　　"+year+"　"+month+"/"+day+" 　("+week_ja[week]+")");
                                            </script>
                                        </div>
                                    </font size>
                            
                            
                            <!-- 現在の天気・温度表示用 表示分けないなら一個でいいかも-->
                            <p id="sampleweather" style="position: relative;font-family: ravie,fantasy, serif;font-size: 450%;">
                             
                            </p>
                            
                            {{--
                            <!-- ハンバーガーメニュー部分 -->
                                    <div class="nav">
            
                                    <!-- ハンバーガーメニューの表示・非表示を切り替えるチェックボックス -->
                                    <input id="drawer_input" class="drawer_hidden" type="checkbox">
                                
                                    <!-- ハンバーガーアイコン -->
                                    <label for="drawer_input" class="drawer_open"><span></span></label>                                             
    
                                    <!-- メニュー -->
                                    <nav class="nav_content">
                                        <ul class="nav_list">
                                	        <font face="Comic Sans MS">
                                        	    <li class="nav_item" style="font-size:50px"><a href="">　　　　　</a></li>
                                                <li class="nav_item" style="font-size:75px"><a href="route('profile.edit')">プロフィール</a></li>
                                        	    <li class="nav_item" style="font-size:35px"><a href="">　　　　　</a></li>
                                                <li class="nav_item" style="font-size:75px"><a href="route('logout')">ログアウト</a></li>
                                        	    <li class="nav_item" style="font-size:35px"><a href="">　　　　　</a></li>
                                                <li class="nav_item"><a href="" style="font-size:75px">メニュー3</a></li>                                   
                		                    </font><br/>
                                        </ul>
                                    </nav>
                                </div>
                            </header>
                        </body>--}}
                            
                            <!-- Settings Dropdown 
                                 メニュー表示用    -->
                            <div class="hidden sm:flex sm:items-center sm:ml-6 dropdown" style="margin-right: 2%;">
                                <!--ここからのやつはcomponentから持ってきてます-->
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                            <!--現在ログインしているユーザーの名前が表示されるようになっている-->
                                            <div>メニュー</div>
                                            {{--<div>{{ Auth::user()->name }}</div>--}}
                                  <!--  <div>テストユーザー</div> -->
                                            <div class="ml-1">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </button>
                                    </x-slot>
                                    <x-slot name="content">
                                         {{--<x-dropdown-link :href="route('images.create')">
                                            {{ __(' + 服追加') }}
                                        </x-dropdown-link>
                                        
                                        <x-dropdown-link :href="route('profile.edit')">
                                            {{ __('プロフィール') }}
                                        </x-dropdown-link>--}}
                                        
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
                            
                        </div>
                        
                        <!---天気表示（黒おび）-->
                        <div class="weather_box wrapper weather-contents weather-social-text">
                            <!---->                            
                            <div style="margin: 0% -28% 0%;" class="maru_box">
                                {{ $area->name }}・{{ $finelyarea->name }}({{ $finelyarea->id }})
                                <!--↓↓サイズ調整お願いします-->
                                <img class="rounded-lg" src="{{ $area->path}}" style="max-width: 20%">
                            
                            </div>
                            <!---お天気アイコン-->
				            <div>
				                朝
                                <img id="morning_OTENKI"  style="width: 120px;"/>
                            	<!-- 湿度 -->
                            	<p id="temperature_morning" style="margin: -2% 0% -10%;">
                            	    
                            	</p>
                            	<p id="rainypercent_morning">
                            	     　<!-- 半角,全角空白で位置調整 -->
                            	</p>
				            </div>
				            <div>
				                昼
                                <img id="noon_OTENKI"   style="width: 120px;" />
                                <!-- 湿度 -->
                                <p id="temperature_noon" style="margin: -2% 0% -10%;">
                            	    
                            	</p>
                                <p id="rainypercent_noon" style="margin: -14% 0% -10%;">
                                    
                                </p>
				            </div>
				            <div class="night-otenki-right">
                            	 夜
                                <img  id="night_OTENKI" style="width: 120px;"/>
                            	<!-- 湿度 -->
                            	<p id="temperature_night" style="margin: -2% 0% -10%;">
                            	   
                            	</p>
                            	<p id="rainypercent_night" style="margin: -14% 0% -10%;">
                            	    
                            	</p>
				            </div>


                            <!---不快指数-->
                            <div class="hukaisisuu-right">
                                <img id="hukaiSisuu" class="weather-social"/>
                                <img src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705790906/%E7%92%B0%E5%A2%83%E6%8C%87%E6%95%B0%E6%94%B9%E8%A8%82%E7%89%88_eos4rt.png" style="height: 27%;"/>
                            </div>
            			    
<script>
                    
                            //43.76 142.37 (北海道旭川市)
                            //01/12 下部のデータ受け渡しがまだ？なので一時的にオンにしました！
                        //let lat = 43.76;
                        //let long = 142.37;

                        //経度・緯度をもらうときの今数字書いてるところに、これを入れよう
                        //普通にコメントアウトできなかったのでちゅうかっこ左端だけ消してます
                        let lat1  = {{$finelyarea -> latitude}};
                        let long1 = {{$finelyarea -> longitude}};
                        
                        /*
                        URL:'https://api.open-meteo.com/v1/forecast?latitude=52.52&longitude=13.41&current=temperature_2m,relative_humidity_2m,weather_code&hourly=temperature_2m,precipitation_probability,weather_code&forecast_days=1';
                        
                        現在の気温
                        現在の天気コード
                        現在の湿度
                        時間毎の天気コード
                        時間毎の降水確率
                        時間毎の気温
                        
                        */
                        const apiUrl = 'https://api.open-meteo.com/v1/forecast?latitude='+lat1+'&longitude='+long1+'&current=temperature_2m,relative_humidity_2m,weather_code&hourly=temperature_2m,precipitation_probability,weather_code&timezone=Asia%2FTokyo&forecast_days=1';
                        
                        fetch(apiUrl)
                        .then(response => {
                        return response.json();
                        })
                        .then(data =>{
                        const jsonData = data;
                        const weather = jsonData.current.weather_code;                                        
                        const temperature = jsonData.current.temperature_2m;                                  //現在の気温
                        const probability = Array.from(jsonData.hourly.precipitation_probability);            //時間毎の降水確率  
                        const temperature2 = Array.from(jsonData.hourly.temperature_2m);                      //時間毎の気温 
                        const weather2 = Array.from(jsonData.hourly.weather_code);                            //時間毎のの天気コード
                        const humidity = jsonData.current.relative_humidity_2m;                               //現在の湿度                             
                        const fukai = 0.81*temperature + 0.01*humidity * (0.99*temperature - 14.3) + 46.3;   //不快指数
                        
                        
                        //↓天気コード分岐(現在の天気：ヘッダー用)
                        //晴れ
                        if(weather === 0 || weather === 1){
                          sampleweather.innerHTML = "☀"+temperature + "°C";
                        }
                        //一部くもり
                        else if(weather === 2){
                            sampleweather.innerHTML = "🌤  "+temperature + "°C";
                        }
                        //曇り
                        else if(weather === 3){
                          sampleweather.innerHTML =  "☁  "+temperature + "°C";
                        }
                        //雨
                        else if(weather <= 69){
                          sampleweather.innerHTML =  "☂ "+temperature + "°C";
                        }
                        //雪
                        else if(weather <=  79){
                            sampleweather.innerHTML = "☃ "+temperature + "°C";
                        }
                        else{
                          sampleweather.innerHTML = " ★"+temperature + "°C";
                        }
                        
                        console.log();

                        //↓不快指数分岐（ヘッダー用）
                        //寒い 画像：とても寒い
                        if(fukai <= 54){
                        
                            hukaiSisuu.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705675669/%E3%81%82%E3%81%8B%E3%82%93_hkfi0w.png';    
                        }
                        //肌寒い 画像；寒い
                        else if(fukai >= 55 && fukai <= 65 ){
                            hukaiSisuu.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705675669/%E3%81%95%E3%82%80%E3%81%84_jbbyyb.png';
                        }
                        //快い 画像：快適
                        else if(fukai > 65 && fukai <= 75 ){
                            hukaiSisuu.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705675669/%E3%81%8B%E3%81%84%E3%81%A6%E3%81%8D_o2qa7h.png';
                        }
                        //暑い 画像：やや暑い
                        else if(fukai > 75 && fukai <= 85 ){
                            hukaiSisuu.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705675669/%E3%81%82%E3%81%A4%E3%81%84_rkd08t.png';
                        }
                        //暑くてたまらない 画像：とても暑い
                        else if(fukai >= 86){
                            hukaiSisuu.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705675669/%E3%81%82%E3%81%A4%E3%81%99%E3%81%8E_ltpfdk.png';
                        }
                        
                    //↓朝・昼・夜の天気の画像を表示
                        //朝の天気
                        //快晴
                        if(weather2[7] === 0 ){
                          morning_OTENKI.src =   'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867042/%E6%99%B4%E3%82%8C_vhx0sw.png';                
                        }
                        //晴れだけど雲がでてる
                        else if(weather2[7] === 1){
                            morning_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867044/kumorinotihare_f29z7h.png';
                        }
                        //一部曇り
                        else if(weather2[7] === 2){
                            morning_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867042/%E6%99%B4%E3%82%8C%E3%81%AE%E3%81%A1%E3%81%8F%E3%82%82%E3%82%8A_e45q4m.png';
                        }            
                        //曇り
                        else if( weather2[7] === 3){
                            morning_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867043/%E6%9B%87%E3%82%8A_wiwzvs.png';
                        }
                         //霧（曇りアイコン使用）
                         else if (weather2[7] <= 49){
                            morning_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867043/%E6%9B%87%E3%82%8A_wiwzvs.png';
                        }

                        //雨
                        else if(weather2[7] <= 69  ){
                            morning_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867041/%E9%9B%A8_tmewee.png';
                        }
                        //雪
                        else if (weather2[7] <= 79){
                            morning_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705024355/%E9%9B%AA_mbhqfu.png';
                        }
                        //にわか雨(晴れのち雨アイコン使用)
                        else if(weather2[7] <= 84){
                            morning_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705024355/%E6%99%B4%E3%82%8C_%E9%9B%A8_mqp0gr.png';
                        }
                        //雪（雪のアイコン使用）
                        else if(weather2[7] <= 94){
                            morning_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705024355/%E9%9B%AA_mbhqfu.png';
                        }
                        //雷雨（雨のアイコン使用）
                        else if(weather2[7] <= 99){
                            morning_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867041/%E9%9B%A8_tmewee.png';
                        }                           
                        //曇りのち晴れ
                        else if (weather2[7] === 210){
                            morning_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867044/kumorinotihare_f29z7h.png';
                        }
                        //晴れのち曇り
                        else if (weather2[7] === 211){
                            morning_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867042/%E6%99%B4%E3%82%8C%E3%81%AE%E3%81%A1%E3%81%8F%E3%82%82%E3%82%8A_e45q4m.png';
                        }
                        //曇りのち雨
                        else if (weather2[7] === 212){
                            morning_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705024355/%E6%9B%87%E3%82%8A%E3%81%AE%E3%81%A1%E9%9B%A8_jyzcjp.png';
                        }
                        //雪のち雨
                        else if (weather2[7] === 213){
                            morning_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705024355/%E9%9B%AA_%E9%9B%A8_xtxefh.png';
                        }
                        //晴れのち雨
                        else if (weather2[7] === 411){
                            morning_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705024355/%E6%99%B4%E3%82%8C_%E9%9B%A8_mqp0gr.png';
                        }
                        //雨のち晴れ
                        else if (weather2[7] === 311){
                            morning_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705024354/%E9%9B%A8_%E6%99%B4%E3%82%8C_tosclf.png';
                        }
                        //晴れのち雪
                        else if (weather2[7] === 311){
                            morning_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705024355/%E6%99%B4%E3%82%8C_%E9%9B%AA_isdy6q.png';
                        }
                        //雨のち曇り
                        else if (weather2[7] === 214){
                            morning_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705024354/%E9%9B%A8%E3%81%AE%E3%81%A1%E6%9B%87%E3%82%8A_jjnxbj.png';
                        }
                         //雪のち曇り
                         else if (weather2[7] === 217){
                            morning_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705024354/%E9%9B%AA_%E6%9B%87%E3%82%8A_bbuaqo.png';
                        }

                    //不明
                        else{
                            morning_OTENKI.innerHTML = "★";
                        }
                    
                        //朝7時の気温出力
                        temperature_morning.innerHTML =  "🌡  "+temperature2[7] + "°C";
                        //朝7時の降水確率を出力
                        rainypercent_morning.innerHTML  = "⛆   " + probability[7] + "%";
                    
                    
                        
                        
                        //昼の天気
                        //快晴
                        if(weather2[13] === 0 ){
                          noon_OTENKI.src =   'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867042/%E6%99%B4%E3%82%8C_vhx0sw.png';                
                        }
                        //晴れだけど雲がでてる
                        else if(weather2[13] === 1){
                            noon_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867044/kumorinotihare_f29z7h.png';
                        }
                        //一部曇り
                        else if(weather2[13] === 2){
                            noon_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867042/%E6%99%B4%E3%82%8C%E3%81%AE%E3%81%A1%E3%81%8F%E3%82%82%E3%82%8A_e45q4m.png';
                        }            
                        //曇り
                        else if( weather2[13] === 3){
                            noon_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867043/%E6%9B%87%E3%82%8A_wiwzvs.png';
                        }
                         //霧（曇りアイコン使用）
                         else if (weather2[13] <= 49){
                            noon_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867043/%E6%9B%87%E3%82%8A_wiwzvs.png';
                        }

                        //雨
                        else if(weather2[13] <= 69  ){
                            noon_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867041/%E9%9B%A8_tmewee.png';
                        }
                        //雪
                        else if (weather2[13] <= 79){
                            noon_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705024355/%E9%9B%AA_mbhqfu.png';
                        }
                        //にわか雨(晴れのち雨アイコン使用)
                        else if(weather2[13] <= 84){
                            noon_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705024355/%E6%99%B4%E3%82%8C_%E9%9B%A8_mqp0gr.png';
                        }
                        //雪（雪のアイコン使用）
                        else if(weather2[13] <= 94){
                            noon_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705024355/%E9%9B%AA_mbhqfu.png';
                        }
                        //雷雨（雨のアイコン使用）
                        else if(weather2[13] <= 99){
                            noon_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867041/%E9%9B%A8_tmewee.png';
                        }                           
                        //曇りのち晴れ
                        else if (weather2[13] === 210){
                            noon_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867044/kumorinotihare_f29z7h.png';
                        }
                        //晴れのち曇り
                        else if (weather2[13] === 211){
                            noon_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867042/%E6%99%B4%E3%82%8C%E3%81%AE%E3%81%A1%E3%81%8F%E3%82%82%E3%82%8A_e45q4m.png';
                        }
                        //曇りのち雨
                        else if (weather2[13] === 212){
                            noon_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705024355/%E6%9B%87%E3%82%8A%E3%81%AE%E3%81%A1%E9%9B%A8_jyzcjp.png';
                        }
                        //雪のち雨
                        else if (weather2[13] === 213){
                            noon_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705024355/%E9%9B%AA_%E9%9B%A8_xtxefh.png';
                        }
                        //晴れのち雨
                        else if (weather2[13] === 411){
                            noon_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705024355/%E6%99%B4%E3%82%8C_%E9%9B%A8_mqp0gr.png';
                        }
                        //雨のち晴れ
                        else if (weather2[13] === 311){
                            noon_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705024354/%E9%9B%A8_%E6%99%B4%E3%82%8C_tosclf.png';
                        }
                        //晴れのち雪
                        else if (weather2[13] === 311){
                            noon_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705024355/%E6%99%B4%E3%82%8C_%E9%9B%AA_isdy6q.png';
                        }
                        //雨のち曇り
                        else if (weather2[13] === 214){
                            noon_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705024354/%E9%9B%A8%E3%81%AE%E3%81%A1%E6%9B%87%E3%82%8A_jjnxbj.png';
                        }
                         //雪のち曇り
                         else if (weather2[13] === 217){
                            noon_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705024354/%E9%9B%AA_%E6%9B%87%E3%82%8A_bbuaqo.png';
                        }

                    //不明
                        else{
                            noon_OTENKI.innerHTML = "★";
                        }

                    
                        //昼13時の気温出力
                        temperature_noon.innerHTML =  temperature2[13] + "°C";
                        //昼13時の降水確率を出力
                        rainypercent_noon.innerHTML  =  probability[13] + "%";
                    
                    
                    
                    
                    //夜の天気
                        //快晴
                        if(weather2[19] === 0 ){
                          night_OTENKI.src =   'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867042/%E6%99%B4%E3%82%8C_vhx0sw.png';                
                        }
                        //晴れだけど雲がでてる
                        else if(weather2[19] === 1){
                            night_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867044/kumorinotihare_f29z7h.png';
                        }
                        //一部曇り
                        else if(weather2[19] === 2){
                            night_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867042/%E6%99%B4%E3%82%8C%E3%81%AE%E3%81%A1%E3%81%8F%E3%82%82%E3%82%8A_e45q4m.png';
                        }            
                        //曇り
                        else if( weather2[19] === 3){
                            night_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867043/%E6%9B%87%E3%82%8A_wiwzvs.png';
                        }
                         //霧（曇りアイコン使用）
                         else if (weather2[19] <= 49){
                            night_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867043/%E6%9B%87%E3%82%8A_wiwzvs.png';
                        }

                        //雨
                        else if(weather2[19] <= 69  ){
                            night_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867041/%E9%9B%A8_tmewee.png';
                        }
                        //雪
                        else if (weather2[19] <= 79){
                            night_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705024355/%E9%9B%AA_mbhqfu.png';
                        }
                        //にわか雨(晴れのち雨アイコン使用)
                        else if(weather2[19] <= 84){
                             night_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705024355/%E6%99%B4%E3%82%8C_%E9%9B%A8_mqp0gr.png';
                        }
                        //雪（雪のアイコン使用）
                        else if(weather2[19] <= 94){
                             night_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705024355/%E9%9B%AA_mbhqfu.png';
                        }
                        //雷雨（雨のアイコン使用）
                        else if(weather2[19] <= 99){
                             night_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867041/%E9%9B%A8_tmewee.png';
                        }                           
                        //曇りのち晴れ
                        else if (weather2[19] === 210){
                            night_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867044/kumorinotihare_f29z7h.png';
                        }
                        //晴れのち曇り
                        else if (weather2[19] === 211){
                            night_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867042/%E6%99%B4%E3%82%8C%E3%81%AE%E3%81%A1%E3%81%8F%E3%82%82%E3%82%8A_e45q4m.png';
                        }
                        //曇りのち雨
                        else if (weather2[19] === 212){
                            night_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705024355/%E6%9B%87%E3%82%8A%E3%81%AE%E3%81%A1%E9%9B%A8_jyzcjp.png';
                        }
                        //雪のち雨
                        else if (weather2[19] === 213){
                            night_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705024355/%E9%9B%AA_%E9%9B%A8_xtxefh.png';
                        }
                        //晴れのち雨
                        else if (weather2[19] === 411){
                            night_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705024355/%E6%99%B4%E3%82%8C_%E9%9B%A8_mqp0gr.png';
                        }
                        //雨のち晴れ
                        else if (weather2[19] === 311){
                            night_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705024354/%E9%9B%A8_%E6%99%B4%E3%82%8C_tosclf.png';
                        }
                        //晴れのち雪
                        else if (weather2[19] === 311){
                            night_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705024355/%E6%99%B4%E3%82%8C_%E9%9B%AA_isdy6q.png';
                        }
                        //雨のち曇り
                        else if (weather2[19] === 214){
                            night_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705024354/%E9%9B%A8%E3%81%AE%E3%81%A1%E6%9B%87%E3%82%8A_jjnxbj.png';
                        }
                         //雪のち曇り
                         else if (weather2[19] === 217){
                            night_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705024354/%E9%9B%AA_%E6%9B%87%E3%82%8A_bbuaqo.png';
                        }

                    //不明
                        else{
                            night_OTENKI.innerHTML = "★";
                        }
                    
                        //夜19時の気温出力
                        temperature_night.innerHTML =  temperature2[19] + "°C";
                        //夜19時の降水確率を出力
                        rainypercent_night.innerHTML  =  probability[19] + "%"
                            
                            console.log(weather2);
                        
                        })
                        
                        
                        .catch(error => {
                        console.error('データ取得に失敗しました',error)
                        });
                        </script>                        
              
  		

                        </div>

                        <!--戻るボタン-->
                        <div class="test01"　>
                            <button onclick="">
                                <a href="{{ route('goout') }}">
                                 <img class="mr-2 return_btn" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1704939146/bag1_giuxki.png" width=150px height=150px;/>
                                 <p style="margin: 0% 0% 5%;">お出かけモード→</p>
                                 </a>
                            </button>
                        </div>
                        
                        
                        <!--とりあえずお試しで入れてるのであとでけしてね-->
                       {{-- <div>
                            @foreach($categories as $category )
                            @if($category->genre == 0)<!--ジャンル分けです,0=トップス,1=ボトムス,2=コートワンピース-->
                            <img src="{{ $category->image_true }}" style="max-width: 10%">
                            @endif
                            @endforeach
                        </div>
                        
                        <div>
                            @foreach($categories as $category )
                            @if($category->genre == 1)<!--ジャンル分けです,0=トップス,1=ボトムス,2=コートワンピース-->
                            <img src="{{ $category->image_true }}" style="max-width: 10%">
                            @endif
                            @endforeach
                        </div>--}}
                        
                        
                        <!---選んだ服のアイコン-->

            			<font size="6">
            			    
                            <body>
                                 <!--キャミ-->
                                            @if($categories->contains('id','1'))
                                            @php
                                                $icon1 = 1;
                                            @endphp
                                            @else
                                            @php
                                                $icon1 = 0;
                                            @endphp
                                            @endif
                                            
                                             <!--ノースリーブ-->
                                            @if($categories->contains('id','2'))
                                            @php
                                                $icon2 = 1;
                                            @endphp
                                            @else
                                            @php
                                                $icon2 = 0;
                                            @endphp
                                            @endif
                                            
                                             <!--半袖-->
                                            @if($categories->contains('id','3'))
                                            @php
                                                $icon3 = 1;
                                            @endphp
                                            @else
                                            @php
                                                $icon3 = 0;
                                            @endphp
                                            @endif
                                            
                                             <!--長袖-->
                                            @if($categories->contains('id','4'))
                                            @php
                                                $icon4 = 1;
                                            @endphp
                                            @else
                                            @php
                                                $icon4 = 0;
                                            @endphp
                                            @endif
                                            
                                             <!--シャツ-->
                                            @if($categories->contains('id','5'))
                                            @php
                                                $icon5 = 1;
                                            @endphp
                                            @else
                                            @php
                                                $icon5 = 0;
                                            @endphp
                                            @endif
                                            
                                             <!--カーディガン-->
                                            @if($categories->contains('id','6'))
                                            @php
                                                $icon6 = 1;
                                            @endphp
                                            @else
                                            @php
                                                $icon6 = 0;
                                            @endphp
                                            @endif
                                            
                                             <!--ジャケット-->
                                            @if($categories->contains('id','7'))
                                            @php
                                                $icon7 = 1;
                                            @endphp
                                            @else
                                            @php
                                                $icon7 = 0;
                                            @endphp
                                            @endif
                                            
                                             <!--タートルネック-->
                                            @if($categories->contains('id','8'))
                                            @php
                                                $icon8 = 1;
                                            @endphp
                                            @else
                                            @php
                                                $icon8 = 0;
                                            @endphp
                                            @endif
                                            
                                             <!--ニット-->
                                            @if($categories->contains('id','9'))
                                            @php
                                                $icon9 = 1;
                                            @endphp
                                            @else
                                            @php
                                                $icon9 = 0;
                                            @endphp
                                            @endif
                                            
                                             <!--パーカー-->
                                            @if($categories->contains('id','10'))
                                            @php
                                                $icon10 = 1;
                                            @endphp
                                            @else
                                            @php
                                                $icon10 = 0;
                                            @endphp
                                            @endif
                                            
                                             <!--コート/ダウン-->
                                            @if($categories->contains('id','11'))
                                            @php
                                                $icon11 = 1;
                                            @endphp
                                            @else
                                            @php
                                                $icon11 = 0;
                                            @endphp
                                            @endif
                                            
                                             <!--半ズボン-->
                                            @if($categories->contains('id','12'))
                                            @php
                                                $icon12 = 1;
                                            @endphp
                                            @else
                                            @php
                                                $icon12 = 0;
                                            @endphp
                                            @endif
                                            
                                             <!--長ズボン-->
                                            @if($categories->contains('id','13'))
                                            @php
                                                $icon13 = 1;
                                            @endphp
                                            @else
                                            @php
                                                $icon13 = 0;
                                            @endphp
                                            @endif
                                            
                                             <!--スカート-->
                                            @if($categories->contains('id','14'))
                                            @php
                                                $icon14 = 1;
                                            @endphp
                                            @else
                                            @php
                                                $icon14 = 0;
                                            @endphp
                                            @endif
                                            
                                             <!--ワンピース-->
                                            @if($categories->contains('id','15'))
                                            @php
                                                $icon15 = 1;
                                            @endphp
                                            @else
                                            @php
                                                $icon15 = 0;
                                            @endphp
                                            @endif
                                <table align="center" border="1">
            				        <tr>
                                        <td>　　　　</td>
            				            <td>　トップス</td>
                                        <td>　　　　</td>
            				　          <td>　ボトムス</td>
            				            <td>　　　　</td>
                                    </tr>			
                                    <tr>
            				　          <td>　　　</td>
            				            <td class="clothes_box1"  valign="baseline">
                                           
            				                <div>
            				                    <img id="top1" name="top1" class="fashon_icon">
                                                <img id="top2" name="top2" class="fashon_icon">
                                                <img id="top3" name="top3"class="fashon_icon" >
                                                <img id="top4" name="top4"class="fashon_icon" >
            				                </div>
            				                {{--<div>
                                                @foreach($categories as $category )
                                                @if($category->genre == 0)<!--ジャンル分けです,0=トップス,1=ボトムス,2=コートワンピース-->
                                                <img src="{{ $category->image_true }}" class="fashon_icon">
                                                @endif
                                                @endforeach
                                            </div>--}}
                                        </td>
            				            <td>　　　　</td>
                                        <td class="clothes_box1" valign="baseline">
                                            <div>
                                                <img id="botom1" name="botom1"class="fashon_icon" >
                                                <img id="botom2" name="botom2"class="fashon_icon" >
                                            </div>
                                            {{--<div>
                                                @foreach($categories as $category )
                                                @if($category->genre == 1)<!--ジャンル分けです,0=トップス,1=ボトムス,2=コートワンピース-->
                                                <img src="{{ $category->image_true }}" class="fashon_icon">
                                                @endif
                                                @endforeach
                                            </div>--}}
                                        </td>
            				            <td>　　　</td>
                                    </tr>
            			        </table>
            
            			       <table align="center">
                    				<tr>
                                        <td>　　　　</td>
                    				    <td>　アウター・ワンピース</td>
                                        <td>　　　　</td>
                    				　  <td>　コーディネートモード→</td>
                    				    <td>　　　　</td>
                                    </tr>
                                    <tr>
                    				    <td>　　　</td>
                    				    <td class="clothes_box1" valign="baseline">
                    				        {{--<div>
                                                @foreach($categories as $category )
                                                @if($category->genre == 2)<!--ジャンル分けです,0=トップス,1=ボトムス,2=コートワンピース-->
                                                <img src="{{ $category->image_true }}" class="fashon_icon">
                                                @endif
                                                @endforeach
                                            </div>--}}
                                            <div>
                                                <img id="out1" name="out1"class="fashon_icon" >
                                                <img id="out2" name="out2"class="fashon_icon" >
                                            </div>
                    				    </td>
                    				    <td>　　　</td>
                                        <td valign="top" width=500px height=450px>
                                            <a href="{{ route('coordination') }}">
                                                <button type="button">
                                                    <img src="https://res.cloudinary.com/dg5imilid/image/upload/v1705730150/%28%5E%5E%29/%E3%82%AF%E3%83%AD%E3%83%BC%E3%82%BC%E3%83%83%E3%83%88_%E6%9C%8D%E7%84%A1%E3%81%97_bvgsln_fh0sot.png"/>
                                                </button>
                                            </a>
                                        </td>
                    				    <td>　　　</td>
                                    </tr>
                    			</table>
                            </body>
            			</font>
            			
            			
            			
            			
            			
   
    
                        <!--かご-->
                        <center>
                            <div>
                                <img src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702010268/%E8%B2%B7%E3%81%84%E7%89%A9%E3%81%8B%E3%81%94_xwtyed.png"   />
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
                        <div></div>
                    
                    
                        <!--ワンポイントアドバイス-->
                        <table align="center" class="sample_test">
                            <tr>
                                <td>
                                    <p class="kaiwa-text ">
                                                <font size="7" >
                                                    　ワンポイントアドバイス
                                                </font>
                                            </p> 
                                    <div class="kaiwa-text-left">
                                        <center  class="advice-text">
                                            <div class="advice-temperature">
                                                <div>
                                                    　　最高気温
                                                </div>
                                                <p id="advice" class="kaiwa-text text-red-500">
                                                <div>
                                                    　最低気温
                                                </div>
                                                <p id="advicetwo" class="kaiwa-text text-blue-600">
                                            </div>
                                                <nobr>
                                                    <font size="6">
                                                        <p id="advicesamuatu" class="kaiwa-text"　 style=font-family: "源瑛ラテン">
                                                            <nobr>
                                                                <font size="6">
                                                                    <p id = "recommend_items" class = "kaiwa-text">
                                                                        <nobr>
                                                                            <font size="6">
                                                                            </font>
                                                                        </nobr>
                                                                    </p>
                                                                </font>
                                                            </nobr>
                                                        </p>
                                                    </font>
                                                </nobr>
                                            </p>
                                        </center>
                                    </div>
                                </td>
                                <td>
                                    <div class="kaiwa">
                                        <a
                                            x-data=""
                                            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                                        >
                                            <img src="https://res.cloudinary.com/dlfimibcq/image/upload/v1700613658/1696480649456_rvyzkj.png">
                                        </a>
                                        <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                                            <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                                                @csrf
                                                @method('delete')
                                                    
                                                    
                                                <h2 class="text-5xl font-medium text-gray-900 mb-6">
                                                    {{ __('悲壮犬とは？') }}
                                                </h2>
                                                <div class="flex">
                                                    <img class="w-50" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1700613658/1696480649456_rvyzkj.png">
                                                    <div class="text-xl font-medium text-gray-900 ml-10 mt-6"><p>名前：悲壮犬</p>
                                                                                               <p>英語表記：Hiso Ken</p>
                                                                                                   <p>原産：日本</p><p>サイズ：小型犬</p>
                                                                                                   </div>
                                                                                                   </div>
                                                                                                 <div class="text-lg font-medium text-gray-900">
                                                                                                <p> ＜悲壮犬の性格＞</p>
                                                                                                 悲壮犬は他人や他犬に対して懐疑心が強く、信頼関係を築くのが苦手です。
                                                                                                
                                                                                                自立心がなく順応性も低いため、家族に対しての依存心が強い傾向があります。
                                                                                                最初の頃はしつけに苦労します。
                                                                                                
                                                                                                しかし、飼い主に愛されている実感を持つと徐々にしつけを聞くようになります
                                                                                                </div>
                                                            </div>
                                                            <div class="mt-6 flex justify-end">
                                                        <x-secondary-button x-on:click="$dispatch('close')">
                                                            {{ __('戻る') }}
                                                        </x-secondary-button>
                                                    </div>
                                                    </div>
                                                    
                                                </form>
                                            </x-modal>
                                     </div>
                                 </td>
                            </tr>
                        </table>
                        
                     </div>
                </center>
            </div>

<svg class="fill-cyan-500 hover:fill-cyan-700"　width="0px" height="0px">
  <!-- ... -->
</svg>
        </body>
    <script>
        //ワンポイント用コード
            /*
        UR:①'https://api.open-meteo.com/v1/forecast?latitude=52.52&longitude=13.41&current=temperature_2m,relative_humidity_2m,weather_code&hourly=temperature_2m,precipitation_probability,weather_code&forecast_days=1';
        URL②(0109.json):https://api.open-meteo.com/v1/forecast?latitude=35.6785&longitude=139.6823&current=temperature_2m,relative_humidity_2m,weather_code&hourly=temperature_2m,relative_humidity_2m,precipitation_probability,weather_code,uv_index&timezone=Asia%2FTokyo&forecast_days=1 
       現在の気温
       現在の湿度
       現在の天気コード
       時間毎の湿度
       時間毎の気温
       時間毎の天気コード
       時間毎の降水確率
       UV指数
       */
    
        /*兵庫県			 
        let lat2  = 35.6785;
        let long2 = 139.6823;*/
        //　北海道 旭川latitude":43.75,"longitude":142.375
        let lat2  = {{$finelyarea -> latitude}};
        let long2 = {{$finelyarea -> longitude}};
        
        
         //open-meteoからURLを取得
         let apiUrl2 = 'https://api.open-meteo.com/v1/forecast?latitude='+lat2+'&longitude='+long2+'&current=temperature_2m,relative_humidity_2m,weather_code&hourly=temperature_2m,relative_humidity_2m,precipitation_probability,weather_code,uv_index&timezone=Asia%2FTokyo&forecast_days=1';
         
         const temMax = function (a, b) {return Math.max(a, b);} //最高気温
         const temMin = function (a, b) {return Math.min(a, b);} //最低気温
         const uvMax  = function (a, b) {return Math.max(a, b);} //一番紫外線が強い
         //const snowMax = function (a, b) {return Math.max(a. b);} //降雪量
         const rainMax = function (a, b) {return Math.max(a,b);} //降水確率
      
         
           //jsonデータを配列として取得
                 fetch(apiUrl2)
                 .then(response => {
                     return  response.json();
                 })
                 .then(data2 =>{
    
                     const jsonData = data2;
                     const probability = Array.from(jsonData.hourly.precipitation_probability);                     //降水確率
                     const temperature1 = jsonData.current.temperature_2m;                                         //現在の気温
                     const temperature2 = Array.from(jsonData.hourly.temperature_2m);                               //時間毎の気温                        
                     const humidity2 = jsonData.current.relative_humidity_2m;                                      //現在の湿度  
                     const weather_code =  Array.from(jsonData.hourly.weather_code);    
                     const fukai2 = 0.81*temperature1 + 0.01*humidity2 * (0.99*temperature1 - 14.3) + 46.3;       //不快指数
                     const uv_index1 = Array.from(jsonData.hourly.uv_index);
                    
                     let tmax = temperature2.reduce(temMax);    //  最高気温
                     let tmin = temperature2.reduce(temMin);    //　最低気温
                     let uvmax  = uv_index1.reduce(uvMax);
                     let rainmax = probability.reduce(rainMax);
                     let samatu = {{ Auth::user()->temperature }}; // 1:寒がりさん0:暑がりさん

                    let result = weather_code.some(function(value){
                        return value == 71  || value == 75;
                    });    


                    //確認用
                    

                     console.log(samatu);
                     console.log(rainmax);
                        
                    //3行目
                    if(uvmax => 3){
                        recommend_items.innerHTML = "今日は日差しが強いワン!日焼け対策を<br>しっかりしよう。日焼け止めや日傘などを使おう。";
                    }
                    else if(uvmax => 6){
                        recommend_items.innerHTML = "今日は日差しがすごく強いワン!<br>できるだけ屋外での活動は控えよう。";
                    }
                     if(result == true){
                        recommend_items.innerHTML = "今日は雪だワン!!滑らないようにしてね。<br>傘やブーツ、マフラー、手袋などを使おう。";
                    }
                    else if(rainmax <= 20){
                        recommend_items.innerHTML = "雨の心配は無さそうだワン！洗濯物を乾かすのも👌";
                    }
                    else if(rainmax <= 29){
                        recommend_items.innerHTML = "折り畳み傘が助けてくれるかもだワン！ ";
                    }
                    else if(rainmax => 30){
                        recommend_items.innerHTML = "今日は雨が降るかもしれないワン!<br>折り畳み傘が便利だよ。 ";
                    }
                    else if(rainmax => 70){
                        recommend_items.innerHTML = "今日は雨降りだワン!雨具をしっかり用意しよう。<br>傘やレインブーツを使おう。";
                    }
                   
                       
                            //出力
                            //if文はelseなしにする　→　選択されていなければ共通の文とグッズのみ出力0110
                            //不快指数分岐

                         //寒い
                         if(fukai2 <= 54){
                            advice.innerHTML = tmax+"℃　";
                            advicetwo.innerHTML = tmin+"℃　　　　";
                            //1:寒がり
                            if(samatu == 1){
                            advicesamuatu.innerHTML="防寒具があるといいね。カイロもgood!<br>裏起毛の服がおすすめだワン!";

                           }
                           //0:暑がり
                           else{
                            advicesamuatu.innerHTML="防寒具があるといいね。カイロもgood!<br>今日は暑がりさんも寒さに注意だワン! ";
                           }
                         }
                         //肌寒い
                         else if(fukai2 >= 55 && fukai2 <= 65 ){
                            advice.innerHTML = tmax+"℃　";
                            advicetwo.innerHTML = tmin+"℃　　　　";
                             if(samatu == 1){
                                advicesamuatu.innerHTML="アウターやインナーを上手に活用するワン!<br>厚手の靴下やブーツも選んでみよう。";
                             }
                             else{
                                advicesamuatu.innerHTML="アウターやインナーを上手に活用するワン!<br>暖房に対応できるアウターを選ぼう。 ";
                             }
                         }
                         //快い
                         else if(fukai2 >= 65 && fukai2 <= 75 ){
                            advice.innerHTML = tmax+"℃　";
                            advicetwo.innerHTML = tmin+"℃　　　　";
                            advicesamuatu.innerHTML= "今日は過ごしやすいワンダフルな一日‼<br>好きなオシャレが楽しめそうだワン。";

 
                           }
                         //暑い
                         else if(fukai2 >= 75 && fukai2 <= 85 ){
                            advice.innerHTML = tmax+"℃　";
                            advicetwo.innerHTML = tmin+"℃　　　　";
                             if(samatu == 1){
                                advicesamuatu.innerHTML = "薄手の素材がおすすめだワン。<br>冷房に注意してね。七分丈もよいかも？ ";
                             }
                             else{
                                advicesamuatu.innerHTML =" 薄手の素材がおすすめだワン。<br>通気性の良い半袖や半ズボンがおすすめだよ。 ";
                             }
                           }
                         //暑くてたまらない
                         else if(fukai2 >= 86){
                            advice.innerHTML = tmax+"℃　";
                            advicetwo.innerHTML = tmin+"℃　　　　";
                             if(samatu == 1){
                                advicesamuatu.innerHTML="熱中症に気を付けて!!接触冷感や吸水速乾の素材が<br>おすすめ。冷房に注意するワン!　 ";
                             }
                             else{
                                advicesamuatu.innerHTML="熱中症に気を付けて!!接触冷感や吸水速乾の素材が<br>おすすめ。汗拭きシートで快適だワン。 ";
                             }
                            
                         


    }})
                            

    
           //json形式で情報取得失敗した時
           .catch(error => {
               console.error('データ取得に失敗しました',error)
           });
         
</script>



 <script>

     
    let lat  = {{$finelyarea -> latitude}};
    let long = {{$finelyarea -> longitude}};  
    //open-meteoからURLを取得
    //const apiUrl = ' https://api.open-meteo.com/v1/forecast?latitude=52.52&longitude=13.41&current=temperature_2m,relative_humidity_2m,weather_code&timezone=Asia%2FTokyo&forecast_days=1';
    const apiUrl3 = 'https://api.open-meteo.com/v1/forecast?latitude='+lat+'&longitude='+long+'&current=temperature_2m,relative_humidity_2m,weather_code&hourly=temperature_2m,precipitation_probability,weather_code&timezone=Asia%2FTokyo&forecast_days=1';      
          
          //fetch処理でurlからjson形式で情報を取得
          fetch(apiUrl3)
          .then(response => {
              return response.json();
          })
          .then(data =>{
              const jsonData = data;                              //
              const humidity = jsonData.current.relative_humidity_2m;      //現在の湿度を取得
              const temperature = jsonData.current.temperature_2m;//現在の気温を取得
               let fukai = 0.81*temperature + 0.01*humidity * (0.99*temperature - 14.3) + 46.3;
 

                var ky = {{ $icon1 }};
                   var no = {{ $icon2 }};
                   var ha = {{ $icon3 }};
                   var na = {{ $icon4 }};
                   var sy = {{ $icon5 }};
                   var ka = {{ $icon6 }};
                   var ja = {{ $icon7 }};
                   var ta = {{ $icon8 }};
                   var ni = {{ $icon9 }};
                   var pa = {{ $icon10 }};
                   var da = {{ $icon11 }};
                   var hz = {{ $icon12 }};
                   var nz = {{ $icon13 }};
                   var su = {{ $icon14 }};
                   var wa = {{ $icon15 }};
                   function _delete_element( id_name ){
	var dom_obj = document.getElementById(id_name);
	var dom_obj_parent = dom_obj.parentNode;
	dom_obj_parent.removeChild(dom_obj);
}
     
                  //不快指数分岐
                       //～55 	　寒い
                        if(fukai <= 54){
                       if(na == 0){
        document.getElementById("top1").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850792/13_g_hdppf0.png";
    }
    else if(na == 1){
        document.getElementById("top1").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850792/13_w_hxmyty.png";
    }
    document.getElementById("top1").alt="top1";
    
    if(sy ==0){
        document.getElementById("top2").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850800/4_g_xoy3op.png";
    }
    else if(sy == 1){
        document.getElementById("top2").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850801/4_w_xqezhd.png";
    }
   
    document.getElementById("top2").alt="top2";

    if(ta ==0){
        document.getElementById("top3").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850797/1_g_gjpyfc.png";
    }
    else if(ta == 1){
        document.getElementById("top3").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850798/1_w_lcj0em.png";
    }
if(pa ==0){
        document.getElementById("top4").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850792/14_g_k9dwem.png";
    }
    else if(pa == 1){
        document.getElementById("top4").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850792/14_w_imlxid.png";
    }    

if(ni ==0){
        document.getElementById("out1").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850802/10_g_ipaiuo.png";
    }
    else if(sy == 1){
        document.getElementById("out1").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850802/10_w_ivzohz.png";
    }    
    
    document.getElementById("out1").alt="out1";


    if(da ==0){
        document.getElementById("out2").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850792/15_g_isdqhd.png";
    }
    else if(da == 1){
        document.getElementById("out2").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850792/15_w_res7s4.png";
    }    
    
    document.getElementById("out2").alt="out2";
    if(nz ==0){
         document.getElementById("botom1").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850805/12_g_nt4qz0.png";
    }
    else if(nz == 1){
        document.getElementById("botom1").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850805/12_w_gbczg1.png";
    } 
    document.getElementById("botom1").alt="botom1";

document.getElementById("botom2").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705851767/MicrosoftTeams-image_3_okgg2y.png";

document.getElementById("botom2").alt="botom2";
    
    
}


 //54～65　　肌寒い 
 else if(fukai >= 55 && fukai <= 65 ){
  if(na == 0){
    document.getElementById("top1").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850792/13_g_hdppf0.png";
}
else if(na == 1){
    document.getElementById("top1").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850792/13_w_hxmyty.png";
}
    
document.getElementById("top1").alt="top1";

if(sy ==0){
    document.getElementById("top2").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850800/4_g_xoy3op.png";
}
else if(sy == 1){
    document.getElementById("top2").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850801/4_w_xqezhd.png";
}

document.getElementById("top2").alt="top2";


if(pa ==0){
    document.getElementById("top3").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850792/14_g_k9dwem.png";
}
else if(pa == 1){
    document.getElementById("top3").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850792/14_w_imlxid.png";
} 
                           
document.getElementById("top3").alt="top3";
    
if(ka ==0){
    document.getElementById("out1").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850796/8_g_dxphgc.png";
}
else if(ka == 1){
    document.getElementById("out1").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850796/8_w_fodsba.png";
}

document.getElementById("out1").alt="out1";
    
if(ja ==0){
    document.getElementById("out2").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850799/2_g_nj4rd1.png";
}
else if(ja == 1){
    document.getElementById("out2").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850799/2_w_zsfafv.png";
}

document.getElementById("out2").alt="out2";
    

    
if(nz ==0){
    document.getElementById("botom1").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850805/12_g_nt4qz0.png";
}
else if(nz == 1){
    document.getElementById("botom1").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850805/12_w_gbczg1.png";
}

document.getElementById("botom1").alt="botom1";


document.getElementById("top4").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705851767/MicrosoftTeams-image_3_okgg2y.png";

document.getElementById("top4").alt="top4";

document.getElementById("botom2").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705851767/MicrosoftTeams-image_3_okgg2y.png";

document.getElementById("botom2").alt="botom2";

                        }

    //64～75　　快い 
    else if(fukai >= 65 && fukai <= 75 ){

                            if(na == 0){
    document.getElementById("top1").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850792/13_g_hdppf0.png";
}
else if(na == 1){
    document.getElementById("top1").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850792/13_w_hxmyty.png";
}

document.getElementById("top1").alt="top1";
    
if(sy ==0){
    document.getElementById("top2").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850800/4_g_xoy3op.png";
}
else if(sy == 1){
    document.getElementById("top2").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850801/4_w_xqezhd.png";
}

document.getElementById("top2").alt="top2";
    
if(ha ==0){
    document.getElementById("top3").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850802/5_g_ll1lji.png";
}
else if(ha == 1){
    document.getElementById("top3").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850793/5_w_k4kmcf.png";
}

document.getElementById("top3").alt="top3";
    
if(nz ==0){
    document.getElementById("botom1").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850805/12_g_nt4qz0.png";
}
else if(nz == 1){
    document.getElementById("botom1").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850805/12_w_gbczg1.png";
}

document.getElementById("botom1").alt="botom1";
    
if(su ==0){
    document.getElementById("botom2").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850793/6_g_biwcu6.png";
}
else if(su == 1){
    document.getElementById("botom2").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850793/6_w_v0lmk7.png";
}

document.getElementById("botom2").alt="botom2";
    
if(wa ==0){
    document.getElementById("out1").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850797/9_g_iyv0nk.png";
}
else if(wa == 1){
    document.getElementById("out1").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850797/9_w_uloywe.png";
}

document.getElementById("out1").alt="out1";


document.getElementById("top4").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705851767/MicrosoftTeams-image_3_okgg2y.png";

document.getElementById("top4").alt="top4";

document.getElementById("out2").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705851767/MicrosoftTeams-image_3_okgg2y.png";

document.getElementById("out2").alt="out2";

                        }

//70～85　　暑い 
else if(fukai >= 75 && fukai <= 85 ){

     
                         
                         if(ha ==0){
    document.getElementById("top1").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850802/5_g_ll1lji.png";
}
else if(ha == 1){
    document.getElementById("top1").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850793/5_w_k4kmcf.png";
}

document.getElementById("top1").alt="top1";
 
if(hz ==0){
    document.getElementById("botom1").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850803/11_g_dysagq.png";
}
else if(hz == 1){
    document.getElementById("botom1").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850803/11_w_ouiu8j.png";
}
document.getElementById("botom1").alt="botom1";
 
if(su ==0){
    document.getElementById("botom2").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850793/6_g_biwcu6.png";
}
else if(su == 1){
    document.getElementById("botom2").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850793/6_w_v0lmk7.png";
}

document.getElementById("botom2").alt="botom2";
 
if(wa ==0){
    document.getElementById("out1").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850797/9_g_iyv0nk.png";
}
else if(wa == 1){
    document.getElementById("out1").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850797/9_w_uloywe.png";
}

document.getElementById("out1").alt="out1";


document.getElementById("top2").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705851767/MicrosoftTeams-image_3_okgg2y.png";

document.getElementById("top2").alt="top2";


document.getElementById("top3").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705851767/MicrosoftTeams-image_3_okgg2y.png";

document.getElementById("top3").alt="top3";


document.getElementById("top4").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705851767/MicrosoftTeams-image_3_okgg2y.png";

document.getElementById("top4").alt="top4";

document.getElementById("out2").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705851767/MicrosoftTeams-image_3_okgg2y.png";

document.getElementById("out2").alt="out2";
                        }


//84～　　　暑くてたまらない 
else if(fukai >= 86){

                        
                        if(ky ==0){
    document.getElementById("top1").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850799/3_g_g7e8di.png";
}
else if(ky == 1){
    document.getElementById("top1").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850800/3_w_jwwoq6.png";
}

document.getElementById("top1").alt="top1";

if(no ==0){
    document.getElementById("top2").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850793/7_g_un1ngt.png";
}
else if(no == 1){
    document.getElementById("top2").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850793/7_w_alpwni.png";
}

document.getElementById("top2").alt="top2";

if(ha ==0){
    document.getElementById("top3").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850802/5_g_ll1lji.png";
}
else if(ha == 1){
    document.getElementById("top3").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850793/5_w_k4kmcf.png";
}

document.getElementById("top3").alt="top3";

if(hz ==0){
    document.getElementById("botom1").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850803/11_g_dysagq.png";
}
else if(hz == 1){
    document.getElementById("botom1").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850803/11_w_ouiu8j.png";
}

document.getElementById("botom1").alt="botom1";

if(su ==0){
    document.getElementById("botom2").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850793/6_g_biwcu6.png";
}
else if(su == 1){
    document.getElementById("botom2").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850793/6_w_v0lmk7.png";
}

document.getElementById("botom2").alt="botom2";

if(wa ==0){
    document.getElementById("out1").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850797/9_g_iyv0nk.png";
}
else if(wa == 1){
    document.getElementById("out1").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705850797/9_w_uloywe.png";
}

document.getElementById("out1").alt="out1";


document.getElementById("top4").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705851767/MicrosoftTeams-image_3_okgg2y.png";

document.getElementById("top4").alt="top4";


document.getElementById("out2").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705851767/MicrosoftTeams-image_3_okgg2y.png";

document.getElementById("out2").alt="out2";

                    }


                })
            //json形式で情報取得失敗した時
            .catch(error => {
                console.error('データ取得に失敗しました',error)
            });







</script>
    

    </html> 