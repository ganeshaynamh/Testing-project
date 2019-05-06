<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Strorage;

class uploadController extends Controller
{
    public function index()
    {
        return view('upload');
    }
    public function store(request $request){
        
       /* if($request->hash_file('image')){
            $request->file('image');

            return Strorage::putFile('public',$request->file('image'));
        }
        else{
            return 'No file selected';
        }*/

        return $request->file('image');
        $request ->image->save('public');
    }
}
