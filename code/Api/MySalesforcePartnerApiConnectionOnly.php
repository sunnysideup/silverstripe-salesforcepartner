<?php

use SForce\Client\Partner;

use SForce\Wsdl\create;

class MySalesforcePartnerApiConnectionOnly extends Object
{
    private static $username = '';
    private static $password = '';
    private static $security_token = '';
    private static $wsdl_location = '';

    protected static $my_connection = null;
    protected static $my_soap_client = null;

    public static function singleton()
    {
        self::$my_connection = self::create_from_cache();

        if (! self::$my_connection) {

            // Get details from yml
            $wsdlLocation = Director::baseFolder() . '/' . self::config()->wsdl_location;
            $username = self::config()->username;
            $password = self::config()->password . self::config()->security_token;

            // Create connection
            self::$my_connection = new MySalesforcePartnerApi();
            self::$my_soap_client = self::$my_connection->createConnection($wsdlLocation);
            self::$my_connection->login(
                $username,
                $password
            );

            // Save connection cache
            $cache = SS_Cache::factory(self::class);
            $cache->save(self::$my_connection->getLocation(), 'location');
            $cache->save(self::$my_connection->getSessionId(), 'sessionId');
        }

        return self::$my_connection;
    }

    protected static function create_from_cache()
    {
        $sessionData = self::retrieve_cache_data();

        if (! $sessionData) {
            return null;
        }

        $location = $sessionData['location'];
        $sessionId = $sessionData['sessionId'];

        if (! $location || ! $sessionId) {
            return null;
        }

        $sessionHeader = new SForce\Wsdl\SessionHeader($sessionId);

        if (! $sessionHeader) {
            return null;
        }

        // Use SforceEnterpriseClient or SforcePartnerClient as appropriate
        $wsdlLocation = Director::baseFolder() . '/' . self::config()->wsdl_location;

        // Get from cache
        self::$my_connection = new MySalesforcePartnerApi();
        self::$my_connection->createConnection($wsdlLocation);
        self::$my_connection->setEndpoint($location);
        self::$my_connection->setSessionHeader($sessionHeader);

        return self::$my_connection;
    }

    protected static function retrieve_cache_data()
    {
        $cache = SS_Cache::factory(self::class);
        $location = $cache->load('location');
        $sessionId = $cache->load('sessionId');

        return [
            'location' => $location,
            'sessionId' => $sessionId,
        ];
    }


    public static function debug($showSessionID = false)
    {
        $xml = self::$my_soap_client->__getLastRequest();
        $domxml = new \DOMDocument('1.0');
        $domxml->preserveWhiteSpace = false;
        $domxml->formatOutput = true;
        /* @var $xml SimpleXMLElement */
        $domxml->loadXML($xml);
        if ($showSessionID === false) {
            $list = $domxml->getElementsByTagName('sessionId');
            foreach ($list as $domElement) {
                $domElement->nodeValue = '--- hidden for security reasons ---';
            }
        }

        return $domxml->saveXML();
    }
}
