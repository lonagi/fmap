<?php
  require 'rb.php';
  $db="fsociety";
  $l="";
  $p="";

$setup1 = R::setup('mysql:host=localhost;dbname=',$l,$p);
R::addDatabase($db,'mysql:host=localhost;dbname='.$db, $l, $p);
?>