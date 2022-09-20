@extends('menu')
@section('content')
    <div class="w-full lg:w-4/5 p-8 mt-6 lg:mt-0 text-gray-900 leading-normal bg-white border border-gray-400 border-rounded">
        <!--Title-->
        <div class="font-sans">            
            <h1 class="font-sans break-normal text-gray-900 pt-6 pb-2 text-xl">Purchase</h1>
            <hr class="border-b border-gray-400">
        </div>
        <!-- /Title -->
        <div class="p-5">
            <form class="w-full max-w-lg" id="purchase-form">
                @csrf
                <div>
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Customer
                        </label>
                        {{-- <input id="customer" type="text" value="1"> --}}
                        <select id='selelectCustomer' class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  style='width: 200px;'>
                            <option value='0'>-- Select customer --</option>
                        </select>                        
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                            Product
                        </label>
                        <input class="p-3 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="product" type="text" value="5000" disabled>
                    </div>
                    <div class="w-full md:w-1/2 px-3 py-2" >
                        
                            <button class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 border border-purple-700 rounded">Purchase</button>
                      
                    </div>
                </div>
            </form>
        </div>        
    </div>
    <script type="text/javascript">
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $(document).ready(function(){

            $( "#selelectCustomer" ).select2({
                ajax: { 
                url: "{{route('getCustomers')}}",
                type: "post",
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                    _token: CSRF_TOKEN,
                    search: params.term // search term
                    };
                },
                processResults: function (response) {
                    return {
                    results: response
                    };
                },
                cache: true
                }
            });
        });
        $("#purchase-form").submit(function(e){
            e.preventDefault();
            let idCustomer = $("#selelectCustomer").val();
            let price =$('#product').val();
            $.ajax({
                url: "{{route('create')}}",
                type: "POST",
                data:{
                    "_token":$('input[name="_token"]').val(),           
                    idCustomer: idCustomer,
                    price: price,
                }

            }).done(function(response){
                alert(response.msg);
            })
        });
        
    </script>
@endsection