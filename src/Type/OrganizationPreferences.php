<?php

namespace BurgerDigital\eTapestry\Type;

use Phpro\SoapClient\Type\ResultInterface;

class OrganizationPreferences implements ResultInterface
{

    /**
     * @var int
     */
    private $passwordMinimumLength;

    /**
     * @var bool
     */
    private $passwordRequireComplexity;

    /**
     * @return int
     */
    public function getPasswordMinimumLength()
    {
        return $this->passwordMinimumLength;
    }

    /**
     * @param int $passwordMinimumLength
     * @return OrganizationPreferences
     */
    public function withPasswordMinimumLength($passwordMinimumLength)
    {
        $new = clone $this;
        $new->passwordMinimumLength = $passwordMinimumLength;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPasswordRequireComplexity()
    {
        return $this->passwordRequireComplexity;
    }

    /**
     * @param bool $passwordRequireComplexity
     * @return OrganizationPreferences
     */
    public function withPasswordRequireComplexity($passwordRequireComplexity)
    {
        $new = clone $this;
        $new->passwordRequireComplexity = $passwordRequireComplexity;

        return $new;
    }


}

