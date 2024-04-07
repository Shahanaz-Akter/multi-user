<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    public function postOrder(Request $request)
    {
        $product_ids = $request->product_ids;
        $quantities = $request->quantities;
        $prices = $request->product_prices;
        $customer_id = Auth::user()->id;
        $total_price = 0;
        //product id= [1,2]
        //quantities = [2,2]
        //prices = [100,200]
        if (isset($prices) && isset($quantities) && count($prices) == count($quantities)) {
            for ($i = 0; $i < sizeof($prices); $i++) {
                $total_price = $total_price + ($prices[$i] * $quantities[$i]);
            }
        } else {
            return redirect()->back()->with('error_msg', 'Please Select Products');
        }

        $order = Order::create([
            'user_id' => $customer_id,
            'total_price' => $total_price,
            'products_ordered' => json_encode($product_ids),
            'quantities' => json_encode($quantities),
            'status' => 'pending'
        ]);

        return redirect('/customer_order_history');
    }
    public function getCustomerOrderHistory(Request $request)
    {
        $customer_id = Auth::user()->id;
        $orders = Order::where('user_id', $customer_id)->get();
        return view('customer.order_list')->with(['orders' => $orders]);
    }
    public function changeStatus(Request $request, $required_status, $order_id)
    {
        Order::where('id', $order_id)->update([
            'status' => $required_status
        ]);
        return redirect()->back();
    }

    public function deleteOrder(Request $re, $order_id)
    {
        $order =  Order::where('id',  $order_id)->first();
        if ($order) {
            $order->delete();
            return redirect()->back();
        }
    }
    public function customerDeleteOrder(Request $re, $order_id)
    {
        $order =  Order::where('id',  $order_id)->first();
        if ($order) {
            $order->delete();
            return redirect()->back();
        }
    }
}
