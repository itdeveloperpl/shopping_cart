<?php
/**
 * @author Bartosz Bielecki <bartosz(at)itdeveloper.pl>
 * @copyright (c) 2020 Bartosz Bielecki
 */

namespace App\Traits\Requests;

use App\Models\Product;

trait Quantitable
{

    public function getQuantity()
    {
        return $this->get('quantity');
    }

}
