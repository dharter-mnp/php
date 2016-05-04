<?php
namespace advanced;
require_once ("CompanyDefaultsInterface.php");
/**
 * Created by PhpStorm.
 * User: DHarter
 * Date: 4/29/2016
 * Time: 4:31 PM
 */
class Computer implements CompanyDefaultsInterface
{
    public $computerName;
    private $operatingSystem;
    protected $operatingSystemVersion;

    /**
     * Computer constructor.
     * @param $computerName
     * @param $operatingSystem
     * @param $operatingSystemVersion
     */
    public function __construct($computerName = null, $operatingSystem = self::DefaultOperatingSystem, $operatingSystemVersion = null)
    {
        $this->computerName = $computerName;
        $this->operatingSystem = $operatingSystem;
        $this->operatingSystemVersion = $operatingSystemVersion;
    }

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
    public function setOperatingSystem($operatingSystem = self::DefaultOperatingSystem)
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


    public function getOperatingSystemAndVersion()
    {
        return "$this->operatingSystem $this->operatingSystemVersion";
    }
}