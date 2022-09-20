<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use App\Models\Order;


class OrderController extends Controller
{
    private function makeRequest($reference, $price){
        $seed = date('c');
        $date = date('c', strtotime("+5 min"));
        $nonce = bin2hex(random_bytes(16));
        $tranKey = base64_encode(sha1($nonce . $seed . env('SECRET_KEY'), true));
        $data = [           

            "auth" => [
                "login0" =>  env('LOGIN'),
                "tranKey" => $tranKey,
                "nonce" => $nonce,
                "seed" => $seed,
            ],

            "payment"=> [

                "reference"=>$reference,
                "description"=> "Pago básico de prueba",
                "amount"=> [

                    "currency"=>"COP",
                    "total"=> $price
                ],
                
            ],
            "expiration"=> $date,
            "returnUrl"=> "https://dev.placetopay.com/redirection/sandbox/session/".$reference,
            "ipAddress"=> "127.0.0.1",
            "userAgent"=>  "PlacetoPay Sandbox"

        ];
        return $data;
        
    }

    public function showOrders(){
        
        return view('orders');
    }

    public function index(){
        
        return view('purchase');       
    }

    public function createOrder(Request $request){
        
        $order = new Order;
        $order->reference = Str::random(10);
        $order->customer_id = $request->idCustomer;
        $data = self::makeRequest($order->customer_id, $request->price);
        $response = Http::post('https://checkout-co.placetopay.dev/api/session',$data);

        if($response->status() == 401)
        {
            $order->status = "NO PROCESS";
            $order->save();
            return response()->json(['msg'=>'Unauthorized verify credentials']);
        }
        else{            
            $order->status = "APPROVED";
            $order->save();
            return response()->json(['msg'=>'Successfully']);
        }
       
    }

}
