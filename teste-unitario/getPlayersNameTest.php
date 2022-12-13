<?php

require_once __DIR__ . "/../variables.php";
require_once __DIR__ . "/../constants.php";
require_once __DIR__ . "/../getPlayersName.php";

$a = getPlayersName();

var_dump($a);