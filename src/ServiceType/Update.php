<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Update ServiceType
 * @subpackage Services
 */
class Update extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named updateAccount
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Account $account_1
     * @param string $boolean_2
     * @return string|bool
     */
    public function updateAccount(\StructType\Account $account_1, $boolean_2)
    {
        try {
            $this->setResult($resultUpdateAccount = $this->getSoapClient()->__soapCall('updateAccount', [
                $account_1,
                $boolean_2,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateContact
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Contact $contact_1
     * @param string $boolean_2
     * @return string|bool
     */
    public function updateContact(\StructType\Contact $contact_1, $boolean_2)
    {
        try {
            $this->setResult($resultUpdateContact = $this->getSoapClient()->__soapCall('updateContact', [
                $contact_1,
                $boolean_2,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateContact;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateDeclaration
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Declaration $declaration_1
     * @return string|bool
     */
    public function updateDeclaration(\StructType\Declaration $declaration_1)
    {
        try {
            $this->setResult($resultUpdateDeclaration = $this->getSoapClient()->__soapCall('updateDeclaration', [
                $declaration_1,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateDeclaration;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateForgottenPassword
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @param string $string_2
     * @param string $string_3
     * @return void|bool
     */
    public function updateForgottenPassword($string_1, $string_2, $string_3)
    {
        try {
            $this->setResult($resultUpdateForgottenPassword = $this->getSoapClient()->__soapCall('updateForgottenPassword', [
                $string_1,
                $string_2,
                $string_3,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateForgottenPassword;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateGift
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Gift $gift_1
     * @param string $boolean_2
     * @return string|bool
     */
    public function updateGift(\StructType\Gift $gift_1, $boolean_2)
    {
        try {
            $this->setResult($resultUpdateGift = $this->getSoapClient()->__soapCall('updateGift', [
                $gift_1,
                $boolean_2,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateGift;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateMyExpiredPassword
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @return void|bool
     */
    public function updateMyExpiredPassword($string_1)
    {
        try {
            $this->setResult($resultUpdateMyExpiredPassword = $this->getSoapClient()->__soapCall('updateMyExpiredPassword', [
                $string_1,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateMyExpiredPassword;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateMyLoginCredentials
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @param string $string_2
     * @return void|bool
     */
    public function updateMyLoginCredentials($string_1, $string_2)
    {
        try {
            $this->setResult($resultUpdateMyLoginCredentials = $this->getSoapClient()->__soapCall('updateMyLoginCredentials', [
                $string_1,
                $string_2,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateMyLoginCredentials;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateMyPassword
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @return void|bool
     */
    public function updateMyPassword($string_1)
    {
        try {
            $this->setResult($resultUpdateMyPassword = $this->getSoapClient()->__soapCall('updateMyPassword', [
                $string_1,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateMyPassword;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateNote
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Note $note_1
     * @param string $boolean_2
     * @return string|bool
     */
    public function updateNote(\StructType\Note $note_1, $boolean_2)
    {
        try {
            $this->setResult($resultUpdateNote = $this->getSoapClient()->__soapCall('updateNote', [
                $note_1,
                $boolean_2,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateNote;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updatePayment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Payment $payment_1
     * @param string $boolean_2
     * @return string|bool
     */
    public function updatePayment(\StructType\Payment $payment_1, $boolean_2)
    {
        try {
            $this->setResult($resultUpdatePayment = $this->getSoapClient()->__soapCall('updatePayment', [
                $payment_1,
                $boolean_2,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdatePayment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updatePledge
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Pledge $pledge_1
     * @param string $boolean_2
     * @return string|bool
     */
    public function updatePledge(\StructType\Pledge $pledge_1, $boolean_2)
    {
        try {
            $this->setResult($resultUpdatePledge = $this->getSoapClient()->__soapCall('updatePledge', [
                $pledge_1,
                $boolean_2,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdatePledge;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updatePrivacyPreferences
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\PrivacyPreferences $privacyPreferences_1
     * @param string $boolean_2
     * @return void|bool
     */
    public function updatePrivacyPreferences(\StructType\PrivacyPreferences $privacyPreferences_1, $boolean_2)
    {
        try {
            $this->setResult($resultUpdatePrivacyPreferences = $this->getSoapClient()->__soapCall('updatePrivacyPreferences', [
                $privacyPreferences_1,
                $boolean_2,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdatePrivacyPreferences;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateRecurringGift
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RecurringGift $recurringGift_1
     * @param string $boolean_2
     * @return string|bool
     */
    public function updateRecurringGift(\StructType\RecurringGift $recurringGift_1, $boolean_2)
    {
        try {
            $this->setResult($resultUpdateRecurringGift = $this->getSoapClient()->__soapCall('updateRecurringGift', [
                $recurringGift_1,
                $boolean_2,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateRecurringGift;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateRecurringGiftSchedule
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RecurringGiftSchedule $recurringGiftSchedule_1
     * @param string $boolean_2
     * @return string|bool
     */
    public function updateRecurringGiftSchedule(\StructType\RecurringGiftSchedule $recurringGiftSchedule_1, $boolean_2)
    {
        try {
            $this->setResult($resultUpdateRecurringGiftSchedule = $this->getSoapClient()->__soapCall('updateRecurringGiftSchedule', [
                $recurringGiftSchedule_1,
                $boolean_2,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateRecurringGiftSchedule;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return string|void
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
