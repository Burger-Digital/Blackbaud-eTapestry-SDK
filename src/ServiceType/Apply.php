<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Apply ServiceType
 * @subpackage Services
 */
class Apply extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named applyDefinedValues
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @param \StructType\DefinedValue[] $arrayOfDefinedValue_2
     * @param string $boolean_3
     * @return void|bool
     */
    public function applyDefinedValues($string_1, array $arrayOfDefinedValue_2, $boolean_3)
    {
        try {
            $this->setResult($resultApplyDefinedValues = $this->getSoapClient()->__soapCall('applyDefinedValues', [
                $string_1,
                $arrayOfDefinedValue_2,
                $boolean_3,
            ], [], [], $this->outputHeaders));
        
            return $resultApplyDefinedValues;
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
