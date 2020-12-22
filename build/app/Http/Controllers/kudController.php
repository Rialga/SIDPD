<?php

namespace App\Http\Controllers;

use App\Model\lvl2_data;
use App\Model\lvl3_data;
use App\Model\lvl4_data;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class kudController extends Controller
{

    public function create(Request $request,$level,$id){
        if($level == 3){
            $create = new lvl3_data();
            $create->lvl3_id = $id;
        }
        elseif($level == 2){
            $create = new lvl2_data();
            $create->lvl2_id = $id;
        }
        else{
            $create = new lvl4_data();
            $create->lvl4_id = $id;
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
        elseif($level == 2){
            $update = lvl2_data::where('id',$id)->first();
        }
        else{
            $update = lvl4_data::where('id',$id)->first();
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
        elseif($level == 2){
            lvl2_data::where('id', $id)->delete();
        }
        else{
             lvl4_data::where('id', $id)->delete();
        }
    }


    public function data($level,$id){
        if($level == 3){
            $data = lvl3_data::where('lvl3_id' , $id)->get();
        }
        elseif($level == 2){
            $data = lvl2_data::where('lvl2_id' , $id)->get();
        }
        else{
            $data = lvl4_data::where('lvl4_id' , $id)->get();
        }

        return DataTables::of($data)->toJson();
    }


    public function index($id){


        $bladeArray = [
            'kldw.topografi',
            'kldw.geologi',
            'kldw.hidrologi',
            'kldw.klimatologi',
            'kldw.ldbw',
            'kldw.ldkg',
            'kldw.pl.kb',
            'kldw.pl.kl',
            'wrb.tsunami','wrb.banjir','wrb.abrasi',
            'wrb.longsor',
            'wrb.kebakaran_hutan',
            'wrb.gempa',
            'dmg.demografi',
            'dmg.struktur'
        ];


        foreach($bladeArray as $key =>$item){
            if($key == $id){
                $blade = $item;
                break;
            }
        }


        $view = "kud.$blade";
        return view($view);
    }
}
