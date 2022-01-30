<?php
require __DIR__ . "/inc/bootstrap.php";

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );
// http://localhost/mystuff/backend/index.php/klient?limit=20 uri[4] to klient wiec zmien 4 na pozycje gdzie sie znajduje user/klient/group
//print("element: ".$uri[4]." ");
if (!isset($uri[4]))  {
	print("xD");
    header("HTTP/1.1 404 Not Found");
    exit();
}


if ($uri[4]=="user"){
$objFeedController = new UserController();}
else if($uri[4]=="group"){
$objFeedController = new GroupController();}
else if($uri[4]=="klient"){
$objFeedController = new KlientController();}

$strMethodName = $uri[4] . 'Action';
//print($strMethodName ."\n");
$objFeedController->{$strMethodName}();


?>