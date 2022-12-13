<?php

require_once __DIR__ . "/variables.php";
require_once __DIR__ . "/constants.php";
require_once __DIR__ . "/getPlayersName.php";
require_once __DIR__ . "/buildBoard.php";
require_once __DIR__ . "/showBoard.php";
require_once __DIR__ . "/isPositionCorrect.php";
require_once __DIR__ . "/validate.php";
require_once __DIR__ . "/isBoardFull.php";
require_once __DIR__ . "/swapPlayer.php";
require_once __DIR__ . "/showWinner.php";
require_once __DIR__ . "/playAgain.php";

do {
  // Criando os players de acordo com a função.
  $players = getPlayersName();
  $player = PLAYER_ONE_ICON;

  //Criando o Tabuleiro com a função buildBoard.
  $board = buildBoard();

  //Variavel contendo o vencedor, inicialmente vazio.
  $winner = null;

  //Exibindo o tabuleiro com as posições que o jogador vai escolher.
  while ($winner === null) {
    echo showBoard($board);

    //Player escolhe a posição desejada e em seguida fazemos as validações.
    $position = (int) readline("PLayer {$player}, digite a sua posição: ");

    if (!isPositionCorrect($position, $board)) {
      continue;
    }
    
    //Alterar no tabuleiro a posição escolhida
    $board[$position] = $player;

    //Validando se tem 3 posições iguais com a função validate.
    if (validate($board, PLAYER_ONE_ICON)) {
      $winner = PLAYER_ONE_ICON;
    } elseif (validate($board, PLAYER_TWO_ICON)){
      $winner = PLAYER_TWO_ICON;
    } else {
      $winner = null;
    }

    //Chamando a função para validar se o tabuleiro está preenchido.
    if (isBoardFull($board)) {
      break;
    }

    $player = swapPlayer($player);
  }

  //Exibindo o tabuleiro novamente
  echo showBoard($board);

  //Validando o player vencedor ou empate.
  echo showWinner($winner, $players);

  $playAgain = playAgain();

  echo "\n";
} while ($playAgain === true);