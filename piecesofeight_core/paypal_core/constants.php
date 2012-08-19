<?php
/****************************************************
constants.php

This is the configuration file for the samples.This file
defines the parameters needed to make an API call.

PayPal includes the following API Signature for making API
calls to the PayPal sandbox:

API Username 	sdk-three_api1.sdk.com
API Password 	QFZCWN5HZM8VBG7Q
API Signature 	A.d9eRKfd1yVkRrtmMfCFLTqa6M9AyodL0SJkhYztxUi8W9pCXF6.4NI

Called by CallerService.php.
****************************************************/
/**
# API user: The user that is identified as making the call. you can
# also use your own API username that you created on PayPal�s sandbox
# or the PayPal live site
*/
//for 3-token -> API_USERNAME,API_PASSWORD,API_SIGNATURE  are needed

define ('ADMIN_USERNAME', 'sperez8');
define ('ADMIN_PASSWORD', '#1cornwall');

//define('API_USERNAME', 'platfo_1255077030_biz_api1.gmail.com');
define('API_USERNAME', 'po8_1330738240_biz_api1.gmail.com');
//define('API_USERNAME', 'sdk-three_api1.sdk.com');
//

/**
# API_password: The password associated with the API user
# If you are using your own API username, enter the API password that
# was generated by PayPal below
# IMPORTANT - HAVING YOUR API PASSWORD INCLUDED IN THE MANNER IS NOT
# SECURE, AND ITS ONLY BEING SHOWN THIS WAY FOR TESTING PURPOSES
*/

//define('API_PASSWORD', '1255077037');
define('API_PASSWORD', 'YJCGV5GTZ5T8MRSC');
//define('API_PASSWORD', 'QFZCWN5HZM8VBG7Q');

/**
# API_Signature:The Signature associated with the API user. which is generated by paypal.
*/

//define('API_SIGNATURE', 'Abg0gYcQyxQvnf2HDJkKtA-p6pqhA1k-KTYE0Gcy1diujFio4io5Vqjf');
define('API_SIGNATURE', 'ABk.FTssHHZrfQSLPM.x9hr7xOG-ArAn2oZc4OLfE-gpoC3n56N9T9PB');
//define('API_SIGNATURE', 'A.d9eRKfd1yVkRrtmMfCFLTqa6M9AyodL0SJkhYztxUi8W9pCXF6.4NI');

/**
# Endpoint: this is the server URL which you have to connect for submitting your API request.
*/

define('API_ENDPOINT', 'https://api-3t.sandbox.paypal.com/nvp');
//define('API_ENDPOINT', 'https://api-3t.paypal.com/nvp');

/*
 # Third party Email address that you granted permission to make api call.
 */
define('SUBJECT','');
/*for permission APIs ->token, signature, timestamp  are needed
define('AUTH_TOKEN',"4oSymRbHLgXZVIvtZuQziRVVxcxaiRpOeOEmQw");
define('AUTH_SIGNATURE',"+q1PggENX0u+6vj+49tLiw9CLpA=");
define('AUTH_TIMESTAMP',"1284959128");
*/
/**
USE_PROXY: Set this variable to TRUE to route all the API requests through proxy.
like define('USE_PROXY',TRUE);
*/
define('USE_PROXY',FALSE);
/**
PROXY_HOST: Set the host name or the IP address of proxy server.
PROXY_PORT: Set proxy port.

PROXY_HOST and PROXY_PORT will be read only if USE_PROXY is set to TRUE
*/
define('PROXY_HOST', '127.0.0.1');
define('PROXY_PORT', '808');

/* Define the PayPal URL. This is the URL that the buyer is
   first sent to to authorize payment with their paypal account
   change the URL depending if you are testing on the sandbox
   or going to the live PayPal site
   For the sandbox, the URL is
   https://www.sandbox.paypal.com/webscr&cmd=_express-checkout&token=
   For the live site, the URL is
   https://www.paypal.com/webscr&cmd=_express-checkout&token=
   */
//define('PAYPAL_URL', 'https://www.sandbox.paypal.com/webscr?cmd=_express-checkout&token=');
define('PAYPAL_URL', 'https://www.sandbox.paypal.com/webscr?cmd=_express-checkout&useraction=commit&token=');
//define('PAYPAL_URL', 'https://www.paypal.com/webscr?cmd=_express-checkout&token=');


/**
# Version: this is the API version in the request.
# It is a mandatory parameter for each API request.
# The only supported value at this time is 2.3
*/

define('VERSION', '89.0');

// Ack related constants
define('ACK_SUCCESS', 'SUCCESS');
define('ACK_SUCCESS_WITH_WARNING', 'SUCCESSWITHWARNING');

?>