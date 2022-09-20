@extends('navbar')
@section('menu')
<div class="container w-full flex flex-wrap mx-auto px-2 pt-8 lg:pt-16 mt-16">
    <div class="w-full lg:w-1/5 lg:px-6 text-xl text-gray-800 leading-normal">
       <p class="text-base font-bold py-2 lg:pb-6 text-gray-700">Menu</p>
       <div class="block lg:hidden sticky inset-0">
          <button id="menu-toggle" class="flex w-full justify-end px-3 py-3 bg-white lg:bg-transparent border rounded border-gray-600 hover:border-purple-500 appearance-none focus:outline-none">
             <svg class="fill-current h-3 float-right" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
             </svg>
          </button>
       </div>
       <div class="w-full sticky inset-0 hidden h-64 lg:h-auto overflow-x-hidden overflow-y-auto lg:overflow-y-hidden lg:block mt-0 border border-gray-400 lg:border-transparent bg-white shadow lg:shadow-none lg:bg-transparent z-20" style="top:5em;" id="menu-content">
          <ul class="list-reset">
             <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
                <a id="customer" href="{{route('customer.index')}}" class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:hover:border-gray-400">
                   <span class="pb-1 md:pb-0 text-sm">Customer</span>
                </a>
             </li>
             <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
                <a id="purchase" href="{{route('purchase')}}" class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:hover:border-gray-400">
                   <span class="pb-1 md:pb-0 text-sm">Purcharse</span>
                </a>
          </li>
          <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
             <a id="orders" href="{{route('orders')}}" class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:hover:border-gray-400">
                <span class="pb-1 md:pb-0 text-sm">Orders</span>
             </a>
          </li>
       </ul>
    </div>
 </div>
@yield('content')
 <!--Back link -->
 <div class="w-full lg:w-4/5 lg:ml-auto text-base md:text-sm text-gray-500 px-4 py-6">
    <span class="text-base text-purple-500 font-bold">&lt;</span> <a href="{{url()->previous()}}" class="text-base md:text-sm text-purple-500 font-bold no-underline hover:underline">Back</a>
 </div>
 </div>
 <!--/container-->
     
@endsection