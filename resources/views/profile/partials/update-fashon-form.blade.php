<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('所持している服') }}
        </h2>
    </header>

         <a href="{{ route('images.create') }}">
         <button class="mt-3 inline-flex items-center px-4 py-2 bg-gray-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
            {{ __('+ 追加') }}
        </button>
        </a>
        
          <div>
                @foreach($n_1categories as $n_1category )
                @foreach($n_1category->images()->latest()->get() as $image)
                @if($image->user_id == Auth::id())
                <img id = {{ $image->id }}   src={{ $image->path }} class="w-24 mt-6 mb-2 rounded-lg">
        
                <form action="{{ route('images.destroy', $user->image->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('本当に削除しますか？')">画像を削除</button>
                </form>
                @endif
                @endforeach
                @endforeach
            </div>
             <script>
        function deleteImage(id){
            'use strict'
            
            if(confirm('削除すると復元できません。\n本当に削除しますか？')){
                document.getElementById(`form_${id}`).submit();
            }
        }
    </script>
</section>
