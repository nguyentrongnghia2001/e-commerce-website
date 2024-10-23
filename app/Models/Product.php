<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $guarded = [];

    protected $fillable = ['brand_id', 'product_category_id', 'madein_id', 'name', 'description', 'content', 'price', 'qty', 'discount', 'weight', 'sku', 'status'];

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id', 'id');
    }

    public function madein()
    {
        return $this->belongsTo(Madein::class, 'madein_id', 'id');
    }

    public function productImages()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }

    public function productDetails()
    {
        return $this->hasMany(ProductDetail::class, 'product_id', 'id');
    }

    public function productComments()
    {
        return $this->hasMany(ProductComment::class, 'product_id', 'id');
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'product_id', 'id');
    }

    public function importInvoiceDetail()
    {
        return $this->hasMany(ImportInvoiceDetail::class, 'product_id', 'id');
    }
}
