<?php

require 'database.php';

$mail_iz_baze = "select from ekipe "



// the message
$msg = "Če želite potrditi prijavo ekipe za LANPARTY 2019 VELENJE\nkliknite TUKAJ!";
$mail = $mail_iz_baze;

// use wordwrap() if lines are longer than 70 characters
// $msg = wordwrap($msg,70);

// send email
mail($mail,"Potrditev Ekipe za LanParty 2019, Velenje",$msg);
?>
