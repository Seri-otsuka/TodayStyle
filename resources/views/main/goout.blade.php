 <!DOCTYPE html>
    <html lang="ja">
        <head>
            <meta charset="utf-8">
            <title>メインページ</title>
           <meta name="description" content="">

<style>

/* 上の余白消す */
* { 
    margin: 0px; 
    padding: 0px; 
}


/* 画面の色・比率 */
.WebpageColor_box {
  width: 1400px;
  height: 3300px;
  background: #d5d5d5;
}

.Hiritu {
  zoom: 0.7;
  -moz-transform: scale(0.7);
}


/* 天気表示画面の黒おび*/
.weather_box {
  width: 1400px;
  height: 275px;
  background: #000000;
  color: #2196F3;
}

/* 戻るボタンを右寄せするcss*/
.test01 {
	text-align: right;
}

.dli-arrow-left {
  display: inline-block;
  vertical-align: middle;
  color: #fff;
  line-height: 1;
  position: relative;
  width: 3em;
  height: 0.5em;
  background: currentColor;
}

.dli-arrow-left::before {
  content: '';
  width: 2em;
  height: 2em;
  border: 0.5em solid currentColor;
  border-right: 0;
  border-bottom: 0;
  transform: rotate(-45deg);
  transform-origin: top left;
  position: absolute;
  top: 50%;
  left: -0.5em;
  box-sizing: border-box;
}

/* 都道府県選択*/
.cp_ipselect {
	position: relative;
	width: 90%;
	margin: 2em auto;
	text-align: center;
}
.cp_sl06 {
	position: relative;
	font-family: inherit;
	background-color: transparent;
	width: 100%;
	padding: 10px 10px 10px 0;
	font-size: 18px;
	border-radius: 0;
	border: none;
	border-bottom: 1px solid rgba(0,0,0, 0.3);
}
.cp_sl06:focus {
	outline: none;
	border-bottom: 1px solid rgba(0,0,0, 0);
}
.cp_ipselect .cp_sl06 {
	appearance: none;
	-webkit-appearance:none
}
.cp_ipselect select::-ms-expand {
	display: none;
}
.cp_ipselect:after {
	position: absolute;
	top: 18px;
	right: 10px;
	width: 0;
	height: 0;
	padding: 0;
	content: '';
	border-left: 6px solid transparent;
	border-right: 6px solid transparent;
	border-top: 6px solid rgba(0, 0, 0, 0.3);
	pointer-events: none;
}
.cp_sl06_selectlabel {
	color: rgba(0,0,0, 0.5);
	font-size: 18px;
	font-weight: normal;
	position: absolute;
	pointer-events: none;
	left: 0;
	top: 10px;
	transition: 0.2s ease all;
}
.cp_sl06:focus ~ .cp_sl06_selectlabel, .cp_sl06:valid ~ .cp_sl06_selectlabel {
	color: #da3c41;
	top: -20px;
	transition: 0.2s ease all;
	font-size: 14px;
}
.cp_sl06_selectbar {
	position: relative;
	display: block;
	width: 100%;
}
.cp_sl06_selectbar:before, .cp_sl06_selectbar:after {
	content: '';
	height: 2px;
	width: 0;
	bottom: 1px;
	position: absolute;
	background: #da3c41;
	transition: 0.2s ease all;
}
.cp_sl06_selectbar:before {
	left: 50%;
}
.cp_sl06_selectbar:after {
	right: 50%;
}
.cp_sl06:focus ~ .cp_sl06_selectbar:before, .cp_sl06:focus ~ .cp_sl06_selectbar:after {
	width: 50%;
}
.cp_sl06_highlight {
	position: absolute;
	top: 25%;
	left: 0;
	pointer-events: none;
	opacity: 0.5;
}

/* 地域詳細 */
ul {
    list-style: none;
}
.selectdiv {
  position: relative;
  /*Don't really need this just for demo styling*/
  
  float: left;
  min-width: 200px;
  margin: 50px 33%;
}

/* IE11 hide native button (thanks Matt!) */
select::-ms-expand {
display: none;
}

.selectdiv:after {
  content: '<>';
  font: 17px "Consolas", monospace;
  color: #333;
  -webkit-transform: rotate(90deg);
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  transform: rotate(90deg);
  right: 11px;
  /*Adjust for position however you want*/
  
  top: 18px;
  padding: 0 0 2px;
  border-bottom: 1px solid #999;
  /*left line */
  
  position: absolute;
  pointer-events: none;
}

