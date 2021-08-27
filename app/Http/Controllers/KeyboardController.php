<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Keyboard;

class KeyboardController extends Controller
{
    public function create(Request $request){
        $keyboard = new Keyboard();
        $keyboard->brand=$request->input("brand");
        $keyboard->switches=$request->input("switches");
        $keyboard->name=$request->input("name");
        $keyboard->rgb=$request->input("rgb");
        $keyboard->wireless=$request->input("wireless");
        $keyboard->save();
        return response()->json($keyboard);
    }
    public function getAllKeyboard(Request $request){
        $keyboards = Keyboard::all();
        return response()->json($keyboards);
    }
    public function update(Request $request,$id){
        $keyboard = Keyboard::find($id);
        if($request->input('brand')) {
            $keyboard->brand = $request->input('brand'); 
        }

        if($request->input('switches')) {
            $keyboard->switches = $request->input('switches'); 
        }

        if($request->input('name')) {
            $keyboard->name = $request->input('name'); 
        }

        if($request->input('rgb')) {
            $keyboard->rgb = $request->input('rgb'); 
        }
        if($request->input('wireless')) {
            $keyboard->wireless = $request->input('wireless'); 
        }
        

        $keyboard->save();
        return response()->json($keyboard);
    }
    public function delete(Request $request,$id){
        $keyboard = Keyboard::find($id)->delete();
        return response()->json($keyboard);
    }
}
