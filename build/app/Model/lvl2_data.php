<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class lvl2_data extends Model
{
    protected $table = 'lvl2_data';
    protected $primaryKey = 'id';
    protected $fillable = [
        'lvl2_id','data' ,'value', 'satuan', 'tahun'
    ];


    public function lvl_2() {
        return $this->belongsTo('App\Model\level_2', 'lvl2_id', 'lvl2_id');
    }
}
