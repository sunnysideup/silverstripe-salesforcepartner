<?php

namespace Sunnysideup\SalesforcePartner\Admin;

use ModelAdmin;

/**
 * Provides CMS Administration of {@link: RedirectedURL} objects
 *
 * @package redirectedurls
 * @author sam@silverstripe.com
 * @author scienceninjas@silverstripe.com
 */
class SalesforceAdmin extends ModelAdmin {

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
    private static $managed_models = array(
        'SalesforceDefaultContactField',
        'SalesforceContactLog',
    );
}
