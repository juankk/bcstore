<?php

namespace App\Http\Controllers;

use App\Store\StoreRepository;
use App\Store\StoreRepositoryInterface;
use Illuminate\Routing\Controller as BaseController;

class CustomersController extends BaseController
{
    public function index()
    {
        /** @var StoreRepositoryInterface $customer_repository */
        $customer_repository = resolve( StoreRepository::class )->getRepository();

        /**
         * TODO
         * - Implement Paginator
         */

        return view('customers', ['customers' => $customer_repository->getCustomersWithOrders() ] );
    }
}
