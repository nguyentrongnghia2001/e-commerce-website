<?php

namespace App\Repositories\ImportInvoiceDetail;

use App\Repositories\RepositoryInterface;
interface ImportInvoiceDetailRepositoryInterface extends RepositoryInterface
{ 
    public function getImportInvoiceDetailByProductId($productId);
}
 