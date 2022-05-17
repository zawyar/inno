<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel Blocker Core Setting
    |--------------------------------------------------------------------------
    */
    'laravelBlockerEnabled'         => env('LARAVEL_BLOCKER_ENABLED', true),

    /*
    |--------------------------------------------------------------------------
    | Laravel Blocker Database Settings
    |--------------------------------------------------------------------------
    */
    'blockerDatabaseConnection'     => env('LARAVEL_BLOCKER_DATABASE_CONNECTION', 'mysql'),
    'blockerDatabaseTable'          => env('LARAVEL_BLOCKER_DATABASE_TABLE', 'laravel_blocker'),
    'blockerTypeDatabaseTable'      => env('LARAVEL_BLOCKER_TYPE_DATABASE_TABLE', 'laravel_blocker_types'),
    'seedDefaultBlockedTypes'       => false,
    'seedDefaultBlockedItems'       => false,
    'seedPublishedBlockedTypes'     => false,
    'seedPublishedBlockedItems'     => false,
    'useSeededBlockedTypes'         => false,
    'useSeededBlockedItems'         => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Default User Model
    |--------------------------------------------------------------------------
    */
    'defaultUserModel'              => env('LARAVEL_BLOCKER_USER_MODEL', 'App\User'),

    /*
    |--------------------------------------------------------------------------
    | Laravel Blocker Front End Settings
    |--------------------------------------------------------------------------
    */
    // The parent blade file
    'laravelBlockerBladeExtended'   => env('LARAVEL_BLOCKER_BLADE_EXTENDED', 'layouts.backend'),

    // Titles placement extend
    'laravelBlockerTitleExtended'   => env('LARAVEL_BLOCKER_TITLE_EXTENDED', 'template_title'),

    // Switch Between bootstrap 3 `panel` and bootstrap 4 `card` classes
    'blockerBootstapVersion'        => env('LARAVEL_BLOCKER_BOOTSTRAP_VERSION', '4'),

    // Additional Card classes for styling -
    // See: https://getbootstrap.com/docs/4.0/components/card/#background-and-color
    // Example classes: 'text-white bg-primary mb-3'
    'blockerBootstrapCardClasses'   => env('LARAVEL_BLOCKER_CARD_CLASSES', ''),

    // Blade Extension Placement
    'blockerBladePlacement'         => env('LARAVEL_BLOCKER_BLADE_PLACEMENT', 'yield'),
    'blockerBladePlacementCss'      =>  'css_after',
    'blockerBladePlacementJs'       =>  'js_after',

    // jQuery
    'enablejQueryCDN'               => env('LARAVEL_BLOCKER_JQUERY_CDN_ENABLED', true),
    'JQueryCDN'                     => env('LARAVEL_BLOCKER_JQUERY_CDN_URL', 'https://code.jquery.com/jquery-3.3.1.min.js'),

    // Font Awesome
    'blockerEnableFontAwesomeCDN'   => env('LARAVEL_BLOCKER_FONT_AWESOME_CDN_ENABLED', true),
    'blockerFontAwesomeCDN'         => env('LARAVEL_BLOCKER_FONT_AWESOME_CDN_URL', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'),

    // Bootstrap Tooltips
    'tooltipsEnabled'               => env('LARAVEL_BLOCKER_TOOLTIPS_ENABLED', true),

    // jQuery IP Mask
    'jQueryIpMaskEnabled'           => env('LARAVEL_BLOCKER_JQUERY_IP_MASK_ENABLED', true),
    'jQueryIpMaskCDN'               => env('LARAVEL_BLOCKER_JQUERY_IP_MASK_CDN', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js'),

    // Flash Messaging
    'blockerFlashMessagesEnabled'   => env('LARAVEL_BLOCKER_FLASH_MESSAGES_ENABLED', true),

    // Enable Search Blocked - Uses jQuery Ajax
    'enableSearchBlocked'            => env('LARAVEL_BLOCKER_SEARCH_ENABLED', true),

    /*
    |--------------------------------------------------------------------------
    | Laravel Blocker Auth & Roles Settings
    |--------------------------------------------------------------------------
    */
    // Enable `auth` middleware
    'authEnabled'                   => env('LARAVEL_BLOCKER_AUTH_ENABLED', true),

    // Enable Optional Roles Middleware
    'rolesEnabled'                  => env('LARAVEL_BLOCKER_ROLES_ENABLED', false),

    // Optional Roles Middleware
    'rolesMiddlware'                => env('LARAVEL_BLOCKER_ROLES_MIDDLWARE', ['role:admin', 'activity']), // Override in place here

    /*
    |--------------------------------------------------------------------------
    | Laravel Blocker Pagination Settings
    |--------------------------------------------------------------------------
    */
    'blockerPaginationEnabled'       => env('LARAVEL_BLOCKER_PAGINATION_ENABLED', false),
    'blockerPaginationPerPage'       => env('LARAVEL_BLOCKER_PAGINATION_PER_PAGE', 25),

    /*
    |--------------------------------------------------------------------------
    | Laravel Blocker Databales Settings - Not recommended with pagination.
    |--------------------------------------------------------------------------
    */
    'blockerDatatables'             => env('LARAVEL_BLOCKER_DATATABLES_ENABLED', false),
    'enabledDatatablesJs'           => env('LARAVEL_BLOCKER_DATATABLES_JS_ENABLED', false),
    'datatablesJsStartCount'        => env('LARAVEL_BLOCKER_DATATABLES_JS_START_COUNT', 25),
    'datatablesCssCDN'              => env('LARAVEL_BLOCKER_DATATABLES_CSS_CDN', 'https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css'),
    'datatablesJsCDN'               => env('LARAVEL_BLOCKER_DATATABLES_JS_CDN', 'https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js'),
    'datatablesJsPresetCDN'         => env('LARAVEL_BLOCKER_DATATABLES_JS_PRESET_CDN', 'https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js'),

    /*
    |--------------------------------------------------------------------------
    | Laravel Blocker Actions Options
    |--------------------------------------------------------------------------
    */
    'blockerDefaultAction'          => env('LARAVEL_BLOCKER_DEFAULT_ACTION', 'abort'), //'abort', 'view' ,'redirect'
    'blockerDefaultActionAbortType' => env('LARAVEL_BLOCKER_DEFAULT_ACTION_ABORT_TYPE', '403'),
    'blockerDefaultActionView'      => env('LARAVEL_BLOCKER_DEFAULT_ACTION_VIEW', 'welcome'),
    'blockerDefaultActionRedirect'  => env('LARAVEL_BLOCKER_DEFAULT_ACTION_REDIRECT', '/'), // Internal or external
];
