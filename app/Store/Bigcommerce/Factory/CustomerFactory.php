<?php

namespace App\Store\Bigcommerce\Factory;

use App\Store\Models\Customer;
use Bigcommerce\Api\Resources\Customer as BigCommerceCustomer;

class CustomerFactory
{
    /**
     * @param BigCommerceCustomer $c
     * @return Customer
     */
    public static function create( BigCommerceCustomer $c ) {
        $customer = new Customer( $c->id );
        $customer->setFirstName( $c->first_name );
        $customer->setLastName( $c->last_name );
        return $customer;
    }

}