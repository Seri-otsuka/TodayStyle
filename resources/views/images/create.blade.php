<!-- resources/views/images/create.blade.php -->
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
 <body class="font-sans text-gray-900 antialiased">
        <!--全体の背景の範囲-->
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-300">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>
    @foreach($categories as $category)
        <form action="{{ route('images.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <label for="category_id">カテゴリー:</label>
            <input type="hidden" name="category_id" value="{{ $category->id }}">
            <span>{{ $category->name }}</span>

            <label for="images">画像を選択 (複数可):</label>
            <input type="file" name="images[]" multiple accept="image/*" onchange="previewImages(event)" required>
            
            <button class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150" type="submit">登録</button>
        </form>
        <br>
    @endforeach
    
    <!--プレビューを表示-->
    <script>
        function previewImages(event) {
            const previewContainer = document.getElementById('image-preview');
            previewContainer.innerHTML = '';
    
            const files = event.target.files;
    
            for (const file of files) {
                const reader = new FileReader();
    
                reader.onload = function (e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    previewContainer.appendChild(img);
                };
    
                reader.readAsDataURL(file);
            }
        }
    </script>
                         <div>
                        
                        <a
                            x-data=""
                            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                        >
                        
                           <img class="w-16 rounded-md bg-white pointer-events-auto indigo-500" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1702433037/%E7%84%A1%E9%A1%8C287_20231213101833_skqbru.png">
                        </a>
                        <!-- ↓figure~ 123行から誘拐しました -->
                        <figure class="w-16 rounded-md bg-white pointer-events-auto indigo-500">
                            <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                                    <form action="{{ route('images.store') }}" method="post" enctype="multipart/form-data" class="p-6">
                                    @csrf
                                    
                                    <!--ここから中身の内容-->
                                    <!--点々の中身の大きさ-->
                                    <label for="category_id">カテゴリー:</label>
                                    <input type="hidden" name="category_id" value="{{ $category1->id }}">
                                    <span>{{ $category1->name }}</span>
                                    <center>
                                    <div class="w-48 ">
                                        <!--文字の範囲横部分-->    
                                        <label for="dropzone-file" class="flex mt-6 ml-2 justify-center h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                            <!--文字の範囲縦部分-->
                                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                                </svg>
                                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">クリックして画像をアップロードしてください</span> 
                                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                            </div>
                                            <!--文字の範囲-->
                                            <!--<input id="dropzone-file" type="file" class="hidden" />-->
                                            <input id="dropzone-file" type="file" name="images[]" multiple accept="image/*" onchange="previewImages(event)" class="hidden" required  />
                                        </label>
                                    </div>
                                    </center>
                                    <!--プレビューの部分-->
                                     <div class="flex flex-wrap items-center justify-center pt-5 pb-6 space-x-4" id="image-preview"></div>
                                     <style>
                                        #image-preview img {
                                            max-width: 100%; /* 画像の最大幅を親要素に合わせる */
                                            height: auto;    /* アスペクト比を保ちつつ高さを自動調整 */
                                            width: 80px;      /* 幅を指定（適切なサイズに調整） */
                                            border-radius: 10px; 
                                            
                                        }
                                    </style>
                                                                        <div class="mt-6 mb-2 flex justify-end mr-2">
                                        <button class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150" type="submit" x-on:click="$dispatch('close')">
                                            {{ __('登録') }}
                                        </button>
                                        <div class="ml-2"></div>
                                        
                                        <x-secondary-button x-on:click="$dispatch('close')">
                                            {{ __('戻る') }}
                                        </x-secondary-button>
                                    </div>
                                </form>
                            </x-modal>
                        </figure>
                        <center>
                        <x-input-label class="" for="email" :value="__('キャミ')" />
                        </center>
                    </div>
                    
    
     <a href="{{ route('main') }}">
         <x-primary-button class="ml-3">
            {{ __('完了') }}
        </x-primary-button>
    </a>
</body>
</html>