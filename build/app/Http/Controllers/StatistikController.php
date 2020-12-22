<?php

namespace App\Http\Controllers;

use App\Model\level_1;
use App\Model\level_2;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StatistikController extends Controller
{

    public function dataKm(){
        $tahun = Carbon::now()->subYear(4)->format('Y');

        for ($i = 0; $i< 5; $i++){
            $tahunData = $tahun +  $i;
            $data = level_1::where('lvl1_id',3)->first();
            $dataKm[] = $data->lvl1_data->where('tahun',$tahunData)->sum('value');

        }

        return $dataKm;

    }

}
