<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class level_3 extends Model
{

    protected $table = 'level_3';
    protected $primaryKey = 'lvl3_id';
    protected $fillable = [
        'lv2_id','detail' ,
    ];

    public $timestamps = false;

    public function lvl_2() {
        return $this->belongsTo('App\Model\level_2', 'lv2_id', 'lv2_id');
    }


    public function lvl3_data() {
        return $this->hasMany('App\Model\lvl3_data', 'lvl3_id', 'lvl3_id');
    }


}
