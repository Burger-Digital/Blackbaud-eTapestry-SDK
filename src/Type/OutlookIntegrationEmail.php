<?php

namespace BurgerDigital\Type;

class OutlookIntegrationEmail
{

    /**
     * @var string
     */
    private $BCC;

    /**
     * @var string
     */
    private $CC;

    /**
     * @var \BurgerDigital\Type\Attachment
     */
    private $attachments;

    /**
     * @var string
     */
    private $contactMethodRef;

    /**
     * @var \DateTimeInterface
     */
    private $date;

    /**
     * @var string
     */
    private $from;

    /**
     * @var string
     */
    private $message;

    /**
     * @var string
     */
    private $subject;

    /**
     * @var string
     */
    private $to;

    /**
     * @return string
     */
    public function getBCC()
    {
        return $this->BCC;
    }

    /**
     * @param string $BCC
     * @return OutlookIntegrationEmail
     */
    public function withBCC($BCC)
    {
        $new = clone $this;
        $new->BCC = $BCC;

        return $new;
    }

    /**
     * @return string
     */
    public function getCC()
    {
        return $this->CC;
    }

    /**
     * @param string $CC
     * @return OutlookIntegrationEmail
     */
    public function withCC($CC)
    {
        $new = clone $this;
        $new->CC = $CC;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\Attachment
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\Attachment $attachments
     * @return OutlookIntegrationEmail
     */
    public function withAttachments($attachments)
    {
        $new = clone $this;
        $new->attachments = $attachments;

        return $new;
    }

    /**
     * @return string
     */
    public function getContactMethodRef()
    {
        return $this->contactMethodRef;
    }

    /**
     * @param string $contactMethodRef
     * @return OutlookIntegrationEmail
     */
    public function withContactMethodRef($contactMethodRef)
    {
        $new = clone $this;
        $new->contactMethodRef = $contactMethodRef;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTimeInterface $date
     * @return OutlookIntegrationEmail
     */
    public function withDate($date)
    {
        $new = clone $this;
        $new->date = $date;

        return $new;
    }

    /**
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param string $from
     * @return OutlookIntegrationEmail
     */
    public function withFrom($from)
    {
        $new = clone $this;
        $new->from = $from;

        return $new;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return OutlookIntegrationEmail
     */
    public function withMessage($message)
    {
        $new = clone $this;
        $new->message = $message;

        return $new;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     * @return OutlookIntegrationEmail
     */
    public function withSubject($subject)
    {
        $new = clone $this;
        $new->subject = $subject;

        return $new;
    }

    /**
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param string $to
     * @return OutlookIntegrationEmail
     */
    public function withTo($to)
    {
        $new = clone $this;
        $new->to = $to;

        return $new;
    }


}

