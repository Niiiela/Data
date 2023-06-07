<?php
  $intervalo = new DateInterval('P2Y2D');
  echo "Hojé é " .date('d/m/Y l') ."<br>";
  echo "Falta apenas " .$intervalo->format('%d dias')." para sábado";
?>