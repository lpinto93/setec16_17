<?php
$address = '192.168.50.138';
$port = 20501;


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
    $rcvmessage = '';
    $next = '';
 //   while ($next = socket_read($socket, 21112))
 //   {
		$next = socket_read($socket, 21112);
        $rcvmessage .= $next;
  //  }
    
    //header('Content-type: image/png');
    //echo file_get_contents("$rcvmessage");
    
    
    //echo $rcvmessage;
}
else
{
    echo "Failed";
}

socket_close($socket);

/*
header('Content-type: image/jpeg');
echo file_get_contents("http://www.huntelectric.com/images/docs/Articles/Hunt_Electric_DAS_Heat_Map.jpg");
*/

?>

    <!DOCTYPE html>
        <html>
        <body>

        <h2>Heatmap</h2>
        <img src="<?php echo $rcvmessage ?>" alt="Mountain View">

        </body>
        </html>