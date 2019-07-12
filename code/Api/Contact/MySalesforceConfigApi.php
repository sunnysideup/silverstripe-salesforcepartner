<?php
/**
 * configuration for adding / updating contact records
 */
class MySalesforceContactConfigApi extends Object
{

    /**
     *
     * @var array
     */
    private static $site_wide_fields_to_send_on_creation = [];

    /**
     *
     * @var array
     */
    private static $site_wide_fields_to_send_on_update = [];

    /**
     *
     * @var array
     */
    private static $site_wide_filter_values = [];

    /**
     *
     * @var array
     */
    private static $run_time_fields_to_send_on_creation = [];

    /**
     *
     * @param  array|DataList|string $mixed fields to send for creations
     *
     */
    public static function add_fields_to_send_on_creation($mixed)
    {
        $array = self::mixed_to_array($mixed);

        self::$run_time_fields_to_send_on_creation += $array;
    }

    /**
     *
     * @var array
     */
    private static $run_time_fields_to_send_on_update = [];

    /**
     *
     * @param  array|DataList|string $mixed fields to send for updates
     *
     * @return array
     */
    public static function add_fields_to_send_on_update($mixed)
    {
        $array = self::mixed_to_array($mixed);

        self::$run_time_fields_to_send_on_update += $array;
    }

    /**
     *
     * @var array
     */
    private static $run_time_fields_for_filter = [];

    /**
     *
     * @param  array|DataList|string $mixed fields to send as filters
     *
     * @return array
     */
    public static function add_fields_to_use_for_filter($mixed)
    {
        $array = self::mixed_to_array($mixed);

        self::$run_time_fields_for_filter += $array;
    }


    /**
     *
     * @param  array|DataList|null $mixed fields to send
     *
     * @return array
     */
    public static function get_fields_to_send_on_creation($mixed = null)
    {
        $array = self::mixed_to_array($mixed);

        return array_merge(
            Config::inst()->get('MySalesforceContactConfigApi', 'site_wide_fields_to_send_on_creation'),
            $array,
            self::$run_time_fields_to_send_on_creation
        );
    }

    /**
     *
     * @param  array|DataList|null $mixed fields to send
     *
     * @return array
     */
    public static function get_fields_to_send_on_update($mixed = null)
    {
        $array = self::mixed_to_array($mixed);

        return array_merge(
            Config::inst()->get('MySalesforceContactConfigApi', 'site_wide_fields_to_send_on_update'),
            $array,
            self::$run_time_fields_to_send_on_update
        );
    }

    /**
     *
     * @param  array|DataList|null $mixed fields to send
     *
     * @return array|DataList|null
     */
    public static function get_fields_for_filter($mixed = null)
    {
        $array = self::mixed_to_array($mixed);

        return array_merge(
            Config::inst()->get('MySalesforceContactConfigApi', 'site_wide_filter_values'),
            $array,
            self::$run_time_fields_for_filter
        );
    }

    /**
     *
     * @param  DataList|array|null|string $mixed
     *
     * @return array
     */
    protected static function mixed_to_array($mixed = null)
    {
        if($mixed === null) {
            $array = [];
        } elseif($mixed instanceof SS_List) {
            $array = [];
            foreach($mixed as $object) {
                $array[trim($object->Key)] = $object->BetterValue();
            }
        } elseif(is_string($mixed)) {
            $array = [ $mixed ];
        } elseif(is_array($mixed)) {
            $array = $mixed;
        } else {
            $array = [];
            user_error('Variable '.print_r($mixed, 1).' should be an array. Currently, it is a '.gettype($mixed));
        }

        return $array;
    }
}
