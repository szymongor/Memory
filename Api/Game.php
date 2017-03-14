<?php
  $gamesFilePath = $_SERVER['DOCUMENT_ROOT']."/Memory/Engine/GamesData.json";
	session_start();

	if (!isset($_SESSION['user']))
	{
		echo('Not logged');
    $_SESSION['user'] = "Player";
		exit();
	}
	else
	{
    echo($_SESSION['user']);
    $gamesFile = fopen($gamesFilePath, "r") or die("Unable to open file!");
    $games = json_decode(fread($gamesFile,filesize($gamesFilePath)),true);
    fclose($gamesFile);
    echo json_encode($games);

  }

?>
