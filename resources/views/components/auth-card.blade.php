<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    @if (Route::currentRouteName() == 'login')
    <div class="text-center text-base tracking-widest rounded-md font-normal mb-5 focus-within:line-through">
        <a class="tracking-widest rounded-md font-normal text-sm text-gray-600 hover:text-gray-900 only:line-through" href="{{ route('register') }}">
            {{ __('Don\'t have an account, click here to Sign Up.') }}
        </a>
    </div>
    @endif
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
