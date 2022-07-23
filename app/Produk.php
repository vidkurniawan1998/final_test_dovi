<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    //
    protected $fillable =[
        'item', 'qty', 'harga_satuan'
    ];

    protected $table = 'produk';
    protected $primarykey = 'id';
}
