<?php

namespace diogenespetry\dirs-dataehora;

/**
 * This is just an example.
 */
class AjustaHora extends \yii\helpers
{
    
    public function minutos2horas($mins) {
        // Se os minutos estiverem negativos
        if ($mins < 0)
          $min = abs($mins); 
        else
          $min = $mins; 
        // Arredonda a hora
        $h = floor($min / 60); 
        $m = ($min - ($h * 60)) / 100; 
        $horas = $h + $m; 
        // Matemática da quinta série
        // Detalhe: Aqui também pode se usar o abs()
        if ($mins < 0)
          $horas *= -1; 
        // Separa a hora dos minutos
        $sep = explode('.', $horas); 
        $h = $sep[0]; 
        if (empty($sep[1]))
          $sep[1] = 00; 
        $m = $sep[1]; 
        // Aqui um pequeno artifício pra colocar um zero no final
        if (strlen($m) < 2)
          $m = $m . 0; 
        return sprintf('%02d:%02d', $h, $m); 
  } 
  

}
