<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){
        return view('customer'); 
    }
    public function getCustomers(Request $request){
        $search = $request->search;

        if($search == '')
            $customers = Customer::orderby('name','asc')->select('id','name','lastname')->limit(5)->get();
        else
            $customers = Customer::orderby('name','asc')->select('id','name','lastname')->where('name', 'like', '%' .$search . '%')->limit(5)->get();
            

        $response = array();
        foreach($customers as $customer){
            $response[] = array(
                    "id"=>$customer->id,
                    "text"=>$customer->name.' '.$customer->lastname
                );
        }
        return response()->json($response); 

    }
}
