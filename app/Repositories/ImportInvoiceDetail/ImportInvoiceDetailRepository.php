<?php

namespace App\Repositories\ImportInvoiceDetail;

use App\Models\ImportInvoiceDetail;
use App\Repositories\BaseRepository;

class ImportInvoiceDetailRepository extends BaseRepository implements ImportInvoiceDetailRepositoryInterface   
{
    public function getModel(){
        return ImportInvoiceDetail::class;
    }

    public function getImportInvoiceDetailByProductId($productId)
    {
        return $this->model
            ->where('product_id', $productId)
            ->get();
    }

    public function getToTalQtyByProductId($productId)
    {
        return $this->model
            ->where('product_id', $productId)
            ->get();
    }
}

?>