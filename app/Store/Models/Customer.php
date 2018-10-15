<?php

namespace App\Store\Models;


class Customer
{
    private $id;
    private $first_name;
    private $last_name;
    private $orders;

    /**
     * Customer constructor.
     * @param $id
     * @param $first_name
     * @param $last_name
     * @param $total_orders
     */
    public function __construct($id)
    {
        $this->id = $id;
        $this->orders = [];
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return array
     */
    public function getOrders(): array
    {
        return $this->orders;
    }

    /**
     * @param array $orders
     */
    public function setOrders(array $orders): void
    {
        $this->orders = $orders;
    }

    /**
     * @return mixed
     */
    public function getTotalOrders()
    {
        return sizeof( $this->orders );
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param mixed $first_name
     */
    public function setFirstName($first_name): void
    {
        $this->first_name = $first_name;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param mixed $last_name
     */
    public function setLastName($last_name): void
    {
        $this->last_name = $last_name;
    }
}