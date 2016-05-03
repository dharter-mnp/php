<?php

/**
 * Created by PhpStorm.
 * User: DHarter
 * Date: 4/29/2016
 * Time: 4:31 PM
 */
class Computer
{
    public $computerName;
    private $operatingSystem;
    protected $operatingSystemVersion;
    /**
     * @return mixed
     */
    public function getComputerName()
    {
        return $this->computerName;
    }

    /**
     * @param mixed $computerName
     */
    public function setComputerName($computerName)
    {
        $this->computerName = $computerName;
    }

    /**
     * @return mixed
     */
    public function getOperatingSystem()
    {
        return $this->operatingSystem;
    }

    /**
     * @param mixed $operatingSystem
     */
    public function setOperatingSystem($operatingSystem)
    {
        $this->operatingSystem = $operatingSystem;
    }

    /**
     * @return mixed
     */
    public function getOperatingSystemVersion()
    {
        return $this->operatingSystemVersion;
    }

    /**
     * @param mixed $operatingSystemVersion
     */
    public function setOperatingSystemVersion($operatingSystemVersion)
    {
        $this->operatingSystemVersion = $operatingSystemVersion;
    }


}