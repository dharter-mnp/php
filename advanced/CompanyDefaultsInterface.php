<?php
/**
 * Created by PhpStorm.
 * User: DHarter
 * Date: 5/4/2016
 * Time: 10:18 AM
 */

namespace advanced;


interface CompanyDefaultsInterface
{
    const DefaultOperatingSystem = 'Linux';
    
    public function getOperatingSystemAndVersion();

}