.selectdiv select {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  /* Add some styling */
  
  display: block;
  width: 100%;
  max-width: 320px;
  height: 50px;
  float: right;
  margin: 5px 0px;
  padding: 0px 24px;
  font-size: 20px;
  line-height: 1.75;
  color: #333;
  background-color: #ffffff;
  background-image: none;
  border: 1px solid #cccccc;
  -ms-word-break: normal;
  word-break: normal;
}
.circle_btn02 {
  position: relative;
  display: flex;
  justify-content: space-around;
  align-items: center;
  max-width: 300px; /* ボタンの最大幅 */
  padding: 1em 2em;
  color: initial; /* 文字色 */
  transition: 0.3s ease-in-out;
  font-weight: bold;
  text-decoration: none;
}

.circle_btn02::before, .circle_btn02::after {
  content: "";
  position: absolute;
  display: block;
  top: 50%;
}

.circle_btn02::before {
  width: 0.5em;
  height: 0.5em;
  left: 1em;
  border-top: solid 2px #fff; /* 矢印の色 */
  border-right: solid 2px #fff; /* 矢印の色 */
  z-index: 2;
  transform: translateY(-50%) rotate(45deg);
  transition: all 0.3s;
}

.circle_btn02::after {
  left: 0;
  background: #4D9BC1; /* 背景色 */
  z-index: 1;
  width: 3em;
  height: 3em;
  border-radius: 3em;
  transform: translateY(-50%);
  transition: all 0.5s;
}

.circle_btn02 span {
  position: relative;
  transition: all 0.3s;
  z-index: 3;
}

/* マウスオーバーした際のデザイン */
.circle_btn02:hover span {
  color: #fff; /* 文字色 */
}

.circle_btn02:hover:before {
  left: 2rem;
}

.circle_btn02:hover:after {
  right: 0;
  width: 100%;
}
/* 選んだ服のアイコンの枠 */
.clothes_box1 {
  width: 500px;
  height: 500px;
  background: #ffffff;
  border-radius: 20px;
}
.suitcase{
  width: 120px;
  height: 120px;
}

/* shopのアイコン */
.btn-social-square {
  display: inline-block;
  text-decoration: none;
  width: 200px;
  margin:2px;
  height: 200px;
  line-height: 50px;
  font-size: 23px;
  color:white;
  border-radius: 12px;
  text-align: center;
  overflow: hidden;
  font-weight: bold;
  transition: .3s;
}
.btn-social-square i {
  line-height:50px;
}
.btn-social-square:hover {
  -webkit-transform: translateY(-5px);
  transform: translateY(-5px);
}

/* 吹き出し ＆　悲壮犬 */
/* 全体のスタイル */
.kaiwa {
  margin-bottom: 25px;
}
/* 右画像 */
.kaiwa-img-right {
  margin: 0;
  float: right;
  width: 300px;
  height: 300px;
  margin-left: -70px;
}
.kaiwa figure img {
  width: 100%;
  height: 100%;
}
/* 右からの吹き出しテキスト */
.kaiwa-text-left {
  position: relative;
  margin-right: 80px;
  padding: 10px;
  border-radius: 20px;
  background-color: #ffffff;
  margin-left: 12%;
  float: right;
}
p.kaiwa-text {
  margin: 0 0 10px;
}
p.kaiwa-text:last-child {
  margin-bottom: 0;
}
/* 右の三角形を作る */
.kaiwa-text-left:before {
  position: absolute;
  content: '';
  border: 10px solid transparent;
  top: 15px;
  right: -20px;
}
.kaiwa-text-left:after {
  position: absolute;
  content: '';
  border: 10px solid transparent;
  border-left: 10px solid #ffffff;
  top: 15px;
  right: -19px;
}
/* 回り込み解除 */
.kaiwa:after,.kaiwa:before {
  clear: both;
  content: "";
  display: block;
}


/*dropdown用 flex-endで右寄せ でも反映されて無さそう？*/
.dropdown{
  justify-content: flex-end;
}

/* p184参考書より コンテンツの最大表示幅 */
.wrapper{
  max-width: 1400px;  /* 横幅最大1100px */
  margin: 0 auto;     /* 中央に配置する指定 */
}

/* p208参考 天気、気温、湿度、不快指数表示用 横並び */
.weather-contents{
  display: flex;                   /* flexboxの指定 */
  justify-content: space-around;  /*               */
  /*margin-bottom: 50px;*/    	/* 下にmarginを50px取得 */
}

/* !天気関連 要素ごとに余白を開ける */
.weather-social{
    /* margin-left: 10%; */
    /* margin-right: 5%; */
    margin: 20% 0% 10%;
    width: 200px;
}

