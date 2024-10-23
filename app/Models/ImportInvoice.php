<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportInvoice extends Model
{
    use HasFactory;

    protected $table = 'importinvoices';
    protected $primaryKey = 'id';
    protected $guarded = [];

    protected $fillable = ['supplier_id', 'importinvoices_total'];


    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
    }

    public function importInvoiceDetails()
    {
        return $this->hasMany(ImportInvoiceDetail::class, 'importinvoices_id', 'id');
    }
}
