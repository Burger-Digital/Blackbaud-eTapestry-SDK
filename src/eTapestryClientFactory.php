<?php

namespace BBurgerDigital\eTapestry;

use BBurgerDigital\eTapestry\eTapestryClient;
use BBurgerDigital\eTapestry\eTapestryClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class eTapestryClientFactory
{

    public static function factory(string $wsdl) : \BBurgerDigital\eTapestry\eTapestryClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(eTapestryClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new eTapestryClient($engine, $eventDispatcher);
    }


}

