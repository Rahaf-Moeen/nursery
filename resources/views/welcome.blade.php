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
                class="flex justify-around bg-[#cc0072] dark:bg-gray-700 p-3 border-b-2 border-gray-100 dark:border-gray-700">
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
                                <button
                                    class="flex items-center px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                                    <span class="mx-1">{{__("Join Us")}}</span>
                                </button>
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
                    <div class="pt-2 pb-3 space-y-1">
                        
                    </div>

                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
                        <div class="flex flex-row justify-between px-4">
                            <div class="flex flex-col">
                                <button
                                    class="flex items-center px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                                    <svg class="w-5 h-5 mx-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                         fill="currentColor">
                                        <path fill-rule="evenodd"
                                              d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z"
                                              clip-rule="evenodd"/>
                                    </svg>

                                    <span class="mx-1">Refresh</span>
                                </button>
                            </div>
                            <div class="flex items-center">
                                <x-locale-switcher/>
                            </div>
                            <div class="flex items-center">
                                <x-theme-switcher/>
                            </div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <x-responsive-nav-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-responsive-nav-link>
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-responsive-nav-link :href="route('logout')"
                                                       onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </form>
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
                        Welcome to the Al-Ghad Al-Mashreq Nursery website</h1>
                        <p class="mt-4 text-gray-600 dark:text-gray-300">A social educational learning environment that combines originality and modernity.</p>

                        <p class="mt-4 text-gray-600 dark:text-gray-300">A purposeful social educational institution that seeks to provide meaningful educational and care services for children from the age of 45 days to three years.</p>

                        



                        
                    </div>
                </div>

                <div class="flex items-center justify-center w-full h-96 lg:w-1/2">
                    <img class="object-cover w-full h-full max-w-2xl rounded-md"
                         src="https://scontent.fgza2-3.fna.fbcdn.net/v/t39.30808-6/347379408_505726871679999_4352578916335791130_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=uJVo-BhN2bgAX_wXXYv&_nc_ht=scontent.fgza2-3.fna&oh=00_AfCDS2k3Jf-7MZcd5wGcoupHI7fIHgLsGJXfiIRSud056Q&oe=6485373F "
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
                            Hourly child fee system
                            </h2>
                        </div>

                        <div class="flex-shrink-0">
                <span class="pt-2 text-3xl font-bold text-gray-800 uppercase dark:text-gray-100">
                    4 ₪
                </span>
                        </div>

                        <ul class="flex-1 space-y-4">
                        <li class="text-gray-500 dark:text-gray-400">
                            hour of the nursery :
                            </li>
                            <li class="text-gray-500 dark:text-gray-400">
                            5 ₪
                            </li>
                            <li class="text-gray-500 dark:text-gray-400">
                                 
                                From the age of 45 days 
                            </li>

                            <li class="text-gray-500 dark:text-gray-400">
                            to the age of three years
                            </li>

                            <li class="text-gray-500 dark:text-gray-400">
                            The delay after the third 
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
                            Child fee system per day
                            </h2>
                        </div>

                        <div class="flex-shrink-0">
                <span class="pt-2 text-3xl font-bold text-gray-800 uppercase dark:text-gray-100">
                    10 ₪
                </span>

                            <span class="text-gray-500 dark:text-gray-400">
                    /day
                </span>
                        </div>

                        <ul class="flex-1 space-y-4">
                            <li class="text-gray-500 dark:text-gray-400">
                            System 4 days a week for a month  : 
                            </li>
                            <li class="text-gray-500 dark:text-gray-400">
                            100 ₪
                            </li>

                            <li class="text-gray-500 dark:text-gray-400">
                            System 3 days a week for a month :
                            </li>
                            <li class="text-gray-500 dark:text-gray-400">
                            80 ₪
                            </li>

                            <li class="text-gray-500 dark:text-gray-400">
                            System 2 days a week for a month : 
                            </li>
                            <li class="text-gray-500 dark:text-gray-400">
                            50 ₪
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
                            Child fee system per month
                            </h2>
                        </div>

                        <div class="flex-shrink-0">
                <span class="pt-2 text-3xl font-bold text-gray-800 uppercase dark:text-gray-100">
                150 ₪
                </span>

                            <span class="text-gray-500 dark:text-gray-400">
                    /month
                </span>
                        </div>

                        <ul class="flex-1 space-y-4">
                            <li class="text-gray-500 dark:text-gray-400">
                            Monthly system for one child :
                            </li>

                            <li class="text-gray-500 dark:text-gray-400">
                            150 ₪
                            </li>

                            <li class="text-gray-500 dark:text-gray-400">
                            Monthly system for brothers number 2 :
                            </li>

                            <li class="text-gray-500 dark:text-gray-400">
                            225 ₪                            </li>

                            <li class="text-gray-500 dark:text-gray-400">
                            Monthly system for brothers number 3 :
                            </li>

                            <li class="text-gray-500 dark:text-gray-400">
                            300 ₪                            </li>
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
                {{__('Displaying the opinions or comments of previous customers about the nursery and its services.')}}
                </p>

                <section class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 lg:grid-cols-2 xl:grid-cols-3">
                    <div class="p-8 border rounded-lg dark:border-gray-700">
                        <p class="leading-loose text-gray-500 dark:text-gray-400">
                            “{{__('Great experience! Al-Ghad Al-Mashreq Nursery was a safe and nurturing place for my child. 
                            The staff was friendly and professional, 
                            and took care of the individual needs of the child.')}}”
                        </p>

                        <div class="flex items-center mt-8 -mx-2">
                            <img
                                class="object-cover mx-2 rounded-full w-14 shrink-0 h-14 ring-4 ring-gray-300 dark:ring-gray-700"
                                src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                                alt="">

                            <div class="mx-2">
                                <h1 class="font-semibold text-gray-800 dark:text-white">Deema</h1>
                                <span class="text-sm text-gray-500">Gaza,</span>
                            </div>
                        </div>
                    </div>

                    <div class="p-8 border rounded-lg dark:border-gray-700">
                        <p class="leading-loose text-gray-500 dark:text-gray-400">
                            “{{__('I am very happy with the service of Al Ghad Al Mashreq Nursery. Their professional treatment and individual attention to my 
                                child made me feel comfortable and confident. I highly recommend them!')}}”.
                        </p>

                        <div class="flex items-center mt-8 -mx-2">
                            <img
                                class="object-cover mx-2 rounded-full w-14 shrink-0 h-14 ring-4 ring-gray-300 dark:ring-gray-700"
                                src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                                alt="">

                            <div class="mx-2">
                                <h1 class="font-semibold text-gray-800 dark:text-white"> Noor </h1>
                                <span class="text-sm text-gray-500">Gaza, </span>
                            </div>
                        </div>
                    </div>

                    <div class="p-8 border rounded-lg dark:border-gray-700">
                        <p class="leading-loose text-gray-500 dark:text-gray-400">
                            “{{__('Al Ghad Al Mashreq Nursery is the best choice for my child. Take advantage of their educational programs
                                 and fun activities. They gave him the care and love he deserves.')}}”.
                        </p>

                        <div class="flex items-center mt-8 -mx-2">
                            <img
                                class="object-cover mx-2 rounded-full w-14 shrink-0 h-14 ring-4 ring-gray-300 dark:ring-gray-700"
                                src="https://images.unsplash.com/photo-1488508872907-592763824245?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                alt="">

                            <div class="mx-2">
                                <h1 class="font-semibold text-gray-800 dark:text-white"> Ali </h1>
                                <span class="text-sm text-gray-500">Gaza, </span>
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
                            <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">elgadnursery@gmail.com</p>
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
                            <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">Palestine, Gaza, Islamic University</p>
                        </div>

                        <div>
                    <span class="inline-block p-3 text-blue-500 rounded-full bg-blue-100/80 dark:bg-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>
                    </span>

                            <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">Phone</h2>
                            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">From Saturday to Wednesday from 8 am to 5 pm.</p>
                            <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">(00972) 592 070 188</p>
                        </div>
                    </div>

                    <div class="overflow-hidden rounded-lg lg:col-span-2 h-96 lg:h-auto">
                        <iframe width="100%" height="100%" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3401.3395086784362!2d34.44259232580313!3d31.514833974216454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14fd7feace23d62b%3A0xe2c87f576e105888!2sIslamic%20University%20of%20Gaza!5e0!3m2!1sar!2s!4v1686166038991!5m2!1sar!2s"></iframe>
                    </div>
                </div>
            </div>
        </section>















       






















































        

        
                    <footer class="bg-white dark:bg-gray-900">
            <div class="container p-6 mx-auto">
                <div class="lg:flex">
                    <div class="w-full -mx-6 lg:w-2/5">
                        <div class="px-6">
                            

                            <a href="https://scontent.fgza2-3.fna.fbcdn.net/v/t39.30808-6/268466578_648134999887724_8002045381818402433_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=gep96IiAXSgAX-X-J6B&_nc_oc=AQlwFH6VKHIabS6WzMOr5wLNNq1Wu5wgXAszbZSTF_NYmuXuuKNIBYXLSGSa3IdU0kM&_nc_ht=scontent.fgza2-3.fna&oh=00_AfBujR4c9ek8vHqXdyc4XnBmqvGtEvo9cZwAkuG89pau1g&oe=6486028D">
    <img class="w-auto h-7 hover:scale-110" src="https://scontent.fgza2-3.fna.fbcdn.net/v/t39.30808-6/268466578_648134999887724_8002045381818402433_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=gep96IiAXSgAX-X-J6B&_nc_oc=AQlwFH6VKHIabS6WzMOr5wLNNq1Wu5wgXAszbZSTF_NYmuXuuKNIBYXLSGSa3IdU0kM&_nc_ht=scontent.fgza2-3.fna&oh=00_AfBujR4c9ek8vHqXdyc4XnBmqvGtEvo9cZwAkuG89pau1g&oe=6486028D" 
    alt=""style="transform: scale(2.5); transition: transform 0.3s ease-in-out;">
</a>


<br>
                            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{__('Palestine ,Gaza, islamic university, Medina building ')}}</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{__('0592 070 188')}}</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{__('elgadnursery@gmail.com')}}</p>

                            <div class="flex mt-6 -mx-2">
                                <a href="#"
                                   class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                   aria-label="Reddit">
                                        <path
                                            d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z">
                                        </path>
                                    </svg>
                                </a>

                                <a href="https://www.facebook.com/elgadelmoshreqnursery?mibextid=ZbWKwL"
                                   class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                                   aria-label="Facebook">
                                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
                                        </path>
                                    </svg>
                                </a>

                                <a href="https://www.youtube.com/watch?v=V6bibFpkzdI" class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-red-500 dark:hover:text-red-400" aria-label="YouTube">
                             <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M21.009 7.962c-.202-1.444-.819-2.383-1.739-3.303C17.306 3.026 15.446 2.381 12 2.381s-5.306.644-6.27 2.278c-.92.92-1.537 1.859-1.739 3.303C3.647 9.016 3.647 12 3.647 12s0 2.984.344 4.038c.202 1.444.819 2.383 1.739 3.303C6.694 20.974 8.554 21.619 12 21.619s5.306-.644 6.27-2.278c.92-.92 1.537-1.859 1.739-3.303.344-1.053.344-4.038.344-4.038s0-2.984-.344-4.038zM9.8 16.49V7.554l6.972 4.467-6.972 4.469z"/>
                                </svg>
                                 </a>





                            </div>
                        </div>
                    </div>

                    <div class="mt-6 lg:mt-0 lg:flex-1">
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                            <div>
                            <h3 class="text-white mb-4">Quick Links</h3>
                        <a class="btn btn-link text-white-50" href="">{{__('About Us')}}</a><br>
                        <a class="btn btn-link text-white-50" href="">{{__('Contact Us')}}</a><br>
                        <a class="btn btn-link text-white-50" href="">{{__('Our Services')}}</a><br>
                        <a class="btn btn-link text-white-50" href="">{{__('Privacy Policy')}}</a><br>
                        <a class="btn btn-link text-white-50" href="">{{__('Terms & Condition')}}</a>
                            </div>

                           
                            <div><br>
                                <h3 class="text-gray-700 uppercase dark:text-white">Products</h3>
                                <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Childcare</a>
                                <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Healthy Nutrition</a>
                                <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Creative activities</a>
                                <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Motor skills</a>

                            </div>

                            <div><br>
                                <h3 class="text-gray-700 uppercase dark:text-white">Contact</h3>
                                <span class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">(00972) 592 070 188</span>
                                <span class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">elgadnursery@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="h-px my-6 bg-gray-200 border-none dark:bg-gray-700">

                <div>
                    <p class="text-center text-gray-500 dark:text-gray-400">© Brand 2023 - All rights reserved</p>
                </div>
            </div>
        </footer>
    </div>
</div>
</body>
</html>
