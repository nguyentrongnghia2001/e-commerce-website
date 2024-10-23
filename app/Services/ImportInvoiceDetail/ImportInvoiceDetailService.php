<?php

namespace App\Services\ImportInvoiceDetail;

use App\Repositories\ImportInvoiceDetail\ImportInvoiceDetailRepositoryInterface;
use App\Services\BaseService;

class ImportInvoiceDetailService extends BaseService implements ImportInvoiceDetailServiceInterface   
{
    public $repository;

    public function __construct(ImportInvoiceDetailRepositoryInterface $ImportInvoiceDetailRepository)
    {
        $this->repository = $ImportInvoiceDetailRepository;
    }  
}
