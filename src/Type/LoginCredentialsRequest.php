<?php

namespace BurgerDigital\eTapestry\Type;

use Phpro\SoapClient\Type\RequestInterface;

class LoginCredentialsRequest implements RequestInterface
{

    /**
     * @var \BurgerDigital\eTapestry\Type\Account
     */
    private $account;

    /**
     * @var string
     */
    private $confirmationLoginURL;

    /**
     * @var string
     */
    private $confirmationMessageFooter;

    /**
     * @var string
     */
    private $confirmationMessageHeader;

    /**
     * @var string
     */
    private $confirmationSender;

    /**
     * @var string
     */
    private $confirmationSignature;

    /**
     * @var string
     */
    private $confirmationSubject;

    /**
     * @var \BurgerDigital\eTapestry\Type\SearchCriteria
     */
    private $duplicateSearchCriteria;

    /**
     * @var string
     */
    private $duplicateSearchQuery;

    /**
     * @var string
     */
    private $failureEmail;

    /**
     * @var string
     */
    private $loginId;

    /**
     * @var int
     */
    private $matchHasLoginIdActionType;

    /**
     * @var int
     */
    private $matchMultipleActionType;

    /**
     * @var int
     */
    private $matchNotFoundActionType;

    /**
     * @var string
     */
    private $notificationEmail;

    /**
     * @var string
     */
    private $password;

