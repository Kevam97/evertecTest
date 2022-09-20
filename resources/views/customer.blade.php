@extends('menu')
@section('content')
    <div class="w-full lg:w-4/5 p-8 mt-6 lg:mt-0 text-gray-900 leading-normal bg-white border border-gray-400 border-rounded">
        <!--Title-->
        <div class="font-sans">
            <h1 class="font-sans break-normal text-gray-900 pt-6 pb-2 text-xl">Customer Form</h1>
            <hr class="border-b border-gray-400">
        </div>
        <!-- /Title -->
        <livewire:customer-form />
    </div>
@endsection