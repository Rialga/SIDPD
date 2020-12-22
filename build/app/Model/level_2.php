<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class level_2 extends Model
{
    protected $table = 'level_2';
    protected $primaryKey = 'lvl2_id';
    protected $fillable = [
        'lvl_id','detail' ,
    ];

    public $timestamps = false;

    public function lvl_1() {
        return $this->belongsTo('App\Model\level_1', 'lvl1_id', 'lvl1_id');
    }


    public function lvl2_data() {
        return $this->hasMany('App\Model\lvl2_data', 'lvl2_id', 'lvl2_id');
    }

    public function lvl_3() {
        return $this->hasMany('App\Model\level_3', 'lvl2_id', 'lvl2_id');
    }
}
