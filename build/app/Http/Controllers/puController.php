<?php

namespace App\Http\Controllers;

use App\Model\lvl2_data;
use App\Model\lvl3_data;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class puController extends Controller
{
    public function create(Request $request,$level,$id){
        if($level == 3){
            $create = new lvl3_data();
            $create->lvl3_id = $id;
        }
        else{
            $create = new lvl2_data();
            $create->lvl2_id = $id;
        }

        $create->data = $request->data_input;
        $create->value = $request->value_input;
        $create->satuan = $request->satuan_input;
        $create->tahun = $request->tahun_input;
        $create->save();

    }


    public function update(Request $request,$level,$id){

        if($level == 3){
            $update = lvl3_data::where('id',$id)->first();
        }
        else{
            $update = lvl2_data::where('id',$id)->first();
        }

        $update->data = $request->data_input;
        $update->value = $request->value_input;
        $update->satuan = $request->satuan_input;
        $update->tahun = $request->tahun_input;
        $update->update();

    }

    public function delete($level , $id){


        if($level == 3){
             lvl3_data::where('id', $id)->delete();
        }
        else{
             lvl2_data::where('id', $id)->delete();
        }
    }


    public function data($level,$id){
        if($level == 3){
            $data = lvl3_data::where('lvl3_id' , $id)->get();
        }
        else{
            $data = lvl2_data::where('lvl2_id' , $id)->get();
        }

        return DataTables::of($data)->toJson();
    }


    public function index($id){


        $bladeArray = [
            'pu.luwd.luwd',
            'pu.luwnd.tk',
            'pu.luwnd.ppdpa',
            'pu.luwnd.pangan',
            'pu.luwnd.pertanahan',
            'pu.luwnd.lh',
            'pu.luwnd.akdps',
            'pu.luwnd.pmds',
            'pu.luwnd.ppdkb',
            'pu.luwnd.perhubungan',
            'pu.luwnd.kdi',
            'pu.luwnd.kukdm',
            'pu.luwnd.pm',
            'pu.luwnd.kdor',
            'pu.luwnd.statistik',
            'pu.luwnd.persandian',
            'pu.luwnd.kebudayaan',
            'pu.luwnd.perpustakaan',
            'pu.luwnd.kearsipan',
            'pu.lup.pariwisata',
            'pu.lup.pertanian',
            'pu.lup.kehutanan',
            'pu.lup.edsdm',
            'pu.lup.perdagangan',
            'pu.lup.perindustrian',
            'pu.lup.transmigrasi',
            'pu.lup.kdp',
            'pu.penunjangU.pp',
            'pu.penunjangU.keuangan',
            'pu.penunjangU.kspdp',
            'pu.penunjangU.pdp',
            'pu.penunjangU.pengawasan',
            'pu.penunjangU.sd',

        ];


        foreach($bladeArray as $key =>$item){
            if($key == $id){
                $blade = $item;
                break;
            }
        }

        return view($blade);
    }
}
