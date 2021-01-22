<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    function index(){
        return view('students.index');
    }
    function save(Request $request){
          $validator = Validator::make($request->all(),[
              'name'=>'required',
              'email'=>'required|email|unique:students',
              'password'=>'required|min:5|max:12'
          ]);

          if(!$validator->passes()){
              return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
          }else{
              $values = [
                   'name'=>$request->name,
                   'email'=>$request->email,
                   'password'=>Hash::make($request->password)
              ];

              $query = DB::table('students')->insert($values);
              if( $query ){
                  return response()->json(['status'=>1, 'msg'=>'New Student has been successfully registered']);
              }
          }
    }
}
