<?php

namespace App\Store;

/**
 * Class StoreContainer
 * @package App\Bigcommerce
 */
class StoreContainer
{
    /**
     * @var StoreInterface
     */
    private $store;
    /**
     * StoreRepository constructor.
     * @var StoreInterface $store
     */
    public function __construct(StoreInterface $store )
    {
        $this->store = $store;
    }

    /**
     * @return StoreInterface
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @param StoreInterface $store
     */
    public function setStore($store): void
    {
        $this->store = $store;
    }
}