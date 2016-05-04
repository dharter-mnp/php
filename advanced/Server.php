<?php
namespace advanced;
require_once ("Computer.php");
require_once ("SharedTrait.php");
/**
 * Created by PhpStorm.
 * User: DHarter
 * Date: 4/29/2016
 * Time: 4:33 PM
 */
class Server extends Computer
{
    use SharedTrait;
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
        $type = $this->getServerType();
        $isDBServer = function() use ($type) {
            echo ($type === "database") ? "This is a database server\n" : "This is not a database server\n";
        };
        $isDBServer();
    }

    public function getServerInfo(){
        echo "Computer Name: $this->computerName\n";
        echo "Operating System and Version: " . $this->getOperatingSystemAndVersion() . "\n";
        echo "Location: " . $this->getLocation() . "\n";
        echo "Server Type: " . $this->getServerType() . "\n";
        $this->isDatabaseServer();

    }

}