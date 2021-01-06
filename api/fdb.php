<?php
  require 'rb.php';
  $db="fsociety";
  $l="";
  $p="";
  $token="796fd14dc3fc45dd161dad928999c117a15b8c37501fc247424fe1097f19b14a";

$setup1 = R::setup('mysql:host=localhost;dbname=',$l,$p);
R::addDatabase($db,'mysql:host=localhost;dbname='.$db, $l, $p);
?>