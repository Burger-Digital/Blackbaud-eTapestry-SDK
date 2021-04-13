<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Login ServiceType
 * @subpackage Services
 */
class Login extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named login
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @param string $string_2
     * @return string|bool
     */
    public function login($string_1, $string_2)
    {
        try {
            $this->setResult($resultLogin = $this->getSoapClient()->__soapCall('login', [
                $string_1,
                $string_2,
            ], [], [], $this->outputHeaders));
        
            return $resultLogin;
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
