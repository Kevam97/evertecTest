@extends('index')
@section('navbar')
    <nav id="header" class="fixed w-full z-10 top-0 bg-white border-b border-gray-400">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-4">
        <div class="pl-4 flex items-center">
            <svg class="h-5 pr-3 fill-current text-purple-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M0 2C0 .9.9 0 2 0h16a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm14 12h4V2H2v12h4c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2zM5 9l2-2 2 2 4-4 2 2-6 6-4-4z"/>
            </svg>
            <a class="text-gray-900 text-base no-underline hover:no-underline font-extrabold text-xl"  href="#"> 
            Ecomemrce Shopping Cart
            </a>
        </div>
        <div class="block lg:hidden pr-4">
            <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-purple-500 appearance-none focus:outline-none">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                </svg>
            </button>
        </div>
        </div>
    </nav>
@endsection