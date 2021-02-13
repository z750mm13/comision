<?php

namespace Tools\Img;

use Illuminate\Http\Request;

class ToServer {
    public static function saveImageFile(Request $request, $input, $route, $file) {
        //Se modifican los datos;
        $data[$input] = \Storage::disk(env('STORAGE_SERVICE'))->put($route, $file);

        //Se retornan los datos modificados agregando el
        //nombre de la imagen al request
        return $data;
    }

    public static function saveImage(Request $request, $input, $route) {
        //Almacen del archivo
        $data = $request->all();
        $data[$input] = \Storage::disk(env('STORAGE_SERVICE'))->put($route, $request->file($input));
        //nombre de la imagen al request
        return $data;
    }

    public static function deleteFile($route, $file){
        \Storage::disk(env('STORAGE_SERVICE'))->delete($route,$file);
    }

    public static function getFile($file, $branch='master'){
        if(env('STORAGE_SERVICE') == 'ghcs')
        return 'https://github.com/'.env('GITHUB_REPOSITORY').'/blob/'.$branch.'/'.$file.'?raw=true';
        else 
        return \Storage::disk(env('STORAGE_SERVICE'))->url($file);
    }
}