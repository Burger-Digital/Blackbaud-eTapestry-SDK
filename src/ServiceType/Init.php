<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Init ServiceType
 * @subpackage Services
 */
class Init extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named initLinkedTransaction
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\LinkedTransaction|bool
     */
    public function initLinkedTransaction()
    {
        try {
            $this->setResult($resultInitLinkedTransaction = $this->getSoapClient()->__soapCall('initLinkedTransaction', [], [], [], $this->outputHeaders));
        
            return $resultInitLinkedTransaction;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\LinkedTransaction
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
