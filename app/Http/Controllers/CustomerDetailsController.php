<?php

namespace App\Http\Controllers;

use App\Store\Models\Customer;
use App\Store\StoreContainer;
use App\Store\StoreInterface;
use Illuminate\Routing\Controller as BaseController;

class CustomerDetailsController extends BaseController
{
    public function show($id)
    {
        /** @var StoreInterface $store */
        $store = resolve( StoreContainer::class )->getStore();

        /** @var Customer $customer */
        $customer = $store->getCustomer( $id );
        $customer_orders = $store->getOrders( $id );
        $customer->setOrders( $customer_orders );

        //getting customer lifetime value
        $lifeTimeValue = 0;
        foreach ( $customer->getOrders() as $order ) {
            $lifeTimeValue += $order->getTotal();
        }

        return view('details', [
            'customer' => $customer,
            'lifeTimeValue' => $lifeTimeValue,
        ]);
    }
}
