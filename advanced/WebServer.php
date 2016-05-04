<?php
namespace advanced;
require_once ("Server.php");
/**
 * Created by PhpStorm.
 * User: DHarter
 * Date: 4/29/2016
 * Time: 4:33 PM
 */
class WebServer extends Server
{
    private $webServer;
    private $webServerVersion;

    /**
     * WebServer constructor.
     * @param $webServer
     * @param $webServerVersion
     */
    public function __construct($webServer, $webServerVersion)
    {
        $this->webServer = $webServer;
        $this->webServerVersion = $webServerVersion;
        $this->setServerType();
    }

    /**
     * @return mixed
     */
    public function getWebServer()
    {
        return $this->webServer;
    }

    /**
     * @param mixed $webServer
     */
    public function setWebServer($webServer)
    {
        $this->webServer = $webServer;
    }

    /**
     * @return mixed
     */
    public function getWebServerVersion()
    {
        return $this->webServerVersion;
    }

    /**
     * @param mixed $webServerVersion
     */
    public function setWebServerVersion($webServerVersion)
    {
        $this->webServerVersion = $webServerVersion;
    }

    public function setServerType($serverType = "web")
    {
        /*Overwriting parent functionality*/
        
        $this->serverType = $serverType;
    }

    public function getServerInfo(){
        /*Overwriting parent functionality*/
        $this->isDatabaseServer();
        echo "Web Server: $this->webServer\n";
        echo "Web Server Version: $this->webServerVersion\n";
        $this->shared();
    }
}