<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class level_4 extends Model
{
    protected $table = 'level_4';
    protected $primaryKey = 'lvl4_id';
    protected $fillable = [
        'lv3_id','detail' ,
    ];

    public $timestamps = false;

    public function lvl_3() {
        return $this->belongsTo('App\Model\level_3', 'lv3_id', 'lv3_id');
    }


    public function lvl4_data() {
        return $this->hasMany('App\Model\lvl4_data', 'lvl4_id', 'lvl4_id');
    }
}
