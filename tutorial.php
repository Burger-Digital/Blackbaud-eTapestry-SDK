<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://sna.etapestry.com/v3messaging/service?WSDL',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://sna.etapestry.com/v3messaging/service?WSDL',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
];
/**
 * Samples for Add ServiceType
 */
$add = new \ServiceType\Add($options);
/**
 * Sample call for addAccount operation/method
 */
if ($add->addAccount(new \StructType\Account(), $boolean_2) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for addAndProcessGift operation/method
 */
if ($add->addAndProcessGift(new \StructType\Gift(), $boolean_2) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for addAndProcessPayment operation/method
 */
if ($add->addAndProcessPayment(new \StructType\Payment(), $boolean_2) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for addContact operation/method
 */
if ($add->addContact(new \StructType\Contact(), $boolean_2) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for addDeclaration operation/method
 */
if ($add->addDeclaration(new \StructType\Declaration()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for addDisbursement operation/method
 */
if ($add->addDisbursement(new \StructType\Disbursement(), $boolean_2) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for addGift operation/method
 */
if ($add->addGift(new \StructType\Gift(), $boolean_2) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for addLoginCredentials operation/method
 */
if ($add->addLoginCredentials(new \StructType\LoginCredentialsRequest()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for addNote operation/method
 */
if ($add->addNote(new \StructType\Note(), $boolean_2) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for addOutlookIntegrationEmail operation/method
 */
if ($add->addOutlookIntegrationEmail(new \StructType\OutlookIntegrationEmail(), $arrayOfAccount_2) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for addOutlookIntegrationError operation/method
 */
if ($add->addOutlookIntegrationError($String_1) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for addOutlookIntegrationStats operation/method
 */
if ($add->addOutlookIntegrationStats($String_1, $Date_2, $int_3, $int_4, $int_5, $int_6, $int_7) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for addPayment operation/method
 */
if ($add->addPayment(new \StructType\Payment(), $boolean_2) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for addPledge operation/method
 */
if ($add->addPledge(new \StructType\Pledge(), $boolean_2) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for addRecurringGift operation/method
 */
if ($add->addRecurringGift(new \StructType\RecurringGift(), $boolean_2) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for addRecurringGiftSchedule operation/method
 */
if ($add->addRecurringGiftSchedule(new \StructType\RecurringGiftSchedule(), $boolean_2) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for addRelationship operation/method
 */
if ($add->addRelationship(new \StructType\Relationship(), $boolean_2) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for addSegmentedDonation operation/method
 */
if ($add->addSegmentedDonation(new \StructType\SegmentedDonation(), $boolean_2) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for addSegmentedPledge operation/method
 */
if ($add->addSegmentedPledge(new \StructType\SegmentedPledge(), $boolean_2) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for addSoftCredit operation/method
 */
if ($add->addSoftCredit(new \StructType\SoftCredit(), $boolean_2) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Samples for Api ServiceType
 */
$api = new \ServiceType\Api($options);
/**
 * Sample call for apiKeyLogin operation/method
 */
if ($api->apiKeyLogin($String_1, $String_2) !== false) {
    print_r($api->getResult());
} else {
    print_r($api->getLastError());
}
/**
 * Samples for Apply ServiceType
 */
$apply = new \ServiceType\Apply($options);
/**
 * Sample call for applyDefinedValues operation/method
 */
if ($apply->applyDefinedValues($String_1, $arrayOfDefinedValue_2, $boolean_3) !== false) {
    print_r($apply->getResult());
} else {
    print_r($apply->getLastError());
}
/**
 * Samples for Connect ServiceType
 */
$connect = new \ServiceType\Connect($options);
/**
 * Sample call for connect operation/method
 */
if ($connect->connect(new \StructType\ConnectRequest()) !== false) {
    print_r($connect->getResult());
} else {
    print_r($connect->getLastError());
}
/**
 * Samples for External ServiceType
 */
$external = new \ServiceType\External($options);
/**
 * Sample call for externalLogin operation/method
 */
if ($external->externalLogin(new \StructType\ExternalLoginRequest()) !== false) {
    print_r($external->getResult());
} else {
    print_r($external->getLastError());
}
/**
 * Samples for Finalize ServiceType
 */
$finalize = new \ServiceType\Finalize($options);
/**
 * Sample call for finalizePendingBuckarooCartOrder operation/method
 */
if ($finalize->finalizePendingBuckarooCartOrder(new \StructType\CartOrderRequest()) !== false) {
    print_r($finalize->getResult());
} else {
    print_r($finalize->getLastError());
}
/**
 * Samples for Find ServiceType
 */
$find = new \ServiceType\Find($options);
/**
 * Sample call for findAccountsForOutlookIntegration operation/method
 */
if ($find->findAccountsForOutlookIntegration($String_1, $String_2, $boolean_3) !== false) {
    print_r($find->getResult());
} else {
    print_r($find->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \ServiceType\Get($options);
/**
 * Sample call for getAccount operation/method
 */
if ($get->getAccount($String_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAccountById operation/method
 */
if ($get->getAccountById($int_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAccountByPersonaType operation/method
 */
if ($get->getAccountByPersonaType($String_1, $String_2, $boolean_3) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAccountByUniqueDefinedValue operation/method
 */
if ($get->getAccountByUniqueDefinedValue(new \StructType\DefinedValue()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAccountFromPhoneAThonList operation/method
 */
if ($get->getAccountFromPhoneAThonList($String_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAccountInfoFromCCPID operation/method
 */
if ($get->getAccountInfoFromCCPID($String_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAccountInvolvePrivacySettings operation/method
 */
if ($get->getAccountInvolvePrivacySettings($String_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAccountRef operation/method
 */
if ($get->getAccountRef(new \StructType\DefinedValue()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getApproaches operation/method
 */
if ($get->getApproaches($boolean_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCachedCartElements operation/method
 */
if ($get->getCachedCartElements($int_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCachedDefinedFields operation/method
 */
if ($get->getCachedDefinedFields($int_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCachedJournalEntries operation/method
 */
if ($get->getCachedJournalEntries($int_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCachedQueryResults operation/method
 */
if ($get->getCachedQueryResults($int_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCachedRelationships operation/method
 */
if ($get->getCachedRelationships($int_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCalendarItem operation/method
 */
if ($get->getCalendarItem($String_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCampaigns operation/method
 */
if ($get->getCampaigns($boolean_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCartCategory operation/method
 */
if ($get->getCartCategory($String_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCartElements operation/method
 */
if ($get->getCartElements(new \StructType\PagedCartElementsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCartItem operation/method
 */
if ($get->getCartItem($String_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCartPreferences operation/method
 */
if ($get->getCartPreferences($String_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getContact operation/method
 */
if ($get->getContact($String_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getContactByUniqueDefinedValue operation/method
 */
if ($get->getContactByUniqueDefinedValue(new \StructType\DefinedValue()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getContactRef operation/method
 */
if ($get->getContactRef(new \StructType\DefinedValue()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDeclaration operation/method
 */
if ($get->getDeclaration($String_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDefinedField operation/method
 */
if ($get->getDefinedField($String_1, $boolean_2) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDefinedFields operation/method
 */
if ($get->getDefinedFields(new \StructType\PagedDefinedFieldsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDisbursement operation/method
 */
if ($get->getDisbursement($String_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDonorLoginAccount operation/method
 */
if ($get->getDonorLoginAccount($String_1, $String_2) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDonorLoginPreferences operation/method
 */
if ($get->getDonorLoginPreferences() !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDuplicateAccount operation/method
 */
if ($get->getDuplicateAccount(new \StructType\DuplicateAccountSearch()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDuplicateAccounts operation/method
 */
if ($get->getDuplicateAccounts(new \StructType\DuplicateAccountSearch()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDynamicAccounts operation/method
 */
if ($get->getDynamicAccounts($String_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDynamicQueryResultStats operation/method
 */
if ($get->getDynamicQueryResultStats(new \StructType\DynamicQuery()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDynamicQueryResults operation/method
 */
if ($get->getDynamicQueryResults(new \StructType\PagedDynamicQueryResultsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getEntityRole operation/method
 */
if ($get->getEntityRole($String_1, $boolean_2) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getExistingQueryResultStats operation/method
 */
if ($get->getExistingQueryResultStats($String_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getExistingQueryResults operation/method
 */
if ($get->getExistingQueryResults(new \StructType\PagedExistingQueryResultsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getFundObjects operation/method
 */
if ($get->getFundObjects($boolean_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getFunds operation/method
 */
if ($get->getFunds($boolean_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getGift operation/method
 */
if ($get->getGift($String_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getInvalidOrderDetailQuantities operation/method
 */
if ($get->getInvalidOrderDetailQuantities($arrayOfOrderDetail_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getInvitation operation/method
 */
if ($get->getInvitation($String_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getJournalEntries operation/method
 */
if ($get->getJournalEntries(new \StructType\PagedJournalEntriesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getLetters operation/method
 */
if ($get->getLetters($boolean_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMyAccount operation/method
 */
if ($get->getMyAccount() !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMyAccountByPersonaType operation/method
 */
if ($get->getMyAccountByPersonaType($String_1, $boolean_2) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMyEntityRole operation/method
 */
if ($get->getMyEntityRole() !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMyJournalEntries operation/method
 */
if ($get->getMyJournalEntries() !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMyJournalSummary operation/method
 */
if ($get->getMyJournalSummary() !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMyPrivacyPreferences operation/method
 */
if ($get->getMyPrivacyPreferences() !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getNextCartElements operation/method
 */
if ($get->getNextCartElements() !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getNextDefinedFields operation/method
 */
if ($get->getNextDefinedFields() !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getNextJournalEntries operation/method
 */
if ($get->getNextJournalEntries() !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getNextQueryResults operation/method
 */
if ($get->getNextQueryResults() !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getNextRelationships operation/method
 */
if ($get->getNextRelationships() !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getNote operation/method
 */
if ($get->getNote($String_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getNoteByUniqueDefinedValue operation/method
 */
if ($get->getNoteByUniqueDefinedValue(new \StructType\DefinedValue()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getNoteRef operation/method
 */
if ($get->getNoteRef(new \StructType\DefinedValue()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrganizationPreferences operation/method
 */
if ($get->getOrganizationPreferences() !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOutlookIntegrationContactMethods operation/method
 */
if ($get->getOutlookIntegrationContactMethods() !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOutlookIntegrationVersion operation/method
 */
if ($get->getOutlookIntegrationVersion() !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getPayment operation/method
 */
if ($get->getPayment($String_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getPhoneAThonLists operation/method
 */
if ($get->getPhoneAThonLists($boolean_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getPledge operation/method
 */
if ($get->getPledge($String_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getPrivacyPreferences operation/method
 */
if ($get->getPrivacyPreferences($String_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getPurchase operation/method
 */
if ($get->getPurchase($String_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getQueryResultStats operation/method
 */
if ($get->getQueryResultStats($String_1, $String_2) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRecurringGift operation/method
 */
if ($get->getRecurringGift($String_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRecurringGiftSchedule operation/method
 */
if ($get->getRecurringGiftSchedule($String_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRelationship operation/method
 */
if ($get->getRelationship($String_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRelationshipTypes operation/method
 */
if ($get->getRelationshipTypes($boolean_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRelationships operation/method
 */
if ($get->getRelationships(new \StructType\PagedRelationshipsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSegmentedDonation operation/method
 */
if ($get->getSegmentedDonation($String_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSegmentedOrder operation/method
 */
if ($get->getSegmentedOrder($String_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSegmentedPledge operation/method
 */
if ($get->getSegmentedPledge($String_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getShipping operation/method
 */
if ($get->getShipping($String_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSoftCredit operation/method
 */
if ($get->getSoftCredit($String_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSystemDefinedValues operation/method
 */
if ($get->getSystemDefinedValues($String_1, $boolean_2) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTax operation/method
 */
if ($get->getTax($String_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTransaction operation/method
 */
if ($get->getTransaction($String_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTransactionByUniqueDefinedValue operation/method
 */
if ($get->getTransactionByUniqueDefinedValue(new \StructType\DefinedValue()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTransactionProcessors operation/method
 */
if ($get->getTransactionProcessors($boolean_1) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTransactionRef operation/method
 */
if ($get->getTransactionRef(new \StructType\DefinedValue()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getUserDefinedSetValues operation/method
 */
if ($get->getUserDefinedSetValues($String_1, $boolean_2) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Has ServiceType
 */
$has = new \ServiceType\Has($options);
/**
 * Sample call for hasMoreCartElements operation/method
 */
if ($has->hasMoreCartElements() !== false) {
    print_r($has->getResult());
} else {
    print_r($has->getLastError());
}
/**
 * Sample call for hasMoreDefinedFields operation/method
 */
if ($has->hasMoreDefinedFields() !== false) {
    print_r($has->getResult());
} else {
    print_r($has->getLastError());
}
/**
 * Sample call for hasMoreJournalEntries operation/method
 */
if ($has->hasMoreJournalEntries() !== false) {
    print_r($has->getResult());
} else {
    print_r($has->getLastError());
}
/**
 * Sample call for hasMoreQueryResults operation/method
 */
if ($has->hasMoreQueryResults() !== false) {
    print_r($has->getResult());
} else {
    print_r($has->getLastError());
}
/**
 * Sample call for hasMoreRelationships operation/method
 */
if ($has->hasMoreRelationships() !== false) {
    print_r($has->getResult());
} else {
    print_r($has->getLastError());
}
/**
 * Samples for Init ServiceType
 */
$init = new \ServiceType\Init($options);
/**
 * Sample call for initLinkedTransaction operation/method
 */
if ($init->initLinkedTransaction() !== false) {
    print_r($init->getResult());
} else {
    print_r($init->getLastError());
}
/**
 * Samples for Is ServiceType
 */
$is = new \ServiceType\Is($options);
/**
 * Sample call for isMyPasswordExpired operation/method
 */
if ($is->isMyPasswordExpired() !== false) {
    print_r($is->getResult());
} else {
    print_r($is->getLastError());
}
/**
 * Samples for Login ServiceType
 */
$login = new \ServiceType\Login($options);
/**
 * Sample call for login operation/method
 */
if ($login->login($String_1, $String_2) !== false) {
    print_r($login->getResult());
} else {
    print_r($login->getLastError());
}
/**
 * Samples for Logout ServiceType
 */
$logout = new \ServiceType\Logout($options);
/**
 * Sample call for logout operation/method
 */
if ($logout->logout() !== false) {
    print_r($logout->getResult());
} else {
    print_r($logout->getLastError());
}
/**
 * Samples for Ping ServiceType
 */
$ping = new \ServiceType\Ping($options);
/**
 * Sample call for pingOkay operation/method
 */
if ($ping->pingOkay() !== false) {
    print_r($ping->getResult());
} else {
    print_r($ping->getLastError());
}
/**
 * Sample call for pingTime operation/method
 */
if ($ping->pingTime() !== false) {
    print_r($ping->getResult());
} else {
    print_r($ping->getLastError());
}
/**
 * Samples for Process ServiceType
 */
$process = new \ServiceType\Process($options);
/**
 * Sample call for processAccountChange operation/method
 */
if ($process->processAccountChange(new \StructType\AccountChangeRequest()) !== false) {
    print_r($process->getResult());
} else {
    print_r($process->getLastError());
}
/**
 * Sample call for processCartOrder operation/method
 */
if ($process->processCartOrder(new \StructType\CartOrderRequest()) !== false) {
    print_r($process->getResult());
} else {
    print_r($process->getLastError());
}
/**
 * Sample call for processEcommerceRequest operation/method
 */
if ($process->processEcommerceRequest(new \StructType\EcommerceRequest()) !== false) {
    print_r($process->getResult());
} else {
    print_r($process->getLastError());
}
/**
 * Sample call for processForgottenPasswordEmailHelp operation/method
 */
if ($process->processForgottenPasswordEmailHelp(new \StructType\ForgottenPasswordEmailHelpRequest()) !== false) {
    print_r($process->getResult());
} else {
    print_r($process->getLastError());
}
/**
 * Sample call for processForgottenPasswordResetHelp operation/method
 */
if ($process->processForgottenPasswordResetHelp(new \StructType\ForgottenPasswordResetHelpRequest()) !== false) {
    print_r($process->getResult());
} else {
    print_r($process->getLastError());
}
/**
 * Sample call for processTransaction operation/method
 */
if ($process->processTransaction(new \StructType\ProcessTransactionRequest()) !== false) {
    print_r($process->getResult());
} else {
    print_r($process->getLastError());
}
/**
 * Samples for Remove ServiceType
 */
$remove = new \ServiceType\Remove($options);
/**
 * Sample call for removeDefinedValues operation/method
 */
if ($remove->removeDefinedValues($String_1, $arrayOfDefinedValue_2) !== false) {
    print_r($remove->getResult());
} else {
    print_r($remove->getLastError());
}
/**
 * Samples for Reverse ServiceType
 */
$reverse = new \ServiceType\Reverse($options);
/**
 * Sample call for reverseTransaction operation/method
 */
if ($reverse->reverseTransaction($String_1, $String_2) !== false) {
    print_r($reverse->getResult());
} else {
    print_r($reverse->getLastError());
}
/**
 * Samples for Send ServiceType
 */
$send = new \ServiceType\Send($options);
/**
 * Sample call for sendEmail operation/method
 */
if ($send->sendEmail(new \StructType\SendEmailRequest()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Samples for Set ServiceType
 */
$set = new \ServiceType\Set($options);
/**
 * Sample call for setIPAddress operation/method
 */
if ($set->setIPAddress($String_1) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Samples for Update ServiceType
 */
$update = new \ServiceType\Update($options);
/**
 * Sample call for updateAccount operation/method
 */
if ($update->updateAccount(new \StructType\Account(), $boolean_2) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for updateContact operation/method
 */
if ($update->updateContact(new \StructType\Contact(), $boolean_2) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for updateDeclaration operation/method
 */
if ($update->updateDeclaration(new \StructType\Declaration()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for updateForgottenPassword operation/method
 */
if ($update->updateForgottenPassword($String_1, $String_2, $String_3) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for updateGift operation/method
 */
if ($update->updateGift(new \StructType\Gift(), $boolean_2) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for updateMyExpiredPassword operation/method
 */
if ($update->updateMyExpiredPassword($String_1) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for updateMyLoginCredentials operation/method
 */
if ($update->updateMyLoginCredentials($String_1, $String_2) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for updateMyPassword operation/method
 */
if ($update->updateMyPassword($String_1) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for updateNote operation/method
 */
if ($update->updateNote(new \StructType\Note(), $boolean_2) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for updatePayment operation/method
 */
if ($update->updatePayment(new \StructType\Payment(), $boolean_2) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for updatePledge operation/method
 */
if ($update->updatePledge(new \StructType\Pledge(), $boolean_2) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for updatePrivacyPreferences operation/method
 */
if ($update->updatePrivacyPreferences(new \StructType\PrivacyPreferences(), $boolean_2) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for updateRecurringGift operation/method
 */
if ($update->updateRecurringGift(new \StructType\RecurringGift(), $boolean_2) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for updateRecurringGiftSchedule operation/method
 */
if ($update->updateRecurringGiftSchedule(new \StructType\RecurringGiftSchedule(), $boolean_2) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Samples for Validate ServiceType
 */
$validate = new \ServiceType\Validate($options);
/**
 * Sample call for validateCartLicense operation/method
 */
if ($validate->validateCartLicense() !== false) {
    print_r($validate->getResult());
} else {
    print_r($validate->getLastError());
}
/**
 * Sample call for validateDonorLoginLicense operation/method
 */
if ($validate->validateDonorLoginLicense() !== false) {
    print_r($validate->getResult());
} else {
    print_r($validate->getLastError());
}
/**
 * Sample call for validateOutlookIntegrationLicense operation/method
 */
if ($validate->validateOutlookIntegrationLicense() !== false) {
    print_r($validate->getResult());
} else {
    print_r($validate->getLastError());
}
