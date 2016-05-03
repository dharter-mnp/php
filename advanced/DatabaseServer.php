<?php
namespace advanced;
require_once ("Server.php");
/**
 * Created by PhpStorm.
 * User: DHarter
 * Date: 4/29/2016
 * Time: 4:33 PM
 */
class DatabaseServer extends Server
{
    private $databaseServer;
    private $databaseServerVersion;

    /**
     * DatabaseServer constructor.
     * @param $databaseServer
     * @param $databaseServerVersion
     */
    public function __construct($computerName, $operatingSystem, $operatingSystemVersion, $location, $databaseServer, $databaseServerVersion)
    {
        $this->computerName = $computerName;
        $this->setOperatingSystem($operatingSystem);
        $this->setOperatingSystemVersion($databaseServerVersion);
        $this->setLocation($location);
        $this->databaseServer = $databaseServer;
        $this->databaseServerVersion = $databaseServerVersion;
        $this->setServerType();
    }

    /**
     * @return mixed
     */
    public function getDatabaseServer()
    {
        return $this->databaseServer;
    }

    /**
     * @param mixed $databaseServer
     */
    public function setDatabaseServer($databaseServer)
    {
        $this->databaseServer = $databaseServer;
    }

    /**
     * @return mixed
     */
    public function getDatabaseServerVersion()
    {
        return $this->databaseServerVersion;
    }

    /**
     * @param mixed $databaseServerVersion
     */
    public function setDatabaseServerVersion($databaseServerVersion)
    {
        $this->databaseServerVersion = $databaseServerVersion;
    }

    public function setServerType($serverType = "database")
    {
        $this->serverType =$serverType;
    }


    public function getServerInfo(){
        /*Overwriting parent functionality but execute parent first*/
        parent::getServerInfo();
        echo "Database Server: $this->databaseServer\n";
        echo "Database Server Version: $this->databaseServerVersion\n";
    }
}