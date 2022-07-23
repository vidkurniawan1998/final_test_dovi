<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable =[
        'id_user', 'nama_pelanggan', 'tanggal', 'jam', 'total', 'bayar_tunai', 'kembali'
    ];

    protected $table = 'order';
    protected $primarykey = 'id';

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user', 'id')->withTrashed();
    }
}
