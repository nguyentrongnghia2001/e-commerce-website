<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Madein extends Model
{
    use HasFactory;

    protected $table = 'madeins';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function products()
    {
        return $this->hasMany(Product::class, 'madein_id', 'id');
    }
}
