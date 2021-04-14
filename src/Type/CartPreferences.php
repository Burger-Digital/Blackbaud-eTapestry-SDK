<?php

namespace BurgerDigital\Type;


use Phpro\SoapClient\Type\ResultInterface;

class CartPreferences implements ResultInterface
{

    /**
     * @var string
     */
    private $bbpsCheckoutJavascriptUrl;

    /**
     * @var string
     */
    private $categoryHeader;

    /**
     * @var \BurgerDigital\Type\Question
     */
    private $checkoutQuestions;

    /**
     * @var string
     */
    private $currencyLocaleCode;

    /**
     * @var string
     */
    private $discountPromoCodes;

    /**
     * @var string
     */
    private $domesticCountries;

    /**
     * @var float
     */
    private $expressShippingPrice;

    /**
     * @var float
     */
    private $freeOrderRegularShippingPrice;

    /**
     * @var bool
     */
    private $hideSearchFeature;

    /**
     * @var float
     */
    private $internationalShippingPrice;

    /**
     * @var string
     */
    private $languageLocaleCode;

    /**
     * @var bool
     */
    private $pricesIncludeTax;

    /**
     * @var float
     */
    private $regularShippingPrice;

    /**
     * @var int
     */
    private $salesTaxKey;

    /**
     * @var string
     */
    private $siteName;

    /**
     * @var string
     */
    private $siteTitle;

    /**
     * @var string
     */
    private $soldOutLabel;

    /**
     * @var \BurgerDigital\Type\StateTaxRate
     */
    private $stateTaxRates;

    /**
     * @var string
     */
    private $successMessage;

    /**
     * @var string
     */
    private $templateSetFolder;

    /**
     * @var \BurgerDigital\Type\TransactionProcessor
     */
    private $transProcessor;

    /**
     * @var string
     */
    private $welcomeMessage;

    /**
     * @return string
     */
    public function getBbpsCheckoutJavascriptUrl()
    {
        return $this->bbpsCheckoutJavascriptUrl;
    }

    /**
     * @param string $bbpsCheckoutJavascriptUrl
     * @return CartPreferences
     */
    public function withBbpsCheckoutJavascriptUrl($bbpsCheckoutJavascriptUrl)
    {
        $new = clone $this;
        $new->bbpsCheckoutJavascriptUrl = $bbpsCheckoutJavascriptUrl;

        return $new;
    }

    /**
     * @return string
     */
    public function getCategoryHeader()
    {
        return $this->categoryHeader;
    }

