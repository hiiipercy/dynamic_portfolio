<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function imageUpload($file,$path){
        if($file){
            $img = $file;
            $filename= $img->getClientOriginalName();
            $extension= $img->getClientOriginalExtension();
            $uniqueName = md5(rand().time(). $filename).'.'.$extension;
            $file->move($path,$uniqueName);
            return $uniqueName;
        }
    }
}
