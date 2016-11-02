<?php
$address = '172.30.4.167';
$port = 21112;

/*
$socket = socket_create(AF_INET, SOCK_STREAM, getprotobyname('tcp'));
socket_connect($socket, $address, $port);

$st = $_POST["start"];
$fn = $_POST["finish"];

$times = strtotime($st);
$timef = strtotime($fn);


$message = "heatmap@" . $times . "@" . $timef . "\n";


$len = strlen($message);

$status = socket_sendto($socket, $message, $len, 0, $address, $port);


if($status !== FALSE)
{
    $message = '';
    $next = '';
 //   while ($next = socket_read($socket, 21112))
 //   {
		$next = socket_read($socket, 21112);
        $message .= $next;
  //  }

    echo $message;
}
else
{
    echo "Failed";
}

socket_close($socket);
*/

header('Content-type: image/jpeg');
echo file_get_contents("http://www.huntelectric.com/images/docs/Articles/Hunt_Electric_DAS_Heat_Map.jpg");

?>