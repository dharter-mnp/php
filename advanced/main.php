<?php
require_once ("DatabaseServer.php");
require_once ("WebServer.php");

use advanced\DatabaseServer as DBS;
use advanced\Server;
use advanced\WebServer as WS;

/**
 * Created by PhpStorm.
 * User: DHarter
 * Date: 5/3/2016
 * Time: 2:23 PM
 */
    $servers = [new Server(), new DBS('My Database Server', 'Linux', '2.6', 'Carrolton', 'PosgreSQL', '9.5'), new WS('Tomcat', '7.0.69')];

    array_walk($servers, function($server){ $server->getServerInfo();echo "\n";});

