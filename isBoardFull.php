<?php

//Função para Verificar se o tabuleiro do jogo está preenchido ou não.
function isBoardFull(array $board): bool
{
  //Se nao existir nenhum BLANK_ICON no meu tabuleiro ele sai do looping e declara empate.
  if (in_array(BLANK_ICON, $board)) {
    return false;
  } else {
    return true;
  }
}