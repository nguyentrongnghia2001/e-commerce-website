<?php

namespace App\Services\ImportInvoice;

use App\Services\ServiceInterface;

interface ImportInvoiceServiceInterface extends ServiceInterface
{
    public function getImportInvoiceBySupplierId($supplierId);
}
