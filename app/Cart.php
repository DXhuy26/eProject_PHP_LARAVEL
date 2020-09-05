<?php

namespace App;

class Cart
{
    public $products = null; //1 doi tuong
    public $totalPrice = 0;
    public $totalQuanty = 0;

    public function __construct($cart)
    {
        if ($cart) {
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQuanty = $cart->totalQuanty;
        }
    }

    public function AddCart($product, $id)
    {
        $newProduct = ['quanty' => 0, 'price' => $product->giagoc, 'pricedown' => $product->giagiam, 'productInfo' => $product];
        if ($this->products) {
            if (array_key_exists($id, $this->products)) {  //kiêm tra list products nếu tồn tại id với key mình truyền vô
                $newProduct = $this->products[$id]; //Đưa sp vừa truyền vào thay thế đặt lại $newProduct
            }
        }
        $newProduct['quanty']++;
        if ($newProduct['pricedown'] == 0) {
            $newProduct['price'] = $newProduct['quanty'] *  $product->giagoc;
        } else {
            $newProduct['pricedown'] = $newProduct['quanty'] *  $product->giagiam;
        }

        $this->products[$id] = $newProduct;
        if ($newProduct['pricedown'] == 0) {
            $this->totalPrice += $product->giagoc;
        } else {
            $this->totalPrice += $product->giagiam;
        }

        $this->totalQuanty++;
    }

    //xoa 1 sp ben trong form gio hang
    public function DeleteItemCart($id)
    {
        $this->totalQuanty -= $this->products[$id]['quanty'];
        if ($this->products[$id]['pricedown'] == 0) {
            $this->totalPrice -= $this->products[$id]['price'];
        } else {
            $this->totalPrice -= $this->products[$id]['pricedown'];
        }
        unset($this->products[$id]); //$this->products[$id]: đối tượng muốn xóa
    }

    public function UpdateItemCart($id, $quanty)
    {
        $this->totalQuanty -= $this->products[$id]['quanty'];
        if ($this->products[$id]['pricedown'] == 0) {
            $this->totalPrice -= $this->products[$id]['price'];
        } else {
            $this->totalPrice -= $this->products[$id]['pricedown'];
        }



        $this->products[$id]['quanty'] = $quanty;
        if ($this->products[$id]['pricedown'] == 0) {
            $this->products[$id]['price'] = $quanty * $this->products[$id]['productInfo']->giagoc;
        } else {
            $this->products[$id]['pricedown'] = $quanty * $this->products[$id]['productInfo']->giagiam;
        }


        $this->totalQuanty += $this->products[$id]['quanty'];
        if ($this->products[$id]['pricedown'] == 0) {
            $this->totalPrice += $this->products[$id]['price'];
        } else {
            $this->totalPrice += $this->products[$id]['pricedown'];
        }
    }
}
