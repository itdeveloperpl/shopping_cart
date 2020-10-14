<?php
/**
 * @author Bartosz Bielecki <bartosz(at)itdeveloper.pl>
 * @copyright (c) 2020 Bartosz Bielecki
 */

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\Product\ProductRequest;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{

    /**
     * Display a listing of the active Products.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ProductResource::collection(
                        Product::where('active', '=', 1)->get());
    }

    /**
     * Store a newly created Product.
     *
     * @param  \App\Http\Requests\Product\ProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        return new ProductResource(
                Product::create($request->only(['name', 'price'])));
    }

    /**
     * Display the specified Product.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return new ProductResource($product);
    }

    /**
     * Update the specified Product.
     *
     * @param  \App\Http\Requests\Product\ProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     * @todo Need to update only passed fields without requiring all fields
     */
    public function update(ProductRequest $request, Product $product)
    {
        return new ProductResource(
                $product->update([
                    'name' => $request->get('name'),
                    'price' => $request->get('price'),
        ]));
    }

    /**
     * Remove Product (sets flag active to false)
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        return new ProductResource($product->update(['active' => 0]));
    }

}
