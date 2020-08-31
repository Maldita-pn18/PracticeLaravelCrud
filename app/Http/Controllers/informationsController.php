<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informations;

class informationsController extends Controller
{
    //
    public function retrieve(Request $request){
        $data = Informations::get();
        return response()->json(['data'=>$data]);
    }
    public function create(Request $request){
        $Info = array('name'=> $request['name'],'age'=> intval($request['age']),'gender'=> $request['gender']);
        $create = Informations::create($Info);

        return response()->json(['data'=>$create]);

    }
    public function update(Request $request){
        $updatedInfo = Informations::where('id', $request['id'])
                                     ->update(['name'=> $request['name'],'age'=> intval($request['age']),'gender'=> $request['gender']]);
        return response()->json(['data'=>$updatedInfo]);
    }
    public function delete(Request $request){
        $deletedInfo = Informations::where('id', $request['id'])
                                    ->delete();
        return response()->json(['data'=>$deletedInfo]);                         
    }
}
