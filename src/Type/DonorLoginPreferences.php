<?php

namespace BurgerDigital\eTapestry\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DonorLoginPreferences implements ResultInterface
{

    /**
     * @var string
     */
    private $welcomePageHtml;

    /**
     * @return string
     */
    public function getWelcomePageHtml()
    {
        return $this->welcomePageHtml;
    }

    /**
     * @param string $welcomePageHtml
     * @return DonorLoginPreferences
     */
    public function withWelcomePageHtml($welcomePageHtml)
    {
        $new = clone $this;
        $new->welcomePageHtml = $welcomePageHtml;

        return $new;
    }


}

