<?php

namespace Tools\Img;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ToServer {
    public static function save($route, $file) {
        if($file.''!=''&&$file.'')
        return \Storage::disk(env('STORAGE_SERVICE'))->put($route, $file);
        else return null;
    }
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

    public static function put($file, $format, $route) {
        if($file && $format) {
            $file = str_replace('data:image/'.$format.';base64,', '', $file);
            $file = str_replace(' ', '+', $file);
            $name = Str::random(10) .'.'. $format;
            \Storage::disk(env('STORAGE_SERVICE'))->put($route.'/'.$name, base64_decode($file));
            return $route.'/'.$name;
        }
        else
        return null;
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