.weather-social-text{
	position: relative;
	color: white;
	font-family: 'Hattori Hanzo', serif;
	margin: 6% 0% 10%;
	font-size: 730%;
}

</style>
</head>
            
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


			<!-- 現在の天気・温度表示用 表示分けないなら一個でいいかも -->
                            <p id="sampleweather" style="position: relative;font-family: 'Hattori Hanzo', serif;font-size: 500%;">
                             
                            </p>
                            <p id="sampletera" style="position: relative;font-family: 'Hattori Hanzo', serif;font-size: 500%;">
                                
                            </p>
                    
                        <!---天気表示（黒おび）-->
                        <div class="weather_box wrapper weather-contents">

			<!-- 都道府県表示用 -->
                            <div>
                                兵庫県
                                <img src="https://res.cloudinary.com/dlfimibcq/image/upload/v1700613658/1696480649456_rvyzkj.png" style="max-width: 70%">
                            </div>

				<!---お天気アイコン-->
				<div>
				                朝
                                <img id="click_OTENKI" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702867044/kumorinotihare_f29z7h.png" style="width: 160px;"/>
                            	<!-- 湿度 -->
                            	<p>
                            	    10%
                            	</p>
				            </div>
				            <div>
				                昼
                                <img id="noon_OTENKI" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702867044/kumorinotihare_f29z7h.png" style="width: 160px;"/>
                                <!-- 湿度 -->
                                <p>
                                    10%
                                </p>
				            </div>
				            <div>
                            	 夜
                                <img id="night_OTENKI" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702867044/kumorinotihare_f29z7h.png" style="width: 160px;"/>
                            	<!-- 湿度 -->
                            	<p>
                            	    20%
                            	</p>
				</div>
			    	<script>
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
			    </script>



                            <p id="sampleweather" class="weather-social-text">
                             
                            </p>
                            <p id="sampleweather" class="weather-social-text">
                                
                            </p>
                           
			    <!---環境指数-->
			<div>
                            <p>
                                <img id="click_KankyouSisuu" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702867812/%E6%9C%80%E9%AB%98b_h92oe9.png" class="weather-social" />
                            </p>
			</div>
			    <script>
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
			    </script>

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
                                      sampleweather.innerHTML = "☀　"+ temperature + "℃";
                          
                                    }
                                    
                                    else{
                                      sampleweather.innerHTML = "☂　"+ temperature + "℃";
                                    }
                          
                                    
                                })
                                .catch(error => {
                                    console.error('データ取得に失敗しました',error)
                                });
                            </script>
                        </div>
<!--戻るボタン-->
<div class="test01"　>
<button onclick="">
                                 <img src="kkrn_icon_modoru_16.png" width=150px height=150px;　style="margin: 75% 0% 300%;"/>
                                </button>
</div>

    <!---都道府県選択-->
<form>
<div class="cp_ipselect">
<select  name=”item” class="cp_sl06" required>
<option value="" hidden disabled selected></option>
<option value="item1">北海道</option>
<option value="item2">青森県</option>
<option value="item3">岩手県</option>
<option value="item4">宮城県</option>
<option value="item5">秋田県</option>
<option value="item6">山形県</option>
<option value="item7">福島県</option>
<option value="item8">茨城県</option>
</select>
<span class="cp_sl06_highlight"></span>
<span class="cp_sl06_selectbar"></span>
<label class="cp_sl06_selectlabel">お住まいの地域</label>
</div>
</form>

<!---地域詳細--->
<font size="5">
<details><summary><strong>地域詳細</strong></summary>
<ul>
  <li>

<table align="center" border="1">		
                                <tr>
				　<td>　　　　　</td>
				  <td><img src=
"town2021.png" width="600" height="600"/></td>
				<td>　　　　　</td>  
                                  <td><div class="selectdiv" style="margin: 30% 0% -300% 0%;">
  <label>
      <select>
          <option selected>選択</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
      </select>
  </label>
</div></td>
<td><a href="#" class="circle_btn02"　 style="margin: 30% 0% -300% 0%;"><span>決定</span></a>　</td>

                                </tr>
			    </table>

</li>
</ul>
</details>
</font size>               
                        <!---選んだ服のアイコン-->
			<font size="6">
                        <body>
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
				　<td><input class="suitcase" type="image" id="image"src="https://res.cloudinary.com/dlfimibcq/image/upload/v1700613658/1696480649456_rvyzkj.png" style="margin: 0% 0% 300%;"/></td>
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
        </body>
    </html>