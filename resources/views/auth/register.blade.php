<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data"> <!--画像データも入るようにした-->。
        @csrf

        <!-- Name -->
        <div>
            <div style="display: flex; justify-content: flex-start;" class="text-gray-700 font-medium text-sm">
            <p class="text-gray-700">
                ニックネーム
            </p>
            <p class="text-gray-500">
                　※本名の入力はお控えください
            </p>  
            </div>
            
            <!-- <x-input-label for="name" :value="__('Name')" /> -->
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <div style="display: flex;justify-content: flex-start;" class="font-medium text-sm">
                <p class="text-gray-700">
                    パスワード
                </p>
                <p class="text-gray-500">
                    　※8~12文字の半角英数字 
                    　<!---テキスト表示でごり押し 先頭に全角スペースを書いて位置調整しています -->
                </p>
                <!--<x-input-label class="font-medium text-sm text-gray-700" for="password" :value="__('パスワード')" />
                <x-input-label for="password" :value="__('※8~12文字の半角英数字')" />-->
            </div>
            

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        
        <!-- area -->
        <div class="mt-4">
            <div>
            <x-input-label for="area_id" :value="__('お住いの地域')" />
             <select id="parent" onchange="date()" class="mb-auto border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="area_id" required>
                @foreach($area_alls as $area_all)
                  <option value={{ $area_all->id }}>{{ $area_all->name}}</option>
                @endforeach
                  <option value="" disabled selected>選択してください</option>
                </select>
        </div>
        <center>
        <img id="todohuken" class="rounded-lg mt-4 flex" width="400" height="400"/>
        </center>
        <div class="mt-4">
                <x-input-label for="area_id" :value="__('お住いの地域詳細')" />
                <select id="children" class=" mb-auto border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="finelyarea_id" required>
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
                            </div>
                           <script>
                               function date() {

                                //id="parent"の値を取得
                                var parentlement = document.getElementById( "parent" ) ;
                                
                                //id="children"を取得
                                var childrenDate = document.getElementById("children") ;
                                
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
                                     
                                    
                                }
                           </script>
                
                {{--<select type="text" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="area_id" required>
                    <option disabled style='display:none;' @if (empty($user->area_id)) selected @endif>選択してください</option>
                    @foreach($areas as $area)
                        <option value="{{ $area->id }}" @if (isset($user->area_id) && ($user->area_id === $area->id)) selected @endif>{{ $area->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-row">
                <img
              class="m-6 w-8/12 h-8/12 rounded-lg shadow-xl"
              src="{{ $area->path }}"
              alt="Woman workcationing on the beach"
            />
                <select type="text" class="mt-64 mb-auto border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="area_finely_id" required>
                    <option disabled style='display:none;' @if (empty($user->area_id)) selected @endif>1</option>
                    @foreach($areas_finely as $area_finely)
                        <option value="{{ $area_finely->id }}" @if (isset($user->area_id) && ($user->area_finely_id === $area_finely->id)) selected @endif>{{ $area_finely->id }}</option>
                    @endforeach
                </select>
            </div>
            
        </div>--}}
        
        <!--temperature暑がりは0寒がりは1でデータベースに格納-->
        <div class="mt-4">
        <div>
            <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                 <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
        <div class="flex items-center ps-3">
            <input id="radio-1" type="radio" value="0" name="temperature" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="radio-1" class="w-full py-3 ms-2 text-sm font-medium text-gray-700 dark:text-gray-300">暑がり</label>
        </div>
                 </li>
        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
            <div class="flex items-center ps-3">
                <input id="radio-2" type="radio" value="1" name="temperature" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="radio-2" class="w-full py-3 ms-2 text-sm font-medium text-gray-700 dark:text-gray-300">寒がり</label>
            </div>
            </ul>
        </div>
        
        
        <!--<div class="flex flex-col  items-center pt-6 sm:pt-0 bg-gray-300">-->
            
            
            
           {{-- <!--入力ブロックの範囲-->
            <div class="w-full sm:max-w-xl mt-6 px-6 py-4 bg-gray-300 shadow-md overflow-hidden sm:rounded-lg">
                 <form method="POST" action="{{ route('register') }}">
                     <!-- アイコン-->
                     <!--一段目-->
                    <!--ここで横並びにするようにしてるから五個並ぶ大きさで変換しているので、五個以上並べてしまうとサイズがおかしくなってしまいます。-->
                     <div class="flex justify-center items-center gap-5">
                     <!--キャミ-->
                     <div>
                        <center>
                        <a
                            x-data=""
                            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                        >
                        
                           <img class="w-16 rounded-md bg-white pointer-events-auto indigo-500" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702433037/%E7%84%A1%E9%A1%8C287_20231213101833_skqbru.png">
                        </a>
                        <!-- ↓figure~ 123行から誘拐しました -->
                        <figure class="w-16 rounded-md bg-white pointer-events-auto indigo-500">
                            <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                                <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                                    @csrf
                                    @method('delete')
                                    
                                    <!--ここから中身の内容-->
                                    <div class="flex items-center justify-center w-full">
                                        <label for="dropzone-file" class="flex mt-6 ml-2 justify-center h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                                </svg>
                                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">クリックして画像をアップロードしてください</span> 
                                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                            </div>
                                            <input id="dropzone-file" type="file" class="hidden" />
                                        </label>
                                    </div>
                                    <div class="mt-6 mb-2 flex justify-end mr-2">
                                        <x-secondary-button x-on:click="$dispatch('close')">
                                            {{ __('登録') }}
                                        </x-secondary-button>
                                        <div class="ml-2"></div>
                                        
                                        <x-secondary-button x-on:click="$dispatch('close')">
                                            {{ __('戻る') }}
                                        </x-secondary-button>
                                    </div>
                                </form>
                            </x-modal>
                        </figure>
                        <x-input-label class="" for="email" :value="__('キャミ')" />
                    </div>
                        
                        
                    <div>
                        <center>
                        <a
                            x-data=""
                            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion2')"
                        >
                        <figure class="w-16 rounded-md bg-white pointer-events-auto indigo-500">
                           <img class="w-16 rounded-md bg-white pointer-events-auto indigo-500" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/icon_R_0294_ziqwci.png">
                        </a>
                            <x-modal name="confirm-user-deletion2" :show="$errors->userDeletion->isNotEmpty()" focusable>
                                <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                                    @csrf
                                    @method('delete')
                                    
                                    <!--ここから中身の内容-->
                                <div class="flex items-center justify-center w-full">
                                    <label for="dropzone-file" class="flex mt-6 ml-2 justify-center h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                            </svg>
                                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">クリックして画像をアップロードしてください</span> 
                                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                        </div>
                                        <input id="dropzone-file" type="file" class="hidden" />
                                    </label>
                                </div> 
                                    <div class="mt-6 mb-2 flex justify-end mr-2">
                                        <x-secondary-button x-on:click="$dispatch('close')">
                                            {{ __('登録') }}
                                        </x-secondary-button>
                                        <div class="ml-2"></div>
                                        
                                        <x-secondary-button x-on:click="$dispatch('close')">
                                            {{ __('戻る') }}
                                        </x-secondary-button>
                                    </div>
                                </form>
                            </x-modal>
                        </figure>
                        <x-input-label class="" for="email" :value="__('ノースリーブ')" />
                    </div>
                    
                     <!--ノースリーブ-->
                   {{-- <div class="mt-4 focus:border-indigo-500 focus:ring-indigo-500 ">
                        <center>
                        <img class="w-16 rounded-md bg-white " src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/icon_R_0294_ziqwci.png">
                        <x-input-label class="" for="email" :value="__('ノースリーブ')" />
                        </center>
                    </div>
                    
                    
                    
                    <!--半袖-->
                    <div class="mt-4 focus:border-indigo-500 focus:ring-indigo-500 ">
                        <center>
                        <img class="w-16 rounded-md bg-white" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/T%E3%82%B7%E3%83%A3%E3%83%84%E3%82%A2%E3%82%A4%E3%82%B3%E3%83%B39_zsyouc.png">
                        <x-input-label class="" for="email" :value="__('半袖')" />
                        </center>
                    </div>
                    
                     <!--長袖-->
                    <div class="mt-4 focus:border-indigo-500 focus:ring-indigo-500 ">
                        <center>
                        <img class="w-16 rounded-md bg-white" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/%E3%83%AD%E3%83%B3%E3%82%B0T%E3%82%B7%E3%83%A3%E3%83%84%E3%82%A2%E3%82%A4%E3%82%B3%E3%83%B32_tall3d.png">
                        <x-input-label class="" for="email" :value="__('長袖')" />
                        </center>
                    </div>
                    
                     <!--シャツ-->
                    <div class="mt-4 focus:border-indigo-500 focus:ring-indigo-500 ">
                        <center>
                        <img class="w-16 rounded-md bg-white" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/Y%E3%82%B7%E3%83%A3%E3%83%84%E3%81%AE%E3%82%A4%E3%83%A9%E3%82%B9%E3%83%88%E7%B4%A0%E6%9D%905_scezds.png">
                        <x-input-label class="" for="email" :value="__('シャツ')" />
                        </center>
                    </div>
                    </div>
                    
                    <!--二段目-->
                    <div class="flex justify-center items-center gap-5">
                         <!--カーディガン-->
                        <div class="mt-4 focus:border-indigo-500 focus:ring-indigo-500 ">
                            <center>
                            <img class="w-16 rounded-md bg-white" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/icon_R_0292_co2req.png">
                            <x-input-label class="" for="email" :value="__('カーディガン')" />
                            </center>
                        </div>
                        
                         <!--ジャケット-->
                        <div class="mt-4 focus:border-indigo-500 focus:ring-indigo-500 ">
                            <center>
                            <img class="w-16 rounded-md bg-white" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347926/%E3%82%B8%E3%83%A3%E3%82%B1%E3%83%83%E3%83%88%E3%81%AE%E3%82%A4%E3%83%A9%E3%82%B9%E3%83%88%E7%B4%A0%E6%9D%902_axoaz6.png">
                            <x-input-label class="" for="email" :value="__('ジャケット')" />
                            </center>
                        </div>
                        
                         <!--タートルネック-->
                        <div class="mt-4 focus:border-indigo-500 focus:ring-indigo-500 ">
                            <center>
                            <img class="w-16 rounded-md bg-white" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347926/%E3%82%BF%E3%83%BC%E3%83%88%E3%83%AB%E3%83%8D%E3%83%83%E3%82%AF%E3%81%AE%E7%84%A1%E6%96%99%E3%82%A2%E3%82%A4%E3%82%B3%E3%83%B3_plixtm.png">
                            <x-input-label class="" for="email" :value="__('タートルネック')" />
                            </center>
                        </div>
                        
                         <!--ニット-->
                        <div class="mt-4 focus:border-indigo-500 focus:ring-indigo-500 ">
                            <center>
                            <img class="w-16 rounded-md bg-white" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/icon_R_0287_wfezcx.png">
                            <x-input-label class="" for="email" :value="__('ニット')" />
                            </center>
                        </div>
                        
                         <!--パーカー-->
                        <div class="mt-4 focus:border-indigo-500 focus:ring-indigo-500 ">
                            <center>
                            <img class="w-16 rounded-md bg-white" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/%E3%83%91%E3%83%BC%E3%82%AB%E3%83%BC%E3%82%A2%E3%82%A4%E3%82%B3%E3%83%B32_vl1pu3.png">
                            <x-input-label class="" for="email" :value="__('パーカー')" />
                            </center>
                        </div>
                    </div>
                    
                    <!--三段目-->
                    <div class="flex justify-center items-center gap-5">
                         <!--コート-->
                        <div class="mt-4 focus:border-indigo-500 focus:ring-indigo-500 ">
                            <center>
                            <img class="w-16 rounded-md bg-white" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347926/%E3%83%80%E3%82%A6%E3%83%B3%E3%82%B8%E3%83%A3%E3%82%B1%E3%83%83%E3%83%88%E3%82%A2%E3%82%A4%E3%82%B3%E3%83%B32_mcfxxc.png">
                            <x-input-label class="" for="email" :value="__('コート/ダウン')" />
                            </center>
                        </div>
                        
                         <!--半ズボン-->
                        <div class="mt-4 focus:border-indigo-500 focus:ring-indigo-500 ">
                            <center>
                            <img class="w-16 rounded-md bg-white" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/icon_R_0286_gtidl0.png">
                            <x-input-label class="" for="email" :value="__('半ズボン')" />
                            </center>
                        </div>
                        
                         <!--長ズボン-->
                        <div class="mt-4 focus:border-indigo-500 focus:ring-indigo-500 ">
                            <center>
                            <img class="w-16 rounded-md bg-white" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/icon_R_0285_kuszgu.png">
                            <x-input-label class="" for="email" :value="__('長ズボン')" />
                            </center>
                        </div>
                        
                         <!--スカート-->
                        <div class="mt-4 focus:border-indigo-500 focus:ring-indigo-500 ">
                            <center>
                            <img class="w-16 rounded-md bg-white" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/icon_R_0295_yzvvwv.png">
                            <x-input-label class="" for="email" :value="__('スカート')" />
                            </center>
                        </div>
                        
                         <!--ワンピース-->
                        <div class="mt-4 focus:border-indigo-500 focus:ring-indigo-500 ">
                            <center>
                            <img class="w-16 rounded-md bg-white" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/icon_R_0290_ststiv.png">
                            <x-input-label class="" for="email" :value="__('ワンピース')" />
                            </center>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>--}}
        <!--ここにif関数で0か1を判断してtemperatureテーブルに格納して判断する-->
        <!--if関数で判断するより、input内で判断した方がいいかも-->
        
        <div class="">
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('すでに登録していますか？') }}
            </a>
            
            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
        </div>
    </form>
</x-guest-layout>
