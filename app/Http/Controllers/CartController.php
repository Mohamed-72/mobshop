<?php

namespace App\Http\Controllers;
// use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartList()
    {
       
        $userID = session('LoggedUser');
        $cartItems = \Cart::session($userID)->getContent();
        $Total = \Cart::session($userID)->getTotal();
      
        // dd($cartItems);
        // dd($Total);
        return view('cart_page.cart', compact('cartItems'));
    }


    public function addToCart(Request $request)
    {
        $userID = session('LoggedUser');
        \Cart::session($userID)->add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->image,
            )
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart.list');
    }

    public function updateCart(Request $request)
    {
        $userID = session('LoggedUser');
        \Cart::session($userID)->update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        $userID = session('LoggedUser');
        \Cart::session($userID)->remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        $userID = session('LoggedUser');
        \Cart::session($userID)->clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }


}
