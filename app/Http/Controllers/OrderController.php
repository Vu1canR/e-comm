<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\Auth;
use Exception;
use App\OrderProduct;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller

{
    
    public function showCart(){
        
        return view('cart');
    }
    
    public function store(Request $request){
        
        $user_id = Auth::id();
        $order = Order::create([
            'user_id' => $user_id,
            'address' => 'Rudaki 99'
        ]);

        
        $object_converted = json_decode($request->get('cart'));
        // $order = Order::find(1);


        try{
            foreach($object_converted as $row) {
                OrderProduct::create([
                    'order_id' => $order->id,
                    'product_name' => $row->name,
                    'quantity' => $row->quantity,
                    'price' => $row->price,
                    'store_code' => $row->store_code
                ]);
            }
        }
        catch(Exception $e){
            return $e->getMessage();
        }
        // $csapat = (json_decode($data['teams']));
        
        // $result = $cart['data']['headers'];
        
        // return $order;
    }

    public function cancelOrder(Order $order){
        return $order;
        $order = Order::find($order->id)->delete();

        return view('profile');
        
    }
}
