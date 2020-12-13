<?php

namespace App\Http\Controllers;

use App\Model\Km;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;

class kmcontroller extends Controller
{
    public function data(){
        $data_km = Km::all();
        return DataTables::of($data_km)->toJson();
    }

    public function create(Request $request){

        $create = new Km();
        $create->km_data = $request->data_input;
        $create->km_value = $request->value_input;
        $create->km_satuan = $request->satuan_input;
        $create->save();

    }


    public function update(Request $request,$id){

        $update = Km::where('km_id' , $id)->first();
        $update->km_data = $request->data_input;
        $update->km_value = $request->value_input;
        $update->km_satuan = $request->satuan_input;
        $update->update();

    }

    public function delete($id){

        Km::where('km_id', $id)->delete();

    }
}
