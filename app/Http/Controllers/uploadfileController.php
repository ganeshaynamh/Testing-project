<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class uploadfileController extends Controller
{
    
    public function index()
    {
        return view('upload');
    }
    public function store(Request $request)
    {
    //$request->logo->store('logos');


    if($request->hasFile('logo')){
            $request->file('logo');
            //return $request->logo->path();
            //return $request->logo->extension();
            
            //return $request->logo->store('public');
            return $request->logo->storeAs('public','jagdish.jpg');
            //return Storage::putFile('logos',$request->file('logo'));
            }
            else{
                return 'no file selected';
            }
    }

    public function show()
    {       
        /*if(Storage::deleteDirectory('public/make')){
            return "deleted";
        }*/
         /*if(Storage::makeDirectory('public/make')){
             return "created";
         }*/
        //return Storage::files('logos');

       // return Storage::url('jagdish.jpg'); 
        
      //$url = Storage::url('jagdish.jpg');
      //return "<img src='".$url."'/>";

      //return Storage::size('public/jagdish.jpg');
      //return Storage::lastModified('public/jagdish.jpg');
      //return Storage::copy('public/jagdish.jpg','jagdish.jpg');
      /*if(Storage::move('public/jagdish.jpg','jagdish.jpg')){
          return "movod";
      }*/

      $rawContent = Storage::get('jagdish.jpg');
      if(Storage::put('newImage2.jpg',$rawContent)){
          return 'file 2 is created';
      }
    }
}
