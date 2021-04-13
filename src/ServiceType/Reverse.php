<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Reverse ServiceType
 * @subpackage Services
 */
class Reverse extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named reverseTransaction
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @param string $string_2
     * @return string|bool
     */
    public function reverseTransaction($string_1, $string_2)
    {
        try {
            $this->setResult($resultReverseTransaction = $this->getSoapClient()->__soapCall('reverseTransaction', [
                $string_1,
                $string_2,
            ], [], [], $this->outputHeaders));
        
            return $resultReverseTransaction;
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
