<?php
/**
 * Provides CMS Administration of {@link: RedirectedURL} objects
 *
 */
class SalesforceAdmin extends ModelAdmin
{
    /**
     * @var string
     */
    private static $url_segment = 'salesforceadmin';

    /**
     * @var string
     */
    private static $menu_title = 'Sales Force';

    // /**
    //  * @var string
    //  */
    // private static $menu_icon = '';

    /**
     * @var array
     */
    private static $managed_models = [
        'SalesforceDefaultContactField',
        'SalesforceContactLog',
    ];
}
