<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function upload(Request $req){
        if($req -> hasFile('photo') && $req -> photo -> isValid()){
            $ext = $req -> photo -> extension();
            $path = $req -> photo -> storeAs('public/uploads', 'file.'."$ext");

            if($path){
                echo "file uploaded";
            }else{
                echo "not uploaded";
            }
        }
    }
}
