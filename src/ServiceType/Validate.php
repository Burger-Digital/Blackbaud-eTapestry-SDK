<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Validate ServiceType
 * @subpackage Services
 */
class Validate extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named validateCartLicense
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return boolean|bool
     */
    public function validateCartLicense()
    {
        try {
            $this->setResult($resultValidateCartLicense = $this->getSoapClient()->__soapCall('validateCartLicense', [], [], [], $this->outputHeaders));
        
            return $resultValidateCartLicense;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named validateDonorLoginLicense
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return boolean|bool
     */
    public function validateDonorLoginLicense()
    {
        try {
            $this->setResult($resultValidateDonorLoginLicense = $this->getSoapClient()->__soapCall('validateDonorLoginLicense', [], [], [], $this->outputHeaders));
        
            return $resultValidateDonorLoginLicense;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named validateOutlookIntegrationLicense
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return boolean|bool
     */
    public function validateOutlookIntegrationLicense()
    {
        try {
            $this->setResult($resultValidateOutlookIntegrationLicense = $this->getSoapClient()->__soapCall('validateOutlookIntegrationLicense', [], [], [], $this->outputHeaders));
        
            return $resultValidateOutlookIntegrationLicense;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return boolean
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
