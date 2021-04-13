<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Has ServiceType
 * @subpackage Services
 */
class Has extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named hasMoreCartElements
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return boolean|bool
     */
    public function hasMoreCartElements()
    {
        try {
            $this->setResult($resultHasMoreCartElements = $this->getSoapClient()->__soapCall('hasMoreCartElements', [], [], [], $this->outputHeaders));
        
            return $resultHasMoreCartElements;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named hasMoreDefinedFields
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return boolean|bool
     */
    public function hasMoreDefinedFields()
    {
        try {
            $this->setResult($resultHasMoreDefinedFields = $this->getSoapClient()->__soapCall('hasMoreDefinedFields', [], [], [], $this->outputHeaders));
        
            return $resultHasMoreDefinedFields;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named hasMoreJournalEntries
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return boolean|bool
     */
    public function hasMoreJournalEntries()
    {
        try {
            $this->setResult($resultHasMoreJournalEntries = $this->getSoapClient()->__soapCall('hasMoreJournalEntries', [], [], [], $this->outputHeaders));
        
            return $resultHasMoreJournalEntries;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named hasMoreQueryResults
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return boolean|bool
     */
    public function hasMoreQueryResults()
    {
        try {
            $this->setResult($resultHasMoreQueryResults = $this->getSoapClient()->__soapCall('hasMoreQueryResults', [], [], [], $this->outputHeaders));
        
            return $resultHasMoreQueryResults;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named hasMoreRelationships
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return boolean|bool
     */
    public function hasMoreRelationships()
    {
        try {
            $this->setResult($resultHasMoreRelationships = $this->getSoapClient()->__soapCall('hasMoreRelationships', [], [], [], $this->outputHeaders));
        
            return $resultHasMoreRelationships;
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
