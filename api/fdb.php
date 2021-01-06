<?php
  require 'rb.php';
  $db="fsociety";
  $l="";
  $p="";
  $token="3b7fca490b72e7cb2d92b7b751c7ce34c75537637c3bda43ca7cddbef100bec8";

$setup1 = R::setup('mysql:host=localhost;dbname=',$l,$p);
R::addDatabase($db,'mysql:host=localhost;dbname='.$db, $l, $p);
?>