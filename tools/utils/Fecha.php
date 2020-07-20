<?php
namespace Tools\Utils;

use Illuminate\Http\Request;
use Image;

class Fecha {
  public static function texto($date) {
    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
    return $date->format('d') . ' de ' . $meses[($date->format('n')) - 1] . ' de ' . $date->format('Y');
  }
}