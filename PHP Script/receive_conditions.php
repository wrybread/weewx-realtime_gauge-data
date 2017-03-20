<?php

/*

This receives data from the rtgd.py extension of weeWX.

Enables writing live_data.json to a remote server without having to bother with FTP, rsync, etc.

By Alec Bennett, wrybread@gmail.com


*/




// encode the data received through the GET statement to json
$json_data = json_encode($_GET);


// write the data to "live_data.json" in the current directory
file_put_contents("live_data.json", $json_data);



?>
