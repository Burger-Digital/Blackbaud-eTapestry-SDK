<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Process ServiceType
 * @subpackage Services
 */
class Process extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named processAccountChange
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AccountChangeRequest $accountChangeRequest_1
     * @return void|bool
     */
    public function processAccountChange(\StructType\AccountChangeRequest $accountChangeRequest_1)
    {
        try {
            $this->setResult($resultProcessAccountChange = $this->getSoapClient()->__soapCall('processAccountChange', [
                $accountChangeRequest_1,
            ], [], [], $this->outputHeaders));
        
            return $resultProcessAccountChange;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named processCartOrder
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CartOrderRequest $cartOrderRequest_1
     * @return \StructType\CartOrderResponse|bool
     */
    public function processCartOrder(\StructType\CartOrderRequest $cartOrderRequest_1)
    {
        try {
            $this->setResult($resultProcessCartOrder = $this->getSoapClient()->__soapCall('processCartOrder', [
                $cartOrderRequest_1,
            ], [], [], $this->outputHeaders));
        
            return $resultProcessCartOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named processEcommerceRequest
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\EcommerceRequest $ecommerceRequest_1
     * @return \StructType\EcommerceResponse|bool
     */
    public function processEcommerceRequest(\StructType\EcommerceRequest $ecommerceRequest_1)
    {
        try {
            $this->setResult($resultProcessEcommerceRequest = $this->getSoapClient()->__soapCall('processEcommerceRequest', [
                $ecommerceRequest_1,
            ], [], [], $this->outputHeaders));
        
            return $resultProcessEcommerceRequest;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named processForgottenPasswordEmailHelp
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ForgottenPasswordEmailHelpRequest $forgottenPasswordEmailHelpRequest_1
     * @return int|bool
     */
    public function processForgottenPasswordEmailHelp(\StructType\ForgottenPasswordEmailHelpRequest $forgottenPasswordEmailHelpRequest_1)
    {
        try {
            $this->setResult($resultProcessForgottenPasswordEmailHelp = $this->getSoapClient()->__soapCall('processForgottenPasswordEmailHelp', [
                $forgottenPasswordEmailHelpRequest_1,
            ], [], [], $this->outputHeaders));
        
            return $resultProcessForgottenPasswordEmailHelp;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named processForgottenPasswordResetHelp
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ForgottenPasswordResetHelpRequest $forgottenPasswordResetHelpRequest_1
     * @return string|bool
     */
    public function processForgottenPasswordResetHelp(\StructType\ForgottenPasswordResetHelpRequest $forgottenPasswordResetHelpRequest_1)
    {
        try {
            $this->setResult($resultProcessForgottenPasswordResetHelp = $this->getSoapClient()->__soapCall('processForgottenPasswordResetHelp', [
                $forgottenPasswordResetHelpRequest_1,
            ], [], [], $this->outputHeaders));
        
            return $resultProcessForgottenPasswordResetHelp;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named processTransaction
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ProcessTransactionRequest $processTransactionRequest_1
     * @return string|bool
     */
    public function processTransaction(\StructType\ProcessTransactionRequest $processTransactionRequest_1)
    {
        try {
            $this->setResult($resultProcessTransaction = $this->getSoapClient()->__soapCall('processTransaction', [
                $processTransactionRequest_1,
            ], [], [], $this->outputHeaders));
        
            return $resultProcessTransaction;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return int|string|void|\StructType\CartOrderResponse|\StructType\EcommerceResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
