<?php
/**
 * @author Bartosz Bielecki <bartosz(at)itdeveloper.pl>
 * @copyright (c) 2020 Bartosz Bielecki
 */

namespace App\Traits\Requests;

use App\Models\Product;

trait Productable
{

    public function getProduct()
    {
        return $this->has('product_id') ?
                Product::find((int) $this->get('product_id')) :
                null;
    }

}
