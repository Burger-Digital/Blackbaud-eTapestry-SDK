<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for External ServiceType
 * @subpackage Services
 */
class External extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named externalLogin
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ExternalLoginRequest $externalLoginRequest_1
     * @return string|bool
     */
    public function externalLogin(\StructType\ExternalLoginRequest $externalLoginRequest_1)
    {
        try {
            $this->setResult($resultExternalLogin = $this->getSoapClient()->__soapCall('externalLogin', [
                $externalLoginRequest_1,
            ], [], [], $this->outputHeaders));
        
            return $resultExternalLogin;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return string
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
