<?php

declare(strict_types=1);

namespace BurgerDigital\eTapestry\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CartPreferences StructType
 * @subpackage Structs
 */
class CartPreferences extends AbstractStructBase
{
    /**
     * The bbpsCheckoutJavascriptUrl
     * @var string|null
     */
    protected ?string $bbpsCheckoutJavascriptUrl = null;
    /**
     * The categoryHeader
     * @var string|null
     */
    protected ?string $categoryHeader = null;
    /**
     * The checkoutQuestions
     * Meta information extracted from the WSDL
     * - arrayType: tns:Question[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var \BurgerDigital\eTapestry\StructType\Question[]
     */
    protected array $checkoutQuestions = [];
    /**
     * The currencyLocaleCode
     * @var string|null
     */
    protected ?string $currencyLocaleCode = null;
    /**
     * The discountPromoCodes
     * Meta information extracted from the WSDL
     * - arrayType: string[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var string[]
     */
    protected array $discountPromoCodes = [];
    /**
     * The domesticCountries
     * Meta information extracted from the WSDL
     * - arrayType: string[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var string[]
     */
    protected array $domesticCountries = [];
    /**
     * The expressShippingPrice
     * @var float|null
     */
    protected ?float $expressShippingPrice = null;
    /**
     * The freeOrderRegularShippingPrice
     * @var float|null
     */
    protected ?float $freeOrderRegularShippingPrice = null;
    /**
     * The hideSearchFeature
     * @var bool|null
     */
    protected ?bool $hideSearchFeature = null;
    /**
     * The internationalShippingPrice
     * @var float|null
     */
    protected ?float $internationalShippingPrice = null;
    /**
     * The languageLocaleCode
     * @var string|null
     */
    protected ?string $languageLocaleCode = null;
    /**
     * The pricesIncludeTax
     * @var bool|null
     */
    protected ?bool $pricesIncludeTax = null;
    /**
     * The regularShippingPrice
     * @var float|null
     */
    protected ?float $regularShippingPrice = null;
    /**
     * The salesTaxKey
     * @var int|null
     */
    protected ?int $salesTaxKey = null;
    /**
     * The siteName
     * @var string|null
     */
    protected ?string $siteName = null;
    /**
     * The siteTitle
     * @var string|null
     */
    protected ?string $siteTitle = null;
    /**
     * The soldOutLabel
     * @var string|null
     */
    protected ?string $soldOutLabel = null;
    /**
     * The stateTaxRates
     * Meta information extracted from the WSDL
     * - arrayType: tns:StateTaxRate[]
     * - base: soap11-enc:Array
     * - ref: soap11-enc:arrayType
     * @var \BurgerDigital\eTapestry\StructType\StateTaxRate[]
     */
    protected array $stateTaxRates = [];
    /**
     * The successMessage
     * @var string|null
     */
    protected ?string $successMessage = null;
    /**
     * The templateSetFolder
     * @var string|null
     */
    protected ?string $templateSetFolder = null;
    /**
     * The transProcessor
     * @var \BurgerDigital\eTapestry\StructType\TransactionProcessor|null
     */
    protected ?\StructType\TransactionProcessor $transProcessor = null;
    /**
     * The welcomeMessage
     * @var string|null
     */
    protected ?string $welcomeMessage = null;
    /**
     * Constructor method for CartPreferences
     * @uses CartPreferences::setBbpsCheckoutJavascriptUrl()
     * @uses CartPreferences::setCategoryHeader()
     * @uses CartPreferences::setCheckoutQuestions()
     * @uses CartPreferences::setCurrencyLocaleCode()
     * @uses CartPreferences::setDiscountPromoCodes()
     * @uses CartPreferences::setDomesticCountries()
     * @uses CartPreferences::setExpressShippingPrice()
     * @uses CartPreferences::setFreeOrderRegularShippingPrice()
     * @uses CartPreferences::setHideSearchFeature()
     * @uses CartPreferences::setInternationalShippingPrice()
     * @uses CartPreferences::setLanguageLocaleCode()
     * @uses CartPreferences::setPricesIncludeTax()
     * @uses CartPreferences::setRegularShippingPrice()
     * @uses CartPreferences::setSalesTaxKey()
     * @uses CartPreferences::setSiteName()
     * @uses CartPreferences::setSiteTitle()
     * @uses CartPreferences::setSoldOutLabel()
     * @uses CartPreferences::setStateTaxRates()
     * @uses CartPreferences::setSuccessMessage()
     * @uses CartPreferences::setTemplateSetFolder()
     * @uses CartPreferences::setTransProcessor()
     * @uses CartPreferences::setWelcomeMessage()
     * @param string $bbpsCheckoutJavascriptUrl
     * @param string $categoryHeader
     * @param \BurgerDigital\eTapestry\StructType\Question[] $checkoutQuestions
     * @param string $currencyLocaleCode
     * @param string[] $discountPromoCodes
     * @param string[] $domesticCountries
     * @param float $expressShippingPrice
     * @param float $freeOrderRegularShippingPrice
     * @param bool $hideSearchFeature
     * @param float $internationalShippingPrice
     * @param string $languageLocaleCode
     * @param bool $pricesIncludeTax
     * @param float $regularShippingPrice
     * @param int $salesTaxKey
     * @param string $siteName
     * @param string $siteTitle
     * @param string $soldOutLabel
     * @param \BurgerDigital\eTapestry\StructType\StateTaxRate[] $stateTaxRates
     * @param string $successMessage
     * @param string $templateSetFolder
     * @param \BurgerDigital\eTapestry\StructType\TransactionProcessor $transProcessor
     * @param string $welcomeMessage
     */
    public function __construct(?string $bbpsCheckoutJavascriptUrl = null, ?string $categoryHeader = null, array $checkoutQuestions = [], ?string $currencyLocaleCode = null, array $discountPromoCodes = [], array $domesticCountries = [], ?float $expressShippingPrice = null, ?float $freeOrderRegularShippingPrice = null, ?bool $hideSearchFeature = null, ?float $internationalShippingPrice = null, ?string $languageLocaleCode = null, ?bool $pricesIncludeTax = null, ?float $regularShippingPrice = null, ?int $salesTaxKey = null, ?string $siteName = null, ?string $siteTitle = null, ?string $soldOutLabel = null, array $stateTaxRates = [], ?string $successMessage = null, ?string $templateSetFolder = null, ?\StructType\TransactionProcessor $transProcessor = null, ?string $welcomeMessage = null)
    {
        $this
            ->setBbpsCheckoutJavascriptUrl($bbpsCheckoutJavascriptUrl)
            ->setCategoryHeader($categoryHeader)
            ->setCheckoutQuestions($checkoutQuestions)
            ->setCurrencyLocaleCode($currencyLocaleCode)
            ->setDiscountPromoCodes($discountPromoCodes)
            ->setDomesticCountries($domesticCountries)
            ->setExpressShippingPrice($expressShippingPrice)
            ->setFreeOrderRegularShippingPrice($freeOrderRegularShippingPrice)
            ->setHideSearchFeature($hideSearchFeature)
            ->setInternationalShippingPrice($internationalShippingPrice)
            ->setLanguageLocaleCode($languageLocaleCode)
            ->setPricesIncludeTax($pricesIncludeTax)
            ->setRegularShippingPrice($regularShippingPrice)
            ->setSalesTaxKey($salesTaxKey)
            ->setSiteName($siteName)
            ->setSiteTitle($siteTitle)
            ->setSoldOutLabel($soldOutLabel)
            ->setStateTaxRates($stateTaxRates)
            ->setSuccessMessage($successMessage)
            ->setTemplateSetFolder($templateSetFolder)
            ->setTransProcessor($transProcessor)
            ->setWelcomeMessage($welcomeMessage);
    }
    /**
     * Get bbpsCheckoutJavascriptUrl value
     * @return string|null
     */
    public function getBbpsCheckoutJavascriptUrl(): ?string
    {
        return $this->bbpsCheckoutJavascriptUrl;
    }
    /**
     * Set bbpsCheckoutJavascriptUrl value
     * @param string $bbpsCheckoutJavascriptUrl
     * @return \BurgerDigital\eTapestry\StructType\CartPreferences
     */
    public function setBbpsCheckoutJavascriptUrl(?string $bbpsCheckoutJavascriptUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($bbpsCheckoutJavascriptUrl) && !is_string($bbpsCheckoutJavascriptUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bbpsCheckoutJavascriptUrl, true), gettype($bbpsCheckoutJavascriptUrl)), __LINE__);
        }
        $this->bbpsCheckoutJavascriptUrl = $bbpsCheckoutJavascriptUrl;
        
        return $this;
    }
    /**
     * Get categoryHeader value
     * @return string|null
     */
    public function getCategoryHeader(): ?string
    {
        return $this->categoryHeader;
    }
    /**
     * Set categoryHeader value
     * @param string $categoryHeader
     * @return \BurgerDigital\eTapestry\StructType\CartPreferences
     */
    public function setCategoryHeader(?string $categoryHeader = null): self
    {
        // validation for constraint: string
        if (!is_null($categoryHeader) && !is_string($categoryHeader)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryHeader, true), gettype($categoryHeader)), __LINE__);
        }
        $this->categoryHeader = $categoryHeader;
        
        return $this;
    }
    /**
     * Get checkoutQuestions value
     * @return \BurgerDigital\eTapestry\StructType\Question[]
     */
    public function getCheckoutQuestions(): array
    {
        return $this->checkoutQuestions;
    }
    /**
     * This method is responsible for validating the values passed to the setCheckoutQuestions method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCheckoutQuestions method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCheckoutQuestionsForArrayConstraintsFromSetCheckoutQuestions(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $cartPreferencesCheckoutQuestionsItem) {
            // validation for constraint: itemType
            if (!$cartPreferencesCheckoutQuestionsItem instanceof \BurgerDigital\eTapestry\StructType\Question) {
                $invalidValues[] = is_object($cartPreferencesCheckoutQuestionsItem) ? get_class($cartPreferencesCheckoutQuestionsItem) : sprintf('%s(%s)', gettype($cartPreferencesCheckoutQuestionsItem), var_export($cartPreferencesCheckoutQuestionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The checkoutQuestions property can only contain items of type \BurgerDigital\eTapestry\StructType\Question, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set checkoutQuestions value
     * @throws InvalidArgumentException
     * @param \BurgerDigital\eTapestry\StructType\Question[] $checkoutQuestions
     * @return \BurgerDigital\eTapestry\StructType\CartPreferences
     */
    public function setCheckoutQuestions(array $checkoutQuestions = []): self
    {
        // validation for constraint: array
        if ('' !== ($checkoutQuestionsArrayErrorMessage = self::validateCheckoutQuestionsForArrayConstraintsFromSetCheckoutQuestions($checkoutQuestions))) {
            throw new InvalidArgumentException($checkoutQuestionsArrayErrorMessage, __LINE__);
        }
        $this->checkoutQuestions = $checkoutQuestions;
        
        return $this;
    }
    /**
     * Add item to checkoutQuestions value
     * @throws InvalidArgumentException
     * @param \BurgerDigital\eTapestry\StructType\Question $item
     * @return \BurgerDigital\eTapestry\StructType\CartPreferences
     */
    public function addToCheckoutQuestions(\StructType\Question $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \BurgerDigital\eTapestry\StructType\Question) {
            throw new InvalidArgumentException(sprintf('The checkoutQuestions property can only contain items of type \BurgerDigital\eTapestry\StructType\Question, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->checkoutQuestions[] = $item;
        
        return $this;
    }
    /**
     * Get currencyLocaleCode value
     * @return string|null
     */
    public function getCurrencyLocaleCode(): ?string
    {
        return $this->currencyLocaleCode;
    }
    /**
     * Set currencyLocaleCode value
     * @param string $currencyLocaleCode
     * @return \BurgerDigital\eTapestry\StructType\CartPreferences
     */
    public function setCurrencyLocaleCode(?string $currencyLocaleCode = null): self
    {
        // validation for constraint: string
        if (!is_null($currencyLocaleCode) && !is_string($currencyLocaleCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currencyLocaleCode, true), gettype($currencyLocaleCode)), __LINE__);
        }
        $this->currencyLocaleCode = $currencyLocaleCode;
        
        return $this;
    }
    /**
     * Get discountPromoCodes value
     * @return string[]
     */
    public function getDiscountPromoCodes(): array
    {
        return $this->discountPromoCodes;
    }
    /**
     * This method is responsible for validating the values passed to the setDiscountPromoCodes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDiscountPromoCodes method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDiscountPromoCodesForArrayConstraintsFromSetDiscountPromoCodes(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $cartPreferencesDiscountPromoCodesItem) {
            // validation for constraint: itemType
            if (!is_string($cartPreferencesDiscountPromoCodesItem)) {
                $invalidValues[] = is_object($cartPreferencesDiscountPromoCodesItem) ? get_class($cartPreferencesDiscountPromoCodesItem) : sprintf('%s(%s)', gettype($cartPreferencesDiscountPromoCodesItem), var_export($cartPreferencesDiscountPromoCodesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The discountPromoCodes property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set discountPromoCodes value
     * @throws InvalidArgumentException
     * @param string[] $discountPromoCodes
     * @return \BurgerDigital\eTapestry\StructType\CartPreferences
     */
    public function setDiscountPromoCodes(array $discountPromoCodes = []): self
    {
        // validation for constraint: array
        if ('' !== ($discountPromoCodesArrayErrorMessage = self::validateDiscountPromoCodesForArrayConstraintsFromSetDiscountPromoCodes($discountPromoCodes))) {
            throw new InvalidArgumentException($discountPromoCodesArrayErrorMessage, __LINE__);
        }
        $this->discountPromoCodes = $discountPromoCodes;
        
        return $this;
    }
    /**
     * Add item to discountPromoCodes value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \BurgerDigital\eTapestry\StructType\CartPreferences
     */
    public function addToDiscountPromoCodes(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The discountPromoCodes property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->discountPromoCodes[] = $item;
        
        return $this;
    }
    /**
     * Get domesticCountries value
     * @return string[]
     */
    public function getDomesticCountries(): array
    {
        return $this->domesticCountries;
    }
    /**
     * This method is responsible for validating the values passed to the setDomesticCountries method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDomesticCountries method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDomesticCountriesForArrayConstraintsFromSetDomesticCountries(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $cartPreferencesDomesticCountriesItem) {
            // validation for constraint: itemType
            if (!is_string($cartPreferencesDomesticCountriesItem)) {
                $invalidValues[] = is_object($cartPreferencesDomesticCountriesItem) ? get_class($cartPreferencesDomesticCountriesItem) : sprintf('%s(%s)', gettype($cartPreferencesDomesticCountriesItem), var_export($cartPreferencesDomesticCountriesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The domesticCountries property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set domesticCountries value
     * @throws InvalidArgumentException
     * @param string[] $domesticCountries
     * @return \BurgerDigital\eTapestry\StructType\CartPreferences
     */
    public function setDomesticCountries(array $domesticCountries = []): self
    {
        // validation for constraint: array
        if ('' !== ($domesticCountriesArrayErrorMessage = self::validateDomesticCountriesForArrayConstraintsFromSetDomesticCountries($domesticCountries))) {
            throw new InvalidArgumentException($domesticCountriesArrayErrorMessage, __LINE__);
        }
        $this->domesticCountries = $domesticCountries;
        
        return $this;
    }
    /**
     * Add item to domesticCountries value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \BurgerDigital\eTapestry\StructType\CartPreferences
     */
    public function addToDomesticCountries(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The domesticCountries property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->domesticCountries[] = $item;
        
        return $this;
    }
    /**
     * Get expressShippingPrice value
     * @return float|null
     */
    public function getExpressShippingPrice(): ?float
    {
        return $this->expressShippingPrice;
    }
    /**
     * Set expressShippingPrice value
     * @param float $expressShippingPrice
     * @return \BurgerDigital\eTapestry\StructType\CartPreferences
     */
    public function setExpressShippingPrice(?float $expressShippingPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($expressShippingPrice) && !(is_float($expressShippingPrice) || is_numeric($expressShippingPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($expressShippingPrice, true), gettype($expressShippingPrice)), __LINE__);
        }
        $this->expressShippingPrice = $expressShippingPrice;
        
        return $this;
    }
    /**
     * Get freeOrderRegularShippingPrice value
     * @return float|null
     */
    public function getFreeOrderRegularShippingPrice(): ?float
    {
        return $this->freeOrderRegularShippingPrice;
    }
    /**
     * Set freeOrderRegularShippingPrice value
     * @param float $freeOrderRegularShippingPrice
     * @return \BurgerDigital\eTapestry\StructType\CartPreferences
     */
    public function setFreeOrderRegularShippingPrice(?float $freeOrderRegularShippingPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($freeOrderRegularShippingPrice) && !(is_float($freeOrderRegularShippingPrice) || is_numeric($freeOrderRegularShippingPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($freeOrderRegularShippingPrice, true), gettype($freeOrderRegularShippingPrice)), __LINE__);
        }
        $this->freeOrderRegularShippingPrice = $freeOrderRegularShippingPrice;
        
        return $this;
    }
    /**
     * Get hideSearchFeature value
     * @return bool|null
     */
    public function getHideSearchFeature(): ?bool
    {
        return $this->hideSearchFeature;
    }
    /**
     * Set hideSearchFeature value
     * @param bool $hideSearchFeature
     * @return \BurgerDigital\eTapestry\StructType\CartPreferences
     */
    public function setHideSearchFeature(?bool $hideSearchFeature = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hideSearchFeature) && !is_bool($hideSearchFeature)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hideSearchFeature, true), gettype($hideSearchFeature)), __LINE__);
        }
        $this->hideSearchFeature = $hideSearchFeature;
        
        return $this;
    }
    /**
     * Get internationalShippingPrice value
     * @return float|null
     */
    public function getInternationalShippingPrice(): ?float
    {
        return $this->internationalShippingPrice;
    }
    /**
     * Set internationalShippingPrice value
     * @param float $internationalShippingPrice
     * @return \BurgerDigital\eTapestry\StructType\CartPreferences
     */
    public function setInternationalShippingPrice(?float $internationalShippingPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($internationalShippingPrice) && !(is_float($internationalShippingPrice) || is_numeric($internationalShippingPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($internationalShippingPrice, true), gettype($internationalShippingPrice)), __LINE__);
        }
        $this->internationalShippingPrice = $internationalShippingPrice;
        
        return $this;
    }
    /**
     * Get languageLocaleCode value
     * @return string|null
     */
    public function getLanguageLocaleCode(): ?string
    {
        return $this->languageLocaleCode;
    }
    /**
     * Set languageLocaleCode value
     * @param string $languageLocaleCode
     * @return \BurgerDigital\eTapestry\StructType\CartPreferences
     */
    public function setLanguageLocaleCode(?string $languageLocaleCode = null): self
    {
        // validation for constraint: string
        if (!is_null($languageLocaleCode) && !is_string($languageLocaleCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($languageLocaleCode, true), gettype($languageLocaleCode)), __LINE__);
        }
        $this->languageLocaleCode = $languageLocaleCode;
        
        return $this;
    }
    /**
     * Get pricesIncludeTax value
     * @return bool|null
     */
    public function getPricesIncludeTax(): ?bool
    {
        return $this->pricesIncludeTax;
    }
    /**
     * Set pricesIncludeTax value
     * @param bool $pricesIncludeTax
     * @return \BurgerDigital\eTapestry\StructType\CartPreferences
     */
    public function setPricesIncludeTax(?bool $pricesIncludeTax = null): self
    {
        // validation for constraint: boolean
        if (!is_null($pricesIncludeTax) && !is_bool($pricesIncludeTax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($pricesIncludeTax, true), gettype($pricesIncludeTax)), __LINE__);
        }
        $this->pricesIncludeTax = $pricesIncludeTax;
        
        return $this;
    }
    /**
     * Get regularShippingPrice value
     * @return float|null
     */
    public function getRegularShippingPrice(): ?float
    {
        return $this->regularShippingPrice;
    }
    /**
     * Set regularShippingPrice value
     * @param float $regularShippingPrice
     * @return \BurgerDigital\eTapestry\StructType\CartPreferences
     */
    public function setRegularShippingPrice(?float $regularShippingPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($regularShippingPrice) && !(is_float($regularShippingPrice) || is_numeric($regularShippingPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($regularShippingPrice, true), gettype($regularShippingPrice)), __LINE__);
        }
        $this->regularShippingPrice = $regularShippingPrice;
        
        return $this;
    }
    /**
     * Get salesTaxKey value
     * @return int|null
     */
    public function getSalesTaxKey(): ?int
    {
        return $this->salesTaxKey;
    }
    /**
     * Set salesTaxKey value
     * @param int $salesTaxKey
     * @return \BurgerDigital\eTapestry\StructType\CartPreferences
     */
    public function setSalesTaxKey(?int $salesTaxKey = null): self
    {
        // validation for constraint: int
        if (!is_null($salesTaxKey) && !(is_int($salesTaxKey) || ctype_digit($salesTaxKey))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($salesTaxKey, true), gettype($salesTaxKey)), __LINE__);
        }
        $this->salesTaxKey = $salesTaxKey;
        
        return $this;
    }
    /**
     * Get siteName value
     * @return string|null
     */
    public function getSiteName(): ?string
    {
        return $this->siteName;
    }
    /**
     * Set siteName value
     * @param string $siteName
     * @return \BurgerDigital\eTapestry\StructType\CartPreferences
     */
    public function setSiteName(?string $siteName = null): self
    {
        // validation for constraint: string
        if (!is_null($siteName) && !is_string($siteName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($siteName, true), gettype($siteName)), __LINE__);
        }
        $this->siteName = $siteName;
        
        return $this;
    }
    /**
     * Get siteTitle value
     * @return string|null
     */
    public function getSiteTitle(): ?string
    {
        return $this->siteTitle;
    }
    /**
     * Set siteTitle value
     * @param string $siteTitle
     * @return \BurgerDigital\eTapestry\StructType\CartPreferences
     */
    public function setSiteTitle(?string $siteTitle = null): self
    {
        // validation for constraint: string
        if (!is_null($siteTitle) && !is_string($siteTitle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($siteTitle, true), gettype($siteTitle)), __LINE__);
        }
        $this->siteTitle = $siteTitle;
        
        return $this;
    }
    /**
     * Get soldOutLabel value
     * @return string|null
     */
    public function getSoldOutLabel(): ?string
    {
        return $this->soldOutLabel;
    }
    /**
     * Set soldOutLabel value
     * @param string $soldOutLabel
     * @return \BurgerDigital\eTapestry\StructType\CartPreferences
     */
    public function setSoldOutLabel(?string $soldOutLabel = null): self
    {
        // validation for constraint: string
        if (!is_null($soldOutLabel) && !is_string($soldOutLabel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($soldOutLabel, true), gettype($soldOutLabel)), __LINE__);
        }
        $this->soldOutLabel = $soldOutLabel;
        
        return $this;
    }
    /**
     * Get stateTaxRates value
     * @return \BurgerDigital\eTapestry\StructType\StateTaxRate[]
     */
    public function getStateTaxRates(): array
    {
        return $this->stateTaxRates;
    }
    /**
     * This method is responsible for validating the values passed to the setStateTaxRates method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStateTaxRates method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStateTaxRatesForArrayConstraintsFromSetStateTaxRates(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $cartPreferencesStateTaxRatesItem) {
            // validation for constraint: itemType
            if (!$cartPreferencesStateTaxRatesItem instanceof \BurgerDigital\eTapestry\StructType\StateTaxRate) {
                $invalidValues[] = is_object($cartPreferencesStateTaxRatesItem) ? get_class($cartPreferencesStateTaxRatesItem) : sprintf('%s(%s)', gettype($cartPreferencesStateTaxRatesItem), var_export($cartPreferencesStateTaxRatesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The stateTaxRates property can only contain items of type \BurgerDigital\eTapestry\StructType\StateTaxRate, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set stateTaxRates value
     * @throws InvalidArgumentException
     * @param \BurgerDigital\eTapestry\StructType\StateTaxRate[] $stateTaxRates
     * @return \BurgerDigital\eTapestry\StructType\CartPreferences
     */
    public function setStateTaxRates(array $stateTaxRates = []): self
    {
        // validation for constraint: array
        if ('' !== ($stateTaxRatesArrayErrorMessage = self::validateStateTaxRatesForArrayConstraintsFromSetStateTaxRates($stateTaxRates))) {
            throw new InvalidArgumentException($stateTaxRatesArrayErrorMessage, __LINE__);
        }
        $this->stateTaxRates = $stateTaxRates;
        
        return $this;
    }
    /**
     * Add item to stateTaxRates value
     * @throws InvalidArgumentException
     * @param \BurgerDigital\eTapestry\StructType\StateTaxRate $item
     * @return \BurgerDigital\eTapestry\StructType\CartPreferences
     */
    public function addToStateTaxRates(\StructType\StateTaxRate $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \BurgerDigital\eTapestry\StructType\StateTaxRate) {
            throw new InvalidArgumentException(sprintf('The stateTaxRates property can only contain items of type \BurgerDigital\eTapestry\StructType\StateTaxRate, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->stateTaxRates[] = $item;
        
        return $this;
    }
    /**
     * Get successMessage value
     * @return string|null
     */
    public function getSuccessMessage(): ?string
    {
        return $this->successMessage;
    }
    /**
     * Set successMessage value
     * @param string $successMessage
     * @return \BurgerDigital\eTapestry\StructType\CartPreferences
     */
    public function setSuccessMessage(?string $successMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($successMessage) && !is_string($successMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($successMessage, true), gettype($successMessage)), __LINE__);
        }
        $this->successMessage = $successMessage;
        
        return $this;
    }
    /**
     * Get templateSetFolder value
     * @return string|null
     */
    public function getTemplateSetFolder(): ?string
    {
        return $this->templateSetFolder;
    }
    /**
     * Set templateSetFolder value
     * @param string $templateSetFolder
     * @return \BurgerDigital\eTapestry\StructType\CartPreferences
     */
    public function setTemplateSetFolder(?string $templateSetFolder = null): self
    {
        // validation for constraint: string
        if (!is_null($templateSetFolder) && !is_string($templateSetFolder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($templateSetFolder, true), gettype($templateSetFolder)), __LINE__);
        }
        $this->templateSetFolder = $templateSetFolder;
        
        return $this;
    }
    /**
     * Get transProcessor value
     * @return \BurgerDigital\eTapestry\StructType\TransactionProcessor|null
     */
    public function getTransProcessor(): ?\StructType\TransactionProcessor
    {
        return $this->transProcessor;
    }
    /**
     * Set transProcessor value
     * @param \BurgerDigital\eTapestry\StructType\TransactionProcessor $transProcessor
     * @return \BurgerDigital\eTapestry\StructType\CartPreferences
     */
    public function setTransProcessor(?\StructType\TransactionProcessor $transProcessor = null): self
    {
        $this->transProcessor = $transProcessor;
        
        return $this;
    }
    /**
     * Get welcomeMessage value
     * @return string|null
     */
    public function getWelcomeMessage(): ?string
    {
        return $this->welcomeMessage;
    }
    /**
     * Set welcomeMessage value
     * @param string $welcomeMessage
     * @return \BurgerDigital\eTapestry\StructType\CartPreferences
     */
    public function setWelcomeMessage(?string $welcomeMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($welcomeMessage) && !is_string($welcomeMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($welcomeMessage, true), gettype($welcomeMessage)), __LINE__);
        }
        $this->welcomeMessage = $welcomeMessage;
        
        return $this;
    }
}
