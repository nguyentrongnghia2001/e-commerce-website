<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportInvoiceDetail extends Model
{
    use HasFactory;

    protected $table = 'importinvoice_details';
    protected $primaryKey = 'id';
    protected $guarded = [];

    protected $fillable = ['importinvoices_id', 'product_id', 'importinvoices_price', 'importinvoices_qty'];
    

    public function importInvoice()
    {
        return $this->belongsTo(ImportInvoice::class, 'importinvoices_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
