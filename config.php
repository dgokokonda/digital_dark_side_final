<?php
// created: 2020-10-16 22:59:54
$sugar_config = array (
  'admin_access_control' => false,
  'admin_export_only' => false,
  'cache_dir' => 'cache/',
  'calculate_response_time' => true,
  'calendar' => 
  array (
    'default_view' => 'week',
    'show_calls_by_default' => true,
    'show_tasks_by_default' => true,
    'show_completed_by_default' => true,
    'editview_width' => 990,
    'editview_height' => 485,
    'day_timestep' => 15,
    'week_timestep' => 30,
    'items_draggable' => true,
    'items_resizable' => true,
    'enable_repeat' => true,
    'max_repeat_count' => 1000,
  ),
  'chartEngine' => 'Jit',
  'common_ml_dir' => '',
  'create_default_user' => false,
  'cron' => 
  array (
    'max_cron_jobs' => 10,
    'max_cron_runtime' => 30,
    'min_cron_interval' => 30,
  ),
  'currency' => '',
  'dashlet_display_row_options' => 
  array (
    0 => '1',
    1 => '3',
    2 => '5',
    3 => '10',
  ),
  'date_formats' => 
  array (
    'Y-m-d' => '2010-12-23',
    'm-d-Y' => '12-23-2010',
    'd-m-Y' => '23-12-2010',
    'Y/m/d' => '2010/12/23',
    'm/d/Y' => '12/23/2010',
    'd/m/Y' => '23/12/2010',
    'Y.m.d' => '2010.12.23',
    'd.m.Y' => '23.12.2010',
    'm.d.Y' => '12.23.2010',
  ),
  'datef' => 'd.m.Y',
  'dbconfig' => 
  array (
    'db_host_name' => 'localhost',
    'db_host_instance' => 'SQLEXPRESS',
    'db_user_name' => 'docker',
    'db_password' => '1111',
    'db_name' => 'suitecrm',
    'db_type' => 'mysql',
    'db_port' => '',
    'db_manager' => 'MysqliManager',
    'collation' => 'utf8_general_ci',
    'charset' => 'utf8',
  ),
  'dbconfigoption' => 
  array (
    'persistent' => true,
    'autofree' => false,
    'debug' => 0,
    'ssl' => false,
    'collation' => 'utf8_general_ci',
    'charset' => 'utf8',
  ),
  'default_action' => 'index',
  'default_charset' => 'UTF-8',
  'default_currencies' => 
  array (
    'AUD' => 
    array (
      'name' => 'Australian Dollars',
      'iso4217' => 'AUD',
      'symbol' => '$',
    ),
    'BRL' => 
    array (
      'name' => 'Brazilian Reais',
      'iso4217' => 'BRL',
      'symbol' => 'R$',
    ),
    'GBP' => 
    array (
      'name' => 'British Pounds',
      'iso4217' => 'GBP',
      'symbol' => '£',
    ),
    'CAD' => 
    array (
      'name' => 'Canadian Dollars',
      'iso4217' => 'CAD',
      'symbol' => '$',
    ),
    'CNY' => 
    array (
      'name' => 'Chinese Yuan',
      'iso4217' => 'CNY',
      'symbol' => '￥',
    ),
    'EUR' => 
    array (
      'name' => 'Euro',
      'iso4217' => 'EUR',
      'symbol' => '€',
    ),
    'HKD' => 
    array (
      'name' => 'Hong Kong Dollars',
      'iso4217' => 'HKD',
      'symbol' => '$',
    ),
    'INR' => 
    array (
      'name' => 'Indian Rupees',
      'iso4217' => 'INR',
      'symbol' => '₨',
    ),
    'KRW' => 
    array (
      'name' => 'Korean Won',
      'iso4217' => 'KRW',
      'symbol' => '₩',
    ),
    'YEN' => 
    array (
      'name' => 'Japanese Yen',
      'iso4217' => 'JPY',
      'symbol' => '¥',
    ),
    'MXN' => 
    array (
      'name' => 'Mexican Pesos',
      'iso4217' => 'MXN',
      'symbol' => '$',
    ),
    'SGD' => 
    array (
      'name' => 'Singaporean Dollars',
      'iso4217' => 'SGD',
      'symbol' => '$',
    ),
    'CHF' => 
    array (
      'name' => 'Swiss Franc',
      'iso4217' => 'CHF',
      'symbol' => 'SFr.',
    ),
    'THB' => 
    array (
      'name' => 'Thai Baht',
      'iso4217' => 'THB',
      'symbol' => '฿',
    ),
    'USD' => 
    array (
      'name' => 'US Dollars',
      'iso4217' => 'USD',
      'symbol' => '$',
    ),
  ),
  'default_currency_iso4217' => 'USD',
  'default_currency_name' => 'US Dollars',
  'default_currency_significant_digits' => 2,
  'default_currency_symbol' => '$',
  'default_date_format' => 'd.m.Y',
  'default_decimal_seperator' => '.',
  'default_email_charset' => 'UTF-8',
  'default_email_client' => 'sugar',
  'default_email_editor' => 'html',
  'default_export_charset' => 'UTF-8',
  'default_language' => 'ru_ru',
  'default_locale_name_format' => 'f l',
  'default_max_tabs' => 10,
  'default_module' => 'Home',
  'default_navigation_paradigm' => 'gm',
  'default_number_grouping_seperator' => ',',
  'default_password' => '',
  'default_permissions' => 
  array (
    'dir_mode' => 1528,
    'file_mode' => 493,
    'user' => '',
    'group' => '',
  ),
  'default_subpanel_links' => false,
  'default_subpanel_tabs' => true,
  'default_swap_last_viewed' => false,
  'default_swap_shortcuts' => false,
  'default_theme' => 'SuiteP',
  'default_time_format' => 'H:i',
  'default_user_is_admin' => false,
  'default_user_name' => '',
  'demoData' => 'yes',
  'disable_convert_lead' => false,
  'disable_export' => false,
  'disable_persistent_connections' => 'false',
  'display_email_template_variable_chooser' => false,
  'display_inbound_email_buttons' => false,
  'dump_slow_queries' => false,
  'email_address_separator' => ',',
  'email_default_client' => 'sugar',
  'email_default_delete_attachments' => true,
  'email_default_editor' => 'html',
  'email_enable_auto_send_opt_in' => false,
  'email_enable_confirm_opt_in' => 'not-opt-in',
  'email_warning_notifications' => true,
  'enable_line_editing_detail' => true,
  'enable_line_editing_list' => true,
  'export_delimiter' => ',',
  'export_excel_compatible' => false,
  'filter_module_fields' => 
  array (
    'Users' => 
    array (
      0 => 'show_on_employees',
      1 => 'portal_only',
      2 => 'is_group',
      3 => 'system_generated_password',
      4 => 'external_auth_only',
      5 => 'sugar_login',
      6 => 'authenticate_id',
      7 => 'pwd_last_changed',
      8 => 'is_admin',
      9 => 'user_name',
      10 => 'user_hash',
      11 => 'password',
      12 => 'last_login',
      13 => 'oauth_tokens',
    ),
    'Employees' => 
    array (
      0 => 'show_on_employees',
      1 => 'portal_only',
      2 => 'is_group',
      3 => 'system_generated_password',
      4 => 'external_auth_only',
      5 => 'sugar_login',
      6 => 'authenticate_id',
      7 => 'pwd_last_changed',
      8 => 'is_admin',
      9 => 'user_name',
      10 => 'user_hash',
      11 => 'password',
      12 => 'last_login',
      13 => 'oauth_tokens',
    ),
  ),
  'hide_subpanels' => true,
  'history_max_viewed' => 50,
  'host_name' => '0.0.0.0',
  'import_max_execution_time' => 3600,
  'import_max_records_per_file' => 100,
  'import_max_records_total_limit' => '',
  'installer_locked' => true,
  'jobs' => 
  array (
    'min_retry_interval' => 30,
    'max_retries' => 5,
    'timeout' => 86400,
  ),
  'js_custom_version' => 1,
  'js_lang_version' => 3,
  'languages' => 
  array (
    'ru_ru' => 'Русский - Russian',
  ),
  'large_scale_test' => false,
  'lead_conv_activity_opt' => 'donothing',
  'list_max_entries_per_page' => 20,
  'list_max_entries_per_subpanel' => 10,
  'lock_default_user_name' => false,
  'lock_homepage' => false,
  'lock_subpanels' => false,
  'log_dir' => '.',
  'log_file' => 'suitecrm.log',
  'log_memory_usage' => false,
  'logger' => 
  array (
    'level' => 'fatal',
    'file' => 
    array (
      'ext' => '.log',
      'name' => 'suitecrm',
      'dateFormat' => '%c',
      'maxSize' => '10MB',
      'maxLogs' => 10,
      'suffix' => '',
    ),
  ),
  'max_dashlets_homepage' => '15',
  'name_formats' => 
  array (
    'f l' => 'f l',
    'l, f' => 'l, f',
  ),
  'oauth2_encryption_key' => 'IiY7hB+mo/SFmR2OKseHfpl7Qp8W6Ko1LI5X8Tu9PNU=',
  'passwordsetting' => 
  array (
    'SystemGeneratedPasswordON' => '',
    'generatepasswordtmpl' => '',
    'lostpasswordtmpl' => '',
    'factoremailtmpl' => '',
    'forgotpasswordON' => false,
    'linkexpiration' => '1',
    'linkexpirationtime' => '30',
    'linkexpirationtype' => '1',
    'systexpiration' => '1',
    'systexpirationtime' => '7',
    'systexpirationtype' => '1',
    'systexpirationlogin' => '',
  ),
  'portal_view' => 'single_user',
  'require_accounts' => true,
  'resource_management' => 
  array (
    'special_query_limit' => 500000,
    'special_query_modules' => 
    array (
      0 => 'AOR_Reports',
      1 => 'Export',
      2 => 'Import',
      3 => 'Administration',
      4 => 'Sync',
    ),
    'default_limit' => 100000,
  ),
  'rss_cache_time' => '10800',
  'save_query' => 'all',
  'search_wildcard_char' => '%',
  'search_wildcard_infront' => false,
  'session_dir' => '',
  'showDetailData' => true,
  'showThemePicker' => true,
  'site_url' => 'http://185.154.14.135',
  'slow_query_time_msec' => '100',
  'strict_id_validation' => false,
  'sugar_version' => '7.10.27',
  'sugarbeet' => 0,
  'time_formats' => 
  array (
    'H:i' => '23:00',
  ),
  'timef' => 'H:i',
  'tmp_dir' => 'cache/xml/',
  'tracker_max_display_length' => 15,
  'translation_string_prefix' => false,
  'unique_key' => '2287ffe8f1cb4739562dad507c86477e',
  'upload_badext' => 
  array (
    0 => 'php',
    1 => 'php3',
    2 => 'php4',
    3 => 'php5',
    4 => 'pl',
    5 => 'cgi',
    6 => 'py',
    7 => 'asp',
    8 => 'cfm',
    9 => 'js',
    10 => 'vbs',
    11 => 'html',
    12 => 'htm',
    13 => 'phtml',
  ),
  'upload_dir' => 'upload/',
  'upload_maxsize' => 30000000,
  'use_common_ml_dir' => false,
  'use_real_names' => true,
  'vcal_time' => '2',
  'verify_client_ip' => true,
  'addAjaxBannedModules' => 
  array (
    0 => 'Home',
    1 => 'jjwg_Address_Cache',
    2 => 'SecurityGroups',
    3 => 'Meetings',
    4 => 'jjwg_Areas',
    5 => 'AOW_WorkFlow',
    6 => 'jjwg_Markers',
    7 => 'jjwg_Maps',
    8 => 'AOS_Quotes',
    9 => 'AOS_Products',
    10 => 'AOS_PDF_Templates',
    11 => 'AOS_Product_Categories',
    12 => 'FP_events',
    13 => 'AOS_Invoices',
    14 => 'AOS_Contracts',
    15 => 'AOR_Scheduled_Reports',
    16 => 'AOR_Reports',
    17 => 'FP_Event_Locations',
    18 => 'Spots',
    19 => 'AOK_KnowledgeBase',
    20 => 'AOK_Knowledge_Base_Categories',
    21 => 'AM_ProjectTemplates',
    22 => 'Cases',
    23 => 'ResourceCalendar',
    24 => 'AOBH_BusinessHours',
    25 => 'Bugs',
    26 => 'Prospects',
    27 => 'ProspectLists',
    28 => 'Accounts',
    29 => 'Opportunities',
    30 => 'Leads',
    31 => 'Contacts',
    32 => 'Tasks',
    33 => 'Notes',
    34 => 'Calls',
  ),
);