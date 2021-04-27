<?php

namespace BurgerDigital\eTapestry;

use BurgerDigital\eTapestry\eTapestryClient;
use BurgerDigital\eTapestry\eTapestryClassmap;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;
use BurgerDigital\eTapestry\Middleware\RemoveEmptyNodesMiddleware;
use Phpro\SoapClient\Soap\Handler\HttPlugHandle;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class eTapestryClientFactory
{

    public static function factory(string $wsdl) : \BurgerDigital\eTapestry\eTapestryClient
    {
        $handler = HttPlugHandle::createForClient(
            GuzzleAdapter::createWithConfig(['headers' => ['User-Agent' => 'testing/1.0']])
        );

        $handler->addMiddleware(new RemoveEmptyNodesMiddleware());

        $engine = ExtSoapEngineFactory::fromOptionsWithHandler(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(eTapestryClassmap::getCollection()),
            $handler
        );

        $eventDispatcher = new EventDispatcher();

        return new eTapestryClient($engine, $eventDispatcher);
    }


}

