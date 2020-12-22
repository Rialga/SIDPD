<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class lvl3_data extends Model
{
    protected $table = 'lvl3_data';
    protected $primaryKey = 'id';
    protected $fillable = [
        'lvl3_id','data' ,'value', 'satuan', 'tahun'
    ];


    public function lvl_3() {
        return $this->belongsTo('App\Model\level_3', 'lvl3_id', 'lvl3_id');
    }
}
