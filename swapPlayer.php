<?php

//Função que vai fazer a troca de um jogador para outro.
function swapPlayer(string $player): string
{
  if ($player === PLAYER_ONE_ICON) {
    return PLAYER_TWO_ICON;
  } else {
    return PLAYER_ONE_ICON;
  }
}