<?php

namespace App\Http\Controllers;

use App\Store\Models\Customer;
use App\Store\StoreRepository;
use App\Store\StoreRepositoryInterface;
use Illuminate\Routing\Controller as BaseController;

class CustomerDetailsController extends BaseController
{
    public function show($id)
    {
        /** @var StoreRepositoryInterface $customer_repository */
        $customer_repository = resolve( StoreRepository::class )->getRepository();
        /** @var Customer $customer */
        $customer = $customer_repository->getCustomer( $id );
        $customer_orders = $customer_repository->getOrders( $id );
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