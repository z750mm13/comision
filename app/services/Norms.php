<?php

namespace App\Services;

use App\Norm;

class Norms {
    public function get() {
        $norms = Norms::get();
        $normsArray[''] = 'Selecciona una norma';
        foreach ($norms as $norm) {
            $normsArray[$norm->id] = $norm->codigo.' '.$norm->titulo;
        }
        return $normsArray;
    }
}