    /**
     * Constructor
     *
     * @var \BurgerDigital\eTapestry\Type\Account $account
     * @var string $confirmationLoginURL
     * @var string $confirmationMessageFooter
     * @var string $confirmationMessageHeader
     * @var string $confirmationSender
     * @var string $confirmationSignature
     * @var string $confirmationSubject
     * @var \BurgerDigital\eTapestry\Type\SearchCriteria $duplicateSearchCriteria
     * @var string $duplicateSearchQuery
     * @var string $failureEmail
     * @var string $loginId
     * @var int $matchHasLoginIdActionType
     * @var int $matchMultipleActionType
     * @var int $matchNotFoundActionType
     * @var string $notificationEmail
     * @var string $password
     */
    public function __construct($account, $confirmationLoginURL, $confirmationMessageFooter, $confirmationMessageHeader, $confirmationSender, $confirmationSignature, $confirmationSubject, $duplicateSearchCriteria, $duplicateSearchQuery, $failureEmail, $loginId, $matchHasLoginIdActionType, $matchMultipleActionType, $matchNotFoundActionType, $notificationEmail, $password)
    {
        $this->account = $account;
        $this->confirmationLoginURL = $confirmationLoginURL;
        $this->confirmationMessageFooter = $confirmationMessageFooter;
        $this->confirmationMessageHeader = $confirmationMessageHeader;
        $this->confirmationSender = $confirmationSender;
        $this->confirmationSignature = $confirmationSignature;
        $this->confirmationSubject = $confirmationSubject;
        $this->duplicateSearchCriteria = $duplicateSearchCriteria;
        $this->duplicateSearchQuery = $duplicateSearchQuery;
        $this->failureEmail = $failureEmail;
        $this->loginId = $loginId;
        $this->matchHasLoginIdActionType = $matchHasLoginIdActionType;
        $this->matchMultipleActionType = $matchMultipleActionType;
        $this->matchNotFoundActionType = $matchNotFoundActionType;
        $this->notificationEmail = $notificationEmail;
        $this->password = $password;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\Account
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\Account $account
     * @return LoginCredentialsRequest
     */
    public function withAccount($account)
    {
        $new = clone $this;
        $new->account = $account;

        return $new;
    }

    /**
     * @return string
     */
    public function getConfirmationLoginURL()
    {
        return $this->confirmationLoginURL;
    }

    /**
     * @param string $confirmationLoginURL
     * @return LoginCredentialsRequest
     */
    public function withConfirmationLoginURL($confirmationLoginURL)
    {
        $new = clone $this;
        $new->confirmationLoginURL = $confirmationLoginURL;

        return $new;
    }

    /**
     * @return string
     */
    public function getConfirmationMessageFooter()
    {
        return $this->confirmationMessageFooter;
    }

    /**
     * @param string $confirmationMessageFooter
     * @return LoginCredentialsRequest
     */
    public function withConfirmationMessageFooter($confirmationMessageFooter)
    {
        $new = clone $this;
        $new->confirmationMessageFooter = $confirmationMessageFooter;

        return $new;
    }

    /**
     * @return string
     */
    public function getConfirmationMessageHeader()
    {
        return $this->confirmationMessageHeader;
    }

    /**
     * @param string $confirmationMessageHeader
     * @return LoginCredentialsRequest
     */
    public function withConfirmationMessageHeader($confirmationMessageHeader)
    {
        $new = clone $this;
        $new->confirmationMessageHeader = $confirmationMessageHeader;

        return $new;
    }

    /**
     * @return string
     */
    public function getConfirmationSender()
    {
        return $this->confirmationSender;
    }

    /**
     * @param string $confirmationSender
     * @return LoginCredentialsRequest
     */
    public function withConfirmationSender($confirmationSender)
    {
        $new = clone $this;
        $new->confirmationSender = $confirmationSender;

        return $new;
    }

    /**
     * @return string
     */
    public function getConfirmationSignature()
    {
        return $this->confirmationSignature;
    }

    /**
     * @param string $confirmationSignature
     * @return LoginCredentialsRequest
     */
    public function withConfirmationSignature($confirmationSignature)
    {
        $new = clone $this;
        $new->confirmationSignature = $confirmationSignature;

        return $new;
    }

    /**
     * @return string
     */
    public function getConfirmationSubject()
    {
        return $this->confirmationSubject;
    }

    /**
     * @param string $confirmationSubject
     * @return LoginCredentialsRequest
     */
    public function withConfirmationSubject($confirmationSubject)
    {
        $new = clone $this;
        $new->confirmationSubject = $confirmationSubject;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\SearchCriteria
     */
    public function getDuplicateSearchCriteria()
    {
        return $this->duplicateSearchCriteria;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\SearchCriteria $duplicateSearchCriteria
     * @return LoginCredentialsRequest
     */
    public function withDuplicateSearchCriteria($duplicateSearchCriteria)
    {
        $new = clone $this;
        $new->duplicateSearchCriteria = $duplicateSearchCriteria;

        return $new;
    }

    /**
     * @return string
     */
    public function getDuplicateSearchQuery()
    {
        return $this->duplicateSearchQuery;
    }

    /**
     * @param string $duplicateSearchQuery
     * @return LoginCredentialsRequest
     */
    public function withDuplicateSearchQuery($duplicateSearchQuery)
    {
        $new = clone $this;
        $new->duplicateSearchQuery = $duplicateSearchQuery;

        return $new;
    }

    /**
     * @return string
     */
    public function getFailureEmail()
    {
        return $this->failureEmail;
    }

    /**
     * @param string $failureEmail
     * @return LoginCredentialsRequest
     */
    public function withFailureEmail($failureEmail)
    {
        $new = clone $this;
        $new->failureEmail = $failureEmail;

        return $new;
    }

    /**
     * @return string
     */
    public function getLoginId()
    {
        return $this->loginId;
    }

    /**
     * @param string $loginId
     * @return LoginCredentialsRequest
     */
    public function withLoginId($loginId)
    {
        $new = clone $this;
        $new->loginId = $loginId;

        return $new;
    }

    /**
     * @return int
     */
    public function getMatchHasLoginIdActionType()
    {
        return $this->matchHasLoginIdActionType;
    }

    /**
     * @param int $matchHasLoginIdActionType
     * @return LoginCredentialsRequest
     */
    public function withMatchHasLoginIdActionType($matchHasLoginIdActionType)
    {
        $new = clone $this;
        $new->matchHasLoginIdActionType = $matchHasLoginIdActionType;

        return $new;
    }

    /**
     * @return int
     */
    public function getMatchMultipleActionType()
    {
        return $this->matchMultipleActionType;
    }

    /**
     * @param int $matchMultipleActionType
     * @return LoginCredentialsRequest
     */
    public function withMatchMultipleActionType($matchMultipleActionType)
    {
        $new = clone $this;
        $new->matchMultipleActionType = $matchMultipleActionType;

        return $new;
    }

    /**
     * @return int
     */
    public function getMatchNotFoundActionType()
    {
        return $this->matchNotFoundActionType;
    }

    /**
     * @param int $matchNotFoundActionType
     * @return LoginCredentialsRequest
     */
    public function withMatchNotFoundActionType($matchNotFoundActionType)
    {
        $new = clone $this;
        $new->matchNotFoundActionType = $matchNotFoundActionType;

        return $new;
    }

    /**
     * @return string
     */
    public function getNotificationEmail()
    {
        return $this->notificationEmail;
    }

    /**
     * @param string $notificationEmail
     * @return LoginCredentialsRequest
     */
    public function withNotificationEmail($notificationEmail)
    {
        $new = clone $this;
        $new->notificationEmail = $notificationEmail;

        return $new;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return LoginCredentialsRequest
     */
    public function withPassword($password)
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }


}

