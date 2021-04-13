<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Finalize ServiceType
 * @subpackage Services
 */
class Finalize extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named finalizePendingBuckarooCartOrder
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \BurgerDigital\eTapestry\StructType\CartOrderRequest $cartOrderRequest_1
     * @return void|bool
     */
    public function finalizePendingBuckarooCartOrder(\BurgerDigital\eTapestry\StructType\CartOrderRequest $cartOrderRequest_1)
    {
        try {
            $this->setResult($resultFinalizePendingBuckarooCartOrder = $this->getSoapClient()->__soapCall('finalizePendingBuckarooCartOrder', [
                $cartOrderRequest_1,
            ], [], [], $this->outputHeaders));
        
            return $resultFinalizePendingBuckarooCartOrder;
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
