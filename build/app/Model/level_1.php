<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class level_1 extends Model
{
    protected $table = 'level_1';
    protected $primaryKey = 'lvl1_id';
    protected $fillable = [
        'detail' ,
    ];

    public $timestamps = false;

    public function lvl1_data() {
        return $this->hasMany('App\Model\lvl1_data', 'lvl1_id', 'lvl1_id');
    }

    public function lvl_2() {
        return $this->hasMany('App\Model\level_2', 'lvl1_id', 'lvl1_id');
    }
}
