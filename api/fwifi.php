<?php 
//header('Access-Control-Allow-Origin: market.drones-c.com');
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');

require "fdb.php";
R::selectDatabase("fsociety");
$output = [];
$fwifi = R::findAll("fwifi");

foreach ($fwifi as $f) {
	$r = [
		"x"=>$f->latitude,
		"y"=>$f->longitude,
		"login"=>$f->login,
		"psw"=>$f->password
	];
	array_push($output, $r);
}


echo json_encode($output,JSON_PRETTY_PRINT);
?>