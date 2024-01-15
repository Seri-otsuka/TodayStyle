<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <div style="display: flex; justify-content: flex-start;" class="text-gray-700 font-medium text-sm">
            <p class="text-gray-700">
                お名前
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
{{--
        <!-- area -->
        <div class="mt-4">
            <div>
            <x-input-label for="area_id" :value="__('お住いの地域')" />
                <select type="text" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="area_id" required>
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
            <input id="radio-1" type="radio" value="0" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="radio-1" class="w-full py-3 ms-2 text-sm font-medium text-gray-700 dark:text-gray-300">暑がり</label>
        </div>
                 </li>
        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
            <div class="flex items-center ps-3">
                <input id="radio-2" type="radio" value="1" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="radio-2" class="w-full py-3 ms-2 text-sm font-medium text-gray-700 dark:text-gray-300">寒がり</label>
            </div>
            </ul>
        </div>
        
        <div class="flex flex-col  items-center pt-6 sm:pt-0 bg-gray-300">
            
            <!--入力ブロックの範囲-->
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
                        <figure class="w-16 rounded-md bg-white pointer-events-auto indigo-500">
                               <img class="w-16 rounded-md bg-white pointer-events-auto indigo-500" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702433037/%E7%84%A1%E9%A1%8C287_20231213101833_skqbru.png">
                            </a>
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
                            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                        >
                        <figure class="w-16 rounded-md bg-white pointer-events-auto indigo-500">
                               <img class="w-16 rounded-md bg-white pointer-events-auto indigo-500" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/icon_R_0294_ziqwci.png">
                            </a>
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
                         <x-input-label class="" for="email" :value="__('ノースリーブ')" />
                        </div>
                    
                     <!--ノースリーブ-->
                   {{-- <div class="mt-4 focus:border-indigo-500 focus:ring-indigo-500 ">
                        <center>
                        <img class="w-16 rounded-md bg-white " src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/icon_R_0294_ziqwci.png">
                        <x-input-label class="" for="email" :value="__('ノースリーブ')" />
                        </center>
                    </div>
                    --}}
                    
                    
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
        </div>
        <!--ここにif関数で0か1を判断してtemperatureテーブルに格納して判断する-->
        <!--if関数で判断するより、input内で判断した方がいいかも-->
        
        
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('すでに登録していますか？') }}
            </a>
            
            
            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
