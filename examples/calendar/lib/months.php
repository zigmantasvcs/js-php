<?php
  class Months{
    // konstanta - masyvas su lietuviškais mėnesiais
    const MONTHS = array(
      'Sausis',
      'Vasaris',
      'Kovas',
      'Balandis',
      'Gegužė',
      'Birželis',
      'Liepa',
      'Rugpjūtis',
      'Rugsėjis',
      'Spalis',
      'Lapkritis',
      'Gruodis');

      // metodas kuris pagal paduotą argumentą (skaičių) grąžina lietuvišką mėnesio pavadinimą
    function get_current_months_lithuania($number){
      if($number < 12){
        return self::MONTHS[$number];
      }
      return "";
    }
  }
 ?>
