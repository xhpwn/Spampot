<?php
   if($_POST['honeypot'] != ''){
   die("<center><h1>Spambot detected.</h1>
   <h2> You have been kicked and the script has ended.<h2></center>");
 }
   mail("anubhavsaxena97@gmail.com", "Spambot Detected", "Spambot Detected on bucket's Honeypot");
   header("Location: success.php");
   exit ;
?>
