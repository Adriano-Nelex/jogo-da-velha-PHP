<?php

//Função para validar a posição no tabuleiro do jogo.
function isPositionCorrect(int $position, array $board): bool
{
  //Caso não digite um valor entre 0 e 8.
  if(!in_array($position, [0, 1, 2, 3, 4, 5, 6, 7, 8])) {
    echo "\nPosição inexistente, digite novamente.\n";
    return false;
  }

  //se o tabuleiro na posição for diferente de .
  if ($board[$position] !== BLANK_ICON) {
    echo "\nPosição ocupada, digite novamente.\n";
    return false;
  }

  return true;
}