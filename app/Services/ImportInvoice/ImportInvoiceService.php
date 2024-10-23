<?php

namespace App\Services\ImportInvoice;

use App\Repositories\ImportInvoice\ImportInvoiceRepositoryInterface;
use App\Services\BaseService;

class ImportInvoiceService extends BaseService implements ImportInvoiceServiceInterface   
{
    public $repository;

    public function __construct(ImportInvoiceRepositoryInterface $ImportInvoiceRepository)
    {
        $this->repository = $ImportInvoiceRepository;
    }

    public function getImportInvoiceBySupplierId($supplierId)
    {
        return $this->repository->getImportInvoiceBySupplierId($supplierId);
    }
}
