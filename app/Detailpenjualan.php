<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detailpenjualan extends Model
{
    protected $fillable =[
        'id_produk', 'id_order', 'item', 'qty', 'harga_satuan', 'sub_total'
    ];

    protected $table      = 'detailpenjualan';
    protected $primarykey = 'id';

    public function produk()
    {
        return $this->belongsTo('App\Produk', 'id_produk', 'id');
    }

    public function order()
    {
        return $this->belongsTo('App\Order', 'id_order', 'id');
    }
}
