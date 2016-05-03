<?php
namespace advanced;
require_once ("Workstation.php");
/**
 * Created by PhpStorm.
 * User: DHarter
 * Date: 4/29/2016
 * Time: 4:32 PM
 */
class PC extends Workstation
{
    private $servicePack;

    /**
     * @return mixed
     */
    public function getServicePack()
    {
        return $this->servicePack;
    }

    /**
     * @param mixed $servicePack
     */
    public function setServicePack($servicePack)
    {
        $this->servicePack = $servicePack;
    }



}