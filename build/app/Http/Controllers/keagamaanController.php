<?php

namespace App\Http\Controllers;

use App\Model\lvl1_data;
use App\Model\lvl2_data;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;
use Yajra\DataTables\DataTables;

class keagamaanController extends Controller
{

    public function create(Request $request,$id){

        $create = new lvl2_data();
        $create->data = $request->data_input;
        $create->value = $request->value_input;
        $create->satuan = $request->satuan_input;
        $create->tahun = $request->tahun_input;
        $create->lvl2_id = $id;
        $create->save();

    }


    public function update(Request $request,$id){

        $update = lvl2_data::where('id',$id)->first();
        $update->data = $request->data_input;
        $update->value = $request->value_input;
        $update->satuan = $request->satuan_input;
        $update->tahun = $request->tahun_input;
        $update->update();

    }

    public function delete($id){
        lvl2_data::where('id', $id)->delete();
    }


    public function index($id){
        if($id == 4){
            $view ='keagamaan.nm';
        }
        elseif($id == 5){
            $view ='keagamaan.lp';
        }
        elseif($id == 6){
            $view ='keagamaan.sdm';
        }
        elseif($id == 7){
            $view ='keagamaan.la';
        }
        else{
            $view ='keagamaan.si';
        }
         $this->id = $id;


        return view($view);
    }


    public function data($id){
        $data = lvl2_data::where('lvl2_id' , $id)->get();
        return DataTables::of($data)->toJson();
    }




}
