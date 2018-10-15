<?php

namespace App\Store\Models;

class Order
{
    private $id;
    private $date;
    private $total;
    private $total_products;

    /**
     * @return mixed
     */
    public function getTotalProducts()
    {
        return $this->total_products;
    }

    /**
     * @param mixed $total_products
     */
    public function setTotalProducts($total_products): void
    {
        $this->total_products = $total_products;
    }


    /**
     * Order constructor.
     * @param $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total): void
    {
        $this->total = $total;
    }

}