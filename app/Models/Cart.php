<?php
/**
 * @author Bartosz Bielecki <bartosz(at)itdeveloper.pl>
 * @copyright (c) 2020 Bartosz Bielecki
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

    use HasFactory;

    public function products()
    {
        return $this->belongsToMany('App\Models\Product')->withPivot(['quantity']);
    }

    public function addProduct(Product $product, int $quantity = 1)
    {
        $existsInCart = $this->products()->where('product_id', '=', $product->id)->first();
        $quantity = $existsInCart ?
                ($existsInCart->pivot->quantity + $quantity) :
                $quantity;

        $this->products()->detach();
        return $this->products()->save($product, ['quantity' => $quantity]);
    }

    public function deleteProduct(Product $product)
    {
        return $this->products()->where('product_id', '=', $product->id)->detach();
    }

}
