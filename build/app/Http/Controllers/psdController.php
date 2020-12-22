<?php

namespace App\Http\Controllers;

use App\Model\lvl2_data;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class psdController extends Controller
{
    public function dataKp(){
        $data = lvl2_data::where('lvl2_id' , 13)->get();
        return DataTables::of($data)->toJson();
    }

    public function create(Request $request){

        $create = new lvl2_data();
        $create->data = $request->data_input;
        $create->value = $request->value_input;
        $create->satuan = $request->satuan_input;
        $create->tahun = $request->tahun_input;
        $create->lvl2_id = 13;
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
}
