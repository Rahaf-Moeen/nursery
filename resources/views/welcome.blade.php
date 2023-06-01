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
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <div class="sticky top-0">
            <div
                class="flex justify-around bg-gray-100 dark:bg-gray-700 p-3 border-b-2 border-gray-100 dark:border-gray-700">
                <div class="flex items-center">
                    <x-theme-switcher/>
                </div>
                <div class="shrink-0 flex items-center">
                    <a href="#home">
                        <div class="flex">
                            <div>
                                <x-application-logo class="block h-9 w-auto text-gray-800 dark:text-gray-200"/>
                            </div>
                            <div class="flex items-center text-gray-800 dark:text-gray-200 rtl:mr-2 ltr:ml-2">
                                {{__('Al-Ghad Al-Mashreq Nursery')}}
                            </div>
                        </div>
                    </a>
                </div>
                <div class="flex items-center">
                    <x-locale-switcher/>
                </div>

            </div>
            <nav x-data="{ open: false }"
                 class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Navigation Links -->
                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                <x-nav-link href="#home">
                                    {{__('Home')}}
                                </x-nav-link>
                                <x-nav-link href="#home">
                                    {{__('About Us')}}
                                </x-nav-link>
                                <x-nav-link href="#pricing">
                                    {{ __('Pricing') }}
                                </x-nav-link>
                                <x-nav-link href="#feedback">
                                    {{ __('Feedback') }}
                                </x-nav-link>
                                <x-nav-link href="#contact_us">
                                    {{ __('Contact Us') }}
                                </x-nav-link>
                            </div>
                        </div>

                        <!-- Settings Dropdown -->

                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <div class="flex items-center ltr:mr-2 ltr:ml-2 rtl:ml-2">
                                <a href="{{ route('login') }}"
                                    class="flex items-center px-4 py-2 font-medium tracking-wide text-gray-200 capitalize transition-colors duration-300 transform bg-gray-700 rounded-lg hover:bg-gray-600 dark:hover:text-white focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                                    <span class="mx-1">{{__("Login")}}</span>
                                </a>
                                <a href="{{ route('register') }}"
                                    class="flex items-center ms-1 px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                                    <span class="mx-1">{{__("Join Us")}}</span>
                                </a>
                            </div>

                        </div>

                        <!-- Hamburger -->
                        <div class="-mr-2 flex items-center sm:hidden">
                            <button @click="open = ! open"
                                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M4 6h16M4 12h16M4 18h16"/>
                                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div x-bind:class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
                        <div class="mt-3 space-y-1">
                            <x-responsive-nav-link href="#home">
                                {{__('Home')}}
                            </x-responsive-nav-link>
                            <x-responsive-nav-link href="#home">
                                {{__('About Us')}}
                            </x-responsive-nav-link>
                            <x-responsive-nav-link href="#pricing">
                                {{ __('Pricing') }}
                            </x-responsive-nav-link>
                            <x-responsive-nav-link href="#feedback">
                                {{ __('Feedback') }}
                            </x-responsive-nav-link>
                            <x-responsive-nav-link href="#contact_us">
                                {{ __('Contact Us') }}
                            </x-responsive-nav-link>
                            <x-responsive-nav-link href="{{ route('register') }}">
                                {{ __('Join Us') }}
                            </x-responsive-nav-link>
                            <x-responsive-nav-link href="{{ route('login') }}">
                                {{ __('Login') }}
                            </x-responsive-nav-link>
                        </div>

                    </div>
                </div>
            </nav>
        </div>
        <section id="home" class="bg-white dark:bg-gray-900 scroll-m-28">
            <div
                class="container flex flex-col px-20 py-10 mx-auto space-y-6 lg:h-[32rem] lg:py-16 lg:flex-row lg:items-center">
                <div class="w-full lg:w-1/2">
                    <div class="lg:max-w-lg">
                        <h1 class="text-3xl font-semibold tracking-wide text-gray-800 dark:text-white lg:text-4xl">
                            Find your premium new glasses exported from US</h1>
                        <p class="mt-4 text-gray-600 dark:text-gray-300">We work with the best remunated glasses
                            dealers in US to find your new glasses.</p>
                        <div class="grid gap-6 mt-8 sm:grid-cols-2">
                            <div class="flex items-center text-gray-800 -px-3 dark:text-gray-200">
                                <svg class="w-5 h-5 mx-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 13l4 4L19 7"/>
                                </svg>

                                <span class="mx-3">Premium selection</span>
                            </div>

                            <div class="flex items-center text-gray-800 -px-3 dark:text-gray-200">
                                <svg class="w-5 h-5 mx-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 13l4 4L19 7"/>
                                </svg>

                                <span class="mx-3">Insurance</span>
                            </div>

                            <div class="flex items-center text-gray-800 -px-3 dark:text-gray-200">
                                <svg class="w-5 h-5 mx-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 13l4 4L19 7"/>
                                </svg>

                                <span class="mx-3">All legal documents</span>
                            </div>

                            <div class="flex items-center text-gray-800 -px-3 dark:text-gray-200">
                                <svg class="w-5 h-5 mx-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 13l4 4L19 7"/>
                                </svg>

                                <span class="mx-3">From US glasses dealers</span>
                            </div>

                            <div class="flex items-center text-gray-800 -px-3 dark:text-gray-200">
                                <svg class="w-5 h-5 mx-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 13l4 4L19 7"/>
                                </svg>

                                <span class="mx-3">Payment Security</span>
                            </div>

                            <div class="flex items-center text-gray-800 -px-3 dark:text-gray-200">
                                <svg class="w-5 h-5 mx-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 13l4 4L19 7"/>
                                </svg>

                                <span class="mx-3">Fast shipping (+ Express)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center w-full h-96 lg:w-1/2">
                    <img class="object-cover w-full h-full max-w-2xl rounded-md"
                         src="https://images.unsplash.com/photo-1555181126-cf46a03827c0?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                         alt="glasses photo">
                </div>
            </div>
        </section>
        <section id="pricing" class="bg-gray-100 dark:bg-gray-700 scroll-m-28">
            <div class="container px-6 py-8 mx-auto">
                <div
                    class="flex flex-col items-center justify-center space-y-8 lg:-mx-4 lg:flex-row lg:items-stretch lg:space-y-0">
                    <div
                        class="flex flex-col w-full max-w-sm p-8 space-y-8 text-center bg-white border-2 border-gray-200 rounded-lg lg:mx-4 dark:bg-gray-900 dark:border-gray-700">
                        <div class="flex-shrink-0">
                            <h2 class="inline-flex items-center justify-center px-2 font-semibold tracking-tight text-blue-400 uppercase rounded-lg bg-gray-50 dark:bg-gray-700">
                                Casual
                            </h2>
                        </div>

                        <div class="flex-shrink-0">
                <span class="pt-2 text-3xl font-bold text-gray-800 uppercase dark:text-gray-100">
                    Free
                </span>
                        </div>

                        <ul class="flex-1 space-y-4">
                            <li class="text-gray-500 dark:text-gray-400">
                                Up to 5 projects
                            </li>

                            <li class="text-gray-500 dark:text-gray-400">
                                Up to 10 collaborators
                            </li>

                            <li class="text-gray-500 dark:text-gray-400">
                                2Gb of storage
                            </li>
                        </ul>

                        <button
                            class="inline-flex items-center justify-center px-4 py-2 font-medium text-white uppercase transition-colors bg-blue-500 rounded-lg hover:bg-blue-700 focus:outline-none">
                            Start free
                        </button>
                    </div>

                    <div
                        class="flex flex-col w-full max-w-sm p-8 space-y-8 text-center bg-white border-2 border-gray-200 rounded-lg lg:mx-4 dark:bg-gray-900 dark:border-gray-700">
                        <div class="flex-shrink-0">
                            <h2 class="inline-flex items-center justify-center px-2 font-semibold tracking-tight text-blue-400 uppercase rounded-lg bg-gray-50 dark:bg-gray-700">
                                Professional
                            </h2>
                        </div>

                        <div class="flex-shrink-0">
                <span class="pt-2 text-3xl font-bold text-gray-800 uppercase dark:text-gray-100">
                    $24.90
                </span>

                            <span class="text-gray-500 dark:text-gray-400">
                    /month
                </span>
                        </div>

                        <ul class="flex-1 space-y-4">
                            <li class="text-gray-500 dark:text-gray-400">
                                Up to 10 projects
                            </li>

                            <li class="text-gray-500 dark:text-gray-400">
                                Up to 20 collaborators
                            </li>

                            <li class="text-gray-500 dark:text-gray-400">
                                10Gb of storage
                            </li>

                            <li class="text-gray-500 dark:text-gray-400">
                                Real-time collaborations
                            </li>
                        </ul>

                        <button
                            class="inline-flex items-center justify-center px-4 py-2 font-medium text-white uppercase transition-colors bg-blue-500 rounded-lg hover:bg-blue-700 focus:outline-none">
                            Start free trial
                        </button>
                    </div>

                    <div
                        class="flex flex-col w-full max-w-sm p-8 space-y-8 text-center bg-white border-2 border-gray-200 rounded-lg lg:mx-4 dark:bg-gray-900 dark:border-gray-700">
                        <div class="flex-shrink-0">
                            <h2 class="inline-flex items-center justify-center px-2 font-semibold tracking-tight text-blue-400 uppercase rounded-lg bg-gray-50 dark:bg-gray-700">
                                Expert
                            </h2>
                        </div>

                        <div class="flex-shrink-0">
                <span class="pt-2 text-3xl font-bold text-gray-800 uppercase dark:text-gray-100">
                    $49.90
                </span>

                            <span class="text-gray-500 dark:text-gray-400">
                    /month
                </span>
                        </div>

                        <ul class="flex-1 space-y-4">
                            <li class="text-gray-500 dark:text-gray-400">
                                Unlimited projects
                            </li>

                            <li class="text-gray-500 dark:text-gray-400">
                                Unlimited collaborators
                            </li>

                            <li class="text-gray-500 dark:text-gray-400">
                                Unlimited storage
                            </li>

                            <li class="text-gray-500 dark:text-gray-400">
                                Real-time collaborations
                            </li>

                            <li class="text-gray-500 dark:text-gray-400">
                                24x7 Support
                            </li>
                        </ul>

                        <button
                            class="inline-flex items-center justify-center px-4 py-2 font-medium text-white uppercase transition-colors bg-blue-500 rounded-lg hover:bg-blue-700 focus:outline-none">
                            Start free trial
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section id="feedback" class="bg-white dark:bg-gray-900 scroll-my-28">
            <div class="container px-6 py-10 mx-auto">
                <h1 class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl dark:text-white">
                    What our <span class="text-blue-500 ">clients</span> say
                </h1>

                <p class="max-w-2xl mx-auto mt-6 text-center text-gray-500 dark:text-gray-300">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo incidunt ex placeat modi magni
                    quia error
                    alias, adipisci rem similique, at omnis eligendi optio eos harum.
                </p>

                <section class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 lg:grid-cols-2 xl:grid-cols-3">
                    <div class="p-8 border rounded-lg dark:border-gray-700">
                        <p class="leading-loose text-gray-500 dark:text-gray-400">
                            “Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quibusdam ducimus
                            libero ad
                            tempora doloribus expedita laborum saepe voluptas perferendis delectus assumenda rerum,
                            culpa
                            aperiam dolorum, obcaecati corrupti aspernatur a.”.
                        </p>

                        <div class="flex items-center mt-8 -mx-2">
                            <img
                                class="object-cover mx-2 rounded-full w-14 shrink-0 h-14 ring-4 ring-gray-300 dark:ring-gray-700"
                                src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                                alt="">

                            <div class="mx-2">
                                <h1 class="font-semibold text-gray-800 dark:text-white">Robert</h1>
                                <span class="text-sm text-gray-500">CTO, Robert Consultency</span>
                            </div>
                        </div>
                    </div>

                    <div class="p-8 border rounded-lg dark:border-gray-700">
                        <p class="leading-loose text-gray-500 dark:text-gray-400">
                            “Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quibusdam ducimus
                            libero ad
                            tempora doloribus expedita laborum saepe voluptas perferendis delectus assumenda rerum,
                            culpa
                            aperiam dolorum, obcaecati corrupti aspernatur a.”.
                        </p>

                        <div class="flex items-center mt-8 -mx-2">
                            <img
                                class="object-cover mx-2 rounded-full w-14 shrink-0 h-14 ring-4 ring-gray-300 dark:ring-gray-700"
                                src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                                alt="">

                            <div class="mx-2">
                                <h1 class="font-semibold text-gray-800 dark:text-white">Jeny Doe</h1>
                                <span class="text-sm text-gray-500">CEO, Jeny Consultency</span>
                            </div>
                        </div>
                    </div>

                    <div class="p-8 border rounded-lg dark:border-gray-700">
                        <p class="leading-loose text-gray-500 dark:text-gray-400">
                            “Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quibusdam ducimus
                            libero ad
                            tempora doloribus expedita laborum saepe voluptas perferendis delectus assumenda rerum,
                            culpa
                            aperiam dolorum, obcaecati corrupti aspernatur a.”.
                        </p>

                        <div class="flex items-center mt-8 -mx-2">
                            <img
                                class="object-cover mx-2 rounded-full w-14 shrink-0 h-14 ring-4 ring-gray-300 dark:ring-gray-700"
                                src="https://images.unsplash.com/photo-1488508872907-592763824245?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                alt="">

                            <div class="mx-2">
                                <h1 class="font-semibold text-gray-800 dark:text-white">Ema Watson </h1>
                                <span class="text-sm text-gray-500">Marketing Manager at Stech</span>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <section id="contact_us" class="bg-gray-100 dark:bg-gray-700 scroll-my-28">
            <div class="container px-12 py-12 mx-auto">
                <div class="grid grid-cols-1 gap-12 mt-10 lg:grid-cols-3">
                    <div class="grid grid-cols-1 gap-12 sm:grid-cols-2 lg:grid-cols-1">
                        <div>
                    <span class="inline-block p-3 text-blue-500 rounded-full bg-blue-100/80 dark:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                    </span>

                            <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">Email</h2>
                            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Our friendly team is here to help.</p>
                            <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">hello@merakiui.com</p>
                        </div>

                        <div>
                    <span class="inline-block p-3 text-blue-500 rounded-full bg-blue-100/80 dark:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                    </span>

                            <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">Office</h2>
                            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Come say hello at our office HQ.</p>
                            <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">100 Smith Street Collingwood VIC 3066 AU</p>
                        </div>

                        <div>
                    <span class="inline-block p-3 text-blue-500 rounded-full bg-blue-100/80 dark:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>
                    </span>

                            <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">Phone</h2>
                            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Mon-Fri from 8am to 5pm.</p>
                            <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">+1 (555) 000-0000</p>
                        </div>
                    </div>

                    <div class="overflow-hidden rounded-lg lg:col-span-2 h-96 lg:h-auto">
                        <iframe width="100%" height="100%" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=%C4%B0zmir+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <footer class="bg-white dark:bg-gray-900">
            <div class="container p-6 mx-auto">
                <div class="lg:flex">
                    <div class="w-full -mx-6 lg:w-2/5">
                        <div class="px-6">
                            <a href="#">
                                <img class="w-auto h-7" src="https://merakiui.com/images/full-logo.svg" alt="">
                            </a>

                            <p class="max-w-sm mt-2 text-gray-500 dark:text-gray-400">Join 31,000+ other and never miss out on new tips, tutorials, and more.</p>

                            <div class="flex mt-6 -mx-2">
                                <a href="#"
                                   class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                   aria-label="Reddit">
                                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z">
                                        </path>
                                    </svg>
                                </a>

                                <a href="#"
                                   class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                   aria-label="Facebook">
                                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
                                        </path>
                                    </svg>
                                </a>

                                <a href="#"
                                   class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                   aria-label="Github">
                                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 lg:mt-0 lg:flex-1">
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                            <div>
                                <h3 class="text-gray-700 uppercase dark:text-white">About</h3>
                                <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Company</a>
                                <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">community</a>
                                <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Careers</a>
                            </div>

                            <div>
                                <h3 class="text-gray-700 uppercase dark:text-white">Blog</h3>
                                <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Tec</a>
                                <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Music</a>
                                <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Videos</a>
                            </div>

                            <div>
                                <h3 class="text-gray-700 uppercase dark:text-white">Products</h3>
                                <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Mega cloud</a>
                                <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Aperion UI</a>
                                <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Meraki UI</a>
                            </div>

                            <div>
                                <h3 class="text-gray-700 uppercase dark:text-white">Contact</h3>
                                <span class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">+1 526 654 8965</span>
                                <span class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">example@email.com</span>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="h-px my-6 bg-gray-200 border-none dark:bg-gray-700">

                <div>
                    <p class="text-center text-gray-500 dark:text-gray-400">© Brand 2020 - All rights reserved</p>
                </div>
            </div>
        </footer>
    </div>
</div>
</body>
</html>
