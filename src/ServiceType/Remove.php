<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Remove ServiceType
 * @subpackage Services
 */
class Remove extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named removeDefinedValues
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @param \BurgerDigital\eTapestry\StructType\DefinedValue[] $arrayOfDefinedValue_2
     * @return void|bool
     */
    public function removeDefinedValues($string_1, array $arrayOfDefinedValue_2)
    {
        try {
            $this->setResult($resultRemoveDefinedValues = $this->getSoapClient()->__soapCall('removeDefinedValues', [
                $string_1,
                $arrayOfDefinedValue_2,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveDefinedValues;
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
