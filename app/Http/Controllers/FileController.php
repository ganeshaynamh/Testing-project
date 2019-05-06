<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use Image;

class FileController extends Controller
{
    public function ShowForm(){


        return view('uploadfile');
        }
    
    /*public function Showdata(request $request){
        return $request->all(); 
    }*/
    /*public function Showdata(request $request){
        if($request->hasFile('file')){
            return 'yes';
        }
        return $request->all(); 
*/

public function Showdata(request $request){
    
     if($request->hasFile('file')){
         //$request->file->getClientOriginalName();
         $filename = $request->file->getClientOriginalName();
         $filesize = $request->file->getClientsize();
         $request->file->storeAs('public/upload',$filename);
        
        

         $file = new File;

         $file->name = $filename;
         $file->size = $filesize;

         $file->save();
         return view('uploadfile');


     }
    return $request->all(); 

        // multiple photo upload

        /*if($request->hasFile('file')){
            foreach($request->file as $file){
                $filename = $file->getClientOriginalName();
                $filesize = $file->getClientSize();
                $file->storeAs('public/upload',$filename);
                $filemodel = new File;

                $filemodel->name = $filename;
                $filemodel->size = $filesize;
                $filemodel->save();

            }
            return 'yes';
        }*/
    }

        /*public function getFile($filename){
            return $filename;

        }*/
        /*public function showimage(request $request)
        {
            $file = $request->file('file');
            $destinationPath = 'public/upload/';
            $originalFile = $file->getClientOriginalName();
            $file->move($destinationPath, $originalFile);
        }*/
}