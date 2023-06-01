<x-guest-layout>
    <div class="flex w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800 lg:max-w-4xl">

        <form method="POST" action="{{ route('register') }}" class="w-full px-6 py-8 md:px-8">
            @csrf
            <div class="flex items-center justify-between">
                <span class="w-1/5 border-b dark:border-gray-600 lg:w-1/4"></span>

                <span class="text-lg text-center text-red-500 uppercase dark:text-red-400">
                    {{__('All fields here are for the kid\'s parent')}}
                </span>

                <span class="w-1/5 border-b dark:border-gray-400 lg:w-1/4"></span>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-3 mt-3">
                <div class="mt-2 lg:mt-0 ">
                    <x-input label="National ID" name="national_id"/>
                </div>
                <div class="col-span-1 lg:col-span-2">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-1">
                        <div class="mt-2 lg:mt-0">
                            <x-input label="First Name" name="first_name"/>
                        </div>
                        <div class="mt-2 lg:mt-0">
                            <x-input label="Middle Name" name="middle_name"/>
                        </div>
                        <div class="mt-2 lg:mt-0">
                            <x-input label="Last Name" name="last_name"/>
                        </div>
                    </div>
                </div>
                <div class="mt-2 lg:mt-0">
                    <x-input label="Email" name="email" type="email"/>
                </div>
                <div class="mt-2 lg:mt-0">
                    <x-input label="Phone Number" name="phone_number"/>
                </div>
                <div class="mt-2 lg:mt-0">
                    <x-input label="Date of Birth" name="dob" type="date"/>
                </div>
                <div class="mt-2 lg:mt-0">
                    <x-select label="Gender" name="gender" options="male,female" />
                </div>
                <div class="mt-2 lg:mt-0">
                    <x-input type="password" label="Password" name="password"/>
                </div>
                <div class="mt-2 lg:mt-0">
                    <x-input type="password" label="Confirm Password" name="password_confirmation" min="8"/>
                </div>
            </div>

            <div class="mt-6 justify-center flex ">
                <button
                    class="w-full lg:w-1/4 px-6 py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-gray-800 dark:bg-gray-200 dark:text-gray-800 dark:hover:bg-white rounded-lg hover:bg-gray-700 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-50">
                    {{ __('Register') }}
                </button>
            </div>

            <div class="flex items-center justify-between mt-4">
                <span class="w-1/5 border-b dark:border-gray-600 md:w-1/4"></span>

                <a href="{{ route('login') }}"
                   class="text-xs text-gray-500 uppercase dark:text-gray-400 hover:underline">
                    {{ __('Already registered? Login now')}}
                </a>

                <span class="w-1/5 border-b dark:border-gray-600 md:w-1/4"></span>
            </div>
        </form>
    </div>
</x-guest-layout>
