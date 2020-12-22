<?php

namespace App\Http\Controllers;

use App\Model\lvl1_data;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;

class dsdController extends Controller
{
    public function data(){
        $data = lvl1_data::where('lvl1_id' , 4)->get();
        return DataTables::of($data)->toJson();
    }

    public function create(Request $request){

        $create = new lvl1_data();
        $create->data = $request->data_input;
        $create->value = $request->value_input;
        $create->satuan = $request->satuan_input;
        $create->tahun = $request->tahun_input;
        $create->lvl1_id = 4;
        $create->save();

    }


    public function update(Request $request,$id){

        $update = lvl1_data::where('id',$id)->first();
        $update->data = $request->data_input;
        $update->value = $request->value_input;
        $update->satuan = $request->satuan_input;
        $update->tahun = $request->tahun_input;
        $update->update();

    }

    public function delete($id){

        lvl1_data::where('id', $id)->delete();

    }
}
