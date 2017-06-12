<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    // protected $connection = 'mysql';
    protected $primaryKey = 'id';
    // protected $table = 'painting';
    protected $fillable = [
    'nama' , 'alamat' , 'nomor_hp' , 'nomor_ktp'
    ];
   // public $timestamps = false;

}
