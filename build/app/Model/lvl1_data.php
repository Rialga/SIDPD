<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class lvl1_data extends Model
{
    protected $table = 'lvl1_data';
    protected $primaryKey = 'id';
    protected $fillable = [
        'lvl1_id','data' ,'value', 'satuan', 'tahun'
    ];


    public function lvl_1() {
        return $this->belongsTo('App\Model\level_1', 'lvl1_id', 'lvl1_id');
    }

}
