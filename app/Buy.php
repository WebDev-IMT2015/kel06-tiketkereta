<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'buys';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama', 'alamat', 'nomor_hp', 'nomor_ktp', 'kode_kereta', 'nomor_gerbong', 'nomor_kursi'];

    
}
