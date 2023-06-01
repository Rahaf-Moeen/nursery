<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ config('app.locale') === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased" x-data="{ darkMode: false }" x-init="
    if (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) {
      localStorage.setItem('darkMode', JSON.stringify(true));
    }
    darkMode = JSON.parse(localStorage.getItem('darkMode'));
    $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" x-cloak>
<div x-bind:class="{'dark' : darkMode === true}" class="min-h-screen bg-gray-100">
    <div class="min-h-screen flex flex-col pt-6 sm:pt-0 bg-white dark:bg-gray-900">
        <a href="{{ route('welcome') }}" class="flex flex-col items-center mt-3 lg:mt-16">
            <div class="flex justify-center mx-auto">
                <x-application-logo class="block h-9 w-auto text-gray-800 dark:text-gray-200" />
            </div>

            <p class="mt-3 text-xl text-center text-gray-600 dark:text-gray-200">
                {{__('Al-Ghad Al-Mashreq Nursery')}}
            </p>
        </a>
        <div class="ml-2 flex justify-center mt-3">
            <x-theme-switcher/>
        </div>
        <div class="w-full mt-3 px-6 py-4 dark:bg-gray-900 overflow-hidden ">
            @if($errors->any())
                <x-alert :title="__('Error')" :message="$errors->first()" type="error"/>
            @endif
            {{ $slot }}
        </div>
        <div class="flex justify-center mt-0 lg:mt-5">
            <x-locale-switcher/>
        </div>
    </div>
</div>
</body>
</html>
