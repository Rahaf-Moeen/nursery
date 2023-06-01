<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')"/>

    <div
        class="flex w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800 lg:max-w-4xl">
        <div class="hidden bg-cover lg:block lg:w-1/2"
             style="background-image: url('https://images.unsplash.com/photo-1606660265514-358ebbadc80d?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1575&q=80');"></div>
        <form method="POST" action="{{ route('login') }}" class="w-full px-6 py-8 md:px-8 lg:w-1/2">
            @csrf



            <div class="flex items-center justify-between mt-4">
                <span class="w-1/5 border-b dark:border-gray-600 lg:w-1/4"></span>

                <a href="#" class="text-xs text-center text-gray-500 uppercase dark:text-gray-400 hover:underline">
                    {{__('Welcome back!')}}
                </a>

                <span class="w-1/5 border-b dark:border-gray-400 lg:w-1/4"></span>
            </div>

            <div class="mt-4">
                <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200"
                       for="input_type">
                    {{__('Email/Username')}}
                </label>

                <input
                    id="input_type"
                    class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300"
                    type="text"
                    name="input_type"
                    value="{{ old('input_type') }}"
                    required
                    autofocus
                    autocomplete="input_type"
                />
            </div>

            <div class="mt-4">
                <div class="flex justify-between">
                    <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200"
                           for="password">{{__('Password')}}</label>
                    @if (Route::has('password.request'))
                        <a href="#"
                           class="text-xs text-gray-500 dark:text-gray-300 hover:underline">{{__('Forget Password?')}}</a>
                    @endif
                </div>

                <input id="password"
                       class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300"
                       type="password"
                       name="password"
                       required autocomplete="current-password"
                />
            </div>

            <div class="mt-6">
                <button
                    class="w-full px-6 py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-gray-800 dark:bg-gray-200 dark:text-gray-800 dark:hover:bg-white rounded-lg hover:bg-gray-700 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-50">
                    {{ __('Login') }}
                </button>
            </div>

            <div class="flex items-center justify-between mt-4">
                <span class="w-1/5 border-b dark:border-gray-600 md:w-1/4"></span>

                <a href="{{ route('register') }}"
                   class="text-xs text-gray-500 uppercase dark:text-gray-400 hover:underline">{{__('or sign up')}}</a>

                <span class="w-1/5 border-b dark:border-gray-600 md:w-1/4"></span>
            </div>
        </form>
    </div>
</x-guest-layout>
