<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $fillable =[
        'nama_pelanggan', 'email', 'no_handphone', 'nik', 'status'
    ];

    protected $table = 'user';
    protected $primarykey = 'id';
}
