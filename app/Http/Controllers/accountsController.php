<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accounts;

class accountsController extends Controller
{
    //
    public function register(){

    }

    public function login(Request $request){
        // $user = Accounts::where('username', '=', $request['username'])->first();
        // if(!\Hash::check($request['password'], $user->password)){
        //     return response()->json(['fail'=> 'Invalid password!']);
        // }
        // return response()->json(['data'=> $request['password']]);

        $user = Accounts::where('username', '=', $request['username'])->first(); // find data in the database using the Request USERNAME
        if(!$user){ // check if $user is not null or undefined
            return response()->json(['data' => 'Invalid Credential!']);
        }
        if(!\Hash::check($request['password'], $user['password'])){
            return response()->json(['data' => 'Invalid Credential!']);
        }
        $user['token'] = \Hash::make($user['username']);
        session(['token' =>$user['username']]);
        return response()->json(['data' => $user]);
    }
}
// FOR IMAGE UPLOAD
//https://appdividend.com/2018/02/13/vue-js-laravel-file-upload-tutorial/