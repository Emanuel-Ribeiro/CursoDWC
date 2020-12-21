<?php

  $nome = 'Emanuel';
  $idade = 20;

  $frase = 'meu nome é ';

  echo 'Meu nome é '.$nome.' e eu tenho '.$idade.' anos!';   
  /* sempre que for necessario colocar uma variavel (funciona com constantes e etc) no meio de uma string é so utilizar um ponto antes da variavel e caso tenha mais texto depois dela um ponto no final tambem! */

  echo '<br/>';
  echo $frase.$nome;
  /* tambem é possivel concatenar variaveis */

  echo "<br/> Meu nome é $nome";
  /* se forem utilizadas aspas duplas nao é necessario os pontos de concatenaçao! */

?>