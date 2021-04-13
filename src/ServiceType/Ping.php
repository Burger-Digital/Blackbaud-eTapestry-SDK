<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Ping ServiceType
 * @subpackage Services
 */
class Ping extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named pingOkay
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return string|bool
     */
    public function pingOkay()
    {
        try {
            $this->setResult($resultPingOkay = $this->getSoapClient()->__soapCall('pingOkay', [], [], [], $this->outputHeaders));
        
            return $resultPingOkay;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named pingTime
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return dateTime|bool
     */
    public function pingTime()
    {
        try {
            $this->setResult($resultPingTime = $this->getSoapClient()->__soapCall('pingTime', [], [], [], $this->outputHeaders));
        
            return $resultPingTime;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return dateTime|string
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
