<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Send ServiceType
 * @subpackage Services
 */
class Send extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named sendEmail
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \BurgerDigital\eTapestry\StructType\SendEmailRequest $sendEmailRequest_1
     * @return int|bool
     */
    public function sendEmail(\BurgerDigital\eTapestry\StructType\SendEmailRequest $sendEmailRequest_1)
    {
        try {
            $this->setResult($resultSendEmail = $this->getSoapClient()->__soapCall('sendEmail', [
                $sendEmailRequest_1,
            ], [], [], $this->outputHeaders));
        
            return $resultSendEmail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return int
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
