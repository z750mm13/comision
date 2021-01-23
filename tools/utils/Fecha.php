<?php
namespace Tools\Utils;

use Illuminate\Http\Request;

class Fecha {
  public static function meses() {
    return array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
  }

  public static function texto($date) {
    return $date->format('d') . ' de ' . Fecha::meses()[($date->format('n')) - 1] . ' de ' . $date->format('Y');
  }
}