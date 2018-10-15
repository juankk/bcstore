<?php

namespace App\Store;


interface StoreInterface
{
    public function getCustomersWithOrders();
    public function getCustomer( $customer_id );
    public function getOrders( $customer_id );
}