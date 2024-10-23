<?php

namespace App\Repositories\ImportInvoice;

use App\Repositories\RepositoryInterface;
interface ImportInvoiceRepositoryInterface extends RepositoryInterface
{ 
    public function getImportInvoiceBySupplierId($supplierId);
}
 