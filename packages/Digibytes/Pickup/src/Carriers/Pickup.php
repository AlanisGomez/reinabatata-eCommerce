<?php

namespace Digibytes\Pickup\Carriers;

use Config;
use Webkul\Checkout\Models\CartShippingRate;
use Webkul\Shipping\Carriers\AbstractShipping;

/**
 * Class Pickup.
 *
 */
class Pickup extends AbstractShipping
{
    /**
     * Shipment method code
     *
     * @var string
     */
    protected $code  = 'pickup';

    /**
     * Returns rate for pickup
     *
     * @return CartShippingRate|false
     */
    public function calculate()
    {
        if (! $this->isAvailable()) {
            return false;
        }

        $object = new CartShippingRate;

        $object->carrier = 'pickup';
        $object->carrier_title = $this->getConfigData('title');
        $object->method = 'pickup_pickup';
        $object->method_title = $this->getConfigData('title');
        $object->method_description = $this->getConfigData('description');
        $object->price = 0;
        $object->base_price = 0;

        return $object;
    }
}
