<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Add ServiceType
 * @subpackage Services
 */
class Add extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named addAccount
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Account $account_1
     * @param string $boolean_2
     * @return string|bool
     */
    public function addAccount(\StructType\Account $account_1, $boolean_2)
    {
        try {
            $this->setResult($resultAddAccount = $this->getSoapClient()->__soapCall('addAccount', [
                $account_1,
                $boolean_2,
            ], [], [], $this->outputHeaders));
        
            return $resultAddAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addAndProcessGift
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Gift $gift_1
     * @param string $boolean_2
     * @return string|bool
     */
    public function addAndProcessGift(\StructType\Gift $gift_1, $boolean_2)
    {
        try {
            $this->setResult($resultAddAndProcessGift = $this->getSoapClient()->__soapCall('addAndProcessGift', [
                $gift_1,
                $boolean_2,
            ], [], [], $this->outputHeaders));
        
            return $resultAddAndProcessGift;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addAndProcessPayment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Payment $payment_1
     * @param string $boolean_2
     * @return string|bool
     */
    public function addAndProcessPayment(\StructType\Payment $payment_1, $boolean_2)
    {
        try {
            $this->setResult($resultAddAndProcessPayment = $this->getSoapClient()->__soapCall('addAndProcessPayment', [
                $payment_1,
                $boolean_2,
            ], [], [], $this->outputHeaders));
        
            return $resultAddAndProcessPayment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addContact
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Contact $contact_1
     * @param string $boolean_2
     * @return string|bool
     */
    public function addContact(\StructType\Contact $contact_1, $boolean_2)
    {
        try {
            $this->setResult($resultAddContact = $this->getSoapClient()->__soapCall('addContact', [
                $contact_1,
                $boolean_2,
            ], [], [], $this->outputHeaders));
        
            return $resultAddContact;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addDeclaration
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Declaration $declaration_1
     * @return string|bool
     */
    public function addDeclaration(\StructType\Declaration $declaration_1)
    {
        try {
            $this->setResult($resultAddDeclaration = $this->getSoapClient()->__soapCall('addDeclaration', [
                $declaration_1,
            ], [], [], $this->outputHeaders));
        
            return $resultAddDeclaration;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addDisbursement
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Disbursement $disbursement_1
     * @param string $boolean_2
     * @return string|bool
     */
    public function addDisbursement(\StructType\Disbursement $disbursement_1, $boolean_2)
    {
        try {
            $this->setResult($resultAddDisbursement = $this->getSoapClient()->__soapCall('addDisbursement', [
                $disbursement_1,
                $boolean_2,
            ], [], [], $this->outputHeaders));
        
            return $resultAddDisbursement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addGift
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Gift $gift_1
     * @param string $boolean_2
     * @return string|bool
     */
    public function addGift(\StructType\Gift $gift_1, $boolean_2)
    {
        try {
            $this->setResult($resultAddGift = $this->getSoapClient()->__soapCall('addGift', [
                $gift_1,
                $boolean_2,
            ], [], [], $this->outputHeaders));
        
            return $resultAddGift;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addLoginCredentials
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\LoginCredentialsRequest $loginCredentialsRequest_1
     * @return \StructType\LoginCredentialsResponse|bool
     */
    public function addLoginCredentials(\StructType\LoginCredentialsRequest $loginCredentialsRequest_1)
    {
        try {
            $this->setResult($resultAddLoginCredentials = $this->getSoapClient()->__soapCall('addLoginCredentials', [
                $loginCredentialsRequest_1,
            ], [], [], $this->outputHeaders));
        
            return $resultAddLoginCredentials;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addNote
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Note $note_1
     * @param string $boolean_2
     * @return string|bool
     */
    public function addNote(\StructType\Note $note_1, $boolean_2)
    {
        try {
            $this->setResult($resultAddNote = $this->getSoapClient()->__soapCall('addNote', [
                $note_1,
                $boolean_2,
            ], [], [], $this->outputHeaders));
        
            return $resultAddNote;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addOutlookIntegrationEmail
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\OutlookIntegrationEmail $outlookIntegrationEmail_1
     * @param \StructType\Account[] $arrayOfAccount_2
     * @return string|bool
     */
    public function addOutlookIntegrationEmail(\StructType\OutlookIntegrationEmail $outlookIntegrationEmail_1, array $arrayOfAccount_2)
    {
        try {
            $this->setResult($resultAddOutlookIntegrationEmail = $this->getSoapClient()->__soapCall('addOutlookIntegrationEmail', [
                $outlookIntegrationEmail_1,
                $arrayOfAccount_2,
            ], [], [], $this->outputHeaders));
        
            return $resultAddOutlookIntegrationEmail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addOutlookIntegrationError
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @return void|bool
     */
    public function addOutlookIntegrationError($string_1)
    {
        try {
            $this->setResult($resultAddOutlookIntegrationError = $this->getSoapClient()->__soapCall('addOutlookIntegrationError', [
                $string_1,
            ], [], [], $this->outputHeaders));
        
            return $resultAddOutlookIntegrationError;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addOutlookIntegrationStats
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @param string $date_2
     * @param string $int_3
     * @param string $int_4
     * @param string $int_5
     * @param string $int_6
     * @param string $int_7
     * @return void|bool
     */
    public function addOutlookIntegrationStats($string_1, $date_2, $int_3, $int_4, $int_5, $int_6, $int_7)
    {
        try {
            $this->setResult($resultAddOutlookIntegrationStats = $this->getSoapClient()->__soapCall('addOutlookIntegrationStats', [
                $string_1,
                $date_2,
                $int_3,
                $int_4,
                $int_5,
                $int_6,
                $int_7,
            ], [], [], $this->outputHeaders));
        
            return $resultAddOutlookIntegrationStats;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addPayment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Payment $payment_1
     * @param string $boolean_2
     * @return string|bool
     */
    public function addPayment(\StructType\Payment $payment_1, $boolean_2)
    {
        try {
            $this->setResult($resultAddPayment = $this->getSoapClient()->__soapCall('addPayment', [
                $payment_1,
                $boolean_2,
            ], [], [], $this->outputHeaders));
        
            return $resultAddPayment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addPledge
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Pledge $pledge_1
     * @param string $boolean_2
     * @return string|bool
     */
    public function addPledge(\StructType\Pledge $pledge_1, $boolean_2)
    {
        try {
            $this->setResult($resultAddPledge = $this->getSoapClient()->__soapCall('addPledge', [
                $pledge_1,
                $boolean_2,
            ], [], [], $this->outputHeaders));
        
            return $resultAddPledge;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addRecurringGift
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RecurringGift $recurringGift_1
     * @param string $boolean_2
     * @return string|bool
     */
    public function addRecurringGift(\StructType\RecurringGift $recurringGift_1, $boolean_2)
    {
        try {
            $this->setResult($resultAddRecurringGift = $this->getSoapClient()->__soapCall('addRecurringGift', [
                $recurringGift_1,
                $boolean_2,
            ], [], [], $this->outputHeaders));
        
            return $resultAddRecurringGift;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addRecurringGiftSchedule
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RecurringGiftSchedule $recurringGiftSchedule_1
     * @param string $boolean_2
     * @return string|bool
     */
    public function addRecurringGiftSchedule(\StructType\RecurringGiftSchedule $recurringGiftSchedule_1, $boolean_2)
    {
        try {
            $this->setResult($resultAddRecurringGiftSchedule = $this->getSoapClient()->__soapCall('addRecurringGiftSchedule', [
                $recurringGiftSchedule_1,
                $boolean_2,
            ], [], [], $this->outputHeaders));
        
            return $resultAddRecurringGiftSchedule;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addRelationship
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Relationship $relationship_1
     * @param string $boolean_2
     * @return string|bool
     */
    public function addRelationship(\StructType\Relationship $relationship_1, $boolean_2)
    {
        try {
            $this->setResult($resultAddRelationship = $this->getSoapClient()->__soapCall('addRelationship', [
                $relationship_1,
                $boolean_2,
            ], [], [], $this->outputHeaders));
        
            return $resultAddRelationship;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addSegmentedDonation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SegmentedDonation $segmentedDonation_1
     * @param string $boolean_2
     * @return string|bool
     */
    public function addSegmentedDonation(\StructType\SegmentedDonation $segmentedDonation_1, $boolean_2)
    {
        try {
            $this->setResult($resultAddSegmentedDonation = $this->getSoapClient()->__soapCall('addSegmentedDonation', [
                $segmentedDonation_1,
                $boolean_2,
            ], [], [], $this->outputHeaders));
        
            return $resultAddSegmentedDonation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addSegmentedPledge
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SegmentedPledge $segmentedPledge_1
     * @param string $boolean_2
     * @return string|bool
     */
    public function addSegmentedPledge(\StructType\SegmentedPledge $segmentedPledge_1, $boolean_2)
    {
        try {
            $this->setResult($resultAddSegmentedPledge = $this->getSoapClient()->__soapCall('addSegmentedPledge', [
                $segmentedPledge_1,
                $boolean_2,
            ], [], [], $this->outputHeaders));
        
            return $resultAddSegmentedPledge;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addSoftCredit
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SoftCredit $softCredit_1
     * @param string $boolean_2
     * @return string|bool
     */
    public function addSoftCredit(\StructType\SoftCredit $softCredit_1, $boolean_2)
    {
        try {
            $this->setResult($resultAddSoftCredit = $this->getSoapClient()->__soapCall('addSoftCredit', [
                $softCredit_1,
                $boolean_2,
            ], [], [], $this->outputHeaders));
        
            return $resultAddSoftCredit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return string|void|\StructType\LoginCredentialsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
