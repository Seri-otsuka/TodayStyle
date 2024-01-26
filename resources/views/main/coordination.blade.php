 <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>コーディネートルーム</title>
            <!-- Fonts -->
            <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="{{ 'css/app.css' }}">
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        </head> 
 
<div  class="Hiritu">	
<center>
    
      {{-- <!--お試しで入れてます、あとで消してね！-->
        <div>
            @foreach($n_1categories as $n_1category )
            @foreach($n_1category->images()->latest()->get() as $image)
            <img src={{ $image->path }} style="max-width: 10%">
            @endforeach
            @endforeach
        </div>--}}

        <div class="coordWebpageColor_box">
        <button type="button">
            <div class="botan">
                <a href="{{ route('main') }}">
                    <img id="return" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705026228/modoru_r4tkuo.png"width=105px height=105px; >
                 </a>
                <font size="40"class="text">コーディネートルーム</font>
             </div>
        </button>
        
       
         <!---コーディネート枠-->
        
     <div class="coord_box">
       <a href="javascript:void(0)"onclick="buttonClick();" class="btn btn-flat">
                <span>
                 reset!
                </span>
            </a> 
            
        <div class="manekin">
            <img src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705280542/%E3%82%B9%E3%82%BF%E3%83%B3%E3%83%80%E3%83%BC%E3%83%89%E3%81%AA%E4%BA%BA%E7%89%A9%E3%83%94%E3%82%AF%E3%83%88%E3%82%B0%E3%83%A9%E3%83%A0_%E4%BD%99%E7%99%BD%E3%82%AB%E3%83%83%E3%83%88_z6oq0y.png"class="manekinsize">
        </div>
        <div class="tops">
            <img id="top" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1703848138/%E3%81%97%E3%81%8B%E3%81%8F%E3%81%AE%E3%82%A2%E3%82%A4%E3%82%B3%E3%		83%B3_di4zbl.png"class="boxsize" >
        </div>
        <div class="botoms">
            <img id="botom" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1703848138/%E3%81%97%E3%81%8B%E3%81%8F%E3%81%AE%E3%82%A2%E3%82%A4%E3%82%B3%E3%		83%B3_di4zbl.png"class="boxsize" >
        </div>
        <div class="outer">
            <img id="out" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1703848138/%E3%81%97%E3%81%8B%E3%81%8F%E3%81%AE%E3%82%A2%E3%82%A4%E3%82%B3%E3%		83%B3_di4zbl.png"class="boxsize" >
        </div>
        
   
    </div>
           
        <div class="box1">
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
            <!--ここまで所持しているかどうかの処理コード-->
            
           <!--1番目--->
        <div class="icon">
            <img id="one" name="one"class="fukuiconsize" >
        </div>
        <div class="box2"style="display: flex; flex-wrap: wrap;">
            <div>
                @foreach($n_4categories as $n_4category )
                @foreach($n_4category->images()->latest()->get() as $image)
                @if($image->user_id == Auth::id())
                <img id = {{ $image->id }}   src={{ $image->path }} class="fukusize">
                @endif
                @endforeach
                @endforeach
            </div>
        </div>


        <!---2番目--->
        <div class="icon">
            <img id="two" name="two" class="fukuiconsize">
        </div>
        

        <div class="box2"style="display: flex; flex-wrap: wrap;">
            <div >
                @foreach($n_5categories as $n_5category )
                @foreach($n_5category->images()->latest()->get() as $image)
                @if($image->user_id == Auth::id())
                <img id = {{ $image->id }}   src={{ $image->path }} class="fukusize">
                @endif
                @endforeach
                @endforeach
            </div>
        </div>

        <!---3番目--->
        <div class="icon">
            <img id="three" name="three"class="fukuiconsize" >

        </div>
        
        <div class="box2"style="display: flex; flex-wrap: wrap;">
            <div>
                @foreach($n_8categories as $n_8category )
                @foreach($n_8category->images()->latest()->get() as $image)
                @if($image->user_id == Auth::id())
                <img id = {{ $image->id }}   src={{ $image->path }} class="fukusize">
                @endif
                @endforeach
                @endforeach
            </div>
        </div>

        <!---4番目--->
        <div class="icon">
            <img id="four" name="four"class="fukuiconsize" >
        </div>
        

        <div class="box2"style="display: flex; flex-wrap: wrap;">
            <div>
                @foreach($n_10categories as $n_10category )
                @foreach($n_10category->images()->latest()->get() as $image)
                @if($image->user_id == Auth::id())
                <img id = {{ $image->id }}   src={{ $image->path }} class="fukusize">
                @endif
                @endforeach
                @endforeach 
            </div>
        </div>
        
        <!---5番目--->
        <div class="icon">
            <img id="five" name="five"class="fukuiconsize" >
        </div>
        
        <div class="box2"style="display: flex; flex-wrap: wrap;">
            <div>
                @foreach($n_1categories as $n_1category )
                @foreach($n_1category->images()->latest()->get() as $image)
                @if($image->user_id == Auth::id())
                <img id = {{ $image->id }}   src={{ $image->path }} class="fukusize">
                @endif
                @endforeach
                @endforeach
            </div>
        </div>

        <!---6番目--->
        <div class="icon">
            <img id="six" name="six"class="fukuiconsize" >
        </div>
        

        <div class="box2"style="display: flex; flex-wrap: wrap;">
            <div>
                @foreach($n_2categories as $n_2category )
                @foreach($n_2category->images()->latest()->get() as $image)
                @if($image->user_id == Auth::id())
                <img id = {{ $image->id }}   src={{ $image->path }} class="fukusize">
                @endif
                @endforeach
                @endforeach
            </div>
        </div>

        <!---7番目--->
        <div class="icon">
            <img id="seven" name="seven"class="fukuiconsize" >
        </div>
        

        <div class="box2"style="display: flex; flex-wrap: wrap;">
            <div>
                @foreach($n_3categories as $n_3category )
                @foreach($n_3category->images()->latest()->get() as $image)
                @if($image->user_id == Auth::id())
                <img id = {{ $image->id }}   src={{ $image->path }} class="fukusize">
                @endif
                @endforeach
                @endforeach
            </div>
        </div>

        <!---8番目--->
        <div class="icon">
            <img id="eight" name="eight"class="fukuiconsize" >
        </div>
        

        <div class="box2"style="display: flex; flex-wrap: wrap;">
            <div>
                @foreach($n_9categories as $n_9category )
                @foreach($n_9category->images()->latest()->get() as $image)
                @if($image->user_id == Auth::id())
                <img id = {{ $image->id }}   src={{ $image->path }} class="fukusize">
                @endif
                @endforeach
                @endforeach
            </div>
        </div>

        <!---9番目--->
        <div class="icon">
            <img id="nine" name="nine"class="fukuiconsize" >
        </div>
        

        <div class="box2"style="display: flex; flex-wrap: wrap;">
            <div>
                @foreach($n_11categories as $n_11category )
                @foreach($n_11category->images()->latest()->get() as $image)
                @if($image->user_id == Auth::id())
                <img id = {{ $image->id }}   src={{ $image->path }} class="fukusize">
                @endif
                @endforeach
                @endforeach
            </div>
        </div>

        <!---10番目--->
        <div class="icon">
            <img id="ten" name="ten"class="fukuiconsize" >
        </div>
        

        <div class="box2"style="display: flex; flex-wrap: wrap;">
            <div>
                @foreach($n_6categories as $n_6category )
                @foreach($n_6category->images()->latest()->get() as $image)
                @if($image->user_id == Auth::id())
                <img id = {{ $image->id }}   src={{ $image->path }} class="fukusize">
                @endif
                @endforeach
                @endforeach
            </div>
        </div>

        <!---11番目--->
        <div class="icon">
            <img id="eleven" name="eleven"class="fukuiconsize" >
        </div>
        

        <div class="box2"style="display: flex; flex-wrap: wrap;">
            <div>
                @foreach($n_7categories as $n_7category )
                @foreach($n_7category->images()->latest()->get() as $image)
                @if($image->user_id == Auth::id())
                <img id = {{ $image->id }}   src={{ $image->path }} class="fukusize">
                @endif
                @endforeach
                @endforeach
            </div>
        </div>

        <!---12番目--->
        <div class="icon">
            <img id="twelve" name="twelve"class="fukuiconsize" >
        </div>
        

        <div class="box2"style="display: flex; flex-wrap: wrap;">
            <div>
                @foreach($n_15categories as $n_15category )
                @foreach($n_15category->images()->latest()->get() as $image)
                @if($image->user_id == Auth::id())
                <img id = {{ $image->id }}   src={{ $image->path }} class="fukusize">
                @endif
                @endforeach
                @endforeach
            </div>
        </div>

        <!---13番目--->
        <div class="icon">
            <img id="thirteen" name="thirteen"class="fukuiconsize" >
        </div>
        

        <div class="box2"style="display: flex; flex-wrap: wrap;">
            <div>
                @foreach($n_13categories as $n_13category )
                @foreach($n_13category->images()->latest()->get() as $image)
                @if($image->user_id == Auth::id())
                <img id = {{ $image->id }}   src={{ $image->path }} class="fukusize">
                @endif
                @endforeach
                @endforeach
            </div>
        </div>

        <!---14番目--->
        <div class="icon">
            <img id="fourteen" name="fourteen"class="fukuiconsize" >
        </div>
        <div class="box2"style="display: flex; flex-wrap: wrap;">
            <div>
                @foreach($n_12categories as $n_12category )
                @foreach($n_12category->images()->latest()->get() as $image)
                @if($image->user_id == Auth::id())
                <img id = {{ $image->id }}   src={{ $image->path }} class="fukusize">
                @endif
                @endforeach
                @endforeach
            </div>
        </div>

        <!---15番目--->
        <div class="icon">
            <img id="fifteen" name="fifteen"class="fukuiconsize" >
        </div>
        

        <div class="box2"style="display: flex; flex-wrap: wrap;">
            <div>
                @foreach($n_14categories as $n_14category )
                @foreach($n_14category->images()->latest()->get() as $image)
                @if($image->user_id == Auth::id())
                <img id = {{ $image->id }}   src={{ $image->path }} class="fukusize">
                @endif
                @endforeach
                @endforeach
            </div>
        </div>
    </div>
    
            <p class="under_box">
            <font size="40">操作説明</font>
            <img src="https://res.cloudinary.com/dlfimibcq/image/upload/v1705816776/MicrosoftTeams-image_2_rigrll.png">
            </p>
            <p class="under2_box">
            <img src="https://res.cloudinary.com/dlfimibcq/image/upload/v1700613658/1696480649456_rvyzkj.png" class="keyframe7 animation">
            </p>
        
    
    
    
    
    </div>
    </center>	
