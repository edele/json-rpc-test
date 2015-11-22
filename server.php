<?php

require './vendor/autoload.php';
use JsonRPC\Server;

class Api
{
    public function doSomething($arg1, $arg2 = 3)
    {
        return $arg1 + $arg2;
    }
}

$server = new Server;

// Attach the class, client will be able to call directly Api::doSomething()
$server->attach(new Api);

echo $server->execute();
