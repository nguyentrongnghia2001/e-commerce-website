<?php

namespace App\Services\Supplier;

use App\Repositories\Supplier\SupplierRepositoryInterface;
use App\Services\BaseService;

class SupplierService extends BaseService implements SupplierServiceInterface   
{
    public $repository;

    public function __construct(SupplierRepositoryInterface $SupplierRepository)
    {
        $this->repository = $SupplierRepository;
    }  
}
