<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Connect ServiceType
 * @subpackage Services
 */
class Connect extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named connect
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ConnectRequest $connectRequest_1
     * @return string|bool
     */
    public function connect(\StructType\ConnectRequest $connectRequest_1)
    {
        try {
            $this->setResult($resultConnect = $this->getSoapClient()->__soapCall('connect', [
                $connectRequest_1,
            ], [], [], $this->outputHeaders));
        
            return $resultConnect;
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
