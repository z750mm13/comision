<?php
namespace Tools\Utils;

use Illuminate\Http\Request;

class Fecha {
  private $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
  
  public static function meses() {
    return $meses;
  }

  public static function texto($date) {
    return $date->format('d') . ' de ' . $meses[($date->format('n')) - 1] . ' de ' . $date->format('Y');
  }
}