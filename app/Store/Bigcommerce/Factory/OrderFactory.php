<?php

namespace App\Store\Bigcommerce\Factory;

use App\Store\Models\Order;
use Bigcommerce\Api\Resources\Order as BigcommerceOrder;

class OrderFactory
{
    public static function create( BigcommerceOrder $o ) {
        $order = new Order( $o->id );
        $order->setDate( $o->date_created );
        $order->setTotal( $o->total_inc_tax );
        $order->setTotalProducts( $o->items_total );

        return $order;
    }
}