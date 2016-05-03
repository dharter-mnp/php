<?php
require_once ("Computer.php");
/**
 * Created by PhpStorm.
 * User: DHarter
 * Date: 4/29/2016
 * Time: 4:33 PM
 */
class Server extends Computer
{
    private $location;
    protected $serverType;

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return mixed
     */
    private function getServerType()
    {
        return $this->serverType;
    }

    /**
     * @param mixed $serverType
     */
    public function setServerType($serverType)
    {
    }

    protected function isDatabaseServer(){
        if ($this->getServerType() === "database"){
            echo "This is a database server\n";
        } else {
            echo "This is not a database server\n";
        }
    }

    public function getServerInfo(){
        echo "Computer Name: $this->computerName\n";
        echo "Operating System: " . $this->getOperatingSystem() . "\n";
        echo "Operating System Version: " . $this->getOperatingSystemVersion() . "\n";
        echo "Location: " . $this->getLocation() . "\n";
        echo "Server Type: " . $this->getServerType() . "\n";
        $this->isDatabaseServer();
    }

}