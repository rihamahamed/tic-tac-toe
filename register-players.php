<?php

require_once "functions.php";

registerPlayers($_POST['player-x'], $_POST['player-o']);

if (playersRegistered()) {
    header("location: play.php");
}
