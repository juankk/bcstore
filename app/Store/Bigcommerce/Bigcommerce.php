<?php

namespace App\Store\Bigcommerce;

use App\Store\Bigcommerce\Factory\CustomerFactory;
use App\Store\Bigcommerce\Factory\OrderFactory;
use App\Store\StoreRepositoryInterface;
use App\Store\Models\Customer;
use Bigcommerce\Api\Client as BigcommerceClient;

class Bigcommerce implements StoreRepositoryInterface
{
    /**
     * Gets all the customers with its associated orders
     * @return array
     */
    public function getCustomersWithOrders()
    {
        $customers = BigcommerceClient::getCustomers();
        $wrapped_customers = [];
        foreach ( $customers as $c ) {
            $customer_dto = CustomerFactory::create( $c );
            $customer_dto->setOrders( $this->getOrders($customer_dto->getId()) );
            $wrapped_customers[] = $customer_dto;
        }
        return $wrapped_customers;
    }

    /**
     * Gets all the orders done by a specific customer
     * @param $id
     * @return array
     */
    public function getOrders( $id )
    {
        $bigcommerce_orders = BigcommerceClient::getOrders( ['customer_id'  => $id ] );
        $orders = [];
        if( ! empty ( $bigcommerce_orders ) && is_array( $bigcommerce_orders ) ) {
            foreach ($bigcommerce_orders as $order) {
                $order_dto = OrderFactory::create( $order );
                $orders[] = $order_dto;
            }
        }
        return $orders;
    }

    /**
     * Gets the information around a customer
     * @param $id
     * @return Customer
     */
    public function getCustomer( $id )
    {
        $c = BigcommerceClient::getCustomer($id);
        $customer_dto = CustomerFactory::create( $c );
        return $customer_dto;
    }

}