<?php


  ob_start();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LanParty 2019</title>
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">

  </head>
  <body>



<?php

require 'database.php';


if(isset($_POST['ime_ekipe'])){

  $team_name = $_POST['ime_ekipe'];

  if (isset($_POST['player1']) && isset($_POST['player2']) && isset($_POST['player3']) && isset($_POST['player4']) && isset($_POST['player5'])) {

  $player1 = mysqli_real_escape_string($link, $_POST['player1']);
  $player2 = mysqli_real_escape_string($link, $_POST['player2']);
  $player3 = mysqli_real_escape_string($link, $_POST['player3']);
  $player4 = mysqli_real_escape_string($link, $_POST['player4']);
  $player5 = mysqli_real_escape_string($link, $_POST['player5']);
  }

  if (isset($_POST['ime1']) && isset($_POST['ime2']) && isset($_POST['ime3']) && isset($_POST['ime4']) && isset($_POST['ime5'])) {
  $ime1 = mysqli_real_escape_string($link, $_POST['ime1']);
  $ime2 = mysqli_real_escape_string($link, $_POST['ime2']);
  $ime3 = mysqli_real_escape_string($link, $_POST['ime3']);
  $ime4 = mysqli_real_escape_string($link, $_POST['ime4']);
  $ime5 = mysqli_real_escape_string($link, $_POST['ime5']);
  }

  if (isset($_POST['priimek1']) && isset($_POST['priimek2']) && isset($_POST['priimek3']) && isset($_POST['priimek4']) && isset($_POST['priimek5'])) {
  $priimek1 = mysqli_real_escape_string($link, $_POST['priimek1']);
  $priimek2 = mysqli_real_escape_string($link, $_POST['priimek2']);
  $priimek3 = mysqli_real_escape_string($link, $_POST['priimek3']);
  $priimek4 = mysqli_real_escape_string($link, $_POST['priimek4']);
  $priimek5 = mysqli_real_escape_string($link, $_POST['priimek5']);
  }

$game_id = $_POST['game_id'];

}



$query_test = "SELECT * FROM `ekipa` WHERE ime = '$team_name'";
$result = mysqli_query($link,$query_test);
foreach ($result as $row) {
  echo "team name alredy taken";
  if($game_id == 1){
  header("Refresh: 0; url=lol.php?id=2");
  }else{
      header("Refresh: 0; url=csgo.php?id=2");

  }
  die();
}




  $query = "insert into ekipa(ime,game) values('$team_name', $game_id)";

  mysqli_query($link,$query);

  $query_select_ekipa_id = "select id from ekipa where ime ='$team_name'";
  $result = mysqli_query($link,$query_select_ekipa_id);

foreach($result as $row){
  $team_id = $row['id'];
}


$query2 = "insert into igralci(ime,priimek,account_name,ekipa_id) values('$ime1', '$priimek1','$player1', $team_id)";
$query3 = "insert into igralci(ime,priimek,account_name,ekipa_id) values('$ime2', '$priimek2','$player2', $team_id)";
$query4 = "insert into igralci(ime,priimek,account_name,ekipa_id) values('$ime3', '$priimek3','$player3', $team_id)";
$query5 = "insert into igralci(ime,priimek,account_name,ekipa_id) values('$ime4', '$priimek4','$player4', $team_id)";
$query6 = "insert into igralci(ime,priimek,account_name,ekipa_id) values('$ime5', '$priimek5','$player5', $team_id)";


  mysqli_query($link,$query2);
  mysqli_query($link,$query3);
  mysqli_query($link,$query4);
  mysqli_query($link,$query5);
  mysqli_query($link,$query6);
  ?>

<p style="color:green">Uspesno ste prijavljeni!</p>


  <?php
header('Refresh: 0; url=index.php?id=1');
die();

?>




  </body>
</html>
