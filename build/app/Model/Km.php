<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Km extends Model
{
    protected $table = 'km';
    protected $primaryKey = 'km_id';
    protected $fillable = [
        'km_data' , 'km_value', 'km_satuan'
    ];

}
