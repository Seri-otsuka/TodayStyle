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
                            
                            <!-- 現在の天気・温度表示用 表示分けないなら一個でいいかも
                            <p id="sampleweather" style="position: relative;font-family: 'Hattori Hanzo', serif;font-size: 500%;">
                             
                            </p> -->
                            <p id="sampleweather" style="position: relative;font-family: ravie,fantasy, serif;font-size: 450%;">
                             
                            </p>
                            
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
                            
                        </div>
                        
                        <!---天気表示（黒おび）-->
                        <div class="weather_box wrapper weather-contents weather-social-text">
                            <!---->                            
                            <div style="margin: 0% -28% 0%;" class="maru_box">
                                {{ $area->name }}・{{ $finelyarea->name }}
                                <!--↓↓サイズ調整お願いします-->
                                <img src="{{ $area->path}}" style="max-width: 20%">
                            
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
				            <div>
                            	 夜
                                <img  id="night_OTENKI" style="width: 120px;"/>
                            	<!-- 湿度 -->
                            	<p id="temperature_night" style="margin: -2% 0% -10%;">
                            	   
                            	</p>
                            	<p id="rainypercent_night" style="margin: -14% 0% -10%;">
                            	    
                            	</p>
				            </div>
			    	        <!--<script>
					            var click = 0;
				                var OTENKI = [
                                    /* 曇りのち晴れ */
                                    'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867044/kumorinotihare_f29z7h.png',
                                    /* 曇り */
                                    'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867043/%E6%9B%87%E3%82%8A_wiwzvs.png',
                                    /* 晴れのち曇り */
                                    'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867042/%E6%99%B4%E3%82%8C%E3%81%AE%E3%81%A1%E3%81%8F%E3%82%82%E3%82%8A_e45q4m.png',
                                    /* 晴れ */
                                    'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867042/%E6%99%B4%E3%82%8C_vhx0sw.png',
                                    /* 雨 */
                                    'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867041/%E9%9B%A8_tmewee.png'
                                ];
                                document.getElementById('click_OTENKI').onclick = function(){
                					click++;
                					this.src = OTENKI[click%OTENKI.length];
                				}
			                </script>-->
			                
			                
                            <!---不快指数-->
                            <div id="hukaiSisuu" class="weather-social">
                                <p>
                                </p>
                            </div>
            			    <!---<script>
                				var click = 0;
                				var KankyouSisuu = [
                                    /* 最高 */
                                    'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867812/%E6%9C%80%E9%AB%98b_h92oe9.png',
                                    /* 結構いい */
                                    'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867812/%E7%B5%90%E6%A7%8B%E3%81%84%E3%81%84_h8tsks.png',
                                    /* あかん */
                                    'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867812/%E3%81%82%E3%81%8B%E3%82%93_v4stef.png',
                                    /* 普通 */
                                    'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867812/%E6%99%AE%E9%80%9A_ekdgqe.png',
                                    /* 良くない */
                                    'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867812/%E8%89%AF%E3%81%8F%E3%81%AA%E3%81%84_ivv2mz.png'
                                ];
				                document.getElementById('click_KankyouSisuu').onclick = function(){
                					click++;
                					this.src = KankyouSisuu[click%KankyouSisuu.length];
                				}
                			</script>--->
                        <script>
                                //43.76 142.37 (北海道旭川市)
                            //let lat = 43.76;
                            //let long = 142.37;

                            //経度・緯度をもらう
                            let lat  = {{$finelyarea -> latitude}};
                            let long = {{$finelyarea -> longitude}};
                            
                            /*
                            URL:'https://api.open-meteo.com/v1/forecast?latitude=52.52&longitude=13.41&current=temperature_2m,relative_humidity_2m,weather_code&hourly=temperature_2m,precipitation_probability,weather_code&forecast_days=1';
                            
                            現在の気温
                            現在の天気コード
                            現在の湿度
                            時間毎の天気コード
                            時間毎の降水確率
                            時間毎の気温
                            
                            */
                            const apiUrl = 'https://api.open-meteo.com/v1/forecast?latitude='+lat+'&longitude='+long+'&current=temperature_2m,relative_humidity_2m,weather_code&hourly=temperature_2m,precipitation_probability,weather_code&forecast_days=1';
                            
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
                            
                            
                            
                            //天気コード分岐
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
                            
                            //不快指数分岐
                            //寒い
                            if(fukai <= 54){
                            
                                hukaiSisuu.innerHTML = "<img src ='https://res.cloudinary.com/dlfimibcq/image/upload/v1702867812/%E8%89%AF%E3%81%8F%E3%81%AA%E3%81%84_ivv2mz.png'>";
                            
                            }
                            //肌寒い
                            else if(fukai >= 55 && fukai <= 65 ){
                                hukaiSisuu.innerHTML = "<img src ='https://res.cloudinary.com/dlfimibcq/image/upload/v1702867812/%E7%B5%90%E6%A7%8B%E3%81%84%E3%81%84_h8tsks.png'>";
                            }
                            //快い
                            else if(fukai > 65 && fukai <= 75 ){
                                hukaiSisuu.innerHTML = "<img src ='https://res.cloudinary.com/dlfimibcq/image/upload/v1702867812/%E6%9C%80%E9%AB%98b_h92oe9.png'>";
                            }
                                //暑い
                            else if(fukai > 75 && fukai <= 85 ){
                                hukaiSisuu.innerHTML = "<img src ='https://res.cloudinary.com/dlfimibcq/image/upload/v1702867812/%E6%99%AE%E9%80%9A_ekdgqe.png'>";
                            }
                            //暑くてたまらない
                            else if(fukai >= 86){
                                hukaiSisuu.innerHTML = "<img src ='https://res.cloudinary.com/dlfimibcq/image/upload/v1702867812/%E3%81%82%E3%81%8B%E3%82%93_v4stef.png'>";
                            }
                            
                            //↓朝・昼・夜の天気の画像を表示
                                //朝の天気
                                //晴れ（快晴）
                                if(weather2[7] === 0 ){
                                  morning_OTENKI.src =   'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867042/%E6%99%B4%E3%82%8C_vhx0sw.png';
                            
                                }
                                //曇りのち晴れ（晴れだけど雲がでてる）
                                else if(weather2[7] === 1){
                                    morning_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867044/kumorinotihare_f29z7h.png';
                                }
                                //晴れのち曇り(一部曇り)
                                else if(weather2[7] === 2){
                                    morning_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867042/%E6%99%B4%E3%82%8C%E3%81%AE%E3%81%A1%E3%81%8F%E3%82%82%E3%82%8A_e45q4m.png';
                                }
                            
                                //曇り
                                else if( weather2[7] === 3){
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
                            
                                //不明
                                else{
                                    morning_OTENKI.innerHTML = "★";
                                }
                            
                                //朝7時の気温出力
                                temperature_morning.innerHTML = " 🌡　"+ temperature2[7] + "°C";
                                //朝7時の降水確率を出力
                                rainypercent_morning.innerHTML  = "💧　"　+ probability[7] + "％";
                            
                            
                                
                                
                                //昼の天気
                                //晴れ（快晴）
                                if(weather2[13] === 0 ){
                                  noon_OTENKI.src =   'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867042/%E6%99%B4%E3%82%8C_vhx0sw.png';
                            
                                }
                                //曇りのち晴れ（晴れだけど雲がでてる）
                                else if(weather2[13] === 1){
                                    noon_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867044/kumorinotihare_f29z7h.png';
                                }
                                //晴れのち曇り(一部曇り)
                                else if(weather2[13] === 2){
                                    noon_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867042/%E6%99%B4%E3%82%8C%E3%81%AE%E3%81%A1%E3%81%8F%E3%82%82%E3%82%8A_e45q4m.png';
                                }
                            
                                //曇り
                                else if( weather2[13] === 3){
                                    noon_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867043/%E6%9B%87%E3%82%8A_wiwzvs.png';
                                }
                            
                            
                                //雨
                                else if(weather2[13] <= 99  ){
                                    noon_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867041/%E9%9B%A8_tmewee.png';
                                }
                                //雪
                                else if (weather2[7] <= 79){
                                    noon_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705024355/%E9%9B%AA_mbhqfu.png';
                                }

                            
                                //昼13時の気温出力
                                temperature_noon.innerHTML =  temperature2[13] + "℃";
                                //昼13時の降水確率を出力
                                rainypercent_noon.innerHTML  =  probability[13] + "％";
                            
                            
                            
                            
                            //夜の天気
                                //晴れ（快晴）
                                if(weather2[19] === 0 ){
                                  night_OTENKI.src =   'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867042/%E6%99%B4%E3%82%8C_vhx0sw.png';
                            
                                }
                                //曇りのち晴れ（晴れだけど雲がでてる）
                                else if(weather2[19] === 1){
                                    night_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867044/kumorinotihare_f29z7h.png';
                                }
                                //晴れのち曇り(一部曇り)
                                else if(weather2[19] === 2){
                                    night_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867042/%E6%99%B4%E3%82%8C%E3%81%AE%E3%81%A1%E3%81%8F%E3%82%82%E3%82%8A_e45q4m.png';
                                }
                            
                                //曇り
                                else if( weather2[19] === 3){
                                    night_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867043/%E6%9B%87%E3%82%8A_wiwzvs.png';
                                }
                            
                            
                                //雨
                                else if(weather2[19] <= 99  ){
                                    night_OTENKI.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867041/%E9%9B%A8_tmewee.png';
                                }
                            
                                //夜19時の気温出力
                                temperature_night.innerHTML =  temperature2[19] + "℃";
                                //夜19時の降水確率を出力
                                rainypercent_night.innerHTML  =  probability[19] + "％";
                            
                            
                            
                            
                            
                            
                            })
                            
                            
                            .catch(error => {
                            console.error('データ取得に失敗しました',error)
                            });
                            </script>		
                            
              
  		

                        </div>

                        <!--戻るボタン-->
                        <a href="{{ route('goout') }}">
                        <div class="test01"　>
                            <button onclick="">
                                 <img src="https://res.cloudinary.com/dlfimibcq/image/upload/v1704939146/bag1_giuxki.png" width=150px height=150px; />
                            </button>
                        </div>
                        </a>
                        
                        
                        <!--とりあえずお試しで入れてるのであとでけしてね-->
                        <div>
                            @foreach($categories as $category )
                            @if($category->genre == 0)<!--ジャンル分けです,0=トップス,1=ボトムス,2=コートワンピース-->
                            <img src="{{ $category->image_true }}" style="max-width: 10%">
                            @endif
                            @endforeach
                        </div>
                    
                        
                        
                        <!---選んだ服のアイコン-->

            			<font size="6">
                            <body>
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
            				            <td class="clothes_box1"></td>
            				            <td>　　　　</td>
                                        <td class="clothes_box1"></td>
            				            <td>　　　</td>
                                    </tr>
            			        </table>
            
            			       <table align="center">
                    				<tr>
                                        <td>　　　　</td>
                    				    <td>　アウター</td>
                                        <td>　　　　</td>
                    				　  <td>　お出かけ</td>
                    				    <td>　　　　</td>
                                    </tr>
                                    <tr>
                    				    <td>　　　</td>
                    				    <td class="clothes_box1"></td>
                    				    <td>　　　</td>
                                        <td class="clothes_box1">
                                            <a href="{{ route('coordination') }}">
                                                <button type="button">
                                                    <img src="https://res.cloudinary.com/dlfimibcq/image/upload/v1704939153/%E3%82%AF%E3%83%AD%E3%83%BC%E3%82%BC%E3%83%83%E3%83%88_%E6%9C%8D%E7%84%A1%E3%81%97_bvgsln.png" class="code_size" />
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
                                    <div class="kaiwa-text-left">
                                        <center>
                                            <p class="kaiwa-text ">
                                                <font size="6" >
                                                       ワンポイントアドバイス
                                                </font>
                                            </p> 
                                            <p id="advice" class="kaiwa-text">
                                                <nobr>
                                                    <font size="4">
                                                        <p id="advicesamuatu" class="kaiwa-text"　 style=font-family: "源瑛ラテン">
                                                            <nobr>
                                                                <font size="4">
                                                                    <p id = "recommend_items" class = "kaiwa-text">
                                                                        <nobr>
                                                                            <font size="4">
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
                                            <figure class="kaiwa-img-right">
                                            <img src="https://res.cloudinary.com/dlfimibcq/image/upload/v1700613658/1696480649456_rvyzkj.png">
                                        </a>
                                        <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                                            <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                                                @csrf
                                                @method('delete')
                                                    
                                                    
                                                <h2 class="text-2xl font-medium text-gray-900">
                                                    {{ __('悲壮犬とは？') }}
                                                </h2>
                                                <div class="flex justify-between">
                                                    <img class="w-2" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1700613658/1696480649456_rvyzkj.png">
                                                    <div class="text-lg font-medium text-gray-900">名前：悲壮犬</div>
                                                    </div>
                                                    <div class="mt-6 flex justify-end">
                                                        <x-secondary-button x-on:click="$dispatch('close')">
                                                            {{ __('戻る') }}
                                                        </x-secondary-button>
                                                    </div>
                                                </form>
                                            </x-modal>
                                         </figure>
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
         const uvMax  = function (a, b) {return Math.max(a. b);} //一番紫外線が強い
         const snowMax = function (a, b) {return Math.max(a. b);} //降雪量
         const rainMax = function (a, b) {return Math.max(a. b);} //降雪量
      
         
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
                     let samatu = 1; // 1:寒がりさん？0:暑がりさん？

                    let result = weather_code.some(function(value){
                        return value == 71  || value == 75;
                    });    


                    //確認用
                    
                    console.log(result);      
                    console.log(weather_code);      
                     
                        
                    //3行目
                    if(uvmax => 3){
                        recommend_items.innerHTML = "今日は日差しが強いワン!日焼け対策をしっかりしよう。日焼け止めや日傘などを使おう。";
                    }
                    else if(uvmax => 6){
                        recommend_items.innerHTML = "今日は日差しがすごく強いワン!できるだけ屋外での活動は控えよう。";
                    }
                    if(result == true){
                        recommend_items.innerHTML = "今日は雪だワン!!滑らないようにしてね。傘やブーツ、マフラー、手袋などを使おう。";
                    }
                    else if(rainmax => 30){
                        recommend_items.innerHTML = "今日は雨が降るかもしれないワン!折り畳み傘が便利だよ。 ";
                    }
                    else if(rainmax => 70){
                        recommend_items.innerHTML = "今日は雨降りだワン!雨具をしっかり用意しよう。傘やレインブーツを使おう。";
                    }
                            //出力
                            //if文はelseなしにする　→　選択されていなければ共通の文とグッズのみ出力0110
                            //不快指数分岐

                         //寒い
                         if(fukai2 <= 54){
                            advice.innerHTML = "最高気温"+tmax+"℃　最低気温"+tmin+"℃";
                            //1:寒がり
                            if(samatu == 1){
                            advicesamuatu.innerHTML="防寒具があるといいね。カイロもgood!裏起毛の服がおすすめだワン!";

                           }
                           //0:暑がり
                           else{
                            advicesamuatu.innerHTML="防寒具があるといいね。カイロもgood!今日は暑がりさんも寒さに注意だワン! ";
                           }
                         }
                         //肌寒い
                         else if(fukai2 >= 55 && fukai2 <= 65 ){
                            advice.innerHTML = "最高気温"+tmax+"℃　最低気温"+tmin+"℃";
                             if(samatu == 1){
                                advicesamuatu.innerHTML="アウターやインナーを上手に活用するワン!厚手の靴下やブーツも選んでみよう。";
                             }
                             else{
                                advicesamuatu.innerHTML="アウターやインナーを上手に活用するワン!暖房に対応できるアウターを選ぼう。 ";
                             }
                         }
                         //快い
                         else if(fukai2 >= 65 && fukai2 <= 75 ){
                            advice.innerHTML = "最高気温"+tmax+"℃　最低気温"+tmin+"℃";
                            advicesamuatu.innerHTML= "今日は過ごしやすいワンダフルな一日‼好きなオシャレが楽しめそうだワン。";

 
                           }
                         //暑い
                         else if(fukai2 >= 75 && fukai2 <= 85 ){
                            advice.innerHTML = "最高気温"+tmax+"℃　最低気温"+tmin+"℃";
                             if(samatu == 1){
                                advicesamuatu.innerHTML = "薄手の素材がおすすめだワン。冷房に注意してね。七分丈もよいかも？ ";
                             }
                             else{
                                advicesamuatu.innerHTML =" 薄手の素材がおすすめだワン。通気性の良い半袖や半ズボンがおすすめだよ。 ";
                             }
                           }
                         //暑くてたまらない
                         else if(fukai2 >= 86){
                            advice.innerHTML = "最高気温"+tmax+"℃　最低気温"+tmin+"℃";
                             if(samatu == 1){
                                advicesamuatu.innerHTML="熱中症に気を付けて!!接触冷感や吸水速乾の素材がおすすめ。冷房に注意するワン!　 ";
                             }
                             else{
                                advicesamuatu.innerHTML="熱中症に気を付けて!!接触冷感や吸水速乾の素材がおすすめ。汗拭きシートで快適だワン。 ";
                             }
                            
                         


    }})
                            

    
           //json形式で情報取得失敗した時
           .catch(error => {
               console.error('データ取得に失敗しました',error)
           });
         
</script>
    

    </html> 