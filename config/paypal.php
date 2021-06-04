<?php
/**
 * PayPal Setting & API Credentials
 * Created by Raza Mehdi <srmk@outlook.com>.
 */
/*
return [
    'mode'    => 'sandbox', // Can only be 'sandbox' Or 'live'. If empty or invalid, 'live' will be used.
    'sandbox' => [
        'username'    => env('PAYPAL_SANDBOX_API_USERNAME', 'sb-fo75b6419339@business.example.com'),
        'password'    => env('PAYPAL_SANDBOX_API_PASSWORD', 'WCJLWERNSDZXHWRE'),
        'secret'      => env('PAYPAL_SANDBOX_API_SECRET', 'EH5tTQB7qO7re90gWrKnXM58_jCJUGfOTsyp_vyzIgfA0q0dBEa7Mr1Hj6wGMrBDzZpjBauhmp9lXmuV'),
        'certificate' => env('PAYPAL_SANDBOX_API_CERTIFICATE', ''),
        'app_id'      => 'APP-80W284485P519543T', // Used for testing Adaptive Payments API in sandbox mode
    ],
    'live' => [
        'username'    => env('PAYPAL_LIVE_API_USERNAME', ''),
        'password'    => env('PAYPAL_LIVE_API_PASSWORD', ''),
        'secret'      => env('PAYPAL_LIVE_API_SECRET', ''),
        'certificate' => env('PAYPAL_LIVE_API_CERTIFICATE', ''),
        'app_id'      => '', // Used for Adaptive Payments API
    ],

    'payment_action' => 'Sale', // Can only be 'Sale', 'Authorization' or 'Order'
    'currency'       => 'USD',
    'billing_type'   => 'MerchantInitiatedBilling',
    'notify_url'     => '', // Change this accordingly for your application.
    'locale'         => '', // force gateway language  i.e. it_IT, es_ES, en_US ... (for express checkout only)
    'validate_ssl'   => false, // Validate SSL when creating api client.
];

*/

return [
  'client_id' => 'AaOW-VdmWN5Pv5yeMyGJGwEgnTMsa5SZPD3olfHwGQ4K_VZkQtWJ2eeSm059AoAkd-ILLMjH-WPZeZNl',
	'secret' => 'EGnFbPZZT9wVqD6PWy8oydOUMK1-Xv_p4C71KrX9N8SdOjXrPPIXDc6M8tmu0BJ5lyvGwyu64U8_ss9S',
    'settings' => array(
        'mode' => 'sandbox',
        'http.ConnectionTimeOut' => 1000,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'FINE'
    ),
];
