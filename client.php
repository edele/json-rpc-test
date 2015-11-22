<pre><?php

require './vendor/autoload.php';

use JsonRPC\Client;

$client = new Client('http://localhost/server.php');
$result = $client->execute('doSomething', [3, 5]);

var_dump($result);
