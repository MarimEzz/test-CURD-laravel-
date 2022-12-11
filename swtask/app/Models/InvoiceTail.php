<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class InvoiceTail extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function invoice()
    {
        return $this->belongsTo(InvoiceHeader::class);
    }
}
