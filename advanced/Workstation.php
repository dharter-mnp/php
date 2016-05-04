<?php
namespace advanced;
require_once ("Computer.php");
require_once ("SharedTrait.php");
/**
 * Created by PhpStorm.
 * User: DHarter
 * Date: 4/29/2016
 * Time: 4:32 PM
 */
class Workstation extends Computer
{
    use SharedTrait;
    private $diskSize;
    private $ram;
    private $user;

    /**
     * @return mixed
     */
    public function getDiskSize()
    {
        return $this->diskSize;
    }

    /**
     * @param mixed $diskSize
     */
    public function setDiskSize($diskSize)
    {
        $this->diskSize = $diskSize;
    }

    /**
     * @return mixed
     */
    public function getRam()
    {
        return $this->ram;
    }

    /**
     * @param mixed $ram
     */
    public function setRam($ram)
    {
        $this->ram = $ram;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }


}