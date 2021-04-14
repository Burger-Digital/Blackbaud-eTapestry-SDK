<?php

namespace BurgerDigital\eTapestry\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AccountChangeRequest implements RequestInterface
{

    /**
     * @var \BurgerDigital\eTapestry\Type\Account
     */
    private $account;

    /**
     * @var bool
     */
    private $createChangeNote;

    /**
     * @var bool
     */
    private $createFieldAndValues;

    /**
     * @var string
     */
    private $notificationEmail;

    /**
     * @var bool
     */
    private $update;

    /**
     * Constructor
     *
     * @var \BurgerDigital\eTapestry\Type\Account $account
     * @var bool $createChangeNote
     * @var bool $createFieldAndValues
     * @var string $notificationEmail
     * @var bool $update
     */
    public function __construct($account, $createChangeNote, $createFieldAndValues, $notificationEmail, $update)
    {
        $this->account = $account;
        $this->createChangeNote = $createChangeNote;
        $this->createFieldAndValues = $createFieldAndValues;
        $this->notificationEmail = $notificationEmail;
        $this->update = $update;
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
     * @return AccountChangeRequest
     */
    public function withAccount($account)
    {
        $new = clone $this;
        $new->account = $account;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCreateChangeNote()
    {
        return $this->createChangeNote;
    }

    /**
     * @param bool $createChangeNote
     * @return AccountChangeRequest
     */
    public function withCreateChangeNote($createChangeNote)
    {
        $new = clone $this;
        $new->createChangeNote = $createChangeNote;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCreateFieldAndValues()
    {
        return $this->createFieldAndValues;
    }

    /**
     * @param bool $createFieldAndValues
     * @return AccountChangeRequest
     */
    public function withCreateFieldAndValues($createFieldAndValues)
    {
        $new = clone $this;
        $new->createFieldAndValues = $createFieldAndValues;

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
     * @return AccountChangeRequest
     */
    public function withNotificationEmail($notificationEmail)
    {
        $new = clone $this;
        $new->notificationEmail = $notificationEmail;

        return $new;
    }

    /**
     * @return bool
     */
    public function getUpdate()
    {
        return $this->update;
    }

    /**
     * @param bool $update
     * @return AccountChangeRequest
     */
    public function withUpdate($update)
    {
        $new = clone $this;
        $new->update = $update;

        return $new;
    }


}