    /**
     * @param string $categoryHeader
     * @return CartPreferences
     */
    public function withCategoryHeader($categoryHeader)
    {
        $new = clone $this;
        $new->categoryHeader = $categoryHeader;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\Question
     */
    public function getCheckoutQuestions()
    {
        return $this->checkoutQuestions;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\Question $checkoutQuestions
     * @return CartPreferences
     */
    public function withCheckoutQuestions($checkoutQuestions)
    {
        $new = clone $this;
        $new->checkoutQuestions = $checkoutQuestions;

        return $new;
    }

    /**
     * @return string
     */
    public function getCurrencyLocaleCode()
    {
        return $this->currencyLocaleCode;
    }

    /**
     * @param string $currencyLocaleCode
     * @return CartPreferences
     */
    public function withCurrencyLocaleCode($currencyLocaleCode)
    {
        $new = clone $this;
        $new->currencyLocaleCode = $currencyLocaleCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getDiscountPromoCodes()
    {
        return $this->discountPromoCodes;
    }

    /**
     * @param string $discountPromoCodes
     * @return CartPreferences
     */
    public function withDiscountPromoCodes($discountPromoCodes)
    {
        $new = clone $this;
        $new->discountPromoCodes = $discountPromoCodes;

        return $new;
    }

    /**
     * @return string
     */
    public function getDomesticCountries()
    {
        return $this->domesticCountries;
    }

    /**
     * @param string $domesticCountries
     * @return CartPreferences
     */
    public function withDomesticCountries($domesticCountries)
    {
        $new = clone $this;
        $new->domesticCountries = $domesticCountries;

        return $new;
    }

    /**
     * @return float
     */
    public function getExpressShippingPrice()
    {
        return $this->expressShippingPrice;
    }

    /**
     * @param float $expressShippingPrice
     * @return CartPreferences
     */
    public function withExpressShippingPrice($expressShippingPrice)
    {
        $new = clone $this;
        $new->expressShippingPrice = $expressShippingPrice;

        return $new;
    }

    /**
     * @return float
     */
    public function getFreeOrderRegularShippingPrice()
    {
        return $this->freeOrderRegularShippingPrice;
    }

    /**
     * @param float $freeOrderRegularShippingPrice
     * @return CartPreferences
     */
    public function withFreeOrderRegularShippingPrice($freeOrderRegularShippingPrice)
    {
        $new = clone $this;
        $new->freeOrderRegularShippingPrice = $freeOrderRegularShippingPrice;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHideSearchFeature()
    {
        return $this->hideSearchFeature;
    }

    /**
     * @param bool $hideSearchFeature
     * @return CartPreferences
     */
    public function withHideSearchFeature($hideSearchFeature)
    {
        $new = clone $this;
        $new->hideSearchFeature = $hideSearchFeature;

        return $new;
    }

    /**
     * @return float
     */
    public function getInternationalShippingPrice()
    {
        return $this->internationalShippingPrice;
    }

    /**
     * @param float $internationalShippingPrice
     * @return CartPreferences
     */
    public function withInternationalShippingPrice($internationalShippingPrice)
    {
        $new = clone $this;
        $new->internationalShippingPrice = $internationalShippingPrice;

        return $new;
    }

    /**
     * @return string
     */
    public function getLanguageLocaleCode()
    {
        return $this->languageLocaleCode;
    }

    /**
     * @param string $languageLocaleCode
     * @return CartPreferences
     */
    public function withLanguageLocaleCode($languageLocaleCode)
    {
        $new = clone $this;
        $new->languageLocaleCode = $languageLocaleCode;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPricesIncludeTax()
    {
        return $this->pricesIncludeTax;
    }

    /**
     * @param bool $pricesIncludeTax
     * @return CartPreferences
     */
    public function withPricesIncludeTax($pricesIncludeTax)
    {
        $new = clone $this;
        $new->pricesIncludeTax = $pricesIncludeTax;

        return $new;
    }

    /**
     * @return float
     */
    public function getRegularShippingPrice()
    {
        return $this->regularShippingPrice;
    }

    /**
     * @param float $regularShippingPrice
     * @return CartPreferences
     */
    public function withRegularShippingPrice($regularShippingPrice)
    {
        $new = clone $this;
        $new->regularShippingPrice = $regularShippingPrice;

        return $new;
    }

    /**
     * @return int
     */
    public function getSalesTaxKey()
    {
        return $this->salesTaxKey;
    }

    /**
     * @param int $salesTaxKey
     * @return CartPreferences
     */
    public function withSalesTaxKey($salesTaxKey)
    {
        $new = clone $this;
        $new->salesTaxKey = $salesTaxKey;

        return $new;
    }

    /**
     * @return string
     */
    public function getSiteName()
    {
        return $this->siteName;
    }

    /**
     * @param string $siteName
     * @return CartPreferences
     */
    public function withSiteName($siteName)
    {
        $new = clone $this;
        $new->siteName = $siteName;

        return $new;
    }

    /**
     * @return string
     */
    public function getSiteTitle()
    {
        return $this->siteTitle;
    }

    /**
     * @param string $siteTitle
     * @return CartPreferences
     */
    public function withSiteTitle($siteTitle)
    {
        $new = clone $this;
        $new->siteTitle = $siteTitle;

        return $new;
    }

    /**
     * @return string
     */
    public function getSoldOutLabel()
    {
        return $this->soldOutLabel;
    }

    /**
     * @param string $soldOutLabel
     * @return CartPreferences
     */
    public function withSoldOutLabel($soldOutLabel)
    {
        $new = clone $this;
        $new->soldOutLabel = $soldOutLabel;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\StateTaxRate
     */
    public function getStateTaxRates()
    {
        return $this->stateTaxRates;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\StateTaxRate $stateTaxRates
     * @return CartPreferences
     */
    public function withStateTaxRates($stateTaxRates)
    {
        $new = clone $this;
        $new->stateTaxRates = $stateTaxRates;

        return $new;
    }

    /**
     * @return string
     */
    public function getSuccessMessage()
    {
        return $this->successMessage;
    }

    /**
     * @param string $successMessage
     * @return CartPreferences
     */
    public function withSuccessMessage($successMessage)
    {
        $new = clone $this;
        $new->successMessage = $successMessage;

        return $new;
    }

    /**
     * @return string
     */
    public function getTemplateSetFolder()
    {
        return $this->templateSetFolder;
    }

    /**
     * @param string $templateSetFolder
     * @return CartPreferences
     */
    public function withTemplateSetFolder($templateSetFolder)
    {
        $new = clone $this;
        $new->templateSetFolder = $templateSetFolder;

        return $new;
    }

    /**
     * @return \BurgerDigital\eTapestry\Type\TransactionProcessor
     */
    public function getTransProcessor()
    {
        return $this->transProcessor;
    }

    /**
     * @param \BurgerDigital\eTapestry\Type\TransactionProcessor $transProcessor
     * @return CartPreferences
     */
    public function withTransProcessor($transProcessor)
    {
        $new = clone $this;
        $new->transProcessor = $transProcessor;

        return $new;
    }

    /**
     * @return string
     */
    public function getWelcomeMessage()
    {
        return $this->welcomeMessage;
    }

    /**
     * @param string $welcomeMessage
     * @return CartPreferences
     */
    public function withWelcomeMessage($welcomeMessage)
    {
        $new = clone $this;
        $new->welcomeMessage = $welcomeMessage;

        return $new;
    }


}

