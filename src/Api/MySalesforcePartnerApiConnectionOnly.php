<?php

use SForce\Client\Partner;

use SForce\Wsdl\create;


/**
  * ### @@@@ START REPLACEMENT @@@@ ###
  * WHY: upgrade to SS4
  * OLD:  extends Object (ignore case)
  * NEW:  extends ViewableData (COMPLEX)
  * EXP: This used to extend Object, but object does not exist anymore. You can also manually add use Extensible, use Injectable, and use Configurable
  * ### @@@@ STOP REPLACEMENT @@@@ ###
  */
class MySalesforcePartnerApiConnectionOnly extends ViewableData
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

/**
  * ### @@@@ START REPLACEMENT @@@@ ###
  * WHY: upgrade to SS4
  * OLD: Cache::factory( (case sensitive)
  * NEW: SilverStripe\Core\Injector\Injector::inst()->get(Psr\SimpleCache\CacheInterface::class '.  (COMPLEX)
  * EXP: Check cache implementation - see: https://docs.silverstripe.org/en/4/changelogs/4.0.0#cache
  * ### @@@@ STOP REPLACEMENT @@@@ ###
  */
            $cache = SS_SilverStripe\Core\Injector\Injector::inst()->get(Psr\SimpleCache\CacheInterface::class '. self::class);

/**
  * ### @@@@ START REPLACEMENT @@@@ ###
  * WHY: upgrade to SS4
  * OLD: $cache->save( (case sensitive)
  * NEW: $cache->set( (COMPLEX)
  * EXP: Cache key and value need to be swapped!!! Put key first. See: https://docs.silverstripe.org/en/4/changelogs/4.0.0#cache
  * ### @@@@ STOP REPLACEMENT @@@@ ###
  */
            $cache->set(self::$my_connection->getLocation(), 'location');

/**
  * ### @@@@ START REPLACEMENT @@@@ ###
  * WHY: upgrade to SS4
  * OLD: $cache->save( (case sensitive)
  * NEW: $cache->set( (COMPLEX)
  * EXP: Cache key and value need to be swapped!!! Put key first. See: https://docs.silverstripe.org/en/4/changelogs/4.0.0#cache
  * ### @@@@ STOP REPLACEMENT @@@@ ###
  */
            $cache->set(self::$my_connection->getSessionId(), 'sessionId');
        }

        return self::$my_connection;
    }

    protected static function create_from_cache()
    {
        $sessionData = self::retrieve_cache_data();

        if (empty($sessionData)) {
            return null;
        }

        $location = $sessionData['location'];
        $sessionId = $sessionData['sessionId'];

        if (! $location || ! $sessionId) {
            return null;
        }

        $sessionHeader = new SForce\Wsdl\SessionHeader($sessionId);

        if (empty($sessionHeader)) {
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

/**
  * ### @@@@ START REPLACEMENT @@@@ ###
  * WHY: upgrade to SS4
  * OLD: Cache::factory( (case sensitive)
  * NEW: SilverStripe\Core\Injector\Injector::inst()->get(Psr\SimpleCache\CacheInterface::class '.  (COMPLEX)
  * EXP: Check cache implementation - see: https://docs.silverstripe.org/en/4/changelogs/4.0.0#cache
  * ### @@@@ STOP REPLACEMENT @@@@ ###
  */
        $cache = SS_SilverStripe\Core\Injector\Injector::inst()->get(Psr\SimpleCache\CacheInterface::class '. self::class);

/**
  * ### @@@@ START REPLACEMENT @@@@ ###
  * WHY: upgrade to SS4
  * OLD: $cache->load( (case sensitive)
  * NEW: $cache->has( (COMPLEX)
  * EXP: See: https://docs.silverstripe.org/en/4/changelogs/4.0.0#cache, you may also need to add $cache->get( !!!
  * ### @@@@ STOP REPLACEMENT @@@@ ###
  */
        $location = $cache->has('location');

/**
  * ### @@@@ START REPLACEMENT @@@@ ###
  * WHY: upgrade to SS4
  * OLD: $cache->load( (case sensitive)
  * NEW: $cache->has( (COMPLEX)
  * EXP: See: https://docs.silverstripe.org/en/4/changelogs/4.0.0#cache, you may also need to add $cache->get( !!!
  * ### @@@@ STOP REPLACEMENT @@@@ ###
  */
        $sessionId = $cache->has('sessionId');

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
