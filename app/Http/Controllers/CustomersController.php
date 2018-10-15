<?php

namespace App\Http\Controllers;

use App\Store\StoreRepository;
use App\Store\StoreRepositoryInterface;
use Illuminate\Routing\Controller as BaseController;

class CustomersController extends BaseController
{
    public function index()
    {
        /** @var StoreRepositoryInterface $store_repository */
        $store_repository = resolve( StoreRepository::class )->getRepository();

        /**
         * TODO
         * - Implement Paginator
         */

        return view('customers', ['customers' => $store_repository->getCustomersWithOrders() ] );
    }
}
