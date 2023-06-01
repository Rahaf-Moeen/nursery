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
                    <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200"
                           for="national_id">
                        {{__('National ID')}}
                    </label>

                    <input
                        id="national_id"
                        class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300"
                        type="text"
                        name="national_id"
                        value="{{ old('national_id') }}"
                        placeholder="{{__('National ID')}}"
                        required
                        autofocus
                        autocomplete="national_id"
                    />
                </div>
                <div class="mt-2 lg:mt-0 col-span-1 lg:col-span-2">
                    <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200"
                           for="name" for="first_name" for="middle_name" for="last_name">
                        {{__('Name')}}
                    </label>

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-1">
                        <input
                            id="first_name"
                            class="block px-4 py-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300"
                            type="text"
                            name="first_name"
                            placeholder="{{__('First Name')}}"
                            value="{{ old('first_name') }}"
                            required
                            autofocus
                            autocomplete="first_name"
                        />
                        <input
                            id="middle_name"
                            class="block px-4 py-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300"
                            type="text"
                            name="middle_name"
                            value="{{ old('middle_name') }}"
                            placeholder="{{__('Middle Name')}}"
                            required
                            autofocus
                            autocomplete="middle_name"
                        />
                        <input
                            id="last_name"
                            class="block px-4 py-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300"
                            type="text"
                            name="last_name"
                            value="{{ old('last_name') }}"
                            placeholder="{{__('Last Name')}}"
                            required
                            autofocus
                            autocomplete="last_name"
                        />
                    </div>
                </div>
                <div class="mt-2 lg:mt-0">
                    <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200"
                           for="email">
                        {{__('Email')}}
                    </label>

                    <input
                        id="email"
                        class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="{{__('Email')}}"
                        required
                        autofocus
                        autocomplete="email"
                    />
                </div>
                <div class="mt-2 lg:mt-0">
                    <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200"
                           for="phone">
                        {{__('Phone')}}
                    </label>

                    <input
                        id="phone"
                        class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300"
                        type="text"
                        name="phone"
                        value="{{ old('phone') }}"
                        placeholder="{{__('Phone')}}"
                        required
                        autofocus
                        autocomplete="phone"
                    />
                </div>
                <div class="mt-2 lg:mt-0">
                    <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200"
                           for="date_of_birth">
                        {{__('Date of Birth')}}
                    </label>

                    <input
                        id="date_of_birth"
                        class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300"
                        type="date"
                        name="date_of_birth"
                        value="{{ old('date_of_birth') }}"
                        placeholder="{{__('Date of Birth')}}"
                        required
                        autofocus
                        autocomplete="date_of_birth"
                    />
                </div>
                <div class="mt-2 lg:mt-0">
                    <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200"
                           for="gender">
                        {{__('Gender')}}
                    </label>

                    <select
                        id="gender"
                        name="gender"
                        class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300"
                        required
                    >
                        <option value="" selected>{{__('Select Gender')}}</option>
                        <option value="male">{{__('male')}}</option>
                        <option value="female">{{__('female')}}</option>
                    </select>
                </div>
                <div class="mt-2 lg:mt-0">
                    <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200"
                           for="password">
                        {{__('Password')}}
                    </label>

                    <input
                        id="password"
                        class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300"
                        type="password"
                        name="password"
                        placeholder="{{__('Password')}}"
                        required
                        autocomplete="new-password"
                    />
                </div>
                <div class="mt-2 lg:mt-0">
                    <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200"
                           for="password_confirmation">
                        {{__('Confirm Password')}}
                    </label>

                    <input
                        id="password_confirmation"
                        class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300"
                        type="password"
                        name="password_confirmation"
                        placeholder="{{__('Confirm Password')}}"
                        required
                        autocomplete="new-password"
                    />
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
