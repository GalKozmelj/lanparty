<?php

require 'database.php';


if(isset($_POST['ime_ekipe'])){
  $team_name = $_POST['ime_ekipe'];
  echo $team_name . "dsfsdf";
}


  $query = "insert into ekipa(ime) values($team_name)";
  mysqli_query($link,$query);
  die();


?>
