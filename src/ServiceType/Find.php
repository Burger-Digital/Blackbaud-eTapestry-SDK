<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Find ServiceType
 * @subpackage Services
 */
class Find extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named findAccountsForOutlookIntegration
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @param string $string_2
     * @param string $boolean_3
     * @return \BurgerDigital\eTapestry\StructType\Account[]|bool
     */
    public function findAccountsForOutlookIntegration($string_1, $string_2, $boolean_3)
    {
        try {
            $this->setResult($resultFindAccountsForOutlookIntegration = $this->getSoapClient()->__soapCall('findAccountsForOutlookIntegration', [
                $string_1,
                $string_2,
                $boolean_3,
            ], [], [], $this->outputHeaders));
        
            return $resultFindAccountsForOutlookIntegration;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \BurgerDigital\eTapestry\StructType\Account[]
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
