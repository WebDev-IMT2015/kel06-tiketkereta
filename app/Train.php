<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'trains';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_kereta';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['kode_kereta', 'nama_kereta', 'jumlah_gerbong', 'kapasitas_per_gerbong', 'tujuanawal', 'tujuanakhir', 'jamberangkat', 'jamtiba', 'tarif'];
}
