<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getAccount
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @return \StructType\Account|bool
     */
    public function getAccount($string_1)
    {
        try {
            $this->setResult($resultGetAccount = $this->getSoapClient()->__soapCall('getAccount', [
                $string_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAccountById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $int_1
     * @return \StructType\Account|bool
     */
    public function getAccountById($int_1)
    {
        try {
            $this->setResult($resultGetAccountById = $this->getSoapClient()->__soapCall('getAccountById', [
                $int_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAccountById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAccountByPersonaType
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @param string $string_2
     * @param string $boolean_3
     * @return \StructType\Account|bool
     */
    public function getAccountByPersonaType($string_1, $string_2, $boolean_3)
    {
        try {
            $this->setResult($resultGetAccountByPersonaType = $this->getSoapClient()->__soapCall('getAccountByPersonaType', [
                $string_1,
                $string_2,
                $boolean_3,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAccountByPersonaType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAccountByUniqueDefinedValue
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DefinedValue $definedValue_1
     * @return \StructType\Account|bool
     */
    public function getAccountByUniqueDefinedValue(\StructType\DefinedValue $definedValue_1)
    {
        try {
            $this->setResult($resultGetAccountByUniqueDefinedValue = $this->getSoapClient()->__soapCall('getAccountByUniqueDefinedValue', [
                $definedValue_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAccountByUniqueDefinedValue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAccountFromPhoneAThonList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @return \StructType\Account|bool
     */
    public function getAccountFromPhoneAThonList($string_1)
    {
        try {
            $this->setResult($resultGetAccountFromPhoneAThonList = $this->getSoapClient()->__soapCall('getAccountFromPhoneAThonList', [
                $string_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAccountFromPhoneAThonList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAccountInfoFromCCPID
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @return string|bool
     */
    public function getAccountInfoFromCCPID($string_1)
    {
        try {
            $this->setResult($resultGetAccountInfoFromCCPID = $this->getSoapClient()->__soapCall('getAccountInfoFromCCPID', [
                $string_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAccountInfoFromCCPID;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAccountInvolvePrivacySettings
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @return \StructType\Account|bool
     */
    public function getAccountInvolvePrivacySettings($string_1)
    {
        try {
            $this->setResult($resultGetAccountInvolvePrivacySettings = $this->getSoapClient()->__soapCall('getAccountInvolvePrivacySettings', [
                $string_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAccountInvolvePrivacySettings;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAccountRef
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DefinedValue $definedValue_1
     * @return string|bool
     */
    public function getAccountRef(\StructType\DefinedValue $definedValue_1)
    {
        try {
            $this->setResult($resultGetAccountRef = $this->getSoapClient()->__soapCall('getAccountRef', [
                $definedValue_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAccountRef;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getApproaches
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $boolean_1
     * @return string[]|bool
     */
    public function getApproaches($boolean_1)
    {
        try {
            $this->setResult($resultGetApproaches = $this->getSoapClient()->__soapCall('getApproaches', [
                $boolean_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetApproaches;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCachedCartElements
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $int_1
     * @return \StructType\PagedCartElementsResponse|bool
     */
    public function getCachedCartElements($int_1)
    {
        try {
            $this->setResult($resultGetCachedCartElements = $this->getSoapClient()->__soapCall('getCachedCartElements', [
                $int_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCachedCartElements;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCachedDefinedFields
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $int_1
     * @return \StructType\PagedDefinedFieldsResponse|bool
     */
    public function getCachedDefinedFields($int_1)
    {
        try {
            $this->setResult($resultGetCachedDefinedFields = $this->getSoapClient()->__soapCall('getCachedDefinedFields', [
                $int_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCachedDefinedFields;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCachedJournalEntries
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $int_1
     * @return \StructType\PagedJournalEntriesResponse|bool
     */
    public function getCachedJournalEntries($int_1)
    {
        try {
            $this->setResult($resultGetCachedJournalEntries = $this->getSoapClient()->__soapCall('getCachedJournalEntries', [
                $int_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCachedJournalEntries;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCachedQueryResults
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $int_1
     * @return \StructType\PagedQueryResultsResponse|bool
     */
    public function getCachedQueryResults($int_1)
    {
        try {
            $this->setResult($resultGetCachedQueryResults = $this->getSoapClient()->__soapCall('getCachedQueryResults', [
                $int_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCachedQueryResults;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCachedRelationships
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $int_1
     * @return \StructType\PagedRelationshipsResponse|bool
     */
    public function getCachedRelationships($int_1)
    {
        try {
            $this->setResult($resultGetCachedRelationships = $this->getSoapClient()->__soapCall('getCachedRelationships', [
                $int_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCachedRelationships;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCalendarItem
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @return \StructType\CalendarItem|bool
     */
    public function getCalendarItem($string_1)
    {
        try {
            $this->setResult($resultGetCalendarItem = $this->getSoapClient()->__soapCall('getCalendarItem', [
                $string_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCalendarItem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCampaigns
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $boolean_1
     * @return string[]|bool
     */
    public function getCampaigns($boolean_1)
    {
        try {
            $this->setResult($resultGetCampaigns = $this->getSoapClient()->__soapCall('getCampaigns', [
                $boolean_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCampaigns;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCartCategory
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @return \StructType\CartCategory|bool
     */
    public function getCartCategory($string_1)
    {
        try {
            $this->setResult($resultGetCartCategory = $this->getSoapClient()->__soapCall('getCartCategory', [
                $string_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCartCategory;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCartElements
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\PagedCartElementsRequest $pagedCartElementsRequest_1
     * @return \StructType\PagedCartElementsResponse|bool
     */
    public function getCartElements(\StructType\PagedCartElementsRequest $pagedCartElementsRequest_1)
    {
        try {
            $this->setResult($resultGetCartElements = $this->getSoapClient()->__soapCall('getCartElements', [
                $pagedCartElementsRequest_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCartElements;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCartItem
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @return \StructType\CartItem|bool
     */
    public function getCartItem($string_1)
    {
        try {
            $this->setResult($resultGetCartItem = $this->getSoapClient()->__soapCall('getCartItem', [
                $string_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCartItem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCartPreferences
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @return \StructType\CartPreferences|bool
     */
    public function getCartPreferences($string_1)
    {
        try {
            $this->setResult($resultGetCartPreferences = $this->getSoapClient()->__soapCall('getCartPreferences', [
                $string_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCartPreferences;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getContact
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @return \StructType\Contact|bool
     */
    public function getContact($string_1)
    {
        try {
            $this->setResult($resultGetContact = $this->getSoapClient()->__soapCall('getContact', [
                $string_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetContact;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getContactByUniqueDefinedValue
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DefinedValue $definedValue_1
     * @return \StructType\Contact|bool
     */
    public function getContactByUniqueDefinedValue(\StructType\DefinedValue $definedValue_1)
    {
        try {
            $this->setResult($resultGetContactByUniqueDefinedValue = $this->getSoapClient()->__soapCall('getContactByUniqueDefinedValue', [
                $definedValue_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetContactByUniqueDefinedValue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getContactRef
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DefinedValue $definedValue_1
     * @return string|bool
     */
    public function getContactRef(\StructType\DefinedValue $definedValue_1)
    {
        try {
            $this->setResult($resultGetContactRef = $this->getSoapClient()->__soapCall('getContactRef', [
                $definedValue_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetContactRef;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDeclaration
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @return \StructType\Declaration|bool
     */
    public function getDeclaration($string_1)
    {
        try {
            $this->setResult($resultGetDeclaration = $this->getSoapClient()->__soapCall('getDeclaration', [
                $string_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDeclaration;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDefinedField
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @param string $boolean_2
     * @return \StructType\DefinedField|bool
     */
    public function getDefinedField($string_1, $boolean_2)
    {
        try {
            $this->setResult($resultGetDefinedField = $this->getSoapClient()->__soapCall('getDefinedField', [
                $string_1,
                $boolean_2,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDefinedField;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDefinedFields
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\PagedDefinedFieldsRequest $pagedDefinedFieldsRequest_1
     * @return \StructType\PagedDefinedFieldsResponse|bool
     */
    public function getDefinedFields(\StructType\PagedDefinedFieldsRequest $pagedDefinedFieldsRequest_1)
    {
        try {
            $this->setResult($resultGetDefinedFields = $this->getSoapClient()->__soapCall('getDefinedFields', [
                $pagedDefinedFieldsRequest_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDefinedFields;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDisbursement
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @return \StructType\Disbursement|bool
     */
    public function getDisbursement($string_1)
    {
        try {
            $this->setResult($resultGetDisbursement = $this->getSoapClient()->__soapCall('getDisbursement', [
                $string_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDisbursement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDonorLoginAccount
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @param string $string_2
     * @return \StructType\Account|bool
     */
    public function getDonorLoginAccount($string_1, $string_2)
    {
        try {
            $this->setResult($resultGetDonorLoginAccount = $this->getSoapClient()->__soapCall('getDonorLoginAccount', [
                $string_1,
                $string_2,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDonorLoginAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDonorLoginPreferences
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\DonorLoginPreferences|bool
     */
    public function getDonorLoginPreferences()
    {
        try {
            $this->setResult($resultGetDonorLoginPreferences = $this->getSoapClient()->__soapCall('getDonorLoginPreferences', [], [], [], $this->outputHeaders));
        
            return $resultGetDonorLoginPreferences;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDuplicateAccount
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DuplicateAccountSearch $duplicateAccountSearch_1
     * @return \StructType\Account|bool
     */
    public function getDuplicateAccount(\StructType\DuplicateAccountSearch $duplicateAccountSearch_1)
    {
        try {
            $this->setResult($resultGetDuplicateAccount = $this->getSoapClient()->__soapCall('getDuplicateAccount', [
                $duplicateAccountSearch_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDuplicateAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDuplicateAccounts
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DuplicateAccountSearch $duplicateAccountSearch_1
     * @return \StructType\Account[]|bool
     */
    public function getDuplicateAccounts(\StructType\DuplicateAccountSearch $duplicateAccountSearch_1)
    {
        try {
            $this->setResult($resultGetDuplicateAccounts = $this->getSoapClient()->__soapCall('getDuplicateAccounts', [
                $duplicateAccountSearch_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDuplicateAccounts;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDynamicAccounts
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @return string|bool
     */
    public function getDynamicAccounts($string_1)
    {
        try {
            $this->setResult($resultGetDynamicAccounts = $this->getSoapClient()->__soapCall('getDynamicAccounts', [
                $string_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDynamicAccounts;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDynamicQueryResultStats
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DynamicQuery $dynamicQuery_1
     * @return \StructType\QueryResultStats|bool
     */
    public function getDynamicQueryResultStats(\StructType\DynamicQuery $dynamicQuery_1)
    {
        try {
            $this->setResult($resultGetDynamicQueryResultStats = $this->getSoapClient()->__soapCall('getDynamicQueryResultStats', [
                $dynamicQuery_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDynamicQueryResultStats;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDynamicQueryResults
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\PagedDynamicQueryResultsRequest $pagedDynamicQueryResultsRequest_1
     * @return \StructType\PagedQueryResultsResponse|bool
     */
    public function getDynamicQueryResults(\StructType\PagedDynamicQueryResultsRequest $pagedDynamicQueryResultsRequest_1)
    {
        try {
            $this->setResult($resultGetDynamicQueryResults = $this->getSoapClient()->__soapCall('getDynamicQueryResults', [
                $pagedDynamicQueryResultsRequest_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDynamicQueryResults;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getEntityRole
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @param string $boolean_2
     * @return \StructType\EntityRole|bool
     */
    public function getEntityRole($string_1, $boolean_2)
    {
        try {
            $this->setResult($resultGetEntityRole = $this->getSoapClient()->__soapCall('getEntityRole', [
                $string_1,
                $boolean_2,
            ], [], [], $this->outputHeaders));
        
            return $resultGetEntityRole;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getExistingQueryResultStats
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @return \StructType\QueryResultStats|bool
     */
    public function getExistingQueryResultStats($string_1)
    {
        try {
            $this->setResult($resultGetExistingQueryResultStats = $this->getSoapClient()->__soapCall('getExistingQueryResultStats', [
                $string_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetExistingQueryResultStats;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getExistingQueryResults
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\PagedExistingQueryResultsRequest $pagedExistingQueryResultsRequest_1
     * @return \StructType\PagedQueryResultsResponse|bool
     */
    public function getExistingQueryResults(\StructType\PagedExistingQueryResultsRequest $pagedExistingQueryResultsRequest_1)
    {
        try {
            $this->setResult($resultGetExistingQueryResults = $this->getSoapClient()->__soapCall('getExistingQueryResults', [
                $pagedExistingQueryResultsRequest_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetExistingQueryResults;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getFundObjects
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $boolean_1
     * @return \StructType\Fund[]|bool
     */
    public function getFundObjects($boolean_1)
    {
        try {
            $this->setResult($resultGetFundObjects = $this->getSoapClient()->__soapCall('getFundObjects', [
                $boolean_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetFundObjects;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getFunds
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $boolean_1
     * @return string[]|bool
     */
    public function getFunds($boolean_1)
    {
        try {
            $this->setResult($resultGetFunds = $this->getSoapClient()->__soapCall('getFunds', [
                $boolean_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetFunds;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getGift
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @return \StructType\Gift|bool
     */
    public function getGift($string_1)
    {
        try {
            $this->setResult($resultGetGift = $this->getSoapClient()->__soapCall('getGift', [
                $string_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetGift;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getInvalidOrderDetailQuantities
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\OrderDetail[] $arrayOfOrderDetail_1
     * @return \StructType\CartItem[]|bool
     */
    public function getInvalidOrderDetailQuantities(array $arrayOfOrderDetail_1)
    {
        try {
            $this->setResult($resultGetInvalidOrderDetailQuantities = $this->getSoapClient()->__soapCall('getInvalidOrderDetailQuantities', [
                $arrayOfOrderDetail_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetInvalidOrderDetailQuantities;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getInvitation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @return \StructType\Invitation|bool
     */
    public function getInvitation($string_1)
    {
        try {
            $this->setResult($resultGetInvitation = $this->getSoapClient()->__soapCall('getInvitation', [
                $string_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetInvitation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getJournalEntries
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\PagedJournalEntriesRequest $pagedJournalEntriesRequest_1
     * @return \StructType\PagedJournalEntriesResponse|bool
     */
    public function getJournalEntries(\StructType\PagedJournalEntriesRequest $pagedJournalEntriesRequest_1)
    {
        try {
            $this->setResult($resultGetJournalEntries = $this->getSoapClient()->__soapCall('getJournalEntries', [
                $pagedJournalEntriesRequest_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetJournalEntries;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLetters
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $boolean_1
     * @return string[]|bool
     */
    public function getLetters($boolean_1)
    {
        try {
            $this->setResult($resultGetLetters = $this->getSoapClient()->__soapCall('getLetters', [
                $boolean_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetLetters;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMyAccount
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\Account|bool
     */
    public function getMyAccount()
    {
        try {
            $this->setResult($resultGetMyAccount = $this->getSoapClient()->__soapCall('getMyAccount', [], [], [], $this->outputHeaders));
        
            return $resultGetMyAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMyAccountByPersonaType
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @param string $boolean_2
     * @return \StructType\Account|bool
     */
    public function getMyAccountByPersonaType($string_1, $boolean_2)
    {
        try {
            $this->setResult($resultGetMyAccountByPersonaType = $this->getSoapClient()->__soapCall('getMyAccountByPersonaType', [
                $string_1,
                $boolean_2,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMyAccountByPersonaType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMyEntityRole
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\EntityRole|bool
     */
    public function getMyEntityRole()
    {
        try {
            $this->setResult($resultGetMyEntityRole = $this->getSoapClient()->__soapCall('getMyEntityRole', [], [], [], $this->outputHeaders));
        
            return $resultGetMyEntityRole;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMyJournalEntries
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return anyType[]|bool
     */
    public function getMyJournalEntries()
    {
        try {
            $this->setResult($resultGetMyJournalEntries = $this->getSoapClient()->__soapCall('getMyJournalEntries', [], [], [], $this->outputHeaders));
        
            return $resultGetMyJournalEntries;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMyJournalSummary
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\JournalSummary|bool
     */
    public function getMyJournalSummary()
    {
        try {
            $this->setResult($resultGetMyJournalSummary = $this->getSoapClient()->__soapCall('getMyJournalSummary', [], [], [], $this->outputHeaders));
        
            return $resultGetMyJournalSummary;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMyPrivacyPreferences
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\PrivacyPreferences|bool
     */
    public function getMyPrivacyPreferences()
    {
        try {
            $this->setResult($resultGetMyPrivacyPreferences = $this->getSoapClient()->__soapCall('getMyPrivacyPreferences', [], [], [], $this->outputHeaders));
        
            return $resultGetMyPrivacyPreferences;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getNextCartElements
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\PagedCartElementsResponse|bool
     */
    public function getNextCartElements()
    {
        try {
            $this->setResult($resultGetNextCartElements = $this->getSoapClient()->__soapCall('getNextCartElements', [], [], [], $this->outputHeaders));
        
            return $resultGetNextCartElements;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getNextDefinedFields
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\PagedDefinedFieldsResponse|bool
     */
    public function getNextDefinedFields()
    {
        try {
            $this->setResult($resultGetNextDefinedFields = $this->getSoapClient()->__soapCall('getNextDefinedFields', [], [], [], $this->outputHeaders));
        
            return $resultGetNextDefinedFields;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getNextJournalEntries
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\PagedJournalEntriesResponse|bool
     */
    public function getNextJournalEntries()
    {
        try {
            $this->setResult($resultGetNextJournalEntries = $this->getSoapClient()->__soapCall('getNextJournalEntries', [], [], [], $this->outputHeaders));
        
            return $resultGetNextJournalEntries;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getNextQueryResults
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\PagedQueryResultsResponse|bool
     */
    public function getNextQueryResults()
    {
        try {
            $this->setResult($resultGetNextQueryResults = $this->getSoapClient()->__soapCall('getNextQueryResults', [], [], [], $this->outputHeaders));
        
            return $resultGetNextQueryResults;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getNextRelationships
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\PagedRelationshipsResponse|bool
     */
    public function getNextRelationships()
    {
        try {
            $this->setResult($resultGetNextRelationships = $this->getSoapClient()->__soapCall('getNextRelationships', [], [], [], $this->outputHeaders));
        
            return $resultGetNextRelationships;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getNote
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @return \StructType\Note|bool
     */
    public function getNote($string_1)
    {
        try {
            $this->setResult($resultGetNote = $this->getSoapClient()->__soapCall('getNote', [
                $string_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetNote;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getNoteByUniqueDefinedValue
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DefinedValue $definedValue_1
     * @return \StructType\Note|bool
     */
    public function getNoteByUniqueDefinedValue(\StructType\DefinedValue $definedValue_1)
    {
        try {
            $this->setResult($resultGetNoteByUniqueDefinedValue = $this->getSoapClient()->__soapCall('getNoteByUniqueDefinedValue', [
                $definedValue_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetNoteByUniqueDefinedValue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getNoteRef
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DefinedValue $definedValue_1
     * @return string|bool
     */
    public function getNoteRef(\StructType\DefinedValue $definedValue_1)
    {
        try {
            $this->setResult($resultGetNoteRef = $this->getSoapClient()->__soapCall('getNoteRef', [
                $definedValue_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetNoteRef;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrganizationPreferences
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\OrganizationPreferences|bool
     */
    public function getOrganizationPreferences()
    {
        try {
            $this->setResult($resultGetOrganizationPreferences = $this->getSoapClient()->__soapCall('getOrganizationPreferences', [], [], [], $this->outputHeaders));
        
            return $resultGetOrganizationPreferences;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getOutlookIntegrationContactMethods
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\DefinedValue[]|bool
     */
    public function getOutlookIntegrationContactMethods()
    {
        try {
            $this->setResult($resultGetOutlookIntegrationContactMethods = $this->getSoapClient()->__soapCall('getOutlookIntegrationContactMethods', [], [], [], $this->outputHeaders));
        
            return $resultGetOutlookIntegrationContactMethods;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOutlookIntegrationVersion
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return string|bool
     */
    public function getOutlookIntegrationVersion()
    {
        try {
            $this->setResult($resultGetOutlookIntegrationVersion = $this->getSoapClient()->__soapCall('getOutlookIntegrationVersion', [], [], [], $this->outputHeaders));
        
            return $resultGetOutlookIntegrationVersion;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPayment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @return \StructType\Payment|bool
     */
    public function getPayment($string_1)
    {
        try {
            $this->setResult($resultGetPayment = $this->getSoapClient()->__soapCall('getPayment', [
                $string_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPayment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPhoneAThonLists
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $boolean_1
     * @return \StructType\PhoneAThonList[]|bool
     */
    public function getPhoneAThonLists($boolean_1)
    {
        try {
            $this->setResult($resultGetPhoneAThonLists = $this->getSoapClient()->__soapCall('getPhoneAThonLists', [
                $boolean_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPhoneAThonLists;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPledge
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @return \StructType\Pledge|bool
     */
    public function getPledge($string_1)
    {
        try {
            $this->setResult($resultGetPledge = $this->getSoapClient()->__soapCall('getPledge', [
                $string_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPledge;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPrivacyPreferences
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @return \StructType\PrivacyPreferences|bool
     */
    public function getPrivacyPreferences($string_1)
    {
        try {
            $this->setResult($resultGetPrivacyPreferences = $this->getSoapClient()->__soapCall('getPrivacyPreferences', [
                $string_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPrivacyPreferences;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPurchase
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @return \StructType\Purchase|bool
     */
    public function getPurchase($string_1)
    {
        try {
            $this->setResult($resultGetPurchase = $this->getSoapClient()->__soapCall('getPurchase', [
                $string_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPurchase;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getQueryResultStats
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @param string $string_2
     * @return \StructType\QueryResultStats|bool
     */
    public function getQueryResultStats($string_1, $string_2)
    {
        try {
            $this->setResult($resultGetQueryResultStats = $this->getSoapClient()->__soapCall('getQueryResultStats', [
                $string_1,
                $string_2,
            ], [], [], $this->outputHeaders));
        
            return $resultGetQueryResultStats;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRecurringGift
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @return \StructType\RecurringGift|bool
     */
    public function getRecurringGift($string_1)
    {
        try {
            $this->setResult($resultGetRecurringGift = $this->getSoapClient()->__soapCall('getRecurringGift', [
                $string_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetRecurringGift;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRecurringGiftSchedule
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @return \StructType\RecurringGiftSchedule|bool
     */
    public function getRecurringGiftSchedule($string_1)
    {
        try {
            $this->setResult($resultGetRecurringGiftSchedule = $this->getSoapClient()->__soapCall('getRecurringGiftSchedule', [
                $string_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetRecurringGiftSchedule;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRelationship
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @return \StructType\Relationship|bool
     */
    public function getRelationship($string_1)
    {
        try {
            $this->setResult($resultGetRelationship = $this->getSoapClient()->__soapCall('getRelationship', [
                $string_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetRelationship;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRelationshipTypes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $boolean_1
     * @return \StructType\RelationshipType[]|bool
     */
    public function getRelationshipTypes($boolean_1)
    {
        try {
            $this->setResult($resultGetRelationshipTypes = $this->getSoapClient()->__soapCall('getRelationshipTypes', [
                $boolean_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetRelationshipTypes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRelationships
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\PagedRelationshipsRequest $pagedRelationshipsRequest_1
     * @return \StructType\PagedRelationshipsResponse|bool
     */
    public function getRelationships(\StructType\PagedRelationshipsRequest $pagedRelationshipsRequest_1)
    {
        try {
            $this->setResult($resultGetRelationships = $this->getSoapClient()->__soapCall('getRelationships', [
                $pagedRelationshipsRequest_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetRelationships;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSegmentedDonation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @return \StructType\SegmentedDonation|bool
     */
    public function getSegmentedDonation($string_1)
    {
        try {
            $this->setResult($resultGetSegmentedDonation = $this->getSoapClient()->__soapCall('getSegmentedDonation', [
                $string_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSegmentedDonation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSegmentedOrder
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @return \StructType\SegmentedOrder|bool
     */
    public function getSegmentedOrder($string_1)
    {
        try {
            $this->setResult($resultGetSegmentedOrder = $this->getSoapClient()->__soapCall('getSegmentedOrder', [
                $string_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSegmentedOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSegmentedPledge
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @return \StructType\SegmentedPledge|bool
     */
    public function getSegmentedPledge($string_1)
    {
        try {
            $this->setResult($resultGetSegmentedPledge = $this->getSoapClient()->__soapCall('getSegmentedPledge', [
                $string_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSegmentedPledge;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getShipping
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @return \StructType\Shipping|bool
     */
    public function getShipping($string_1)
    {
        try {
            $this->setResult($resultGetShipping = $this->getSoapClient()->__soapCall('getShipping', [
                $string_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetShipping;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSoftCredit
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @return \StructType\SoftCredit|bool
     */
    public function getSoftCredit($string_1)
    {
        try {
            $this->setResult($resultGetSoftCredit = $this->getSoapClient()->__soapCall('getSoftCredit', [
                $string_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSoftCredit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSystemDefinedValues
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @param string $boolean_2
     * @return \StructType\DefinedValue[]|bool
     */
    public function getSystemDefinedValues($string_1, $boolean_2)
    {
        try {
            $this->setResult($resultGetSystemDefinedValues = $this->getSoapClient()->__soapCall('getSystemDefinedValues', [
                $string_1,
                $boolean_2,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSystemDefinedValues;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTax
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @return \StructType\Tax|bool
     */
    public function getTax($string_1)
    {
        try {
            $this->setResult($resultGetTax = $this->getSoapClient()->__soapCall('getTax', [
                $string_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTax;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTransaction
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @return anyType|bool
     */
    public function getTransaction($string_1)
    {
        try {
            $this->setResult($resultGetTransaction = $this->getSoapClient()->__soapCall('getTransaction', [
                $string_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTransaction;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTransactionByUniqueDefinedValue
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DefinedValue $definedValue_1
     * @return anyType|bool
     */
    public function getTransactionByUniqueDefinedValue(\StructType\DefinedValue $definedValue_1)
    {
        try {
            $this->setResult($resultGetTransactionByUniqueDefinedValue = $this->getSoapClient()->__soapCall('getTransactionByUniqueDefinedValue', [
                $definedValue_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTransactionByUniqueDefinedValue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTransactionProcessors
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $boolean_1
     * @return \StructType\TransactionProcessor[]|bool
     */
    public function getTransactionProcessors($boolean_1)
    {
        try {
            $this->setResult($resultGetTransactionProcessors = $this->getSoapClient()->__soapCall('getTransactionProcessors', [
                $boolean_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTransactionProcessors;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTransactionRef
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DefinedValue $definedValue_1
     * @return string|bool
     */
    public function getTransactionRef(\StructType\DefinedValue $definedValue_1)
    {
        try {
            $this->setResult($resultGetTransactionRef = $this->getSoapClient()->__soapCall('getTransactionRef', [
                $definedValue_1,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTransactionRef;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUserDefinedSetValues
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param string $string_1
     * @param string $boolean_2
     * @return \StructType\DefinedValue[]|bool
     */
    public function getUserDefinedSetValues($string_1, $boolean_2)
    {
        try {
            $this->setResult($resultGetUserDefinedSetValues = $this->getSoapClient()->__soapCall('getUserDefinedSetValues', [
                $string_1,
                $boolean_2,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUserDefinedSetValues;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return anyType|anyType[]|string|string[]|\StructType\Account|\StructType\Account[]|\StructType\CalendarItem|\StructType\CartCategory|\StructType\CartItem|\StructType\CartItem[]|\StructType\CartPreferences|\StructType\Contact|\StructType\Declaration|\StructType\DefinedField|\StructType\DefinedValue[]|\StructType\Disbursement|\StructType\DonorLoginPreferences|\StructType\EntityRole|\StructType\Fund[]|\StructType\Gift|\StructType\Invitation|\StructType\JournalSummary|\StructType\Note|\StructType\OrganizationPreferences|\StructType\PagedCartElementsResponse|\StructType\PagedDefinedFieldsResponse|\StructType\PagedJournalEntriesResponse|\StructType\PagedQueryResultsResponse|\StructType\PagedRelationshipsResponse|\StructType\Payment|\StructType\PhoneAThonList[]|\StructType\Pledge|\StructType\PrivacyPreferences|\StructType\Purchase|\StructType\QueryResultStats|\StructType\RecurringGift|\StructType\RecurringGiftSchedule|\StructType\Relationship|\StructType\RelationshipType[]|\StructType\SegmentedDonation|\StructType\SegmentedOrder|\StructType\SegmentedPledge|\StructType\Shipping|\StructType\SoftCredit|\StructType\Tax|\StructType\TransactionProcessor[]
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
