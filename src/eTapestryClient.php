<?php

namespace BurgerDigital\eTapestry;

use BurgerDigital\eTapestry\Type;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;

class eTapestryClient extends \Phpro\SoapClient\Client
{

    /**
     * MultiArgumentRequest with following params:
     * 
     * BurgerDigital\eTapestry\Type\Account $Account_1
     * BurgerDigital\eTapestry\Type\Boolean $boolean_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\StringType
     */
    public function addAccount(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('addAccount', $multiArgumentRequest);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * BurgerDigital\eTapestry\Type\Gift $Gift_1
     * BurgerDigital\eTapestry\Type\Boolean $boolean_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\StringType
     */
    public function addAndProcessGift(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('addAndProcessGift', $multiArgumentRequest);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * BurgerDigital\eTapestry\Type\Payment $Payment_1
     * BurgerDigital\eTapestry\Type\Boolean $boolean_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\StringType
     */
    public function addAndProcessPayment(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('addAndProcessPayment', $multiArgumentRequest);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * BurgerDigital\eTapestry\Type\Contact $Contact_1
     * BurgerDigital\eTapestry\Type\Boolean $boolean_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\StringType
     */
    public function addContact(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('addContact', $multiArgumentRequest);
    }

    /**
     * @param RequestInterface|Type\Declaration $Declaration_1
     * @return ResultInterface|Type\StringType
     * @throws SoapException
     */
    public function addDeclaration(\BurgerDigital\eTapestry\Type\Declaration $Declaration_1) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('addDeclaration', $Declaration_1);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * BurgerDigital\eTapestry\Type\Disbursement $Disbursement_1
     * BurgerDigital\eTapestry\Type\Boolean $boolean_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\StringType
     */
    public function addDisbursement(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('addDisbursement', $multiArgumentRequest);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * BurgerDigital\eTapestry\Type\Gift $Gift_1
     * BurgerDigital\eTapestry\Type\Boolean $boolean_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\StringType
     */
    public function addGift(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('addGift', $multiArgumentRequest);
    }

    /**
     * @param RequestInterface|Type\LoginCredentialsRequest $LoginCredentialsRequest_1
     * @return ResultInterface|Type\LoginCredentialsResponse
     * @throws SoapException
     */
    public function addLoginCredentials(\BurgerDigital\eTapestry\Type\LoginCredentialsRequest $LoginCredentialsRequest_1) : \BurgerDigital\eTapestry\Type\LoginCredentialsResponse
    {
        return $this->call('addLoginCredentials', $LoginCredentialsRequest_1);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * BurgerDigital\eTapestry\Type\Note $Note_1
     * BurgerDigital\eTapestry\Type\Boolean $boolean_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\StringType
     */
    public function addNote(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('addNote', $multiArgumentRequest);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * BurgerDigital\eTapestry\Type\OutlookIntegrationEmail $OutlookIntegrationEmail_1
     * BurgerDigital\eTapestry\Type\Account $arrayOfAccount_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\StringType
     */
    public function addOutlookIntegrationEmail(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('addOutlookIntegrationEmail', $multiArgumentRequest);
    }

    /**
     * @param RequestInterface|\string $String_1
     * @return ResultInterface|Type\VoidType
     * @throws SoapException
     */
    public function addOutlookIntegrationError(string $String_1) : \BurgerDigital\eTapestry\Type\VoidType
    {
        return $this->call('addOutlookIntegrationError', $String_1);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * string $String_1
     * BurgerDigital\eTapestry\Type\DateTime $Date_2
     * BurgerDigital\eTapestry\Type\Integer $int_3
     * BurgerDigital\eTapestry\Type\Integer $int_4
     * BurgerDigital\eTapestry\Type\Integer $int_5
     * BurgerDigital\eTapestry\Type\Integer $int_6
     * BurgerDigital\eTapestry\Type\Integer $int_7
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\VoidType
     */
    public function addOutlookIntegrationStats(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\VoidType
    {
        return $this->call('addOutlookIntegrationStats', $multiArgumentRequest);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * BurgerDigital\eTapestry\Type\Payment $Payment_1
     * BurgerDigital\eTapestry\Type\Boolean $boolean_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\StringType
     */
    public function addPayment(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('addPayment', $multiArgumentRequest);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * BurgerDigital\eTapestry\Type\Pledge $Pledge_1
     * BurgerDigital\eTapestry\Type\Boolean $boolean_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\StringType
     */
    public function addPledge(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('addPledge', $multiArgumentRequest);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * BurgerDigital\eTapestry\Type\RecurringGift $RecurringGift_1
     * BurgerDigital\eTapestry\Type\Boolean $boolean_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\StringType
     */
    public function addRecurringGift(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('addRecurringGift', $multiArgumentRequest);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * BurgerDigital\eTapestry\Type\RecurringGiftSchedule $RecurringGiftSchedule_1
     * BurgerDigital\eTapestry\Type\Boolean $boolean_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\StringType
     */
    public function addRecurringGiftSchedule(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('addRecurringGiftSchedule', $multiArgumentRequest);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * BurgerDigital\eTapestry\Type\Relationship $Relationship_1
     * BurgerDigital\eTapestry\Type\Boolean $boolean_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\StringType
     */
    public function addRelationship(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('addRelationship', $multiArgumentRequest);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * BurgerDigital\eTapestry\Type\SegmentedDonation $SegmentedDonation_1
     * BurgerDigital\eTapestry\Type\Boolean $boolean_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\StringType
     */
    public function addSegmentedDonation(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('addSegmentedDonation', $multiArgumentRequest);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * BurgerDigital\eTapestry\Type\SegmentedPledge $SegmentedPledge_1
     * BurgerDigital\eTapestry\Type\Boolean $boolean_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\StringType
     */
    public function addSegmentedPledge(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('addSegmentedPledge', $multiArgumentRequest);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * BurgerDigital\eTapestry\Type\SoftCredit $SoftCredit_1
     * BurgerDigital\eTapestry\Type\Boolean $boolean_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\StringType
     */
    public function addSoftCredit(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('addSoftCredit', $multiArgumentRequest);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * string $String_1
     * string $String_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\StringType
     */
    public function apiKeyLogin(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('apiKeyLogin', $multiArgumentRequest);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * string $String_1
     * BurgerDigital\eTapestry\Type\DefinedValue $arrayOfDefinedValue_2
     * BurgerDigital\eTapestry\Type\Boolean $boolean_3
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\VoidType
     */
    public function applyDefinedValues(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\VoidType
    {
        return $this->call('applyDefinedValues', $multiArgumentRequest);
    }

    /**
     * @param RequestInterface|Type\ConnectRequest $ConnectRequest_1
     * @return ResultInterface|Type\StringType
     * @throws SoapException
     */
    public function connect(\BurgerDigital\eTapestry\Type\ConnectRequest $ConnectRequest_1) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('connect', $ConnectRequest_1);
    }

    /**
     * @param RequestInterface|Type\ExternalLoginRequest $ExternalLoginRequest_1
     * @return ResultInterface|Type\StringType
     * @throws SoapException
     */
    public function externalLogin(\BurgerDigital\eTapestry\Type\ExternalLoginRequest $ExternalLoginRequest_1) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('externalLogin', $ExternalLoginRequest_1);
    }

    /**
     * @param RequestInterface|Type\CartOrderRequest $CartOrderRequest_1
     * @return ResultInterface|Type\VoidType
     * @throws SoapException
     */
    public function finalizePendingBuckarooCartOrder(\BurgerDigital\eTapestry\Type\CartOrderRequest $CartOrderRequest_1) : \BurgerDigital\eTapestry\Type\VoidType
    {
        return $this->call('finalizePendingBuckarooCartOrder', $CartOrderRequest_1);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * string $String_1
     * string $String_2
     * BurgerDigital\eTapestry\Type\Boolean $boolean_3
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\Account
     */
    public function findAccountsForOutlookIntegration(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\Account
    {
        return $this->call('findAccountsForOutlookIntegration', $multiArgumentRequest);
    }

    /**
     * @param RequestInterface|\string $String_1
     * @return ResultInterface|Type\Account
     * @throws SoapException
     */
    public function getAccount(string $String_1) : \BurgerDigital\eTapestry\Type\Account
    {
        return $this->call('getAccount', $String_1);
    }

    /**
     * @param RequestInterface|Type\Integer $int_1
     * @return ResultInterface|Type\Account
     * @throws SoapException
     */
    public function getAccountById(\BurgerDigital\eTapestry\Type\Integer $int_1) : \BurgerDigital\eTapestry\Type\Account
    {
        return $this->call('getAccountById', $int_1);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * string $String_1
     * string $String_2
     * BurgerDigital\eTapestry\Type\Boolean $boolean_3
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\Account
     */
    public function getAccountByPersonaType(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\Account
    {
        return $this->call('getAccountByPersonaType', $multiArgumentRequest);
    }

    /**
     * @param RequestInterface|Type\DefinedValue $DefinedValue_1
     * @return ResultInterface|Type\Account
     * @throws SoapException
     */
    public function getAccountByUniqueDefinedValue(\BurgerDigital\eTapestry\Type\DefinedValue $DefinedValue_1) : \BurgerDigital\eTapestry\Type\Account
    {
        return $this->call('getAccountByUniqueDefinedValue', $DefinedValue_1);
    }

    /**
     * @param RequestInterface|\string $String_1
     * @return ResultInterface|Type\Account
     * @throws SoapException
     */
    public function getAccountFromPhoneAThonList(string $String_1) : \BurgerDigital\eTapestry\Type\Account
    {
        return $this->call('getAccountFromPhoneAThonList', $String_1);
    }

    /**
     * @param RequestInterface|\string $String_1
     * @return ResultInterface|Type\StringType
     * @throws SoapException
     */
    public function getAccountInfoFromCCPID(string $String_1) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('getAccountInfoFromCCPID', $String_1);
    }

    /**
     * @param RequestInterface|\string $String_1
     * @return ResultInterface|Type\Account
     * @throws SoapException
     */
    public function getAccountInvolvePrivacySettings(string $String_1) : \BurgerDigital\eTapestry\Type\Account
    {
        return $this->call('getAccountInvolvePrivacySettings', $String_1);
    }

    /**
     * @param RequestInterface|Type\DefinedValue $DefinedValue_1
     * @return ResultInterface|Type\StringType
     * @throws SoapException
     */
    public function getAccountRef(\BurgerDigital\eTapestry\Type\DefinedValue $DefinedValue_1) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('getAccountRef', $DefinedValue_1);
    }

    /**
     * @param RequestInterface|Type\Boolean $boolean_1
     * @return ResultInterface|Type\StringType
     * @throws SoapException
     */
    public function getApproaches(\BurgerDigital\eTapestry\Type\Boolean $boolean_1) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('getApproaches', $boolean_1);
    }

    /**
     * @param RequestInterface|Type\Integer $int_1
     * @return ResultInterface|Type\PagedCartElementsResponse
     * @throws SoapException
     */
    public function getCachedCartElements(\BurgerDigital\eTapestry\Type\Integer $int_1) : \BurgerDigital\eTapestry\Type\PagedCartElementsResponse
    {
        return $this->call('getCachedCartElements', $int_1);
    }

    /**
     * @param RequestInterface|Type\Integer $int_1
     * @return ResultInterface|Type\PagedDefinedFieldsResponse
     * @throws SoapException
     */
    public function getCachedDefinedFields(\BurgerDigital\eTapestry\Type\Integer $int_1) : \BurgerDigital\eTapestry\Type\PagedDefinedFieldsResponse
    {
        return $this->call('getCachedDefinedFields', $int_1);
    }

    /**
     * @param RequestInterface|Type\Integer $int_1
     * @return ResultInterface|Type\PagedJournalEntriesResponse
     * @throws SoapException
     */
    public function getCachedJournalEntries(\BurgerDigital\eTapestry\Type\Integer $int_1) : \BurgerDigital\eTapestry\Type\PagedJournalEntriesResponse
    {
        return $this->call('getCachedJournalEntries', $int_1);
    }

    /**
     * @param RequestInterface|Type\Integer $int_1
     * @return ResultInterface|Type\PagedQueryResultsResponse
     * @throws SoapException
     */
    public function getCachedQueryResults(\BurgerDigital\eTapestry\Type\Integer $int_1) : \BurgerDigital\eTapestry\Type\PagedQueryResultsResponse
    {
        return $this->call('getCachedQueryResults', $int_1);
    }

    /**
     * @param RequestInterface|Type\Integer $int_1
     * @return ResultInterface|Type\PagedRelationshipsResponse
     * @throws SoapException
     */
    public function getCachedRelationships(\BurgerDigital\eTapestry\Type\Integer $int_1) : \BurgerDigital\eTapestry\Type\PagedRelationshipsResponse
    {
        return $this->call('getCachedRelationships', $int_1);
    }

    /**
     * @param RequestInterface|\string $String_1
     * @return ResultInterface|Type\CalendarItem
     * @throws SoapException
     */
    public function getCalendarItem(string $String_1) : \BurgerDigital\eTapestry\Type\CalendarItem
    {
        return $this->call('getCalendarItem', $String_1);
    }

    /**
     * @param RequestInterface|Type\Boolean $boolean_1
     * @return ResultInterface|Type\StringType
     * @throws SoapException
     */
    public function getCampaigns(\BurgerDigital\eTapestry\Type\Boolean $boolean_1) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('getCampaigns', $boolean_1);
    }

    /**
     * @param RequestInterface|\string $String_1
     * @return ResultInterface|Type\CartCategory
     * @throws SoapException
     */
    public function getCartCategory(string $String_1) : \BurgerDigital\eTapestry\Type\CartCategory
    {
        return $this->call('getCartCategory', $String_1);
    }

    /**
     * @param RequestInterface|Type\PagedCartElementsRequest $PagedCartElementsRequest_1
     * @return ResultInterface|Type\PagedCartElementsResponse
     * @throws SoapException
     */
    public function getCartElements(\BurgerDigital\eTapestry\Type\PagedCartElementsRequest $PagedCartElementsRequest_1) : \BurgerDigital\eTapestry\Type\PagedCartElementsResponse
    {
        return $this->call('getCartElements', $PagedCartElementsRequest_1);
    }

    /**
     * @param RequestInterface|\string $String_1
     * @return ResultInterface|Type\CartItem
     * @throws SoapException
     */
    public function getCartItem(string $String_1) : \BurgerDigital\eTapestry\Type\CartItem
    {
        return $this->call('getCartItem', $String_1);
    }

    /**
     * @param RequestInterface|\string $String_1
     * @return ResultInterface|Type\CartPreferences
     * @throws SoapException
     */
    public function getCartPreferences(string $String_1) : \BurgerDigital\eTapestry\Type\CartPreferences
    {
        return $this->call('getCartPreferences', $String_1);
    }

    /**
     * @param RequestInterface|\string $String_1
     * @return ResultInterface|Type\Contact
     * @throws SoapException
     */
    public function getContact(string $String_1) : \BurgerDigital\eTapestry\Type\Contact
    {
        return $this->call('getContact', $String_1);
    }

    /**
     * @param RequestInterface|Type\DefinedValue $DefinedValue_1
     * @return ResultInterface|Type\Contact
     * @throws SoapException
     */
    public function getContactByUniqueDefinedValue(\BurgerDigital\eTapestry\Type\DefinedValue $DefinedValue_1) : \BurgerDigital\eTapestry\Type\Contact
    {
        return $this->call('getContactByUniqueDefinedValue', $DefinedValue_1);
    }

    /**
     * @param RequestInterface|Type\DefinedValue $DefinedValue_1
     * @return ResultInterface|Type\StringType
     * @throws SoapException
     */
    public function getContactRef(\BurgerDigital\eTapestry\Type\DefinedValue $DefinedValue_1) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('getContactRef', $DefinedValue_1);
    }

    /**
     * @param RequestInterface|\string $String_1
     * @return ResultInterface|Type\Declaration
     * @throws SoapException
     */
    public function getDeclaration(string $String_1) : \BurgerDigital\eTapestry\Type\Declaration
    {
        return $this->call('getDeclaration', $String_1);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * string $String_1
     * BurgerDigital\eTapestry\Type\Boolean $boolean_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\DefinedField
     */
    public function getDefinedField(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\DefinedField
    {
        return $this->call('getDefinedField', $multiArgumentRequest);
    }

    /**
     * @param RequestInterface|Type\PagedDefinedFieldsRequest $PagedDefinedFieldsRequest_1
     * @return ResultInterface|Type\PagedDefinedFieldsResponse
     * @throws SoapException
     */
    public function getDefinedFields(\BurgerDigital\eTapestry\Type\PagedDefinedFieldsRequest $PagedDefinedFieldsRequest_1) : \BurgerDigital\eTapestry\Type\PagedDefinedFieldsResponse
    {
        return $this->call('getDefinedFields', $PagedDefinedFieldsRequest_1);
    }

    /**
     * @param RequestInterface|\string $String_1
     * @return ResultInterface|Type\Disbursement
     * @throws SoapException
     */
    public function getDisbursement(string $String_1) : \BurgerDigital\eTapestry\Type\Disbursement
    {
        return $this->call('getDisbursement', $String_1);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * string $String_1
     * string $String_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\Account
     */
    public function getDonorLoginAccount(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\Account
    {
        return $this->call('getDonorLoginAccount', $multiArgumentRequest);
    }

    /**
     * @return ResultInterface|Type\DonorLoginPreferences
     * @throws SoapException
     */
    public function getDonorLoginPreferences() : \BurgerDigital\eTapestry\Type\DonorLoginPreferences
    {
        return $this->call('getDonorLoginPreferences');
    }

    /**
     * @param RequestInterface|Type\DuplicateAccountSearch $DuplicateAccountSearch_1
     * @return ResultInterface|Type\Account
     * @throws SoapException
     */
    public function getDuplicateAccount(\BurgerDigital\eTapestry\Type\DuplicateAccountSearch $DuplicateAccountSearch_1) : \BurgerDigital\eTapestry\Type\Account
    {
        return $this->call('getDuplicateAccount', $DuplicateAccountSearch_1);
    }

    /**
     * @param RequestInterface|Type\DuplicateAccountSearch $DuplicateAccountSearch_1
     * @return ResultInterface|Type\Account
     * @throws SoapException
     */
    public function getDuplicateAccounts(\BurgerDigital\eTapestry\Type\DuplicateAccountSearch $DuplicateAccountSearch_1) : \BurgerDigital\eTapestry\Type\Account
    {
        return $this->call('getDuplicateAccounts', $DuplicateAccountSearch_1);
    }

    /**
     * @param RequestInterface|\string $String_1
     * @return ResultInterface|Type\StringType
     * @throws SoapException
     */
    public function getDynamicAccounts(string $String_1) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('getDynamicAccounts', $String_1);
    }

    /**
     * @param RequestInterface|Type\DynamicQuery $DynamicQuery_1
     * @return ResultInterface|Type\QueryResultStats
     * @throws SoapException
     */
    public function getDynamicQueryResultStats(\BurgerDigital\eTapestry\Type\DynamicQuery $DynamicQuery_1) : \BurgerDigital\eTapestry\Type\QueryResultStats
    {
        return $this->call('getDynamicQueryResultStats', $DynamicQuery_1);
    }

    /**
     * @param RequestInterface|Type\PagedDynamicQueryResultsRequest $PagedDynamicQueryResultsRequest_1
     * @return ResultInterface|Type\PagedQueryResultsResponse
     * @throws SoapException
     */
    public function getDynamicQueryResults(\BurgerDigital\eTapestry\Type\PagedDynamicQueryResultsRequest $PagedDynamicQueryResultsRequest_1) : \BurgerDigital\eTapestry\Type\PagedQueryResultsResponse
    {
        return $this->call('getDynamicQueryResults', $PagedDynamicQueryResultsRequest_1);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * string $String_1
     * BurgerDigital\eTapestry\Type\Boolean $boolean_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\EntityRole
     */
    public function getEntityRole(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\EntityRole
    {
        return $this->call('getEntityRole', $multiArgumentRequest);
    }

    /**
     * @param RequestInterface|\string $String_1
     * @return ResultInterface|Type\QueryResultStats
     * @throws SoapException
     */
    public function getExistingQueryResultStats(string $String_1) : \BurgerDigital\eTapestry\Type\QueryResultStats
    {
        return $this->call('getExistingQueryResultStats', $String_1);
    }

    /**
     * @param RequestInterface|Type\PagedExistingQueryResultsRequest $PagedExistingQueryResultsRequest_1
     * @return ResultInterface|Type\PagedQueryResultsResponse
     * @throws SoapException
     */
    public function getExistingQueryResults(\BurgerDigital\eTapestry\Type\PagedExistingQueryResultsRequest $PagedExistingQueryResultsRequest_1) : \BurgerDigital\eTapestry\Type\PagedQueryResultsResponse
    {
        return $this->call('getExistingQueryResults', $PagedExistingQueryResultsRequest_1);
    }

    /**
     * @param RequestInterface|Type\Boolean $boolean_1
     * @return ResultInterface|Type\Fund
     * @throws SoapException
     */
    public function getFundObjects(\BurgerDigital\eTapestry\Type\Boolean $boolean_1) : \BurgerDigital\eTapestry\Type\Fund
    {
        return $this->call('getFundObjects', $boolean_1);
    }

    /**
     * @param RequestInterface|Type\Boolean $boolean_1
     * @return ResultInterface|Type\StringType
     * @throws SoapException
     */
    public function getFunds(\BurgerDigital\eTapestry\Type\Boolean $boolean_1) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('getFunds', $boolean_1);
    }

    /**
     * @param RequestInterface|\string $String_1
     * @return ResultInterface|Type\Gift
     * @throws SoapException
     */
    public function getGift(string $String_1) : \BurgerDigital\eTapestry\Type\Gift
    {
        return $this->call('getGift', $String_1);
    }

    /**
     * @param RequestInterface|Type\OrderDetail $arrayOfOrderDetail_1
     * @return ResultInterface|Type\CartItem
     * @throws SoapException
     */
    public function getInvalidOrderDetailQuantities(\BurgerDigital\eTapestry\Type\OrderDetail $arrayOfOrderDetail_1) : \BurgerDigital\eTapestry\Type\CartItem
    {
        return $this->call('getInvalidOrderDetailQuantities', $arrayOfOrderDetail_1);
    }

    /**
     * @param RequestInterface|\string $String_1
     * @return ResultInterface|Type\Invitation
     * @throws SoapException
     */
    public function getInvitation(string $String_1) : \BurgerDigital\eTapestry\Type\Invitation
    {
        return $this->call('getInvitation', $String_1);
    }

    /**
     * @param RequestInterface|Type\PagedJournalEntriesRequest $PagedJournalEntriesRequest_1
     * @return ResultInterface|Type\PagedJournalEntriesResponse
     * @throws SoapException
     */
    public function getJournalEntries(\BurgerDigital\eTapestry\Type\PagedJournalEntriesRequest $PagedJournalEntriesRequest_1) : \BurgerDigital\eTapestry\Type\PagedJournalEntriesResponse
    {
        return $this->call('getJournalEntries', $PagedJournalEntriesRequest_1);
    }

    /**
     * @param RequestInterface|Type\Boolean $boolean_1
     * @return ResultInterface|Type\StringType
     * @throws SoapException
     */
    public function getLetters(\BurgerDigital\eTapestry\Type\Boolean $boolean_1) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('getLetters', $boolean_1);
    }

    /**
     * @return ResultInterface|Type\Account
     * @throws SoapException
     */
    public function getMyAccount() : \BurgerDigital\eTapestry\Type\Account
    {
        return $this->call('getMyAccount');
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * string $String_1
     * BurgerDigital\eTapestry\Type\Boolean $boolean_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\Account
     */
    public function getMyAccountByPersonaType(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\Account
    {
        return $this->call('getMyAccountByPersonaType', $multiArgumentRequest);
    }

    /**
     * @return ResultInterface|Type\EntityRole
     * @throws SoapException
     */
    public function getMyEntityRole() : \BurgerDigital\eTapestry\Type\EntityRole
    {
        return $this->call('getMyEntityRole');
    }

    /**
     * @return ResultInterface|Type\AnyType
     * @throws SoapException
     */
    public function getMyJournalEntries() : \BurgerDigital\eTapestry\Type\AnyType
    {
        return $this->call('getMyJournalEntries');
    }

    /**
     * @return ResultInterface|Type\JournalSummary
     * @throws SoapException
     */
    public function getMyJournalSummary() : \BurgerDigital\eTapestry\Type\JournalSummary
    {
        return $this->call('getMyJournalSummary');
    }

    /**
     * @return ResultInterface|Type\PrivacyPreferences
     * @throws SoapException
     */
    public function getMyPrivacyPreferences() : \BurgerDigital\eTapestry\Type\PrivacyPreferences
    {
        return $this->call('getMyPrivacyPreferences');
    }

    /**
     * @return ResultInterface|Type\PagedCartElementsResponse
     * @throws SoapException
     */
    public function getNextCartElements() : \BurgerDigital\eTapestry\Type\PagedCartElementsResponse
    {
        return $this->call('getNextCartElements');
    }

    /**
     * @return ResultInterface|Type\PagedDefinedFieldsResponse
     * @throws SoapException
     */
    public function getNextDefinedFields() : \BurgerDigital\eTapestry\Type\PagedDefinedFieldsResponse
    {
        return $this->call('getNextDefinedFields');
    }

    /**
     * @return ResultInterface|Type\PagedJournalEntriesResponse
     * @throws SoapException
     */
    public function getNextJournalEntries() : \BurgerDigital\eTapestry\Type\PagedJournalEntriesResponse
    {
        return $this->call('getNextJournalEntries');
    }

    /**
     * @return ResultInterface|Type\PagedQueryResultsResponse
     * @throws SoapException
     */
    public function getNextQueryResults() : \BurgerDigital\eTapestry\Type\PagedQueryResultsResponse
    {
        return $this->call('getNextQueryResults');
    }

    /**
     * @return ResultInterface|Type\PagedRelationshipsResponse
     * @throws SoapException
     */
    public function getNextRelationships() : \BurgerDigital\eTapestry\Type\PagedRelationshipsResponse
    {
        return $this->call('getNextRelationships');
    }

    /**
     * @param RequestInterface|\string $String_1
     * @return ResultInterface|Type\Note
     * @throws SoapException
     */
    public function getNote(string $String_1) : \BurgerDigital\eTapestry\Type\Note
    {
        return $this->call('getNote', $String_1);
    }

    /**
     * @param RequestInterface|Type\DefinedValue $DefinedValue_1
     * @return ResultInterface|Type\Note
     * @throws SoapException
     */
    public function getNoteByUniqueDefinedValue(\BurgerDigital\eTapestry\Type\DefinedValue $DefinedValue_1) : \BurgerDigital\eTapestry\Type\Note
    {
        return $this->call('getNoteByUniqueDefinedValue', $DefinedValue_1);
    }

    /**
     * @param RequestInterface|Type\DefinedValue $DefinedValue_1
     * @return ResultInterface|Type\StringType
     * @throws SoapException
     */
    public function getNoteRef(\BurgerDigital\eTapestry\Type\DefinedValue $DefinedValue_1) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('getNoteRef', $DefinedValue_1);
    }

    /**
     * @return ResultInterface|Type\OrganizationPreferences
     * @throws SoapException
     */
    public function getOrganizationPreferences() : \BurgerDigital\eTapestry\Type\OrganizationPreferences
    {
        return $this->call('getOrganizationPreferences');
    }

    /**
     * @return ResultInterface|Type\DefinedValue
     * @throws SoapException
     */
    public function getOutlookIntegrationContactMethods() : \BurgerDigital\eTapestry\Type\DefinedValue
    {
        return $this->call('getOutlookIntegrationContactMethods');
    }

    /**
     * @return ResultInterface|Type\StringType
     * @throws SoapException
     */
    public function getOutlookIntegrationVersion() : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('getOutlookIntegrationVersion');
    }

    /**
     * @param RequestInterface|\string $String_1
     * @return ResultInterface|Type\Payment
     * @throws SoapException
     */
    public function getPayment(string $String_1) : \BurgerDigital\eTapestry\Type\Payment
    {
        return $this->call('getPayment', $String_1);
    }

    /**
     * @param RequestInterface|Type\Boolean $boolean_1
     * @return ResultInterface|Type\PhoneAThonList
     * @throws SoapException
     */
    public function getPhoneAThonLists(\BurgerDigital\eTapestry\Type\Boolean $boolean_1) : \BurgerDigital\eTapestry\Type\PhoneAThonList
    {
        return $this->call('getPhoneAThonLists', $boolean_1);
    }

    /**
     * @param RequestInterface|\string $String_1
     * @return ResultInterface|Type\Pledge
     * @throws SoapException
     */
    public function getPledge(string $String_1) : \BurgerDigital\eTapestry\Type\Pledge
    {
        return $this->call('getPledge', $String_1);
    }

    /**
     * @param RequestInterface|\string $String_1
     * @return ResultInterface|Type\PrivacyPreferences
     * @throws SoapException
     */
    public function getPrivacyPreferences(string $String_1) : \BurgerDigital\eTapestry\Type\PrivacyPreferences
    {
        return $this->call('getPrivacyPreferences', $String_1);
    }

    /**
     * @param RequestInterface|\string $String_1
     * @return ResultInterface|Type\Purchase
     * @throws SoapException
     */
    public function getPurchase(string $String_1) : \BurgerDigital\eTapestry\Type\Purchase
    {
        return $this->call('getPurchase', $String_1);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * string $String_1
     * string $String_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\QueryResultStats
     */
    public function getQueryResultStats(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\QueryResultStats
    {
        return $this->call('getQueryResultStats', $multiArgumentRequest);
    }

    /**
     * @param RequestInterface|\string $String_1
     * @return ResultInterface|Type\RecurringGift
     * @throws SoapException
     */
    public function getRecurringGift(string $String_1) : \BurgerDigital\eTapestry\Type\RecurringGift
    {
        return $this->call('getRecurringGift', $String_1);
    }

    /**
     * @param RequestInterface|\string $String_1
     * @return ResultInterface|Type\RecurringGiftSchedule
     * @throws SoapException
     */
    public function getRecurringGiftSchedule(string $String_1) : \BurgerDigital\eTapestry\Type\RecurringGiftSchedule
    {
        return $this->call('getRecurringGiftSchedule', $String_1);
    }

    /**
     * @param RequestInterface|\string $String_1
     * @return ResultInterface|Type\Relationship
     * @throws SoapException
     */
    public function getRelationship(string $String_1) : \BurgerDigital\eTapestry\Type\Relationship
    {
        return $this->call('getRelationship', $String_1);
    }

    /**
     * @param RequestInterface|Type\Boolean $boolean_1
     * @return ResultInterface|Type\RelationshipType
     * @throws SoapException
     */
    public function getRelationshipTypes(\BurgerDigital\eTapestry\Type\Boolean $boolean_1) : \BurgerDigital\eTapestry\Type\RelationshipType
    {
        return $this->call('getRelationshipTypes', $boolean_1);
    }

    /**
     * @param RequestInterface|Type\PagedRelationshipsRequest $PagedRelationshipsRequest_1
     * @return ResultInterface|Type\PagedRelationshipsResponse
     * @throws SoapException
     */
    public function getRelationships(\BurgerDigital\eTapestry\Type\PagedRelationshipsRequest $PagedRelationshipsRequest_1) : \BurgerDigital\eTapestry\Type\PagedRelationshipsResponse
    {
        return $this->call('getRelationships', $PagedRelationshipsRequest_1);
    }

    /**
     * @param RequestInterface|\string $String_1
     * @return ResultInterface|Type\SegmentedDonation
     * @throws SoapException
     */
    public function getSegmentedDonation(string $String_1) : \BurgerDigital\eTapestry\Type\SegmentedDonation
    {
        return $this->call('getSegmentedDonation', $String_1);
    }

    /**
     * @param RequestInterface|\string $String_1
     * @return ResultInterface|Type\SegmentedOrder
     * @throws SoapException
     */
    public function getSegmentedOrder(string $String_1) : \BurgerDigital\eTapestry\Type\SegmentedOrder
    {
        return $this->call('getSegmentedOrder', $String_1);
    }

    /**
     * @param RequestInterface|\string $String_1
     * @return ResultInterface|Type\SegmentedPledge
     * @throws SoapException
     */
    public function getSegmentedPledge(string $String_1) : \BurgerDigital\eTapestry\Type\SegmentedPledge
    {
        return $this->call('getSegmentedPledge', $String_1);
    }

    /**
     * @param RequestInterface|\string $String_1
     * @return ResultInterface|Type\Shipping
     * @throws SoapException
     */
    public function getShipping(string $String_1) : \BurgerDigital\eTapestry\Type\Shipping
    {
        return $this->call('getShipping', $String_1);
    }

    /**
     * @param RequestInterface|\string $String_1
     * @return ResultInterface|Type\SoftCredit
     * @throws SoapException
     */
    public function getSoftCredit(string $String_1) : \BurgerDigital\eTapestry\Type\SoftCredit
    {
        return $this->call('getSoftCredit', $String_1);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * string $String_1
     * BurgerDigital\eTapestry\Type\Boolean $boolean_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\DefinedValue
     */
    public function getSystemDefinedValues(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\DefinedValue
    {
        return $this->call('getSystemDefinedValues', $multiArgumentRequest);
    }

    /**
     * @param RequestInterface|\string $String_1
     * @return ResultInterface|Type\Tax
     * @throws SoapException
     */
    public function getTax(string $String_1) : \BurgerDigital\eTapestry\Type\Tax
    {
        return $this->call('getTax', $String_1);
    }

    /**
     * @param RequestInterface|\string $String_1
     * @return ResultInterface|Type\AnyType
     * @throws SoapException
     */
    public function getTransaction(string $String_1) : \BurgerDigital\eTapestry\Type\AnyType
    {
        return $this->call('getTransaction', $String_1);
    }

    /**
     * @param RequestInterface|Type\DefinedValue $DefinedValue_1
     * @return ResultInterface|Type\AnyType
     * @throws SoapException
     */
    public function getTransactionByUniqueDefinedValue(\BurgerDigital\eTapestry\Type\DefinedValue $DefinedValue_1) : \BurgerDigital\eTapestry\Type\AnyType
    {
        return $this->call('getTransactionByUniqueDefinedValue', $DefinedValue_1);
    }

    /**
     * @param RequestInterface|Type\Boolean $boolean_1
     * @return ResultInterface|Type\TransactionProcessor
     * @throws SoapException
     */
    public function getTransactionProcessors(\BurgerDigital\eTapestry\Type\Boolean $boolean_1) : \BurgerDigital\eTapestry\Type\TransactionProcessor
    {
        return $this->call('getTransactionProcessors', $boolean_1);
    }

    /**
     * @param RequestInterface|Type\DefinedValue $DefinedValue_1
     * @return ResultInterface|Type\StringType
     * @throws SoapException
     */
    public function getTransactionRef(\BurgerDigital\eTapestry\Type\DefinedValue $DefinedValue_1) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('getTransactionRef', $DefinedValue_1);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * string $String_1
     * BurgerDigital\eTapestry\Type\Boolean $boolean_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\DefinedValue
     */
    public function getUserDefinedSetValues(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\DefinedValue
    {
        return $this->call('getUserDefinedSetValues', $multiArgumentRequest);
    }

    /**
     * @return ResultInterface|Type\Boolean
     * @throws SoapException
     */
    public function hasMoreCartElements() : \BurgerDigital\eTapestry\Type\Boolean
    {
        return $this->call('hasMoreCartElements');
    }

    /**
     * @return ResultInterface|Type\Boolean
     * @throws SoapException
     */
    public function hasMoreDefinedFields() : \BurgerDigital\eTapestry\Type\Boolean
    {
        return $this->call('hasMoreDefinedFields');
    }

    /**
     * @return ResultInterface|Type\Boolean
     * @throws SoapException
     */
    public function hasMoreJournalEntries() : \BurgerDigital\eTapestry\Type\Boolean
    {
        return $this->call('hasMoreJournalEntries');
    }

    /**
     * @return ResultInterface|Type\Boolean
     * @throws SoapException
     */
    public function hasMoreQueryResults() : \BurgerDigital\eTapestry\Type\Boolean
    {
        return $this->call('hasMoreQueryResults');
    }

    /**
     * @return ResultInterface|Type\Boolean
     * @throws SoapException
     */
    public function hasMoreRelationships() : \BurgerDigital\eTapestry\Type\Boolean
    {
        return $this->call('hasMoreRelationships');
    }

    /**
     * @return ResultInterface|Type\LinkedTransaction
     * @throws SoapException
     */
    public function initLinkedTransaction() : \BurgerDigital\eTapestry\Type\LinkedTransaction
    {
        return $this->call('initLinkedTransaction');
    }

    /**
     * @return ResultInterface|Type\Boolean
     * @throws SoapException
     */
    public function isMyPasswordExpired() : \BurgerDigital\eTapestry\Type\Boolean
    {
        return $this->call('isMyPasswordExpired');
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * string $String_1
     * string $String_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\StringType
     */
    public function login(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('login', $multiArgumentRequest);
    }

    /**
     * @return ResultInterface|Type\VoidType
     * @throws SoapException
     */
    public function logout() : \BurgerDigital\eTapestry\Type\VoidType
    {
        return $this->call('logout');
    }

    /**
     * @return ResultInterface|Type\StringType
     * @throws SoapException
     */
    public function pingOkay() : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('pingOkay');
    }

    /**
     * @return ResultInterface|Type\DateTime
     * @throws SoapException
     */
    public function pingTime() : \BurgerDigital\eTapestry\Type\DateTime
    {
        return $this->call('pingTime');
    }

    /**
     * @param RequestInterface|Type\AccountChangeRequest $AccountChangeRequest_1
     * @return ResultInterface|Type\VoidType
     * @throws SoapException
     */
    public function processAccountChange(\BurgerDigital\eTapestry\Type\AccountChangeRequest $AccountChangeRequest_1) : \BurgerDigital\eTapestry\Type\VoidType
    {
        return $this->call('processAccountChange', $AccountChangeRequest_1);
    }

    /**
     * @param RequestInterface|Type\CartOrderRequest $CartOrderRequest_1
     * @return ResultInterface|Type\CartOrderResponse
     * @throws SoapException
     */
    public function processCartOrder(\BurgerDigital\eTapestry\Type\CartOrderRequest $CartOrderRequest_1) : \BurgerDigital\eTapestry\Type\CartOrderResponse
    {
        return $this->call('processCartOrder', $CartOrderRequest_1);
    }

    /**
     * @param RequestInterface|Type\EcommerceRequest $EcommerceRequest_1
     * @return ResultInterface|Type\EcommerceResponse
     * @throws SoapException
     */
    public function processEcommerceRequest(\BurgerDigital\eTapestry\Type\EcommerceRequest $EcommerceRequest_1) : \BurgerDigital\eTapestry\Type\EcommerceResponse
    {
        return $this->call('processEcommerceRequest', $EcommerceRequest_1);
    }

    /**
     * @param RequestInterface|Type\ForgottenPasswordEmailHelpRequest $ForgottenPasswordEmailHelpRequest_1
     * @return ResultInterface|Type\Integer
     * @throws SoapException
     */
    public function processForgottenPasswordEmailHelp(\BurgerDigital\eTapestry\Type\ForgottenPasswordEmailHelpRequest $ForgottenPasswordEmailHelpRequest_1) : \BurgerDigital\eTapestry\Type\Integer
    {
        return $this->call('processForgottenPasswordEmailHelp', $ForgottenPasswordEmailHelpRequest_1);
    }

    /**
     * @param RequestInterface|Type\ForgottenPasswordResetHelpRequest $ForgottenPasswordResetHelpRequest_1
     * @return ResultInterface|Type\StringType
     * @throws SoapException
     */
    public function processForgottenPasswordResetHelp(\BurgerDigital\eTapestry\Type\ForgottenPasswordResetHelpRequest $ForgottenPasswordResetHelpRequest_1) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('processForgottenPasswordResetHelp', $ForgottenPasswordResetHelpRequest_1);
    }

    /**
     * @param RequestInterface|Type\ProcessTransactionRequest $ProcessTransactionRequest_1
     * @return ResultInterface|Type\StringType
     * @throws SoapException
     */
    public function processTransaction(\BurgerDigital\eTapestry\Type\ProcessTransactionRequest $ProcessTransactionRequest_1) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('processTransaction', $ProcessTransactionRequest_1);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * string $String_1
     * BurgerDigital\eTapestry\Type\DefinedValue $arrayOfDefinedValue_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\VoidType
     */
    public function removeDefinedValues(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\VoidType
    {
        return $this->call('removeDefinedValues', $multiArgumentRequest);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * string $String_1
     * string $String_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\StringType
     */
    public function reverseTransaction(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('reverseTransaction', $multiArgumentRequest);
    }

    /**
     * @param RequestInterface|Type\SendEmailRequest $SendEmailRequest_1
     * @return ResultInterface|Type\Integer
     * @throws SoapException
     */
    public function sendEmail(\BurgerDigital\eTapestry\Type\SendEmailRequest $SendEmailRequest_1) : \BurgerDigital\eTapestry\Type\Integer
    {
        return $this->call('sendEmail', $SendEmailRequest_1);
    }

    /**
     * @param RequestInterface|\string $String_1
     * @return ResultInterface|Type\VoidType
     * @throws SoapException
     */
    public function setIPAddress(string $String_1) : \BurgerDigital\eTapestry\Type\VoidType
    {
        return $this->call('setIPAddress', $String_1);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * BurgerDigital\eTapestry\Type\Account $Account_1
     * BurgerDigital\eTapestry\Type\Boolean $boolean_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\StringType
     */
    public function updateAccount(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('updateAccount', $multiArgumentRequest);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * BurgerDigital\eTapestry\Type\Contact $Contact_1
     * BurgerDigital\eTapestry\Type\Boolean $boolean_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\StringType
     */
    public function updateContact(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('updateContact', $multiArgumentRequest);
    }

    /**
     * @param RequestInterface|Type\Declaration $Declaration_1
     * @return ResultInterface|Type\StringType
     * @throws SoapException
     */
    public function updateDeclaration(\BurgerDigital\eTapestry\Type\Declaration $Declaration_1) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('updateDeclaration', $Declaration_1);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * string $String_1
     * string $String_2
     * string $String_3
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\VoidType
     */
    public function updateForgottenPassword(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\VoidType
    {
        return $this->call('updateForgottenPassword', $multiArgumentRequest);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * BurgerDigital\eTapestry\Type\Gift $Gift_1
     * BurgerDigital\eTapestry\Type\Boolean $boolean_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\StringType
     */
    public function updateGift(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('updateGift', $multiArgumentRequest);
    }

    /**
     * @param RequestInterface|\string $String_1
     * @return ResultInterface|Type\VoidType
     * @throws SoapException
     */
    public function updateMyExpiredPassword(string $String_1) : \BurgerDigital\eTapestry\Type\VoidType
    {
        return $this->call('updateMyExpiredPassword', $String_1);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * string $String_1
     * string $String_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\VoidType
     */
    public function updateMyLoginCredentials(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\VoidType
    {
        return $this->call('updateMyLoginCredentials', $multiArgumentRequest);
    }

    /**
     * @param RequestInterface|\string $String_1
     * @return ResultInterface|Type\VoidType
     * @throws SoapException
     */
    public function updateMyPassword(string $String_1) : \BurgerDigital\eTapestry\Type\VoidType
    {
        return $this->call('updateMyPassword', $String_1);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * BurgerDigital\eTapestry\Type\Note $Note_1
     * BurgerDigital\eTapestry\Type\Boolean $boolean_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\StringType
     */
    public function updateNote(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('updateNote', $multiArgumentRequest);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * BurgerDigital\eTapestry\Type\Payment $Payment_1
     * BurgerDigital\eTapestry\Type\Boolean $boolean_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\StringType
     */
    public function updatePayment(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('updatePayment', $multiArgumentRequest);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * BurgerDigital\eTapestry\Type\Pledge $Pledge_1
     * BurgerDigital\eTapestry\Type\Boolean $boolean_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\StringType
     */
    public function updatePledge(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('updatePledge', $multiArgumentRequest);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * BurgerDigital\eTapestry\Type\PrivacyPreferences $PrivacyPreferences_1
     * BurgerDigital\eTapestry\Type\Boolean $boolean_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\VoidType
     */
    public function updatePrivacyPreferences(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\VoidType
    {
        return $this->call('updatePrivacyPreferences', $multiArgumentRequest);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * BurgerDigital\eTapestry\Type\RecurringGift $RecurringGift_1
     * BurgerDigital\eTapestry\Type\Boolean $boolean_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\StringType
     */
    public function updateRecurringGift(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('updateRecurringGift', $multiArgumentRequest);
    }

    /**
     * MultiArgumentRequest with following params:
     * 
     * BurgerDigital\eTapestry\Type\RecurringGiftSchedule $RecurringGiftSchedule_1
     * BurgerDigital\eTapestry\Type\Boolean $boolean_2
     *
     * @param Phpro\SoapClient\Type\MultiArgumentRequest
     * @return ResultInterface|Type\StringType
     */
    public function updateRecurringGiftSchedule(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \BurgerDigital\eTapestry\Type\StringType
    {
        return $this->call('updateRecurringGiftSchedule', $multiArgumentRequest);
    }

    /**
     * @return ResultInterface|Type\Boolean
     * @throws SoapException
     */
    public function validateCartLicense() : \BurgerDigital\eTapestry\Type\Boolean
    {
        return $this->call('validateCartLicense');
    }

    /**
     * @return ResultInterface|Type\Boolean
     * @throws SoapException
     */
    public function validateDonorLoginLicense() : \BurgerDigital\eTapestry\Type\Boolean
    {
        return $this->call('validateDonorLoginLicense');
    }

    /**
     * @return ResultInterface|Type\Boolean
     * @throws SoapException
     */
    public function validateOutlookIntegrationLicense() : \BurgerDigital\eTapestry\Type\Boolean
    {
        return $this->call('validateOutlookIntegrationLicense');
    }


}