</div>

<script>

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
                   
                   if(na == 0){
                                    document.getElementById("one").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702427288/%E7%84%A1%E9%A1%8C287_20231212203347_loibhu.png";
                                }
                                else if(na == 1){
                                    document.getElementById("one").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/%e3%83%ad%e3%83%b3%e3%82%b0t%e3%82%b7%e3%83%a3%e3%83%84%e3%82%a2%e3%82%a4%e3%82%b3%e3%83%b32_tall3d.png";
                                }
                                document.getElementById("one").alt="one";
                                
                                if(sy ==0){
                                    document.getElementById("two").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702427288/%E7%84%A1%E9%A1%8C287_20231212203351_r0cbgl.png";
                                }
                                else if(sy == 1){
                                    document.getElementById("two").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/y%e3%82%b7%e3%83%a3%e3%83%84%e3%81%ae%e3%82%a4%e3%83%a9%e3%82%b9%e3%83%88%e7%b4%a0%e6%9d%905_scezds.png";
                                }
                               
                                document.getElementById("two").alt="two";
    
                                if(ta ==0){
                                    document.getElementById("three").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702427289/%E7%84%A1%E9%A1%8C287_20231212203315_ruwc1p.png";
                                }
                                else if(ta == 1){
                                    document.getElementById("three").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347926/%e3%82%bf%e3%83%bc%e3%83%88%e3%83%ab%e3%83%8d%e3%83%83%e3%82%af%e3%81%ae%e7%84%a1%e6%96%99%e3%82%a2%e3%82%a4%e3%82%b3%e3%83%b3_plixtm.png";
                                }    
                                
                                document.getElementById("three").alt="three";
    
                                if(ni ==0){
                                    document.getElementById("eight").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702427288/%E7%84%A1%E9%A1%8C287_20231212203337_gufjdi.png";
                                }
                                else if(ni == 1){
                                    document.getElementById("eight").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/icon_r_0287_wfezcx.png";
                                }    
                                
                                document.getElementById("four").alt="four";
    
                                if(pa ==0){
                                    document.getElementById("four").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702427289/%E7%84%A1%E9%A1%8C287_20231212203400_qrbsrb.png";
                                }
                                else if(pa == 1){
                                    document.getElementById("four").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/%e3%83%91%e3%83%bc%e3%82%ab%e3%83%bc%e3%82%a2%e3%82%a4%e3%82%b3%e3%83%b32_vl1pu3.png";
                                }    
                                
                                document.getElementById("five").alt="five";
    
                                if(da ==0){
                                    document.getElementById("nine").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702427289/%E7%84%A1%E9%A1%8C287_20231212203404_hjobme.png";
                                }
                                else if(da == 1){
                                    document.getElementById("nine").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347926/%e3%83%80%e3%82%a6%e3%83%b3%e3%82%b8%e3%83%a3%e3%82%b1%e3%83%83%e3%83%88%e3%82%a2%e3%82%a4%e3%82%b3%e3%83%b32_mcfxxc.png";
                                }    
                                
                                document.getElementById("six").alt="six";
    
                                if(nz ==0){
                                    document.getElementById("thirteen").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702427288/%E7%84%A1%E9%A1%8C287_20231212203356_d9p0lg.png";
                                }
                                else if(nz == 1){
                                    document.getElementById("thirteen").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/icon_r_0285_kuszgu.png";
                                }    
                                
                                document.getElementById("seven").alt="seven";
    
                                if(ky ==0){
                                    document.getElementById("five").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702427288/%E7%84%A1%E9%A1%8C287_20231212203326_s3xmu4.png";
                                }
                                else if(ky == 1){
                                    document.getElementById("five").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702433037/%E7%84%A1%E9%A1%8C287_20231213101833_skqbru.png";
                                }    
                                
                                document.getElementById("eight").alt="eight";
    
                                if(no ==0){
                                    document.getElementById("six").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702427289/%E7%84%A1%E9%A1%8C287_20231212203412_r6sovt.png";
                                }
                                else if(no == 1){
                                    document.getElementById("six").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/icon_r_0294_ziqwci.png";
                                }    
                                
                                document.getElementById("nine").alt="nine"
    
                                if(ha ==0){
                                    document.getElementById("seven").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702427288/%E7%84%A1%E9%A1%8C287_20231212203334_aithlb.png";
                                }
                                else if(ha == 1){
                                    document.getElementById("seven").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/t%e3%82%b7%e3%83%a3%e3%83%84%e3%82%a2%e3%82%a4%e3%82%b3%e3%83%b39_zsyouc.png";
                                }    
                                
                                document.getElementById("ten").alt="ten";
    
                                if(ka ==0){
                                    document.getElementById("ten").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702427289/%E7%84%A1%E9%A1%8C287_20231212203408_luvbqi.png";
                                }
                                else if(ka == 1){
                                    document.getElementById("ten").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/icon_r_0292_co2req.png";
                                }    
                                
                                document.getElementById("eleven").alt="eleven";
    
                                 if(ja ==0){
                                    document.getElementById("eleven").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702427288/%E7%84%A1%E9%A1%8C287_20231212203319_bzhvix.png";
                                }
                                else if(ja == 1){
                                    document.getElementById("eleven").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347926/%e3%82%b8%e3%83%a3%e3%82%b1%e3%83%83%e3%83%88%e3%81%ae%e3%82%a4%e3%83%a9%e3%82%b9%e3%83%88%e7%b4%a0%e6%9d%902_axoaz6.png";
                                }   
                                
                                document.getElementById("twelve").alt="twelve";
                                if(hz ==0){
                                    document.getElementById("fourteen").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702427289/%E7%84%A1%E9%A1%8C287_20231212203311_pcjnsw.png";
                                }
                                else if(hz == 1){
                                    document.getElementById("fourteen").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/icon_r_0286_gtidl0.png";
                                }    
                                
                                document.getElementById("thirteen").alt="thirteen";
    
                                if(su ==0){
                                    document.getElementById("fifteen").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702427288/%E7%84%A1%E9%A1%8C287_20231212203330_nqc7ht.png";
                                }
                                else if(su == 1){
                                    document.getElementById("fifteen").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/icon_R_0295_yzvvwv.png";
                                }    
                                
                                document.getElementById("fourteen").alt="fourteen";
                                if(wa ==0){
                                    document.getElementById("twelve").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702427288/%E7%84%A1%E9%A1%8C287_20231212203342_ctknrq.png";
                                }
                                else if(wa == 1){
                                    document.getElementById("twelve").src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/icon_r_0290_ststiv.png";
                                }    
                                
                                document.getElementById("fifteen").alt="fifteen";
                                
                                
                                 function ChangeImage( imgid , newimgid ) {
               document.getElementById(imgid).src = document.getElementById(newimgid).src;
            }
            
            @foreach($n_1categories as $n_1category)        //配列を一個一個回してます
            @foreach($n_1category->images()->latest()->get() as $image) //画像データを回してます
                document.getElementById({{ $image->id}}).onclick = function(){  //idを一個一個入れてます
                ChangeImage('top' , {{ $image->id }});  
            }
            @endforeach
            @endforeach

            @foreach($n_2categories as $n_2category)        //配列を一個一個回してます
            @foreach($n_2category->images()->latest()->get() as $image) //画像データを回してます
                document.getElementById({{ $image->id}}).onclick = function(){  //idを一個一個入れてます
                ChangeImage('top' , {{ $image->id }});  
            }
            @endforeach
            @endforeach
            
            @foreach($n_3categories as $n_3category)        //配列を一個一個回してます
            @foreach($n_3category->images()->latest()->get() as $image) //画像データを回してます
                document.getElementById({{ $image->id}}).onclick = function(){  //idを一個一個入れてます
                ChangeImage('top' , {{ $image->id }});  
            }
            @endforeach
            @endforeach

            @foreach($n_4categories as $n_4category)        //配列を一個一個回してます
            @foreach($n_4category->images()->latest()->get() as $image) //画像データを回してます
                document.getElementById({{ $image->id}}).onclick = function(){  //idを一個一個入れてます
                ChangeImage('top' , {{ $image->id }});  
            }
            @endforeach
            @endforeach

            @foreach($n_5categories as $n_5category)        //配列を一個一個回してます
            @foreach($n_5category->images()->latest()->get() as $image) //画像データを回してます
                document.getElementById({{ $image->id}}).onclick = function(){  //idを一個一個入れてます
                ChangeImage('top' , {{ $image->id }});  
            }
            @endforeach
            @endforeach
            
            
            @foreach($n_6categories as $n_6category)        //配列を一個一個回してます
            @foreach($n_6category->images()->latest()->get() as $image) //画像データを回してます
                document.getElementById({{ $image->id}}).onclick = function(){  //idを一個一個入れてます
                ChangeImage('out' , {{ $image->id }});  
            }
            @endforeach
            @endforeach

            @foreach($n_7categories as $n_7category)        //配列を一個一個回してます
            @foreach($n_7category->images()->latest()->get() as $image) //画像データを回してます
                document.getElementById({{ $image->id}}).onclick = function(){  //idを一個一個入れてます
                ChangeImage('out' , {{ $image->id }});  
            }
            @endforeach
            @endforeach
            
            @foreach($n_8categories as $n_8category)        //配列を一個一個回してます
            @foreach($n_8category->images()->latest()->get() as $image) //画像データを回してます
                document.getElementById({{ $image->id}}).onclick = function(){  //idを一個一個入れてます
                ChangeImage('top' , {{ $image->id }});  
            }
            @endforeach
            @endforeach

            @foreach($n_9categories as $n_9category)        //配列を一個一個回してます
            @foreach($n_9category->images()->latest()->get() as $image) //画像データを回してます
                document.getElementById({{ $image->id}}).onclick = function(){  //idを一個一個入れてます
                ChangeImage('out' , {{ $image->id }});  
            }
            @endforeach
            @endforeach


            @foreach($n_10categories as $n_10category)        //配列を一個一個回してます
            @foreach($n_10category->images()->latest()->get() as $image) //画像データを回してます
                document.getElementById({{ $image->id}}).onclick = function(){  //idを一個一個入れてます
                ChangeImage('top' , {{ $image->id }});  
            }
            @endforeach
            @endforeach

            @foreach($n_11categories as $n_11category)        //配列を一個一個回してます
            @foreach($n_11category->images()->latest()->get() as $image) //画像データを回してます
                document.getElementById({{ $image->id}}).onclick = function(){  //idを一個一個入れてます
                ChangeImage('out' , {{ $image->id }});  
            }
            @endforeach
            @endforeach

            @foreach($n_12categories as $n_12category)        //配列を一個一個回してます
            @foreach($n_12category->images()->latest()->get() as $image) //画像データを回してます
                document.getElementById({{ $image->id}}).onclick = function(){  //idを一個一個入れてます
                ChangeImage('botom' , {{ $image->id }});  
            }
            @endforeach
            @endforeach

            @foreach($n_13categories as $n_13category)        //配列を一個一個回してます
            @foreach($n_13category->images()->latest()->get() as $image) //画像データを回してます
                document.getElementById({{ $image->id}}).onclick = function(){  //idを一個一個入れてます
                ChangeImage('botom' , {{ $image->id }});  
            }
            @endforeach
            @endforeach

            @foreach($n_14categories as $n_14category)        //配列を一個一個回してます
            @foreach($n_14category->images()->latest()->get() as $image) //画像データを回してます
                document.getElementById({{ $image->id}}).onclick = function(){  //idを一個一個入れてます
                ChangeImage('botom' , {{ $image->id }});  
            }
            @endforeach
            @endforeach

            @foreach($n_15categories as $n_15category)        //配列を一個一個回してます
            @foreach($n_15category->images()->latest()->get() as $image) //画像データを回してます
                document.getElementById({{ $image->id}}).onclick = function(){  //idを一個一個入れてます
                ChangeImage('out' , {{ $image->id }});  
            }
            @endforeach
            @endforeach
				
				
			//リセット用
                function ChangeImage2( imgid , newimg ) {
                    document.getElementById(imgid).src = newimg;
                }
                function buttonClick(){
                    ChangeImage2( 'out', "https://res.cloudinary.com/dlfimibcq/image/upload/v1703848138/%E3%81%97%E3%81%8B%E3%81%8F%E3%81%AE%E3%82%A2%E3%82%A4%E3%82%B3%E3%83%B3_di4zbl.png")
                    ChangeImage2( 'top', "https://res.cloudinary.com/dlfimibcq/image/upload/v1703848138/%E3%81%97%E3%81%8B%E3%81%8F%E3%81%AE%E3%82%A2%E3%82%A4%E3%82%B3%E3%83%B3_di4zbl.png")
                    ChangeImage2( 'botom', "https://res.cloudinary.com/dlfimibcq/image/upload/v1703848138/%E3%81%97%E3%81%8B%E3%81%8F%E3%81%AE%E3%82%A2%E3%82%A4%E3%82%B3%E3%83%B3_di4zbl.png")
                
                }

		
        
        </script>
    
        
</html>