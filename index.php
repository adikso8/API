<?php
require __DIR__ . "/inc/bootstrap.php";
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$uri = explode( '/', $uri );

//
// http://localhost/mystuff/backend/index.php/klient?limit=20 uri[4] to klient wiec zmien 4 na pozycje gdzie sie znajduje user/klient/group
//print("element: ".$uri[4]." ");
//
//
if (end($uri)=="user"){
    $objFeedController = new UserController();
}
else if(end($uri)=="group"){
    $objFeedController = new GroupController();
}
else if(end($uri)=="klient"){
    $objFeedController = new KlientController();
}
else{
    header("HTTP/1.1 404 Not Found");
    exit();
}
//
$strMethodName = end($uri) . 'Action';
////print($strMethodName ."\n");
$objFeedController->{$strMethodName}();

?>