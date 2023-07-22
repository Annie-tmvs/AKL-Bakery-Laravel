<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Location;

class CartController extends Controller
{
    public function addProduct(Request $request)
    {
        $products_id = $request->input('products_id');
        $products_qty = $request->input('products_qty');

        if (Auth::check()) {
            $prod_check = Product::where('id', $products_id)->first();

            if ($prod_check) {
                if (Cart::where('prod_id', $products_id)->where('user_id', Auth::id())->exists()) {
                    return response()->Json(['status' => $prod_check->name . " Already added to cart"]);
                } else {
                    $cartItem = new Cart();
                    $cartItem->prod_id = $products_id;
                    $cartItem->user_id = Auth::id();
                    $cartItem->prod_qty = $products_qty;
                    $cartItem->save();
                    return response()->Json(['status' => $prod_check->name . " Added to cart"]);
                }
            }
        } else {
            return response()->json(['status' => "Login to Continue"]);
        }
    }

    public function showcart()
    {
        $cartItem = Cart::where('user_id', Auth::id())->get();
        return view('frontend.cart', compact('cartItem'));
    }

    public function updatecart(Request $request)
    {
        $prod_id = $request->input('prod_id');
        $product_qty = $request->input('prod_qty');
        if (Auth::check()) {
            if (Cart::where('prod_id', $prod_id)->where('user_id', Auth::id())->exists()) {
                $cart = Cart::where('prod_id', $prod_id)->where('user_id', Auth::id())->first();
                $cart->prod_qty = $product_qty;
                $cart->update();
                return response()->json(['status' => "Quantity updated"]);
            }
        }
    }

    public function deleteProduct(Request $request)
    {

        if (Auth::check()) {
            $prod_id = $request->input('prod_id');
            if (Cart::where('prod_id', $prod_id)->where('user_id', Auth::id())->exists()) {
                $cartItem = Cart::where('prod_id', $prod_id)->where('user_id', Auth::id())->first();
                $cartItem->delete();
                return response()->json(['status' => "Product deleted successfully"]);
            } else {

                return response()->json(['status' => "Login to Continue"]);
            }
        }
    }
}
