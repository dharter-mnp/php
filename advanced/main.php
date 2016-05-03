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
    $server = new Server();
    $server->computerName = 'My Server';
    $server->setLocation('Home');
    $server->setServerType('database');  
    $server->getServerInfo();

    echo "\n";

    $dbServer = new DBS('My Database Server', 'Linux', '2.6', 'Carrolton', 'PosgreSQL', '9.5');
    $dbServer->getServerInfo();

    echo "\n";

    $webServer = new WS('Tomcat', '7.0.69');
    $webServer->getServerInfo();