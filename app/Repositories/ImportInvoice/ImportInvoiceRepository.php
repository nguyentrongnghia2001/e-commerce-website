<?php

namespace App\Repositories\ImportInvoice;

use App\Models\ImportInvoice;
use App\Repositories\BaseRepository;

class ImportInvoiceRepository extends BaseRepository implements ImportInvoiceRepositoryInterface   
{
    public function getModel(){
        return ImportInvoice::class;
    }

    public function getImportInvoiceBySupplierId($supplierId)
    {
        return $this->model
            ->where('supplier_id', $supplierId)
            ->get();
    }
}

?>