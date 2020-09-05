<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\customer;
use App\Order;
use App\OrderDetail;
//use App\Product;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Redirect;

class OrderController extends Controller
{
    public function storeOrder(Request $request)
    {

        if ($request->Session()->has('Cart') == false) {
            return redirect('/');
        } elseif (Session("Cart")->totalQuanty == 0) {
            return redirect('/');
        }


        $data = $request->all();
        $order = Order::create($data);

        if ($order) {

            $cart = Session()->get('Cart')->products;

            foreach ($cart as $id => $detail) {
                $orderDetail = new OrderDetail;

                $orderDetail->orderID = $order->id;
                $orderDetail->proID = $id;
                $orderDetail->quantity = $detail['quanty'];
                if ($detail['pricedown'] == 0) {
                    $orderDetail->price = $detail['price'];
                } else {
                    $orderDetail->price = $detail['pricedown'];
                }

                if ($detail['pricedown'] == 0) {
                    $orderDetail->amount = $detail['price'] * $detail['quanty'];
                } else {
                    $orderDetail->amount = $detail['pricedown'] * $detail['quanty'];
                }


                $r = $orderDetail->save();
            }
            //echo "Tạo mới don hang thành công <br>";

            session()->forget('Cart');
            return redirect('/');
        } else {
            echo "Tạo mới don hang bi Loi:  không thành công !";
        }
    }

    public function show_order()
    {
        $orders = DB::table('orders')->get();
        return view('admin_order.order')->with(['orders' => $orders]);
    }
    public function thanh_toan()
    {
        return view('pages.cart.order');
    }
}
