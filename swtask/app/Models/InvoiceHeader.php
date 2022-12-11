<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class InvoiceHeader extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function invoiceTail()
    {
        return $this->hasMany(InvoiceTail::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
