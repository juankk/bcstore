<?php

namespace App\Http\Controllers;

use App\Store\StoreContainer;
use App\Store\StoreInterface;
use Illuminate\Routing\Controller as BaseController;

class CustomersController extends BaseController
{
    public function index()
    {
        /** @var StoreInterface $store */
        $store = resolve( StoreContainer::class )->getStore();
        $customers = $store->getCustomersWithOrders();
        /**
         * TODO
         * - Implement Paginator
         */

        return view('customers', ['customers' =>  $customers] );
    }
}
