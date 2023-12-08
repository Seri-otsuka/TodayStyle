<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- アイコン試し -->
        <div class="mt-4 focus:border-indigo-500 focus:ring-indigo-500 ">
            <img class="w-16 rounded-md bg-white" src="https://res.cloudinary.com/dlfimibcq/image/upload/v1701305492/icon_R_0295_tdbsc2.png">
            <x-input-label class="mx-3" for="email" :value="__('ミニスカ')" />
        </div>
        
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
