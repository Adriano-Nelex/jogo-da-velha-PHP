<?php

//Função para verificar se tem 3 posições iguais ao mesmo tempo no tabuleiro.
function validate(array $board, string $player): bool
{
  return
    ($board[0] === $player && $board[1] === $player && $board[2] === $player) ||
    ($board[3] === $player && $board[4] === $player && $board[5] === $player) ||
    ($board[6] === $player && $board[7] === $player && $board[8] === $player) ||
    ($board[0] === $player && $board[3] === $player && $board[6] === $player) ||
    ($board[1] === $player && $board[4] === $player && $board[7] === $player) ||
    ($board[2] === $player && $board[5] === $player && $board[8] === $player) ||
    ($board[0] === $player && $board[4] === $player && $board[8] === $player) ||
    ($board[2] === $player && $board[4] === $player && $board[6] === $player);
}