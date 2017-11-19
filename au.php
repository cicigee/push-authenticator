<?php



require 'Predis/Autoloader.php';
Predis\Autoloader::register();

$client = new Predis\Client();

$data=explode('/',$_SERVER['REQUEST_URI']);
$user=$data[2];
$token=$data[3];
//$value = $client->get($user.':authorized');
if ($user != '')
{
$client->set($user.':authorized',$token);
$client->expire($user.':authorized',40);
}



?>
<html><body style='background-color:black;'></body></html>
