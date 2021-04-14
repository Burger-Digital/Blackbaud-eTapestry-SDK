<?php

namespace BurgerDigital\eTapestry;

use BurgerDigital\eTapestry\eTapestryClient;
use BurgerDigital\eTapestry\eTapestryClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class eTapestryClientFactory
{

    public static function factory(string $wsdl) : \BurgerDigital\eTapestry\eTapestryClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(eTapestryClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new eTapestryClient($engine, $eventDispatcher);
    }


}

