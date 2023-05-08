<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])

</head>

<body class="bg-white">
    <div class="relative w-full overflow-hidden">
        <header class="absolute top-0 left-0 w-full flex justify-center">
            <nav class="absolute w-full">
                <div class="relative z-30 bg-slate-700">
                    <div class="container m-auto px-2 md:px-12 lg:py-0 lg:px-10">
                        <div class="flex items-center justify-between py-4 gap-6 md:gap-0">
                            <input type="checkbox" name="toggle_nav" id="toggle_nav" class="peer hidden">
                            <div class="w-full px-6 flex justify-between md:w-max md:px-0 z-30">
                                <a href="#" aria-label="logo">
                                    <img src="{{ '/assets/img/logo.png' }}" class="w-36 dark:hidden" alt="tailus logo" width="144" height="68">
                                </a>

                                <div class="flex items-center md:hidden max-h-10">
                                    <label role="button" for="toggle_nav" aria-label="humburger" id="hamburger" class="relative p-2">
                                        <div id="line"
                                            class="m-auto h-0.5 w-6 rounded bg-sky-900 dark:bg-gray-300 transition duration-300"></div>
                                        <div id="line2"
                                            class="m-auto mt-2 h-0.5 w-6 rounded bg-sky-900 dark:bg-gray-300 transition duration-300">
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <label for="toggle_nav" class="hidden peer-checked:block fixed w-full h-full left-0 top-0 z-10 bg-green-200 bg-opacity-30 backdrop-blur backdrop-filter"></label>
                            <div class="hidden z-40 peer-checked:flex w-11/12 mx-auto md:mx-0 flex-col
                            justify-end items-center gap-y-8 p-6
                            rounded-xl bg-white dark:bg-gray-800 md:flex md:w-8/12
                            md:gap-y-0 md:gap-x-4 md:p-0
                            md:flex-row md:bg-transparent lg:w-7/12">
                                <div class="block w-full md:w-max">
                                    <ul class="gap-y-6 tracking-wide
                                    text-white font-medium flex flex-col md:flex-row md:gap-y-0">
                                        <li>
                                            <button id="mega-menu-icons-dropdown-button" data-dropdown-toggle="mega-menu-icons-dropdown" class="flex group items-center justify-between w-full py-2 pl-3 pr-4 rounded md:p-0 md:px-4 md:w-auto before:absolute before:-bottom-2 md:before:-bottom-7 before:w-full before:h-0.5 before:origin-left before:mt-auto before:rounded-full before:bg-green-800 before:transition before:scale-x-0 group-hover:before:scale-x-100">
                                                <span class="group-hover:text-green-500">Cloud Hosting</span>
                                                <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            </button>
                                            <div id="mega-menu-icons-dropdown" class="absolute z-10 grid hidden w-auto grid-cols-1 text-sm bg-white border border-gray-100 rounded-lg shadow-md  md:grid-cols-2">
                                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                                    <ul class="space-y-4" aria-labelledby="mega-menu-icons-dropdown-button">
                                                        <li>
                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                                <span class="sr-only">Value Cloud Hosting</span>
                                                                <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" focusable="false" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                                                Value Cloud Hosting
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                                <span class="sr-only">Wordpress Hosting</span>
                                                                <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                                Wordpress Hosting
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                                <span class="sr-only">Unlimited Hosting</span>
                                                                <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path></svg>
                                                                Unlimited Hosting
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                                    <ul class="space-y-4">
                                                        <li>
                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                                <span class="sr-only">High Perfomance Bussiness</span>
                                                                <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path><path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path></svg>
                                                                High Perfomance Bussiness
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                                <span class="sr-only">High Perfomance Enterprise</span>
                                                                <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path></svg>
                                                                High Perfomance Enterprise
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                                <span class="sr-only">Private Label cPanel Reseller</span>
                                                                <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path></svg>
                                                                Private Label cPanel Reseller
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <button id="mega-menu-icons-server-button" data-dropdown-toggle="mega-menu-icons-server" class="flex group items-center justify-between w-full py-2 pl-3 pr-4 rounded md:p-0 md:px-4 md:w-auto before:absolute before:-bottom-2 md:before:-bottom-7 before:w-full before:h-0.5 before:origin-left before:mt-auto before:rounded-full before:bg-green-800 before:transition before:scale-x-0 group-hover:before:scale-x-100">
                                                <span class="group-hover:text-green-500">Server</span>
                                                <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            </button>
                                            <div id="mega-menu-icons-server" class="absolute z-10 grid hidden w-auto grid-cols-1 text-sm bg-white border border-gray-100 rounded-lg shadow-md  md:grid-cols-2">
                                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                                    <ul class="space-y-4" aria-labelledby="mega-menu-icons-server-button">
                                                        <li>
                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                                <span class="sr-only">Cloud VPS KVM SSD</span>
                                                                <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" focusable="false" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                                                Cloud VPS KVM SSD
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                                <span class="sr-only">Server Sekolah CBT/Moodle</span>
                                                                <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                                Server Sekolah CBT/Moodle
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                                <span class="sr-only">Fleksibel VPS</span>
                                                                <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path></svg>
                                                                Fleksibel VPS
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                                    <ul class="space-y-4">
                                                        <li>
                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                                <span class="sr-only">Dedicated Server</span>
                                                                <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path><path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path></svg>
                                                                Dedicated Server
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                                <span class="sr-only">Colocation Server</span>
                                                                <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path></svg>
                                                                Colocation Server
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                                <span class="sr-only">Leased To Owned Dedicated Server</span>
                                                                <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path></svg>
                                                                Leased To Owned Dedicated Server
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <button id="mega-menu-icons-internet-button" data-dropdown-toggle="mega-menu-icons-internet" class="flex group items-center justify-between w-full py-2 pl-3 pr-4 rounded md:p-0 md:px-4 md:w-auto before:absolute before:-bottom-2 md:before:-bottom-7 before:w-full before:h-0.5 before:origin-left before:mt-auto before:rounded-full before:bg-green-800 before:transition before:scale-x-0 group-hover:before:scale-x-100">
                                                <span class="group-hover:text-green-500">Internet Access</span>
                                                <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            </button>
                                            <div id="mega-menu-icons-internet" class="absolute z-10 grid hidden w-auto grid-cols-1 text-sm bg-white border border-gray-100 rounded-lg shadow-md  md:grid-cols-2">
                                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                                    <ul class="space-y-4" aria-labelledby="mega-menu-icons-internet-button">
                                                        <li>
                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                                <span class="sr-only">BroadBand Home</span>
                                                                <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" focusable="false" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                                                BroadBand Home
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                                <span class="sr-only">BroadBand Bussiness</span>
                                                                <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                                BroadBand Bussiness
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                                    <ul class="space-y-4">
                                                        <li>
                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                                <span class="sr-only">BroadBand Wireless</span>
                                                                <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path><path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path></svg>
                                                                BroadBand Wireless
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                                <span class="sr-only">Check Coverage Area BroadBand</span>
                                                                <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path></svg>
                                                                Check Coverage Area BroadBand
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <button id="mega-menu-icons-domain-button" data-dropdown-toggle="mega-menu-icons-domain" class="flex group items-center justify-between w-full py-2 pl-3 pr-4 rounded md:p-0 md:px-4 md:w-auto before:absolute before:-bottom-2 md:before:-bottom-7 before:w-full before:h-0.5 before:origin-left before:mt-auto before:rounded-full before:bg-green-800 before:transition before:scale-x-0 group-hover:before:scale-x-100">
                                                <span class="group-hover:text-green-500">Domain</span>
                                                <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            </button>
                                            <div id="mega-menu-icons-domain" class="absolute z-10 grid hidden w-auto grid-cols-1 text-sm bg-white border border-gray-100 rounded-lg shadow-md  md:grid-cols-2">
                                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                                    <ul class="space-y-4" aria-labelledby="mega-menu-icons-domain-button">
                                                        <li>
                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                                <span class="sr-only">Daftar Domain</span>
                                                                <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" focusable="false" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                                                Daftar Domain
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                                <span class="sr-only">Domain Premium.id</span>
                                                                <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                                Domain Premium.id
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                                <span class="sr-only">Domain Backorder</span>
                                                                <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                                Domain Backorder
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                                <span class="sr-only">Domain Privacy Protection</span>
                                                                <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                                Domain Privacy Protection
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                                    <ul class="space-y-4">
                                                        <li>
                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                                <span class="sr-only">Sewa Domain</span>
                                                                <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path><path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path></svg>
                                                                Sewa Domain
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                                <span class="sr-only">Jual Beli & Lelang Domain</span>
                                                                <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path></svg>
                                                                Jual Beli & Lelang Domain
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                                <span class="sr-only">Domain Negotiator/Domain Blocker</span>
                                                                <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path></svg>
                                                                Domain Negotiator/Domain Blocker
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                                <span class="sr-only">Private Label Domain Reseller</span>
                                                                <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path></svg>
                                                                Private Label Domain Reseller
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <button id="mega-menu-icons-email-button" data-dropdown-toggle="mega-menu-icons-email" class="flex group items-center justify-between w-full py-2 pl-3 pr-4 rounded md:p-0 md:px-4 md:w-auto before:absolute before:-bottom-2 md:before:-bottom-7 before:w-full before:h-0.5 before:origin-left before:mt-auto before:rounded-full before:bg-green-800 before:transition before:scale-x-0 group-hover:before:scale-x-100">
                                                <span class="group-hover:text-green-500">Email Suite</span>
                                                <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            </button>
                                            <div id="mega-menu-icons-email" class="absolute z-10 grid hidden w-auto grid-cols-1 text-sm bg-white border border-gray-100 rounded-lg shadow-md  md:grid-cols-2">
                                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                                    <ul class="space-y-4" aria-labelledby="mega-menu-icons-email-button">
                                                        <li>
                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                                <span class="sr-only">Daftar Domain</span>
                                                                <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" focusable="false" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                                                Daftar Domain
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                                <span class="sr-only">Domain Premium.id</span>
                                                                <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                                Domain Premium.id
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                                <span class="sr-only">Domain Backorder</span>
                                                                <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                                Domain Backorder
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                                <span class="sr-only">Domain Privacy Protection</span>
                                                                <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                                Domain Privacy Protection
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                                    <ul class="space-y-4">
                                                        <li>
                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                                <span class="sr-only">Sewa Domain</span>
                                                                <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path><path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path></svg>
                                                                Sewa Domain
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                                <span class="sr-only">Jual Beli & Lelang Domain</span>
                                                                <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path></svg>
                                                                Jual Beli & Lelang Domain
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                                <span class="sr-only">Domain Negotiator/Domain Blocker</span>
                                                                <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path></svg>
                                                                Domain Negotiator/Domain Blocker
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                                <span class="sr-only">Private Label Domain Reseller</span>
                                                                <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path></svg>
                                                                Private Label Domain Reseller
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <div class="flex">
                                <button type="button" title="login" class="w-full py-2 px-4 rounded-xl text-center transition bg-green-600 hover:bg-green-700 active:bg-green-800 focus:bg-green-500 sm:w-max">
                                    <span class="block text-white font-semibold">
                                        Login
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div aria-hidden="true" class="container h-4 -mt-6 mx-auto bg-green-600/30 dark:bg-green-900/30 blur md:-mt-4"></div>
            </nav>
        </header>
        <div class="min-h-screen flex dark:from-gray-900 bg-gradient-to-b from-white to-green-50">
            <div class="container m-auto px-6 py-20 md:pb-0 md:pt-40 md:px-12 lg:py-0 lg:px-10">
                <div class="flex flex-wrap gap-12">
                    <div class="lg:w-6/12 lg:pt-32 lg:pb-20">
                        <div class="space-y-8 mt-8 lg:-mr-24 xl:-mr-0">
                            <h1 class="text-4xl text-gray-800 dark:text-white font-bold md:text-5xl lg:leading-tight">Uncompromised Versatility –When it Matters the Most.</h1>
                            <p class="text-lg text-gray-600 dark:text-gray-300">Quod rerum dolor ab harum facere quo nihil labore necessitatibus tempora?</p>

                            <div class="flex flex-col sm:flex-row gap-4">
                                <button type="button" title="Start buying" class="w-full py-3 px-6 rounded-xl text-center transition bg-green-600 hover:bg-green-700 active:bg-green-800 focus:bg-green-500 sm:w-max">
                                    <span class="block text-white font-semibold">
                                        Book Demo
                                    </span>
                                </button>
                                <button type="button" title="Start buying" class="w-full py-3 px-6 rounded-xl text-center transition dark:active:bg-green-900 dark:focus:bg-gray-800 active:bg-green-200 focus:bg-green-100 sm:w-max">
                                    <div class="flex justify-center">
                                        <span class="block text-green-700 dark:text-green-400 font-semibold">
                                            Our showreel
                                        </span>
                                    </div>
                                </button>
                            </div>
                        </div>

                        <div class="mt-8 pt-8 border-t border-gray-300 dark:border-gray-700">
                            <h6 class="text-lg text-green-800 dark:text-green-400 font-semibold">Trusted by</h6>
                            <div class="mt-6 flex gap-6">
                                <div class="flex items-center">
                                    <img class="-hue-rotate-30 w-auto h-auto dark:grayscale" src="images/clients/grabyo.png" width="50" height="20" alt="logo partener">
                                </div>

                                <div class="flex items-center">
                                    <img class="-hue-rotate-30 w-auto h-auto dark:grayscale" src="images/clients/lifegroups.png" width="50" height="20" alt="logo partener">
                                </div>
                                <div class="flex items-center">
                                    <img class="-hue-rotate-30 w-auto h-auto dark:grayscale" src="images/clients/lilly.png" width="50" height="20" alt="logo partener">
                                </div>

                                <div class="flex items-center">
                                    <img class="-hue-rotate-30 w-auto h-auto dark:grayscale" src="images/clients/microsoft.png" width="50" height="20" alt="logo partener">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hidden bottom-0 md:-right-32 md:block md:w-full md:ml-auto lg:absolute lg:-right-32 lg:w-[60%] xl:-right-48">
                        <img src="images/horse1.png" class="ml-48 lg:ml-0" alt="gril on an horse" loading="lazy" width="1053" height="772">
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>

</html>
