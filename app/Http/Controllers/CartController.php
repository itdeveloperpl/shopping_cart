<?php
/**
 * @author Bartosz Bielecki <bartosz(at)itdeveloper.pl>
 * @copyright (c) 2020 Bartosz Bielecki
 */

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Http\Resources\CartResource;
use App\Http\Requests\Cart\CartRequest;
use Illuminate\Http\Request;

class CartController extends Controller
{

    /**
     * Display a listing of Carts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CartResource::collection(Cart::all());
    }

    /**
     * Store a newly created Cart.
     *
     * @param  \App\Http\Requests\Cart\CartRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CartRequest $request)
    {
        return new CartResource(Cart::create());
    }

    /**
     * Display the specified Cart.
     *
     * @param  \App\Models\Cart  $cart
     * @return \App\Http\Resources\CartResource
     */
    public function show(Cart $cart)
    {
        return new CartResource($cart);
    }

    /**
     * Update the specified Cart.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     * @todo Finish this method
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified Cart
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     * @todo Finish this method
     */
    public function destroy(Cart $cart)
    {
        //
    }

}
