<?php
//Mostra a data
    echo "Hoje é dia ".date('d/m/Y');
    echo "<br>";

//adicionado a hora
    echo 'Agora são: ' .date('H:i:s');

//Mostrar a data com apenas dois digito do Ano.
    echo "<br><br>Hojé é dia " .date('d/m/y');

//Mostrar a hora com PM
  echo "<br><br>" .date('g:i:s  A ');


//Mostra o dia da Semana
    echo date("l");
?>