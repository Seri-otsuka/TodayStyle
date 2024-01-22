 <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>お出かけモード</title>
           <meta name="description" content="">
           <!-- Fonts -->
            <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="{{ 'css/app.css' }}">
            @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
            
            <div  class="Hiritu"> 
                <center>
                    
                    <div class="gooutColor_box">
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
                             
                            </p>-->
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
                                        <x-dropdown-link :href="route('images.create')">
                                            {{ __(' + 服追加') }}
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
                            
                        </div>
                        
                         <!---天気表示（黒おび）-->
                        <div class="weather_box wrapper weather-contents weather-social-text">
                            
                            <!-- 都道府県表示用 -->
                            <div style="margin: 0% -28% 0%;">
                              <!--普通にコメントアウトできなかったのでちゅうかっこ左端だけ消してます-->
                                <!--{ $area->name }}-->
                                <!--↓↓サイズ調整お願いします-->
                                <!--<img src="{ $area->path}}" style="max-width: 20%">
                                <p>
                                
                                </p>-->
                                <p id = "areaname">
                                      {{ $area->name }}・{{$finelyarea->name }}({{ $finelyarea->id }})
                                </p>
                                    
                                
                                <img  id = "areaobi" class="rounded-lg" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1704450028/%E5%8C%97%E6%B5%B7%E9%81%93%E5%85%A8%E4%BD%93_hrcsg1.png" style="max-width: 20%">
                            
                            </div>
                            <!---お天気アイコン-->
				            <div>
				                朝
                                <img id="morning_OTENKI"  style="width: 120px;"/>
                            	<!-- 湿度 -->
                            	<p id="temperature_morning" style="margin: -2% 0% -10%;">
                            	    
                            	</p>
                            	<p id="rainypercent_morning">
                            	  <!--  💧10% 　 半角,全角空白で位置調整 -->
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
                                <img  id="night_OTENKI"  style="width: 120px;"/>
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
                            <div class="hukaisisuu-right">
                                <img id="hukaiSisuu" class="weather-social"/>
                                <img src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705790906/%E7%92%B0%E5%A2%83%E6%8C%87%E6%95%B0%E6%94%B9%E8%A8%82%E7%89%88_eos4rt.png" style="height: 27%;"/>
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
                			</script>-->
                    
                          </div>

                          <!--戻るボタン-->
                          <div class="test01"　>
                          <button onclick="">
                              <a href="{{ route('main') }}">
                           <img class="rr_btn" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705026228/modoru_r4tkuo.png" width=150px height=150px;　style="margin: 75% 0% 300%;"/>
                           
                           </a>
                          </button>
                          </div>
                          
                            <!---都道府県選択-->
                            
                                
                                {{--<form>
                                <div class="cp_ipselect">
                                    <select id="parent" onchange="date()" class="form">
                                    @foreach($area_alls as $area_all)
                                      <option value={{ $area_all->id }}>{{ $area_all->name}}</option>
                                    @endforeach
                                      <option value="" disabled selected>選択してください</option>
                                    </select>--}}
                                    
                                   <!-- <select  name=”item” class="cp_sl06" required>-->
                                   {{--
                                   <select id="parent" onchange="date()" class="cp_sl06">
                                      　<option value="" disabled selected>選択してください</option>
                                      　@foreach($area_alls as $area_all)
                                        <option value={{ $area_all->id }}>{{ $area_all->name }}</option>
                                        @endforeach
                                　　</select>--}}
                                　　
                                {{--  <span class="cp_sl06_highlight"></span>
                                  <span class="cp_sl06_selectbar"></span>
                                  <label class="cp_sl06_selectlabel">お住まいの地域</label>
                                  </div>
                                </form>--}}
                                
                                
                                
                                
                                
                                <form>
                                <div class="cp_ipselect">
                                    
                                    <!--<select id="parent" onchange="date()" class="form">
                                    {{--@foreach($area_alls as $area_all)
                                      <option value="{{ $area_all->id }}">{{ $area_all->name}}</option>
                                    @endforeach			
                                      <option value=""  hidden disabled selected>　　　　　選択してください</option>
                                    </select>--}}                                 
                                   <!-- <select  name=”item” class="cp_sl06" required>-->
                                   
                                   <select id="parent" onchange="date()" class="form cp_sl06" >
                                      　<option value="" disabled selected></option>

                                      　@foreach($area_alls as $area_all)
                                        <option value={{ $area_all->id }}>{{ $area_all->name }}</option>
                                        @endforeach
                                　　</select>　　
                                  <span class="cp_sl06_highlight"></span>
                                  <span class="cp_sl06_selectbar"></span>
                                  <label class="cp_sl06_selectlabel">地域を選択してください</label>
                                  </div>
                                </form>
                          
                          
                          <!--変数の宣言ゾーン↓　✙　最初はお住まいの地域が表示されている-->
                          <script>
                                            //お住まいの地域の天気
                                             //変数の宣言
                                            let lat01  = 　　{{$finelyarea -> latitude}}; 
                                            let long01   =   {{$finelyarea -> longitude}};
                                        　　let lat2  =　lat01; 
                                            let long2 =  long01;
                                            let lat3  = lat01;
                                            let long3 = long01;  
                                            let fukai09 ;
                                            let fukai2;
                                            


                                                    console.log(lat2+"です！");
                                                    console.log(long2+"です！");
                                                    

                                              
                                             const apiUrl = 'https://api.open-meteo.com/v1/forecast?latitude='+lat01+'&longitude='+long01+'&current=temperature_2m,relative_humidity_2m,weather_code&hourly=temperature_2m,precipitation_probability,weather_code&timezone=Asia%2FTokyo&forecast_days=1';
                                            console.log(lat01+"です");
                                            console.log(long01+"です");
                            
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
                                                const fukai00 = 0.81*temperature + 0.01*humidity * (0.99*temperature - 14.3) + 46.3;   //不快指数
                                                
                                            
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
                                            
                                            //↓不快指数分岐（ヘッダー用）
                                            //寒い 画像：とても寒い
                                            if(fukai00 <= 54){
                                            
                                                hukaiSisuu.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705675669/%E3%81%82%E3%81%8B%E3%82%93_hkfi0w.png';    
                                            }
                                            //肌寒い 画像；寒い
                                            else if(fukai00 >= 55 && fukai00 <= 65 ){
                                                hukaiSisuu.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705675669/%E3%81%95%E3%82%80%E3%81%84_jbbyyb.png';
                                            }
                                            //快い 画像：快適
                                            else if(fukai00 > 65 && fukai00 <= 75 ){
                                                hukaiSisuu.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705675669/%E3%81%8B%E3%81%84%E3%81%A6%E3%81%8D_o2qa7h.png';
                                            }
                                            //暑い 画像：やや暑い
                                            else if(fukai00 > 75 && fukai00 <= 85 ){
                                                hukaiSisuu.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705675669/%E3%81%82%E3%81%A4%E3%81%84_rkd08t.png';
                                            }
                                            //暑くてたまらない 画像：とても暑い
                                            else if(fukai00 >= 86){
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
                                        rainypercent_morning.innerHTML  = "⛆   "+ probability[7] + "%";
                                    
                                    
                                        
                                        
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
                                            
                                            
                                            
                                            
                                            
                                            
                                            })
                                            
                                            
                                            .catch(error => {
                                            console.error('データ取得に失敗しました',error)
                                            });
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
        lat2  =　lat01; 
   　　  long2 =  long01;
        console.log(lat2+"です！");　　
        console.log(long2+"です！");
        
         //open-meteoからURLを取得
         apiUrl2 = 'https://api.open-meteo.com/v1/forecast?latitude='+lat2+'&longitude='+long2+'&current=temperature_2m,relative_humidity_2m,weather_code&hourly=temperature_2m,relative_humidity_2m,precipitation_probability,weather_code,uv_index&timezone=Asia%2FTokyo&forecast_days=1';
         
         const temMax = function (a, b) {return Math.max(a, b);} //最高気温
         const temMin = function (a, b) {return Math.min(a, b);} //最低気温
         const uvMax  = function (a, b) {return Math.max(a, b);} //一番紫外線が強い
         //const snowMax = function (a, b) {return Math.max(a,b);} //降雪量
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
                           fukai2 = 0.81*temperature1 + 0.01*humidity2 * (0.99*temperature1 - 14.3) + 46.3;       //不快指数
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
                    console.log(tmin);      
                    console.log(temperature2);     
                    

                    
                     
                        
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


                                      

                                                //変数の宣言
                                               //id="parent"の値を取得
                                                let parentlement  ;
                                
                                                //id="children"を取得
                                                let childrenDate  ;
                                                 let selectedValue ;
                                                


                          </script>
                          
                          <!---地域詳細--->
                          <font size="5">
                          <strong>地域詳細</strong>
                          
                          
                          <table align="center" border="1">		
                                        <tr>
                          				　<td>　　　　　</td>
                          				  <td>　　　　　</td>
                          				<td>　　　　　</td>
                          				<td><img id="todohuken" class="rounded-lg" width="600" height="600"/></td>
                          				<td>　　　　　</td> 
                          				
                          				                    <!--選択-->
                                                            <td><div class="selectdiv" style="margin: 30% 0% -300% 0%;">
                            <label>

                         
                            <select id="children" class="form">
                              <option value="" disabled selected>選択してください</option>
                            //北海道
                              <option value={{ $finelyarea1->id }}>{{ $finelyarea1->id }}・{{ $finelyarea1->name }}</option>
                              <option value={{ $finelyarea2->id }}>{{ $finelyarea2->id }}・{{ $finelyarea2->name }}</option>
                              <option value={{ $finelyarea3->id }}>{{ $finelyarea3->id }}・{{ $finelyarea3->name }}</option>
                              <option value={{ $finelyarea4->id }}>{{ $finelyarea4->id }}・{{ $finelyarea4->name }}</option>
                            //青森
                              <option value={{ $finelyarea5->id }}>{{ $finelyarea5->id }}・{{ $finelyarea5->name }}</option>
                              <option value={{ $finelyarea6->id }}>{{ $finelyarea6->id }}・{{ $finelyarea6->name }}</option>
                            
                            
                            //岩手 
                             <option value={{ $finelyarea7->id }}>{{ $finelyarea7->id }}・{{ $finelyarea7->name }}</option>
                             <option value={{ $finelyarea8->id }}>{{ $finelyarea8->id }}・{{ $finelyarea8->name }}</option>
                             
                             //宮城
                             <option value={{ $finelyarea9->id }}>{{ $finelyarea9->id }}・{{ $finelyarea9->name }}</option>
                             <option value={{ $finelyarea10->id }}>{{ $finelyarea10->id }}・{{ $finelyarea10->name }}</option>
                             
                             //秋田
                             <option value={{ $finelyarea11->id }}>{{ $finelyarea11->id }}・{{ $finelyarea11->name }}</option>
                             <option value={{ $finelyarea12->id }}>{{ $finelyarea12->id }}・{{ $finelyarea12->name }}</option>
                             
                             //山形
                             <option value={{ $finelyarea13->id }}>{{ $finelyarea13->id }}・{{ $finelyarea13->name }}</option>
                             <option value={{ $finelyarea14->id }}>{{ $finelyarea14->id }}・{{ $finelyarea14->name }}</option>
                             
                             //福島
                             <option value={{ $finelyarea15->id }}>{{ $finelyarea15->id }}・{{ $finelyarea15->name }}</option>
                             <option value={{ $finelyarea16->id }}>{{ $finelyarea16->id }}・{{ $finelyarea16->name }}</option>
                             
                             //茨城
                             <option value={{ $finelyarea17->id }}>{{ $finelyarea17->id }}・{{ $finelyarea17->name }}</option>
                             <option value={{ $finelyarea18->id }}>{{ $finelyarea18->id }}・{{ $finelyarea18->name }}</option>
                             
                             //栃木
                             <option value={{ $finelyarea19->id }}>{{ $finelyarea19->id }}・{{ $finelyarea19->name }}</option>
                             <option value={{ $finelyarea20->id }}>{{ $finelyarea20->id }}・{{ $finelyarea20->name }}</option>
                             
                             //群馬
                             <option value={{ $finelyarea21->id }}>{{ $finelyarea21->id }}・{{ $finelyarea21->name }}</option>
                             <option value={{ $finelyarea22->id }}>{{ $finelyarea22->id }}・{{ $finelyarea22->name }}</option>
                             
                             //埼玉
                             <option value={{ $finelyarea23->id }}>{{ $finelyarea23->id }}・{{ $finelyarea23->name }}</option>
                             <option value={{ $finelyarea24->id }}>{{ $finelyarea24->id }}・{{ $finelyarea24->name }}</option>
                             
                             //千葉
                             <option value={{ $finelyarea25->id }}>{{ $finelyarea25->id }}・{{ $finelyarea25->name }}</option>
                             <option value={{ $finelyarea26->id }}>{{ $finelyarea26->id }}・{{ $finelyarea26->name }}</option>
                             
                             //東京
                             <option value={{ $finelyarea27->id }}>{{ $finelyarea27->id }}・{{ $finelyarea27->name }}</option>
                             <option value={{ $finelyarea28->id }}>{{ $finelyarea28->id }}・{{ $finelyarea28->name }}</option>
                             
                             //神奈川
                             <option value={{ $finelyarea29->id }}>{{ $finelyarea29->id }}・{{ $finelyarea29->name }}</option>
                             <option value={{ $finelyarea30->id }}>{{ $finelyarea30->id }}・{{ $finelyarea30->name }}</option>
                             
                             //新潟
                             <option value={{ $finelyarea31->id }}>{{ $finelyarea31->id }}・{{ $finelyarea31->name }}</option>
                             <option value={{ $finelyarea32->id }}>{{ $finelyarea32->id }}・{{ $finelyarea32->name }}</option>
                             
                             //富山
                             <option value={{ $finelyarea33->id }}>{{ $finelyarea33->id }}・{{ $finelyarea33->name }}</option>
                             <option value={{ $finelyarea34->id }}>{{ $finelyarea34->id }}・{{ $finelyarea34->name }}</option>
                             
                             //石川
                             <option value={{ $finelyarea35->id }}>{{ $finelyarea35->id }}・{{ $finelyarea35->name }}</option>
                             <option value={{ $finelyarea36->id }}>{{ $finelyarea36->id }}・{{ $finelyarea36->name }}</option>
                             
                             //福井
                             <option value={{ $finelyarea37->id }}>{{ $finelyarea37->id }}・{{ $finelyarea37->name }}</option>
                             <option value={{ $finelyarea38->id }}>{{ $finelyarea38->id }}・{{ $finelyarea38->name }}</option>
                             
                             //山梨
                             <option value={{ $finelyarea39->id }}>{{ $finelyarea39->id }}・{{ $finelyarea39->name }}</option>
                             <option value={{ $finelyarea40->id }}>{{ $finelyarea40->id }}・{{ $finelyarea40->name }}</option>
                             
                             //長野
                             <option value={{ $finelyarea41->id }}>{{ $finelyarea41->id }}・{{ $finelyarea41->name }}</option>
                             <option value={{ $finelyarea42->id }}>{{ $finelyarea42->id }}・{{ $finelyarea42->name }}</option>
                             
                             //岐阜
                             <option value={{ $finelyarea43->id }}>{{ $finelyarea43->id }}・{{ $finelyarea43->name }}</option>
                             <option value={{ $finelyarea44->id }}>{{ $finelyarea44->id }}・{{ $finelyarea44->name }}</option>
                             
                             //静岡
                             <option value={{ $finelyarea45->id }}>{{ $finelyarea45->id }}・{{ $finelyarea45->name }}</option>
                             <option value={{ $finelyarea46->id }}>{{ $finelyarea46->id }}・{{ $finelyarea46->name }}</option>
                             
                             //愛知
                             <option value={{ $finelyarea47->id }}>{{ $finelyarea47->id }}・{{ $finelyarea47->name }}</option>
                             <option value={{ $finelyarea48->id }}>{{ $finelyarea48->id }}・{{ $finelyarea48->name }}</option>
                             
                             //三重
                             <option value={{ $finelyarea49->id }}>{{ $finelyarea49->id }}・{{ $finelyarea49->name }}</option>
                             <option value={{ $finelyarea50->id }}>{{ $finelyarea50->id }}・{{ $finelyarea50->name }}</option>
                             
                             //滋賀
                             <option value={{ $finelyarea51->id }}>{{ $finelyarea51->id }}・{{ $finelyarea51->name }}</option>
                             <option value={{ $finelyarea52->id }}>{{ $finelyarea52->id }}・{{ $finelyarea52->name }}</option>
                             
                             //京都
                             <option value={{ $finelyarea53->id }}>{{ $finelyarea53->id }}・{{ $finelyarea53->name }}</option>
                             <option value={{ $finelyarea54->id }}>{{ $finelyarea54->id }}・{{ $finelyarea54->name }}</option>
                             
                             //大阪
                             <option value={{ $finelyarea55->id }}>{{ $finelyarea55->id }}・{{ $finelyarea55->name }}</option>
                             <option value={{ $finelyarea56->id }}>{{ $finelyarea56->id }}・{{ $finelyarea56->name }}</option>
                             
                             //兵庫
                             <option value={{ $finelyarea57->id }}>{{ $finelyarea57->id }}・{{ $finelyarea57->name }}</option>
                             <option value={{ $finelyarea58->id }}>{{ $finelyarea58->id }}・{{ $finelyarea58->name }}</option>
                             <option value={{ $finelyarea59->id }}>{{ $finelyarea59->id }}・{{ $finelyarea59->name }}</option>
                             
                             //奈良
                             <option value={{ $finelyarea60->id }}>{{ $finelyarea60->id }}・{{ $finelyarea60->name }}</option>
                             <option value={{ $finelyarea61->id }}>{{ $finelyarea61->id }}・{{ $finelyarea61->name }}</option>
                             
                             //和歌山
                             <option value={{ $finelyarea62->id }}>{{ $finelyarea62->id }}・{{ $finelyarea62->name }}</option>
                             <option value={{ $finelyarea63->id }}>{{ $finelyarea63->id }}・{{ $finelyarea63->name }}</option>
                             
                             //鳥取
                             <option value={{ $finelyarea64->id }}>{{ $finelyarea64->id }}・{{ $finelyarea64->name }}</option>
                             <option value={{ $finelyarea65->id }}>{{ $finelyarea65->id }}・{{ $finelyarea65->name }}</option>
                             
                             //岡山
                             <option value={{ $finelyarea66->id }}>{{ $finelyarea66->id }}・{{ $finelyarea66->name }}</option>
                             <option value={{ $finelyarea67->id }}>{{ $finelyarea67->id }}・{{ $finelyarea67->name }}</option>
                             
                             //島根
                             <option value={{ $finelyarea68->id }}>{{ $finelyarea68->id }}・{{ $finelyarea68->name }}</option>
                             <option value={{ $finelyarea69->id }}>{{ $finelyarea69->id }}・{{ $finelyarea69->name }}</option>
                             
                             //広島
                             <option value={{ $finelyarea70->id }}>{{ $finelyarea70->id }}・{{ $finelyarea70->name }}</option>
                             <option value={{ $finelyarea71->id }}>{{ $finelyarea71->id }}・{{ $finelyarea71->name }}</option>
                             
                             //山口
                             <option value={{ $finelyarea72->id }}>{{ $finelyarea72->id }}・{{ $finelyarea72->name }}</option>
                             <option value={{ $finelyarea73->id }}>{{ $finelyarea73->id }}・{{ $finelyarea73->name }}</option>
                             
                             //徳島
                             <option value={{ $finelyarea74->id }}>{{ $finelyarea74->id }}・{{ $finelyarea74->name }}</option>
                             <option value={{ $finelyarea75->id }}>{{ $finelyarea75->id }}・{{ $finelyarea75->name }}</option>
                             
                             //香川
                             <option value={{ $finelyarea76->id }}>{{ $finelyarea76->id }}・{{ $finelyarea76->name }}</option>
                             <option value={{ $finelyarea77->id }}>{{ $finelyarea77->id }}・{{ $finelyarea77->name }}</option>
                             
                             //愛媛
                             <option value={{ $finelyarea78->id }}>{{ $finelyarea78->id }}・{{ $finelyarea78->name }}</option>
                             <option value={{ $finelyarea79->id }}>{{ $finelyarea79->id }}・{{ $finelyarea79->name }}</option>
                             
                             //高知
                             <option value={{ $finelyarea80->id }}>{{ $finelyarea80->id }}・{{ $finelyarea80->name }}</option>
                             <option value={{ $finelyarea81->id }}>{{ $finelyarea81->id }}・{{ $finelyarea81->name }}</option>
                             
                             //福岡
                             <option value={{ $finelyarea82->id }}>{{ $finelyarea82->id }}・{{ $finelyarea82->name }}</option>
                             <option value={{ $finelyarea83->id }}>{{ $finelyarea83->id }}・{{ $finelyarea83->name }}</option>
                             
                             //佐賀
                             <option value={{ $finelyarea84->id }}>{{ $finelyarea84->id }}・{{ $finelyarea84->name }}</option>
                             <option value={{ $finelyarea85->id }}>{{ $finelyarea85->id }}・{{ $finelyarea85->name }}</option>
                             
                             //長崎
                             <option value={{ $finelyarea86->id }}>{{ $finelyarea86->id }}・{{ $finelyarea86->name }}</option>
                             <option value={{ $finelyarea87->id }}>{{ $finelyarea87->id }}・{{ $finelyarea87->name }}</option>
                             
                             //熊本
                             <option value={{ $finelyarea88->id }}>{{ $finelyarea88->id }}・{{ $finelyarea88->name }}</option>
                             <option value={{ $finelyarea89->id }}>{{ $finelyarea89->id }}・{{ $finelyarea89->name }}</option>
                             
                             //大分
                             <option value={{ $finelyarea90->id }}>{{ $finelyarea90->id }}・{{ $finelyarea90->name }}</option>
                             <option value={{ $finelyarea91->id }}>{{ $finelyarea91->id }}・{{ $finelyarea91->name }}</option>
                             
                             //宮崎
                             <option value={{ $finelyarea92->id }}>{{ $finelyarea92->id }}・{{ $finelyarea92->name }}</option>
                             <option value={{ $finelyarea93->id }}>{{ $finelyarea93->id }}・{{ $finelyarea93->name }}</option>
                             
                             //鹿児島
                             <option value={{ $finelyarea94->id }}>{{ $finelyarea94->id }}・{{ $finelyarea94->name }}</option>
                             <option value={{ $finelyarea95->id }}>{{ $finelyarea95->id }}・{{ $finelyarea95->name }}</option>
                             
                             //沖縄
                             <option value={{ $finelyarea96->id }}>{{ $finelyarea96->id }}・{{ $finelyarea96->name }}</option>
                             <option value={{ $finelyarea97->id }}>{{ $finelyarea97->id }}・{{ $finelyarea97->name }}</option>
                              
                            </select>

                        
                          
                            </label>
                          </div>
                          </td>
                          <td><a href="#" class="circle_btn02"　 style="margin: 30% 0% -300% 0%;">
                          
                          
                          
                        <!--決定ボタン-->
                        <td>
                            <font color="#ffffff">
                                <div  class="Iti" style="margin: 35% 0% -300% 10%;">
                                     
                                    <div id="myDiv" class="radius_test"  align="center"　style="border: none;" name = "button" >
                                       <input id="button1" type="button" value="決定" onclick="Button()">

                                    
                                    </div>
                                    
                                 
                                 
                                <div>
                            </font>
                        </td>
                          
                                            </tr>
                          			    </table>
                          </font size>
                         

                          
                        <!---隙間-->
	                    <div class="sukima_box"></div>

                        <!--お試しで入れてます、あとでけしてね！-->
                        {{--
                        <div>
                            @foreach($categories as $category )
                            @if($category->genre == 0)<!--ジャンル分けです,0=トップス,1=ボトムス,2=コートワンピース-->
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
                            <table align="center"  border="1">
				<tr>
                    <td>　　　　</td>
				    <td>　トップス</td>
                    <td>　　　　</td>
                    <td>　ボトムス</td>
				　  <td>　　　　</td>
                </tr>			
                <tr>
				    <td>　　　</td>
			        <td class="clothes_box1" valign="baseline">
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

			<table align="center"  border="1">
				<tr>
                                    <td>　　　　</td>
				    <td>　アウター・ワンピース</td>
                                    <td>　　　　</td>
                    <a href="{{ route('coordination') }}">
                    <td>　コーディネートモード→</td>    
				　     			
				　     <td>　　　　</td></a>
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
                    <td width=500px height=450px>
                        <a href="{{ route('coordination') }}">
                            <button type="button">
                                <img src="https://res.cloudinary.com/dg5imilid/image/upload/v1705730150/%28%5E%5E%29/%E3%82%AF%E3%83%AD%E3%83%BC%E3%82%BC%E3%83%83%E3%83%88_%E6%9C%8D%E7%84%A1%E3%81%97_bvgsln_fh0sot.png" />
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
                                        <figure class="kaiwa-img-right">
                                               <img src="https://res.cloudinary.com/dlfimibcq/image/upload/v1700613658/1696480649456_rvyzkj.png">
                                         </figure>
                                     </div>
                                 </td>
                            </tr>
                        </table>
                     </div>
                </center>
                </div>
              </body>
            </body>  
    <script>

</script>


 <script>

     







</script>
                               <script>

                               function date() {
                                   

                                //id="parent"の値を取得
                                parentlement = document.getElementById( "parent" ) ;
                                
                                //id="children"を取得
                                 childrenDate = document.getElementById("children") ;
                                
                                   //disabledをtrueに
                                  for (var i = 0; i < childrenDate.length; i++){
                                       childrenDate.options[i].disabled = true;
                                  }
                                    // disabledに代入
                                     if( parentlement.value == 1) {
                                       childrenDate.options[1].disabled = false;//味噌汁
                                       childrenDate.options[2].disabled = false;//肉じゃが
                                       childrenDate.options[3].disabled = false;//天ぷら
                                       childrenDate.options[4].disabled = false;//グラタン
                                       //↓画像
                                       document.getElementById("todohuken").src="{{ $area1->path }}";
                                
                                    } else if( parentlement.value == 2) {
                                       childrenDate.options[5].disabled = false;//オムライス
                                       childrenDate.options[6].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area2->path }}";
                                       
                                    } else if( parentlement.value == 3) {
                                       childrenDate.options[7].disabled = false;//オムライス
                                       childrenDate.options[8].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area3->path }}";
                                     
                                     } else if( parentlement.value == 4) {
                                       childrenDate.options[9].disabled = false;//オムライス
                                       childrenDate.options[10].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area4->path }}";
                                     
                                     } else if( parentlement.value == 5) {
                                       childrenDate.options[11].disabled = false;//オムライス
                                       childrenDate.options[12].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area5->path }}";
                                     
                                     } else if( parentlement.value == 6) {
                                       childrenDate.options[13].disabled = false;//オムライス
                                       childrenDate.options[14].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area6->path }}";
                                     
                                     } else if( parentlement.value == 7) {
                                       childrenDate.options[15].disabled = false;//オムライス
                                       childrenDate.options[16].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area7->path }}";
                                     
                                     } else if( parentlement.value == 8) {
                                       childrenDate.options[17].disabled = false;//オムライス
                                       childrenDate.options[18].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area8->path }}";
                                     
                                     } else if( parentlement.value == 9) {
                                       childrenDate.options[19].disabled = false;//オムライス
                                       childrenDate.options[20].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area9->path }}";
                                     
                                     } else if( parentlement.value == 10) {
                                       childrenDate.options[21].disabled = false;//オムライス
                                       childrenDate.options[22].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area10->path }}";
                                     
                                     } else if( parentlement.value == 11) {
                                       childrenDate.options[23].disabled = false;//オムライス
                                       childrenDate.options[24].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area11->path }}";
                                     
                                     } else if( parentlement.value == 12) {
                                       childrenDate.options[25].disabled = false;//オムライス
                                       childrenDate.options[26].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area12->path }}";
                                     
                                     } else if( parentlement.value == 13) {
                                       childrenDate.options[27].disabled = false;//オムライス
                                       childrenDate.options[28].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area13->path }}";
                                     
                                     } else if( parentlement.value == 14) {
                                       childrenDate.options[29].disabled = false;//オムライス
                                       childrenDate.options[30].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area14->path }}";
                                     
                                     } else if( parentlement.value == 15) {
                                       childrenDate.options[31].disabled = false;//オムライス
                                       childrenDate.options[32].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area15->path }}";
                                     
                                     } else if( parentlement.value == 16) {
                                       childrenDate.options[33].disabled = false;//オムライス
                                       childrenDate.options[34].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area16->path }}";
                                     
                                     } else if( parentlement.value == 17) {
                                       childrenDate.options[35].disabled = false;//オムライス
                                       childrenDate.options[36].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area17->path }}";
                                     
                                     } else if( parentlement.value == 18) {
                                       childrenDate.options[37].disabled = false;//オムライス
                                       childrenDate.options[38].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area18->path }}";
                                     
                                     } else if( parentlement.value == 19) {
                                       childrenDate.options[39].disabled = false;//オムライス
                                       childrenDate.options[40].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area19->path }}";
                                     
                                     } else if( parentlement.value == 20) {
                                       childrenDate.options[41].disabled = false;//オムライス
                                       childrenDate.options[42].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area20->path }}";
                                     
                                     } else if( parentlement.value == 21) {
                                       childrenDate.options[43].disabled = false;//オムライス
                                       childrenDate.options[44].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area21->path }}";
                                     
                                     } else if( parentlement.value == 22) {
                                       childrenDate.options[45].disabled = false;//オムライス
                                       childrenDate.options[46].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area22->path }}";
                                     
                                     } else if( parentlement.value == 23) {
                                       childrenDate.options[47].disabled = false;//オムライス
                                       childrenDate.options[48].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area23->path }}";
                                     
                                     } else if( parentlement.value == 24) {
                                       childrenDate.options[49].disabled = false;//オムライス
                                       childrenDate.options[50].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area24->path }}";
                                     
                                     } else if( parentlement.value == 25) {
                                       childrenDate.options[51].disabled = false;//オムライス
                                       childrenDate.options[52].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area25->path }}";
                                     
                                     } else if( parentlement.value == 26) {
                                       childrenDate.options[53].disabled = false;//オムライス
                                       childrenDate.options[54].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area26->path }}";
                                     
                                     } else if( parentlement.value == 27) {
                                       childrenDate.options[55].disabled = false;//オムライス
                                       childrenDate.options[56].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area27->path }}";
                                     
                                     } else if( parentlement.value == 28) {
                                       childrenDate.options[57].disabled = false;//オムライス
                                       childrenDate.options[58].disabled = false;//ナポリタン
                                       childrenDate.options[59].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area28->path }}";
                                     
                                     } else if( parentlement.value == 29) {
                                       childrenDate.options[60].disabled = false;//オムライス
                                       childrenDate.options[61].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area29->path }}";
                                     
                                     } else if( parentlement.value == 30) {
                                       childrenDate.options[62].disabled = false;//オムライス
                                       childrenDate.options[63].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area30->path }}";
                                     
                                     } else if( parentlement.value == 31) {
                                       childrenDate.options[64].disabled = false;//オムライス
                                       childrenDate.options[65].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area31->path }}";
                                     
                                     } else if( parentlement.value == 32) {
                                       childrenDate.options[66].disabled = false;//オムライス
                                       childrenDate.options[67].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area32->path }}";
                                     
                                     } else if( parentlement.value == 33) {
                                       childrenDate.options[68].disabled = false;//オムライス
                                       childrenDate.options[69].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area33->path }}";
                                     
                                     } else if( parentlement.value == 34) {
                                       childrenDate.options[70].disabled = false;//オムライス
                                       childrenDate.options[71].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area34->path }}";
                                     
                                     } else if( parentlement.value == 35) {
                                       childrenDate.options[72].disabled = false;//オムライス
                                       childrenDate.options[73].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area35->path }}";
                                     
                                     } else if( parentlement.value == 36) {
                                       childrenDate.options[74].disabled = false;//オムライス
                                       childrenDate.options[75].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area36->path }}";
                                     
                                     } else if( parentlement.value == 37) {
                                       childrenDate.options[76].disabled = false;//オムライス
                                       childrenDate.options[77].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area37->path }}";
                                     
                                     } else if( parentlement.value == 38) {
                                       childrenDate.options[78].disabled = false;//オムライス
                                       childrenDate.options[79].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area38->path }}";
                                     
                                     } else if( parentlement.value == 39) {
                                       childrenDate.options[80].disabled = false;//オムライス
                                       childrenDate.options[81].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area39->path }}";
                                     
                                     } else if( parentlement.value == 40) {
                                       childrenDate.options[82].disabled = false;//オムライス
                                       childrenDate.options[83].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area40->path }}";
                                     
                                     } else if( parentlement.value == 41) {
                                       childrenDate.options[84].disabled = false;//オムライス
                                       childrenDate.options[85].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area41->path }}";
                                     
                                     } else if( parentlement.value == 42) {
                                       childrenDate.options[86].disabled = false;//オムライス
                                       childrenDate.options[87].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area42->path }}";
                                     
                                     } else if( parentlement.value == 43) {
                                       childrenDate.options[88].disabled = false;//オムライス
                                       childrenDate.options[89].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area43->path }}";
                                     
                                     } else if( parentlement.value == 44) {
                                       childrenDate.options[90].disabled = false;//オムライス
                                       childrenDate.options[91].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area44->path }}";
                                     
                                     } else if( parentlement.value == 45) {
                                       childrenDate.options[92].disabled = false;//オムライス
                                       childrenDate.options[93].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area45->path }}";
                                     
                                     } else if( parentlement.value == 46) {
                                       childrenDate.options[94].disabled = false;//オムライス
                                       childrenDate.options[95].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area46->path }}";
                                     
                                     } else if( parentlement.value == 47) {
                                       childrenDate.options[96].disabled = false;//オムライス
                                       childrenDate.options[97].disabled = false;//ナポリタン
                                       document.getElementById("todohuken").src="{{ $area47->path }}";
                                     
                                     }  else if ( parentlement.value = "") {
                                       childrenDate.disabled = true;
                                    }
                                    
                                

                             

                               
                                      
                                    
                                
                        //↓dataの終わり
                         }
                                  
                           
                            
                                                               function _delete_element( id_name ){
                                                                    	var dom_obj = document.getElementById(id_name);
                                                                    	var dom_obj_parent = dom_obj.parentNode;
                                                                    	dom_obj_parent.removeChild(dom_obj);
                                                                    }
                            
                                      //button関数を定義、クリックで地域変更
                                      function Button() {
                                          
                                            
                                                                                      
                                          
                                          
                                        // 選択されているオプションのテキストを取得
                                                 selectedText = document.getElementById('children').options[document.getElementById('children').selectedIndex].text;
                                                 selectedValue = childrenDate.value;
                                                console.log(selectedValue);
                                                console.log(selectedText);
                                               
                                                         //1
                                                          if(selectedValue == 1 ) { 
                                                                 lat01  = {{$finelyarea1 -> latitude}};
                                                                 long01 = {{$finelyarea1 -> longitude}};
                                                                 document.getElementById("areaobi").src="{{ $area1->path }}";
                                                                 areaname.innerHTML ="　北海道・"+" {{ $finelyarea1->name }}"+"（{{ $finelyarea1->id }}）";
                                                          }
                                                      //2
                                                        else if (selectedValue == 2) {
                                                                 lat01  = {{$finelyarea2 -> latitude}};
                                                                 long01 = {{$finelyarea2-> longitude}};
                                                                 document.getElementById("areaobi").src="{{ $area1->path }}";
                                                                 areaname.innerHTML ="　北海道・"+" {{ $finelyarea2->name }}"+"（{{ $finelyarea2->id }}）";
                                                        }
                                                        //3
                                                        else if (selectedValue == 3) {
                                                                 lat01  = {{$finelyarea3-> latitude}};
                                                                 long01 = {{$finelyarea3-> longitude}};
                                                                 document.getElementById("areaobi").src="{{ $area1->path }}";
                                                                 areaname.innerHTML ="　北海道・"+" {{ $finelyarea3->name }}"+"（{{ $finelyarea3->id }}）";
                                                        }
                                                          //4
                                                        else if (selectedValue == 4) {                                                         
                                                                 lat01  = {{$finelyarea4-> latitude}};
                                                                 long01 = {{$finelyarea4-> longitude}};        
                                                                 document.getElementById("areaobi").src="{{ $area1->path }}";
                                                                 areaname.innerHTML ="　北海道・"+" {{ $finelyarea4->name }}"+"（{{ $finelyarea4->id }}）";
                                                        }
                                                          //5
                                                        else if (selectedValue == 5) {                                                         
                                                                 lat01  = {{$finelyarea5-> latitude}};
                                                                 long01 = {{$finelyarea5-> longitude}}                
                                                                 document.getElementById("areaobi").src="{{ $area2->path }}";
                                                                 areaname.innerHTML ="青森・"+" {{ $finelyarea5->name }}"+"（{{ $finelyarea5->id }}）";
                                                        }
                                                        //6
                                                        else if (selectedValue == 6) {                                                         
                                                                 lat01  = {{$finelyarea6-> latitude}};
                                                                 long01 = {{$finelyarea6-> longitude}};       
                                                                 document.getElementById("areaobi").src="{{ $area2->path }}";
                                                                 areaname.innerHTML ="　　青森・"+" {{ $finelyarea6->name }}"+"（{{ $finelyarea6->id }}）";
                                                        }
                                                          //7
                                                        else if (selectedValue == 7) {                                                         
                                                                 lat01  = {{$finelyarea7-> latitude}};
                                                                 long01 = {{$finelyarea7-> longitude}};                       
                                                                 document.getElementById("areaobi").src="{{ $area3->path }}";
                                                                 areaname.innerHTML ="岩手・"+" {{ $finelyarea7->name }}"+"（{{ $finelyarea7->id }}）";
                                                        }
                                                          //8
                                                        else if (selectedValue == 8) {                                                         
                                                                 lat01  = {{$finelyarea8-> latitude}};
                                                                 long01 = {{$finelyarea8-> longitude}};    
                                                                 document.getElementById("areaobi").src="{{ $area3->path }}";
                                                                 areaname.innerHTML ="岩手・"+" {{ $finelyarea8->name }}"+"（{{ $finelyarea8->id }}）";
                                                        }
                                                          //9
                                                        else if (selectedValue == 9 ) {                                                         
                                                                 lat01  = {{$finelyarea9-> latitude}};
                                                                 long01 = {{$finelyarea9-> longitude}};           
                                                                 document.getElementById("areaobi").src="{{ $area4->path }}";
                                                                 areaname.innerHTML ="宮城・"+" {{ $finelyarea9->name }}"+"（{{ $finelyarea9->id }}）";
                                                        }
                                                        //10～19
                                                        else if (selectedValue == 10) {                                                         
                                                                 lat01  = {{$finelyarea10-> latitude}};
                                                                 long01 = {{$finelyarea10-> longitude}};              
                                                                 document.getElementById("areaobi").src="{{ $area4->path }}";
                                                                 areaname.innerHTML ="宮城・"+" {{ $finelyarea10->name }}"+"（{{ $finelyarea10->id }}）";
                                                        }
                                                      //11
                                                        else if (selectedValue == 11) {                                                         
                                                                 lat01  = {{$finelyarea11-> latitude}};
                                                                 long01 = {{$finelyarea11-> longitude}};         
                                                                 document.getElementById("areaobi").src="{{ $area5->path }}";
                                                                 areaname.innerHTML ="　　秋田・"+" {{ $finelyarea11->name }}"+"（{{ $finelyarea11->id }}）";
                                                        }
                                                        //12
                                                        else if (selectedValue == 12) {                                                        
                                                                 lat01  = {{$finelyarea12-> latitude}};
                                                                 long01 = {{$finelyarea12-> longitude}};                    
                                                                 document.getElementById("areaobi").src="{{ $area5->path }}";
                                                                 areaname.innerHTML ="秋田・"+" {{ $finelyarea12->name }}"+"（{{ $finelyarea12->id }}）";
                                                        }
                                                        else if (selectedValue == 13) {                                                        
                                                                 lat01  = {{$finelyarea13-> latitude}};
                                                                 long01 = {{$finelyarea13-> longitude}};                     
                                                                 document.getElementById("areaobi").src="{{ $area6->path }}";
                                                                 areaname.innerHTML ="　　山形・"+" {{ $finelyarea13->name }}"+"（{{ $finelyarea13->id }}）";
                                                        }  
                                                        else if (selectedValue == 14) {                                                        
                                                                 lat01  = {{$finelyarea14-> latitude}};
                                                                 long01 = {{$finelyarea14-> longitude}};               
                                                                 document.getElementById("areaobi").src="{{ $area6->path }}";
                                                                 areaname.innerHTML ="山形・"+" {{ $finelyarea14->name }}"+"（{{ $finelyarea14->id }}）";
                                                        }  
                                                        else if (selectedValue == 15) {                                                        
                                                                 lat01  = {{$finelyarea15-> latitude}};
                                                                 long01 = {{$finelyarea15-> longitude}};   
                                                                 document.getElementById("areaobi").src="{{ $area7->path }}";
                                                                 areaname.innerHTML ="　　福島・"+" {{ $finelyarea15->name }}"+"（{{ $finelyarea15->id }}）";
                                                        } 
                                                        else if (selectedValue == 16){                                                        
                                                                 lat01  = {{$finelyarea16-> latitude}};
                                                                 long01 = {{$finelyarea16-> longitude}};                         
                                                                 document.getElementById("areaobi").src="{{ $area7->path }}";
                                                                 areaname.innerHTML ="福島・"+" {{ $finelyarea16->name }}"+"（{{ $finelyarea16->id }}）";
                                                        }  
                                                        else if (selectedValue == 17) {                                                        
                                                                 lat01  = {{$finelyarea17-> latitude}};
                                                                 long01 = {{$finelyarea17-> longitude}};             
                                                                 document.getElementById("areaobi").src="{{ $area8->path }}";
                                                                 areaname.innerHTML ="　茨城・"+" {{ $finelyarea17->name }}"+"（{{ $finelyarea17->id }}）";
                                                        }  
                                                        else if (selectedValue == 18) {                                                        
                                                                 lat01  = {{$finelyarea18-> latitude}};
                                                                 long01 = {{$finelyarea18-> longitude}};     
                                                                 document.getElementById("areaobi").src="{{ $area8->path }}";
                                                                 areaname.innerHTML ="　茨城・"+" {{ $finelyarea18->name }}"+"（{{ $finelyarea18->id }}）";
                                                        }  
                                                        else if (selectedValue == 19) {                                                        
                                                                 lat01  = {{$finelyarea19-> latitude}};
                                                                 long01 = {{$finelyarea19-> longitude}};                   
                                                                 document.getElementById("areaobi").src="{{ $area9->path }}";
                                                                 areaname.innerHTML ="　　栃木・"+" {{ $finelyarea19->name }}"+"（{{ $finelyarea19->id }}）";
                                                        }  
                                                        
                                                        //20～29
                                                        else if (selectedValue == 20) {                                                         
                                                                 lat01  = {{$finelyarea20-> latitude}};
                                                                 long01 = {{$finelyarea20-> longitude}};     
                                                                 document.getElementById("areaobi").src="{{ $area9->path }}";
                                                                 areaname.innerHTML ="　　栃木・"+" {{ $finelyarea20->name }}"+"（{{ $finelyarea20->id }}）";
                                                        }
                                                        else if (selectedValue ==21) {                                                                
                                                                 lat01  = {{$finelyarea21-> latitude}};
                                                                 long01 = {{$finelyarea21-> longitude}};   
                                                                 document.getElementById("areaobi").src="{{ $area10->path }}";
                                                                 areaname.innerHTML ="群馬・"+" {{ $finelyarea21->name }}"+"（{{ $finelyarea21->id }}）";
                                                        }
                                                        //12
                                                        else if (selectedValue == 22) {                                                        
                                                                 lat01  = {{$finelyarea22-> latitude}};
                                                                 long01 = {{$finelyarea22-> longitude}};   
                                                                 document.getElementById("areaobi").src="{{ $area10->path }}";
                                                                 areaname.innerHTML ="群馬・"+" {{ $finelyarea22->name }}"+"（{{ $finelyarea22->id }}）";
                                                        }
                                                        else if (selectedValue == 23) {                                                        
                                                                 lat01  = {{$finelyarea23-> latitude}};
                                                                 long01 = {{$finelyarea23-> longitude}};    
                                                                 document.getElementById("areaobi").src="{{ $area11->path }}";
                                                                 areaname.innerHTML ="埼玉・"+" {{ $finelyarea23->name }}"+"（{{ $finelyarea23->id }}）";
                                                        }  
                                                        else if (selectedValue == 24) {                                                        
                                                                 lat01  = {{$finelyarea24-> latitude}};
                                                                 long01 = {{$finelyarea24-> longitude}};        
                                                                 document.getElementById("areaobi").src="{{ $area11->path }}";
                                                                 areaname.innerHTML ="埼玉・"+" {{ $finelyarea24->name }}"+"（{{ $finelyarea24->id }}）";
                                                        }  
                                                        else if (selectedValue == 25) {                                                        
                                                                 lat01  = {{$finelyarea25-> latitude}};
                                                                 long01 = {{$finelyarea25-> longitude}};    
                                                                 document.getElementById("areaobi").src="{{ $area12->path }}";
                                                                 areaname.innerHTML ="千葉・"+" {{ $finelyarea25->name }}"+"（{{ $finelyarea25->id }}）";
                                                        } 
                                                        else if (selectedValue == 26){                                                        
                                                                 lat01  = {{$finelyarea26-> latitude}};
                                                                 long01 = {{$finelyarea26-> longitude}};         
                                                                 document.getElementById("areaobi").src="{{ $area12->path }}";
                                                                 areaname.innerHTML ="千葉・"+" {{ $finelyarea26->name }}"+"（{{ $finelyarea26->id }}）";
                                                        }  
                                                        else if (selectedValue == 27) {                                                        
                                                                 lat01  = {{$finelyarea27-> latitude}};
                                                                 long01 = {{$finelyarea27-> longitude}};   
                                                                 document.getElementById("areaobi").src="{{ $area13->path }}";
                                                                 areaname.innerHTML ="東京・"+" {{ $finelyarea27->name }}"+"（{{ $finelyarea27->id }}）";
                                                        }  
                                                        else if (selectedValue == 28) {                                                        
                                                                 lat01  = {{$finelyarea28-> latitude}};
                                                                 long01 = {{$finelyarea28-> longitude}};             
                                                                 document.getElementById("areaobi").src="{{ $area13->path }}";
                                                                 areaname.innerHTML ="東京・"+" {{ $finelyarea28->name }}"+"（{{ $finelyarea28->id }}）";
                                                        }  
                                                        else if (selectedValue == 29) {                                                        
                                                                 lat01  = {{$finelyarea29-> latitude}};
                                                                 long01 = {{$finelyarea29-> longitude}};                
                                                                 document.getElementById("areaobi").src="{{ $area14->path }}";
                                                                 areaname.innerHTML ="神奈川・"+" {{ $finelyarea29->name }}"+"（{{ $finelyarea29->id }}）";
                                                        }  
                                                        
                                                         //30～39
                                                        else if (selectedValue == 30) {                                                         
                                                                 lat01  = {{$finelyarea30-> latitude}};
                                                                 long01 = {{$finelyarea30-> longitude}};              
                                                                 document.getElementById("areaobi").src="{{ $area14->path }}";
                                                                 areaname.innerHTML ="神奈川・"+" {{ $finelyarea30->name }}"+"（{{ $finelyarea30->id }}）";
                                                        }
                                                        else if (selectedValue ==31) {                                                                
                                                                 lat01  = {{$finelyarea31-> latitude}};
                                                                 long01 = {{$finelyarea31-> longitude}};   
                                                                 document.getElementById("areaobi").src="{{ $area15->path }}";
                                                                 areaname.innerHTML ="新潟・"+" {{ $finelyarea31->name }}"+"（{{ $finelyarea31->id }}）";
                                                        }
                                                        //12
                                                        else if (selectedValue == 32) {                                                        
                                                                 lat01  = {{$finelyarea32-> latitude}};
                                                                 long01 = {{$finelyarea32-> longitude}};   
                                                                 document.getElementById("areaobi").src="{{ $area15->path }}";
                                                                 areaname.innerHTML ="新潟・"+" {{ $finelyarea32->name }}"+"（{{ $finelyarea32->id }}）";
                                                        }
                                                        else if (selectedValue == 33) {                                                        
                                                                 lat01  = {{$finelyarea33-> latitude}};
                                                                 long01 = {{$finelyarea33-> longitude}};            
                                                                 document.getElementById("areaobi").src="{{ $area16->path }}";
                                                                 areaname.innerHTML ="富山・"+" {{ $finelyarea33->name }}"+"（{{ $finelyarea33->id }}）";
                                                        }  
                                                        else if (selectedValue == 34) {                                                        
                                                                 lat01  = {{$finelyarea34-> latitude}};
                                                                 long01 = {{$finelyarea34-> longitude}};         
                                                                 document.getElementById("areaobi").src="{{ $area16->path }}";
                                                                 areaname.innerHTML ="富山・"+" {{ $finelyarea34->name }}"+"（{{ $finelyarea34->id }}）";
                                                        }  
                                                        else if (selectedValue == 35) {                                                        
                                                                 lat01  = {{$finelyarea35-> latitude}};
                                                                 long01 = {{$finelyarea35-> longitude}};    
                                                                 document.getElementById("areaobi").src="{{ $area17->path }}";
                                                                 areaname.innerHTML ="石川・"+" {{ $finelyarea35->name }}"+"（{{ $finelyarea35->id }}）";
                                                        } 
                                                        else if (selectedValue == 36){                                                        
                                                                 lat01  = {{$finelyarea36-> latitude}};
                                                                 long01 = {{$finelyarea36-> longitude}};              
                                                                 document.getElementById("areaobi").src="{{ $area17->path }}";
                                                                 areaname.innerHTML ="石川・"+" {{ $finelyarea36->name }}"+"（{{ $finelyarea36->id }}）";
                                                        }  
                                                        else if (selectedValue == 37) {                                                        
                                                                 lat01  = {{$finelyarea37-> latitude}};
                                                                 long01 = {{$finelyarea37-> longitude}};                       
                                                                 document.getElementById("areaobi").src="{{ $area18->path }}";
                                                                 areaname.innerHTML ="福井・"+" {{ $finelyarea37->name }}"+"（{{ $finelyarea37->id }}）";
                                                        }  
                                                        else if (selectedValue == 38) {                                                        
                                                                 lat01  = {{$finelyarea38-> latitude}};
                                                                 long01 = {{$finelyarea38-> longitude}};             
                                                                 document.getElementById("areaobi").src="{{ $area18->path }}";
                                                                 areaname.innerHTML ="福井・"+" {{ $finelyarea38->name }}"+"（{{ $finelyarea38->id }}）";
                                                        }  
                                                        else if (selectedValue == 39) {                                                        
                                                                 lat01  = {{$finelyarea39-> latitude}};
                                                                 long01 = {{$finelyarea39-> longitude}};                
                                                                 document.getElementById("areaobi").src="{{ $area19->path }}";
                                                                 areaname.innerHTML ="山梨・"+" {{ $finelyarea39->name }}"+"（{{ $finelyarea39->id }}）";
                                                        }
                                                        
                                                         //40～49
                                                        else if (selectedValue == 40) {                                                         
                                                                 lat01  = {{$finelyarea40-> latitude}};
                                                                 long01 = {{$finelyarea40-> longitude}};                 
                                                                 document.getElementById("areaobi").src="{{ $area19->path }}";
                                                                 areaname.innerHTML ="山梨・"+" {{ $finelyarea40->name }}"+"（{{ $finelyarea40->id }}）";
                                                        }
                                                        else if (selectedValue ==41) {                                                                
                                                                 lat01  = {{$finelyarea41-> latitude}};
                                                                 long01 = {{$finelyarea41-> longitude}};                
                                                                 document.getElementById("areaobi").src="{{ $area20->path }}";
                                                                 areaname.innerHTML ="長野・"+" {{ $finelyarea41->name }}"+"（{{ $finelyarea41->id }}）";
                                                        }
                                                        //12
                                                        else if (selectedValue == 42) {                                                        
                                                                 lat01  = {{$finelyarea42-> latitude}};
                                                                 long01 = {{$finelyarea42-> longitude}};        
                                                                 document.getElementById("areaobi").src="{{ $area20->path }}";
                                                                 areaname.innerHTML ="長野・"+" {{ $finelyarea42->name }}"+"（{{ $finelyarea42->id }}）";
                                                        }
                                                        else if (selectedValue == 43) {                                                        
                                                                 lat01  = {{$finelyarea43-> latitude}};
                                                                 long01 = {{$finelyarea43-> longitude}};    
                                                                 document.getElementById("areaobi").src="{{ $area21->path }}";
                                                                 areaname.innerHTML ="岐阜・"+" {{ $finelyarea43->name }}"+"（{{ $finelyarea43->id }}）";
                                                        }  
                                                        else if (selectedValue == 44) {                                                        
                                                                 lat01  = {{$finelyarea44-> latitude}};
                                                                 long01 = {{$finelyarea44-> longitude}};          
                                                                 document.getElementById("areaobi").src="{{ $area21->path }}";
                                                                 areaname.innerHTML ="岐阜・"+" {{ $finelyarea44->name }}"+"（{{ $finelyarea44->id }}）";
                                                        }  
                                                        else if (selectedValue == 45) {                                                        
                                                                 lat01  = {{$finelyarea45-> latitude}};
                                                                 long01 = {{$finelyarea45-> longitude}};                   
                                                                 document.getElementById("areaobi").src="{{ $area22->path }}";
                                                                 areaname.innerHTML ="静岡・"+" {{ $finelyarea45->name }}"+"（{{ $finelyarea45->id }}）";
                                                        } 
                                                        else if (selectedValue == 46){                                                        
                                                                 lat01  = {{$finelyarea46-> latitude}};
                                                                 long01 = {{$finelyarea46-> longitude}};     
                                                                 document.getElementById("areaobi").src="{{ $area22->path }}";
                                                                 areaname.innerHTML ="静岡・"+" {{ $finelyarea46->name }}"+"（{{ $finelyarea46->id }}）";
                                                        }  
                                                        else if (selectedValue == 47) {                                                        
                                                                 lat01  = {{$finelyarea47-> latitude}};
                                                                 long01 = {{$finelyarea47-> longitude}};      
                                                                 document.getElementById("areaobi").src="{{ $area23->path }}";
                                                                 areaname.innerHTML ="　　愛知・"+" {{ $finelyarea47->name }}"+"（{{ $finelyarea47->id }}）";
                                                        }  
                                                        else if (selectedValue == 48) {                                                        
                                                                 lat01  = {{$finelyarea48-> latitude}};
                                                                 long01 = {{$finelyarea48-> longitude}};                 
                                                                 document.getElementById("areaobi").src="{{ $area23->path }}";
                                                                 areaname.innerHTML ="愛知・"+" {{ $finelyarea48->name }}"+"（{{ $finelyarea48->id }}）";
                                                        }  
                                                        else if (selectedValue == 49) {                                                        
                                                                 lat01  = {{$finelyarea49-> latitude}};
                                                                 long01 = {{$finelyarea49-> longitude}};      
                                                                 document.getElementById("areaobi").src="{{ $area24->path }}";
                                                                 areaname.innerHTML ="三重・"+" {{ $finelyarea49->name }}"+"（{{ $finelyarea49->id }}）";
                                                        }
                                                         //50～59
                                                        else if (selectedValue == 50) {                                                         
                                                                 lat01  = {{$finelyarea50-> latitude}};
                                                                 long01 = {{$finelyarea50-> longitude}};          
                                                                 document.getElementById("areaobi").src="{{ $area24->path }}";
                                                                 areaname.innerHTML ="三重・"+" {{ $finelyarea50->name }}"+"（{{ $finelyarea50->id }}）";
                                                        }
                                                        else if (selectedValue ==51) {                                                                
                                                                 lat01  = {{$finelyarea51-> latitude}};
                                                                 long01 = {{$finelyarea51-> longitude}};  
                                                                 document.getElementById("areaobi").src="{{ $area25->path }}";
                                                                 areaname.innerHTML ="滋賀・"+" {{ $finelyarea51->name }}"+"（{{ $finelyarea51->id }}）";
                                                        }
                                                        //12
                                                        else if (selectedValue == 52) {                                                        
                                                                 lat01  = {{$finelyarea52-> latitude}};
                                                                 long01 = {{$finelyarea52-> longitude}};        
                                                                 document.getElementById("areaobi").src="{{ $area25->path }}";
                                                                 areaname.innerHTML ="滋賀・"+" {{ $finelyarea52->name }}"+"（{{ $finelyarea52->id }}）";
                                                        }
                                                        else if (selectedValue == 53) {                                                        
                                                                 lat01  = {{$finelyarea53-> latitude}};
                                                                 long01 = {{$finelyarea53-> longitude}};   
                                                                 document.getElementById("areaobi").src="{{ $area26->path }}";
                                                                 areaname.innerHTML ="京都・"+" {{ $finelyarea53->name }}"+"（{{ $finelyarea53->id }}）";
                                                        }  
                                                        else if (selectedValue == 54) {                                                        
                                                                 lat01  = {{$finelyarea54-> latitude}};
                                                                 long01 = {{$finelyarea54-> longitude}};        
                                                                 document.getElementById("areaobi").src="{{ $area26->path }}";
                                                                 areaname.innerHTML ="京都・"+" {{ $finelyarea54->name }}"+"（{{ $finelyarea54->id }}）";
                                                        }  
                                                        else if (selectedValue == 55) {                                                        
                                                                 lat01  = {{$finelyarea55-> latitude}};
                                                                 long01 = {{$finelyarea55-> longitude}};    
                                                                 document.getElementById("areaobi").src="{{ $area27->path }}";
                                                                 areaname.innerHTML ="大阪・"+" {{ $finelyarea55->name }}"+"（{{ $finelyarea55->id }}）";
                                                        } 
                                                        else if (selectedValue == 56){                                                        
                                                                 lat01  = {{$finelyarea56-> latitude}};
                                                                 long01 = {{$finelyarea56-> longitude}};     
                                                                 document.getElementById("areaobi").src="{{ $area27->path }}";
                                                                 areaname.innerHTML ="　　大阪・"+" {{ $finelyarea56->name }}"+"（{{ $finelyarea56->id }}）";
                                                        }  
                                                        else if (selectedValue == 57) {                                                        
                                                                 lat01  = {{$finelyarea57-> latitude}};
                                                                 long01 = {{$finelyarea57-> longitude}};      
                                                                 document.getElementById("areaobi").src="{{ $area28->path }}";
                                                                 areaname.innerHTML ="兵庫・"+" {{ $finelyarea57->name }}"+"（{{ $finelyarea57->id }}）";
                                                        }  
                                                        else if (selectedValue == 58) {                                                        
                                                                 lat01  = {{$finelyarea58-> latitude}};
                                                                 long01 = {{$finelyarea58-> longitude}};            
                                                                 document.getElementById("areaobi").src="{{ $area28->path }}";
                                                                 areaname.innerHTML ="兵庫・"+" {{ $finelyarea58->name }}"+"（{{ $finelyarea58->id }}）";
                                                        }  
                                                        else if (selectedValue == 59) {                                                        
                                                                 lat01  = {{$finelyarea59-> latitude}};
                                                                 long01 = {{$finelyarea59-> longitude}};         
                                                                 document.getElementById("areaobi").src="{{ $area28->path }}";
                                                                 areaname.innerHTML ="　　兵庫・"+" {{ $finelyarea59->name }}"+"（{{ $finelyarea59->id }}）";
                                                        }
                                                        
                                                         //60～69
                                                        else if (selectedValue == 60) {                                                         
                                                                 lat01  = {{$finelyarea60-> latitude}};
                                                                 long01 = {{$finelyarea60-> longitude}};             
                                                                 document.getElementById("areaobi").src="{{ $area29->path }}";
                                                                 areaname.innerHTML ="奈良・"+" {{ $finelyarea60->name }}"+"（{{ $finelyarea60->id }}）";
                                                        }
                                                        else if (selectedValue ==61) {                                                                
                                                                 lat01  = {{$finelyarea61-> latitude}};
                                                                 long01 = {{$finelyarea61-> longitude}};  
                                                                 document.getElementById("areaobi").src="{{ $area29->path }}";
                                                                 areaname.innerHTML ="　　奈良・"+" {{ $finelyarea61->name }}"+"（{{ $finelyarea61->id }}）";
                                                        }
                                                        //12
                                                        else if (selectedValue == 62) {                                                        
                                                                 lat01  = {{$finelyarea62-> latitude}};
                                                                 long01 = {{$finelyarea62-> longitude}};     
                                                                 document.getElementById("areaobi").src="{{ $area30->path }}";
                                                                 areaname.innerHTML ="　　和歌山・"+" {{ $finelyarea62->name }}"+"（{{ $finelyarea62->id }}）";
                                                        }
                                                        else if (selectedValue == 63) {                                                        
                                                                 lat01  = {{$finelyarea63-> latitude}};
                                                                 long01 = {{$finelyarea63-> longitude}};           
                                                                 document.getElementById("areaobi").src="{{ $area30->path }}";
                                                                 areaname.innerHTML ="　和歌山・"+" {{ $finelyarea63->name }}"+"（{{ $finelyarea63->id }}）";
                                                        }  
                                                        else if (selectedValue == 64) {                                                        
                                                                 lat01  = {{$finelyarea64-> latitude}};
                                                                 long01 = {{$finelyarea64-> longitude}};        
                                                                 document.getElementById("areaobi").src="{{ $area31->path }}";
                                                                 areaname.innerHTML ="鳥取・"+" {{ $finelyarea64->name }}"+"（{{ $finelyarea64->id }}）";
                                                        }  
                                                        else if (selectedValue == 65) {                                                        
                                                                 lat01  = {{$finelyarea65-> latitude}};
                                                                 long01 = {{$finelyarea65-> longitude}};        
                                                                 document.getElementById("areaobi").src="{{ $area31->path }}";
                                                                 areaname.innerHTML ="鳥取・"+" {{ $finelyarea65->name }}"+"（{{ $finelyarea65->id }}）";
                                                        } 
                                                        else if (selectedValue == 66){                                                        
                                                                 lat01  = {{$finelyarea66-> latitude}};
                                                                 long01 = {{$finelyarea66-> longitude}}; 
                                                                 document.getElementById("areaobi").src="{{ $area32->path }}";
                                                                 areaname.innerHTML ="岡山・"+" {{ $finelyarea66->name }}"+"（{{ $finelyarea66->id }}）";
                                                        }  
                                                        else if (selectedValue == 67) {                                                        
                                                                 lat01  = {{$finelyarea67-> latitude}};
                                                                 long01 = {{$finelyarea67-> longitude}};      
                                                                 document.getElementById("areaobi").src="{{ $area32->path }}";
                                                                 areaname.innerHTML ="岡山・"+" {{ $finelyarea67->name }}"+"（{{ $finelyarea67->id }}）";
                                                        }  
                                                        else if (selectedValue == 68) {                                                        
                                                                 lat01  = {{$finelyarea68-> latitude}};
                                                                 long01 = {{$finelyarea68-> longitude}};               
                                                                 document.getElementById("areaobi").src="{{ $area33->path }}";
                                                                 areaname.innerHTML ="島根・"+" {{ $finelyarea68->name }}"+"（{{ $finelyarea68->id }}）";
                                                        }  
                                                        else if (selectedValue == 69) {                                                        
                                                                 lat01  = {{$finelyarea69-> latitude}};
                                                                 long01 = {{$finelyarea69-> longitude}}; 
                                                                 document.getElementById("areaobi").src="{{ $area33->path }}";
                                                                 areaname.innerHTML ="島根・"+" {{ $finelyarea69->name }}"+"（{{ $finelyarea69->id }}）";
                                                        }
                                                        
                                                         //70～79
                                                        else if (selectedValue == 70) {                                                         
                                                                 lat01  = {{$finelyarea70-> latitude}};
                                                                 long01 = {{$finelyarea70-> longitude}};                 
                                                                 document.getElementById("areaobi").src="{{ $area34->path }}";
                                                                 areaname.innerHTML ="広島・"+" {{ $finelyarea70->name }}"+"（{{ $finelyarea70->id }}）";
                                                        }
                                                        else if (selectedValue ==71) {                                                                
                                                                 lat01  = {{$finelyarea71-> latitude}};
                                                                 long01 = {{$finelyarea71-> longitude}};     
                                                                 document.getElementById("areaobi").src="{{ $area34->path }}";
                                                                 areaname.innerHTML ="広島・"+" {{ $finelyarea71->name }}"+"（{{ $finelyarea71->id }}）";
                                                        }
                                                        //12
                                                        else if (selectedValue == 72) {                                                        
                                                                 lat01  = {{$finelyarea72-> latitude}};
                                                                 long01 = {{$finelyarea72-> longitude}};                  
                                                                 document.getElementById("areaobi").src="{{ $area35->path }}";
                                                                 areaname.innerHTML ="山口・"+" {{ $finelyarea72->name }}"+"（{{ $finelyarea72->id }}）";
                                                        }
                                                        else if (selectedValue == 73) {                                                        
                                                                 lat01  = {{$finelyarea73-> latitude}};
                                                                 long01 = {{$finelyarea73-> longitude}};     
                                                                 document.getElementById("areaobi").src="{{ $area35->path }}";
                                                                 areaname.innerHTML ="山口・"+" {{ $finelyarea73->name }}"+"（{{ $finelyarea73->id }}）";
                                                        }  
                                                        else if (selectedValue == 74) {                                                        
                                                                 lat01  = {{$finelyarea74-> latitude}};
                                                                 long01 = {{$finelyarea74-> longitude}};    
                                                                 document.getElementById("areaobi").src="{{ $area36->path }}";
                                                                 areaname.innerHTML ="徳島・"+" {{ $finelyarea74->name }}"+"（{{ $finelyarea74->id }}）";
                                                        }  
                                                        else if (selectedValue == 75) {                                                        
                                                                 lat01  = {{$finelyarea75-> latitude}};
                                                                 long01 = {{$finelyarea75-> longitude}};            
                                                                 document.getElementById("areaobi").src="{{ $area36->path }}";
                                                                 areaname.innerHTML ="徳島・"+" {{ $finelyarea75->name }}"+"（{{ $finelyarea75->id }}）";
                                                        } 
                                                        else if (selectedValue == 76){                                                        
                                                                 lat01  = {{$finelyarea76-> latitude}};
                                                                 long01 = {{$finelyarea76-> longitude}};   
                                                                 document.getElementById("areaobi").src="{{ $area37->path }}";
                                                                 areaname.innerHTML ="香川・"+" {{ $finelyarea76->name }}"+"（{{ $finelyarea76->id }}）";
                                                        }  
                                                        else if (selectedValue == 77) {                                                        
                                                                 lat01  = {{$finelyarea77-> latitude}};
                                                                 long01 = {{$finelyarea77-> longitude}};        
                                                                 document.getElementById("areaobi").src="{{ $area37->path }}";
                                                                 areaname.innerHTML ="香川・"+" {{ $finelyarea77->name }}"+"（{{ $finelyarea77->id }}）";
                                                        }  
                                                        else if (selectedValue == 78) {                                                        
                                                                 lat01  = {{$finelyarea78-> latitude}};
                                                                 long01 = {{$finelyarea78-> longitude}};       
                                                                 document.getElementById("areaobi").src="{{ $area38->path }}";
                                                                 areaname.innerHTML ="愛媛・"+" {{ $finelyarea78->name }}"+"（{{ $finelyarea78->id }}）";
                                                        }  
                                                        else if (selectedValue == 79) {                                                        
                                                                 lat01  = {{$finelyarea79-> latitude}};
                                                                 long01 = {{$finelyarea79-> longitude}}; 
                                                                 document.getElementById("areaobi").src="{{ $area38->path }}";
                                                                 areaname.innerHTML ="愛媛・"+" {{ $finelyarea79->name }}"+"（{{ $finelyarea79->id }}）";
                                                        }  
                                                        
                                                         //80～89
                                                        else if (selectedValue == 80) {                                                         
                                                                 lat01  = {{$finelyarea80-> latitude}};
                                                                 long01 = {{$finelyarea80-> longitude}};          
                                                                 document.getElementById("areaobi").src="{{ $area39->path }}";
                                                                 areaname.innerHTML ="　　高知・"+" {{ $finelyarea80->name }}"+"（{{ $finelyarea80->id }}）";
                                                        }
                                                        else if (selectedValue ==81) {                                                                
                                                                 lat01  = {{$finelyarea81-> latitude}};
                                                                 long01 = {{$finelyarea81-> longitude}};          
                                                                 document.getElementById("areaobi").src="{{ $area39->path }}";
                                                                 areaname.innerHTML ="高知・"+" {{ $finelyarea81->name }}"+"（{{ $finelyarea81->id }}）";
                                                        }
                                                        //12
                                                        else if (selectedValue == 82) {                                                        
                                                                 lat01  = {{$finelyarea82-> latitude}};
                                                                 long01 = {{$finelyarea82-> longitude}};          
                                                                 document.getElementById("areaobi").src="{{ $area40->path }}";
                                                                 areaname.innerHTML ="　　福岡・"+" {{ $finelyarea82->name }}"+"（{{ $finelyarea82->id }}）";
                                                        }
                                                        else if (selectedValue == 83) {                                                        
                                                                 lat01  = {{$finelyarea83-> latitude}};
                                                                 long01 = {{$finelyarea83-> longitude}};                           
                                                                 document.getElementById("areaobi").src="{{ $area40->path }}";
                                                                 areaname.innerHTML ="　　福岡・"+" {{ $finelyarea83->name }}"+"（{{ $finelyarea83->id }}）";
                                                        }  
                                                        else if (selectedValue == 84) {                                                        
                                                                 lat01  = {{$finelyarea84-> latitude}};
                                                                 long01 = {{$finelyarea84-> longitude}};                    
                                                                 document.getElementById("areaobi").src="{{ $area41->path }}";
                                                                 areaname.innerHTML ="　　佐賀・"+" {{ $finelyarea84->name }}"+"（{{ $finelyarea84->id }}）";
                                                        }  
                                                        else if (selectedValue == 85) {                                                        
                                                                 lat01  = {{$finelyarea85-> latitude}};
                                                                 long01 = {{$finelyarea85-> longitude}};            
                                                                 document.getElementById("areaobi").src="{{ $area41->path }}";
                                                                 areaname.innerHTML ="佐賀・"+" {{ $finelyarea85->name }}"+"（{{ $finelyarea85->id }}）";
                                                        } 
                                                        else if (selectedValue == 86){                                                        
                                                                 lat01  = {{$finelyarea86-> latitude}};
                                                                 long01 = {{$finelyarea86-> longitude}};                 
                                                                 document.getElementById("areaobi").src="{{ $area42->path }}";
                                                                 areaname.innerHTML ="　　　長崎・"+" {{ $finelyarea86->name }}"+"（{{ $finelyarea86->id }}）";
                                                        }  
                                                        else if (selectedValue == 87) {                                                        
                                                                 lat01  = {{$finelyarea87-> latitude}};
                                                                 long01 = {{$finelyarea87-> longitude}};                      
                                                                 document.getElementById("areaobi").src="{{ $area42->path }}";
                                                                 areaname.innerHTML ="長崎・"+" {{ $finelyarea87->name }}"+"（{{ $finelyarea87->id }}）";
                                                        }  
                                                        else if (selectedValue == 88) {                                                        
                                                                 lat01  = {{$finelyarea88-> latitude}};
                                                                 long01 = {{$finelyarea88-> longitude}};      
                                                                 document.getElementById("areaobi").src="{{ $area43->path }}";
                                                                 areaname.innerHTML ="熊本・"+" {{ $finelyarea88->name }}"+"（{{ $finelyarea88->id }}）";
                                                        }  
                                                        else if (selectedValue == 89) {                                                        
                                                                 lat01  = {{$finelyarea89-> latitude}};
                                                                 long01 = {{$finelyarea89-> longitude}};                 
                                                                 document.getElementById("areaobi").src="{{ $area43->path }}";
                                                                 areaname.innerHTML ="熊本・"+" {{ $finelyarea89->name }}"+"（{{ $finelyarea89->id }}）";
                                                        }  
                                                        
                                                         //90～97
                                                        else if (selectedValue == 90) {                                                         
                                                                 lat01  = {{$finelyarea90-> latitude}};
                                                                 long01 = {{$finelyarea90-> longitude}};
                                                                 document.getElementById("areaobi").src="{{ $area44->path }}";
                                                                 areaname.innerHTML ="大分・"+" {{ $finelyarea90->name }}"+"（{{ $finelyarea90->id }}）";
                                                        }
                                                        else if (selectedValue ==91) {                                                                
                                                                 lat01  = {{$finelyarea91-> latitude}};
                                                                 long01 = {{$finelyarea91-> longitude}};   
                                                                 document.getElementById("areaobi").src="{{ $area44->path }}";
                                                                 areaname.innerHTML ="大分・"+" {{ $finelyarea91->name }}"+"（{{ $finelyarea91->id }}）";
                                                        }
                                                        //12
                                                        else if (selectedValue == 92) {                                                        
                                                                 lat01  = {{$finelyarea92-> latitude}};
                                                                 long01 = {{$finelyarea92-> longitude}};                    
                                                                 document.getElementById("areaobi").src="{{ $area45->path }}";
                                                                  areaname.innerHTML ="宮崎・"+" {{ $finelyarea92->name }}"+"（{{ $finelyarea92->id }}）";
                                                        }
                                                        else if (selectedValue == 93) {                                                        
                                                                 lat01  = {{$finelyarea93-> latitude}};
                                                                 long01 = {{$finelyarea93-> longitude}};                   
                                                                 document.getElementById("areaobi").src="{{ $area45->path }}";
                                                                  areaname.innerHTML ="宮崎・"+" {{ $finelyarea93->name }}"+"（{{ $finelyarea93->id }}）";
                                                        }  
                                                        else if (selectedValue == 94) {                                                        
                                                                 lat01  = {{$finelyarea94-> latitude}};
                                                                 long01 = {{$finelyarea94-> longitude}}; 
                                                                 document.getElementById("areaobi").src="{{ $area46->path }}";
                                                                  areaname.innerHTML ="　　鹿児島・"+" {{ $finelyarea94->name }}"+"（{{ $finelyarea94->id }}）";
                                                        }  
                                                        else if (selectedValue == 95) {                                                        
                                                                 lat01  = {{$finelyarea95-> latitude}};
                                                                 long01 = {{$finelyarea95-> longitude}};
                                                                 document.getElementById("areaobi").src="{{ $area46->path }}";
                                                                 areaname.innerHTML ="　鹿児島・"+" {{ $finelyarea95->name }}"+"（{{ $finelyarea95->id }}）";
                                                        } 
                                                        else if (selectedValue == 96){                                                        
                                                                 lat01  = {{$finelyarea96-> latitude}};
                                                                 long01 = {{$finelyarea96-> longitude}};       
                                                                   //↓文字と画像変更
                                                                  document.getElementById("areaobi").src="{{ $area47->path }}";
                                                                  areaname.innerHTML ="沖縄・"+" {{ $finelyarea96->name }}"+"（{{ $finelyarea96->id }}）";
                                                        }  
                                                        else if (selectedValue == 97) {                                                        
                                                                 lat01  = {{$finelyarea97-> latitude}};
                                                                 long01 = {{$finelyarea97-> longitude}}; 
                                                                 //↓文字と画像変更
                                                                  document.getElementById("areaobi").src="{{ $area47->path }}";
                                                                  areaname.innerHTML ="沖縄・"+" {{ $finelyarea97->name }}"+"（{{ $finelyarea97->id }}）";
                                                               
                                                        }  



                                        
                                            /*
                                            URL:'https://api.open-meteo.com/v1/forecast?latitude=52.52&longitude=13.41&current=temperature_2m,relative_humidity_2m,weather_code&hourly=temperature_2m,precipitation_probability,weather_code&forecast_days=1';
                                            
                                            現在の気温
                                            現在の天気コード
                                            現在の湿度
                                            時間毎の天気コード
                                            時間毎の降水確率
                                            時間毎の気温
                                            
                                            */
                                                
                                                        
                            　                 const apiUrl123 = 'https://api.open-meteo.com/v1/forecast?latitude='+lat01+'&longitude='+long01+'&current=temperature_2m,relative_humidity_2m,weather_code&hourly=temperature_2m,precipitation_probability,weather_code&timezone=Asia%2FTokyo&forecast_days=1';
                                                console.log(lat01+"です");
                                            　　console.log(long01+"です");
                            
                                               fetch(apiUrl123)
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
                                                const fukai01 = 0.81*temperature + 0.01*humidity * (0.99*temperature - 14.3) + 46.3;   //不快指数
                                                
                                                
                                            
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
                                            
                                    console.log(fukai01+"です！！！！");
                                        //寒い
                                            if(fukai01 <　55){
                                                hukaiSisuu.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705675669/%E3%81%82%E3%81%8B%E3%82%93_hkfi0w.png';
                                            }
                                            //肌寒い
                                            else if(fukai01 >= 55 && fukai01 <= 65 ){
                                                hukaiSisuu.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705675669/%E3%81%95%E3%82%80%E3%81%84_jbbyyb.png';
                                            }
                                            //快い
                                            else if(fukai01 > 65 && fukai01 <= 75 ){
                                                hukaiSisuu.src  = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705675669/%E3%81%82%E3%81%A4%E3%81%84_rkd08t.png';
                                            }
                                                //暑い
                                            else if(fukai01 > 75 && fukai01 <= 85 ){
                                                hukaiSisuu.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867812/%E6%99%AE%E9%80%9A_ekdgqe.png';
                                            }
                                            //暑くてたまらない
                                            else if(fukai01 >= 86){
                                                hukaiSisuu.src = 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702867812/%E3%81%82%E3%81%8B%E3%82%93_v4stef.png';
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
                                        rainypercent_morning.innerHTML  = "⛆   "+ probability[7] + "%";
                                    
                                    
                                        
                                        
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
                                            
                                            
                                            
                                            
                                            
                                            
                                            })
                                            
                                            
                                            .catch(error => {
                                            console.error('データ取得に失敗しました',error)
                                            });
                                        //ワンポイント用コード↓
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
                                        lat2  =　lat01; 
                                   　　  long2 =  long01;
                                        console.log(lat2+"です！");　　
                                        console.log(long2+"です！");
                                        
                                         //open-meteoからURLを取得
                                         apiUrl2 = 'https://api.open-meteo.com/v1/forecast?latitude='+lat2+'&longitude='+long2+'&current=temperature_2m,relative_humidity_2m,weather_code&hourly=temperature_2m,relative_humidity_2m,precipitation_probability,weather_code,uv_index&timezone=Asia%2FTokyo&forecast_days=1';
                                         
                                         const temMax = function (a, b) {return Math.max(a, b);} //最高気温
                                         const temMin = function (a, b) {return Math.min(a, b);} //最低気温
                                         const uvMax  = function (a, b) {return Math.max(a, b);} //一番紫外線が強い
                                         //const snowMax = function (a, b) {return Math.max(a,b);} //降雪量
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
                                                     let samatu = 1; // 1:寒がりさん？0:暑がりさん？
                                
                                                    let result = weather_code.some(function(value){
                                                        return value == 71  || value == 75;
                                                    });    
                                
                                
                                                    //確認用
                                                    
                                                    console.log(fukai2+"です！！！！");

                                
                                                    
                                                     
                                                        
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
                                                   
                                                       
                                                            
                                                            //不快指数分岐(ワンポイント)
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


                                      
                                      
                        　　lat3  =lat01;
                            long3 = long01;  
                            //open-meteoからURLを取得
                            //const apiUrl = ' https://api.open-meteo.com/v1/forecast?latitude=52.52&longitude=13.41&current=temperature_2m,relative_humidity_2m,weather_code&timezone=Asia%2FTokyo&forecast_days=1';
                            const apiUrl3 = 'https://api.open-meteo.com/v1/forecast?latitude='+lat3+'&longitude='+long3+'&current=temperature_2m,relative_humidity_2m,weather_code&hourly=temperature_2m,precipitation_probability,weather_code&timezone=Asia%2FTokyo&forecast_days=1';      
                          
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


                                               


                          //fetch処理でurlからjson形式で情報を取得
                        //Button()の終わり
                        }
                        



                                
                               
                           </script>


    </html>