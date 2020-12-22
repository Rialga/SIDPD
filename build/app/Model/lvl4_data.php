<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class lvl4_data extends Model
{
    protected $table = 'lvl4_data';
    protected $primaryKey = 'id';
    protected $fillable = [
        'lvl4_id','data' ,'value', 'satuan', 'tahun'
    ];


    public function lvl_4() {
        return $this->belongsTo('App\Model\level_4', 'lvl4_id', 'lvl4_id');
    }
}
