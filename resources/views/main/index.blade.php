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
                    <div class="WebpageColor_box">
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
                            
                            <!-- 現在の天気・温度表示用 表示分けないなら一個でいいかも -->
                            <p id="sampleweather" style="position: relative;font-family: 'Hattori Hanzo', serif;font-size: 500%;">
                             
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
                            
                            <!-- 都道府県表示用 -->
                            <div>
                                兵庫県
                                <img src="https://res.cloudinary.com/dlfimibcq/image/upload/v1700613658/1696480649456_rvyzkj.png" style="max-width: 70%">
                            </div>
                            <!---お天気アイコン-->
				            <div id="morning_OTENKI" >
				                朝
                                <img src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702867044/kumorinotihare_f29z7h.png" style="width: 120px;"/>
                            	<!-- 湿度 -->
                            	<p id="temperature_morning" style="margin: -2% 0% -10%;">
                            	    5°C
                            	</p>
                            	<p id="rainypercent_morning">
                            	    💧10% 　<!-- 半角,全角空白で位置調整 -->
                            	</p>
				            </div>
				            <div>
				                昼
                                <img id="noon_OTENKI" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702867044/kumorinotihare_f29z7h.png" style="width: 120px;"/>
                                <!-- 湿度 -->
                                <p id="temperature_noon" style="margin: -2% 0% -10%;">
                            	    5°C
                            	</p>
                                <p id="rainypercent_noon" style="margin: -14% 0% -10%;">
                                    10%
                                </p>
				            </div>
				            <div>
                            	 夜
                                <img id="night_OTENKI" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702867044/kumorinotihare_f29z7h.png" style="width: 120px;"/>
                            	<!-- 湿度 -->
                            	<p id="temperature_night" style="margin: -2% 0% -10%;">
                            	    5°C
                            	</p>
                            	<p id="rainypercent_night" style="margin: -14% 0% -10%;">
                            	    20%
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
                                    <img  src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702867812/%E6%9C%80%E9%AB%98b_h92oe9.png"  />
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

    let lat = 35.6785;
    let long = 139.6823;
    
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
        const humidity = jsonData.current.relative_humidity_2m;                                      //現在の湿度                             
        const fukai = 0.81*temperature + 0.01*humidity * (0.99*temperature - 14.3) + 46.3;   //不快指数
        
       
        
        //天気コード分岐
            //晴れ
            if(weather === 0 || weather === 1){
              sampleweather.innerHTML = "☀"+temperature + "℃";
  
            }
            //曇り
            else if(weather === 2 || weather === 3){
              sampleweather.innerHTML =  "☁"+temperature + "℃";
            }
            //雨
            else if(weather === 69 || weather === 84  ){
              sampleweather.innerHTML =  "☂"+temperature + "℃";
            }
            else{
              sampleweather.innerHTML = "★"+temperature + "℃";
            }

  
            

        //降水確率（平均を出力　24時間分の合計÷24）
        let psum =  probability.reduce(function(acc ,cur){
            return acc + cur;
        });
        //不快指数分岐
        //寒い
            if(fukai <= 54){
           
              hukaiSisuu.innerHTML = "<img src ='https://res.cloudinary.com/dlfimibcq/image/upload/v1702867812/%E8%89%AF%E3%81%8F%E3%81%AA%E3%81%84_ivv2mz.png'>";
  
            }
            //肌寒い
            else if(fukai >= 55 && fukai <= 65 ){
                console.log("肌寒い　"+ fukai);
            }
            //快い
            else if(fukai >= 65 && fukai <= 75 ){
                console.log("快い　"+ fukai);
            }
            //暑い
            else if(fukai >= 75 && fukai <= 85 ){
                console.log("暑い　"+ fukai);
            }
            //暑くてたまらない
            else if(fukai >= 86){
                console.log("暑くてたまらない　"+ fukai);
            }
            
            
            

        //出力
        //console.log(probability);
       // morning_OTENKI.innerHTML = "<img src='https://res.cloudinary.com/dlfimibcq/image/upload/v1702867812/%E8%89%AF%E3%81%8F%E3%81%AA%E3%81%84_ivv2mz.png'>";
    
    
    
        console.log("昼の気温は"+temperature2[13]+"℃です");
        console.log("夜の気温は"+temperature2[19]+"℃です");
        console.log("降水確率は"+probability[7]"％です");
        console.log("降水確率は"+probability[13]"％です");
        console.log("降水確率は"+probability[19]"％です");

        
    })
    
    
    .catch(error => {
        console.error('データ取得に失敗しました',error)
    });
</script>		

                        </div>

                        <!--戻るボタン-->
                        <div class="test01"　>
                            <button onclick="">
                                 <img src="https://res.cloudinary.com/dlfimibcq/image/upload/v1700613658/1696480649456_rvyzkj.png" width=150px height=150px; />
                            </button>
                        </div>

                        <!---選んだ服のアイコン-->
            			<font size="6">
                            <body>
                                <div>{{ Auth::user()->area_finely_id->name }}</div>
                                <table align="center"  border="1">
            				        <tr>
                                        <td>　　　　</td>
            				            <td>トップス</td>
                                        <td>　　　　</td>
            				　          <td>ボトムス</td>
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
            
            			       <table align="center"  border="1">
                    				<tr>
                                        <td>　　　　</td>
                    				    <td>アウター</td>
                                        <td>　　　　</td>
                    				　  <td>お出かけ</td>
                    				    <td>　　　　</td>
                                    </tr>			
                                    <tr>
                    				    <td>　　　</td>
                    				    <td class="clothes_box1"></td>
                    				    <td>　　　</td>
                                        <td class="clothes_box1"></td>
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
                        <div></div>
                    
                    
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
                                            <p id="advice" class="kaiwa-text">
                                                <font size="4">
                                                    温度が急激に下がっています。マフラーや手袋があると良いでしょう。 カイロがあるとより安心です。
                                                    <!-- Lorem ipsum dolor sit amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.-->
                                                </font>
                                            </p>
                                         </center>
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

<svg class="fill-cyan-500 hover:fill-cyan-700">
  <!-- ... -->
</svg>
        </body>
    </html> 