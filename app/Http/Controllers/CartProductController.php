<?php
/**
 * @author Bartosz Bielecki <bartosz(at)itdeveloper.pl>
 * @copyright (c) 2020 Bartosz Bielecki
 */

namespace App\Http\Controllers;

use App\Http\Requests\Product\AddProductRequest;
use App\Models\{
    Cart,
    Product
};

class CartProductController extends Controller
{

    /**
     * Adds Product to Cart
     * If Product exists in Cart then increments quantity
     * 
     * @param \App\Http\Requests\AddProductRequest $request
     * @param \App\Model\Cart $cart
     * @return void
     * @todo Add ResponseClass that shows action was finished successful or not
     */
    public function store(AddProductRequest $request, Cart $cart)
    {
        $cart->addProduct($request->getProduct(), $request->getQuantity());
    }

    /**
     * Remove the specified Cart
     *
     * @param  \App\Models\Cart  $cart
     * @param  \App\Models\Product  $product
     * @return void
     * @todo Add ResponseClass that shows action was finished successful or not
     */
    public function destroy(Cart $cart, Product $product)
    {
        $cart->deleteProduct($product);
    }

}
