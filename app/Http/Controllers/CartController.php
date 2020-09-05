<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


use App\Cart;
use Symfony\Component\HttpFoundation\Session\Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    public function AddCart(Request $request, $id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        if ($product != null) {
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->AddCart($product, $id);

            $request->session()->put('Cart', $newCart); //cập nhật lại giổ hàng với key là Cart và giá tri là đối tượng $newCart
        }
        return view('pages.cart.cart', compact('newCart'));
    }


    //xoa 1 sp trong form gio hang
    public function DeleteItemCart(Request $request, $id)
    {

        $oldCart = Session('Cart') ? Session('Cart') : null; //giỏ hàng chắc chắn đã có
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($id);
        if (Count($newCart->products) > 0) { //kiểm tra xem còn sản phẩm nào còn ton giỏ hàng ko
            $request->Session()->put('Cart', $newCart); //đẩy session lên key la Cart và giá trị là $newCart

        } else {
            $request->Session()->forget('Cart'); //xóa toàn bộ giỏ hàng
        }
        return view('pages.cart.cart');
    }

    public function ViewListCart()
    {
        return view('pages.cart.view_cart');
    }

    public function DeleteListItemCart(Request $request, $id)
    {

        $oldCart = Session('Cart') ? Session('Cart') : null; //giỏ hàng chắc chắn đã có
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($id);
        if (Count($newCart->products) > 0) { //kiểm tra xem còn sản phẩm nào còn ton giỏ hàng ko
            $request->Session()->put('Cart', $newCart); //đẩy session lên key la Cart và giá trị là $newCart

        } else {
            $request->Session()->forget('Cart'); //xóa toàn bộ giỏ hàng
        }
        return view('pages.cart.list-cart');
    }


    public function UpdateListItemCart(Request $request)
    {


        if ($request->id and $request->quanty) {
            $id = $request->id;
            $quanty = $request->quanty;

            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->UpdateItemCart($id, $quanty);

            $request->Session()->put('Cart', $newCart);
            return view('pages.cart.list-cart');
        }
    }

    //xem don hang
    public function xem_don_hang($id)
    {
        $xemdonhang = DB::table('orders')->where('customerID',$id)->get();
       // dd($xemdonhang);
        return view('pages.cart.xemdonhang',compact('xemdonhang'));
    }

    public function management_order(){
        // $this->AuthLogin();
        $all_order = DB::table('orders')
        ->join('customer', 'orders.customerID', '=', 'customer.id')
        ->select('order.OrderID','orders.orderDate','orders.amount','orders.status','customer.name','customer.phone_number')
        ->orderby('orders.id','desc')
        ->get();
        $xemdonhang = view('admin_order/order') ->with('all_order', $all_order);
        return view('admin/layouts-admin/index')->with('admin/order/management_order', $xemdonhang);
    }
}
