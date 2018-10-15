<?php

namespace App\Store;

/**
 * Class StoreRepository
 * @package App\Bigcommerce
 */
class StoreRepository
{
    /**
     * @var StoreRepositoryInterface
     */
    private $repository;
    /**
     * StoreRepository constructor.
     * @var StoreRepositoryInterface $repository
     */
    public function __construct(StoreRepositoryInterface $repository )
    {
        $this->repository = $repository;
    }

    /**
     * @return StoreRepositoryInterface
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * @param StoreRepositoryInterface $repository
     */
    public function setRepository($repository): void
    {
        $this->repository = $repository;
    }
}