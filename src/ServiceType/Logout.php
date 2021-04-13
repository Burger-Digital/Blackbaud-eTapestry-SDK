<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Logout ServiceType
 * @subpackage Services
 */
class Logout extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named logout
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return void|bool
     */
    public function logout()
    {
        try {
            $this->setResult($resultLogout = $this->getSoapClient()->__soapCall('logout', [], [], [], $this->outputHeaders));
        
            return $resultLogout;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return void
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
