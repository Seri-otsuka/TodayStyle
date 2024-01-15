<section>
    <header>
        <!-- パスワード注意書きを書くために変更を加えました！ -->
        <!-- 下にコメントアウトされている文が元の文です。大森 -->
        <div style="display: flex;justify-content: flex-start;" class="text-lg font-medium text-gray-900">
            <h2 class="text-gray-900">
                パスワードの変更
            </h2>
            <p class="text-gray-500">
            　※8~12文字の半角英数字 
            　<!---テキスト表示でごり押し 先頭に全角スペースを書いて位置調整しています -->
            </p>
        </div>
        
        <!--
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('パスワードの変更') }}
        </h2>
        -->

        <p class="mt-1 text-sm text-gray-600">
            {{ __('安全を確保するために、アカウントが長くてランダムなパスワードを使用していることを確認してください。') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="current_password" :value="__('既存のパスワード')" />
            <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password" :value="__('新しいパスワード')" />
            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password_confirmation" :value="__('新しいパスワード(確認用)')" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('保存') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('保存済み') }}</p>
            @endif
        </div>
    </form>
</section>
