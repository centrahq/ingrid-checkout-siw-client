# OpenAPI\Client\DefaultApi

All URIs are relative to http://localhost/v1/delivery_checkout.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deliveryCheckoutCompleteSession()**](DefaultApi.md#deliveryCheckoutCompleteSession) | **POST** /session.complete | When the customer completes the purchase you also need to complete the session. At this point you will have to supply us with the address and the contact details of the user.
[**deliveryCheckoutCreateSession()**](DefaultApi.md#deliveryCheckoutCreateSession) | **POST** /session.create | To add the Ingrid widget to the checkout page you will need to create a new session. This can be done by this call. When doing this you will need to provide some required information.
[**deliveryCheckoutGetSession()**](DefaultApi.md#deliveryCheckoutGetSession) | **GET** /session.get | Fetches a session by ID. Can be used for loading a previously created session that have been stored together with a customer&#39;s shopping cart from a previous visit. It can contain obsolete data. To get the session with the freshest data, use /session.pull endpoint.
[**deliveryCheckoutListSessionsSummaries()**](DefaultApi.md#deliveryCheckoutListSessionsSummaries) | **GET** /sessions_summaries.list | Allows the merchant to get shipping data (session IDs and result fields) associated with tos ID.
[**deliveryCheckoutPullSession()**](DefaultApi.md#deliveryCheckoutPullSession) | **GET** /session.pull | Pulls a session by ID. Can be used for loading a previously created session that have been stored together with a customer&#39;s shopping cart from a previous visit. Session will be refreshed if its in active state and if configuration has changed or delivery promise expires.
[**deliveryCheckoutUpdateSession()**](DefaultApi.md#deliveryCheckoutUpdateSession) | **POST** /session.update | Update the session with new information. Useful for cases where the customer or cart information is changed. The later being the most common case.


## `deliveryCheckoutCompleteSession()`

```php
deliveryCheckoutCompleteSession($body): \OpenAPI\Client\Model\CompleteSessionResponse
```

When the customer completes the purchase you also need to complete the session. At this point you will have to supply us with the address and the contact details of the user.

This request will also result in completing order in TOS.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\CompleteSessionRequest(); // \OpenAPI\Client\Model\CompleteSessionRequest

try {
    $result = $apiInstance->deliveryCheckoutCompleteSession($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deliveryCheckoutCompleteSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\CompleteSessionRequest**](../Model/CompleteSessionRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\CompleteSessionResponse**](../Model/CompleteSessionResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deliveryCheckoutCreateSession()`

```php
deliveryCheckoutCreateSession($body): \OpenAPI\Client\Model\CreateSessionResponse
```

To add the Ingrid widget to the checkout page you will need to create a new session. This can be done by this call. When doing this you will need to provide some required information.

The API will return a representation of the newly created session. The response will contain a session id which you can use to update and retrieve the session data.  The response will also contain a snippet of HTML with all the necessary code for bootstrapping the Ingrid widget. Simple render the HTML snippet on your checkout page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\CreateSessionRequest(); // \OpenAPI\Client\Model\CreateSessionRequest

try {
    $result = $apiInstance->deliveryCheckoutCreateSession($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deliveryCheckoutCreateSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\CreateSessionRequest**](../Model/CreateSessionRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\CreateSessionResponse**](../Model/CreateSessionResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deliveryCheckoutGetSession()`

```php
deliveryCheckoutGetSession($checkout_session_id): \OpenAPI\Client\Model\GetSessionResponse
```

Fetches a session by ID. Can be used for loading a previously created session that have been stored together with a customer's shopping cart from a previous visit. It can contain obsolete data. To get the session with the freshest data, use /session.pull endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkout_session_id = 'checkout_session_id_example'; // string | Checkout session id.

try {
    $result = $apiInstance->deliveryCheckoutGetSession($checkout_session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deliveryCheckoutGetSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout_session_id** | **string**| Checkout session id. | [optional]

### Return type

[**\OpenAPI\Client\Model\GetSessionResponse**](../Model/GetSessionResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deliveryCheckoutListSessionsSummaries()`

```php
deliveryCheckoutListSessionsSummaries($tos_id): \OpenAPI\Client\Model\ListSessionsSummariesResponse
```

Allows the merchant to get shipping data (session IDs and result fields) associated with tos ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tos_id = 'tos_id_example'; // string

try {
    $result = $apiInstance->deliveryCheckoutListSessionsSummaries($tos_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deliveryCheckoutListSessionsSummaries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tos_id** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ListSessionsSummariesResponse**](../Model/ListSessionsSummariesResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deliveryCheckoutPullSession()`

```php
deliveryCheckoutPullSession($checkout_session_id): \OpenAPI\Client\Model\GetSessionResponse
```

Pulls a session by ID. Can be used for loading a previously created session that have been stored together with a customer's shopping cart from a previous visit. Session will be refreshed if its in active state and if configuration has changed or delivery promise expires.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkout_session_id = 'checkout_session_id_example'; // string | Checkout session id.

try {
    $result = $apiInstance->deliveryCheckoutPullSession($checkout_session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deliveryCheckoutPullSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout_session_id** | **string**| Checkout session id. | [optional]

### Return type

[**\OpenAPI\Client\Model\GetSessionResponse**](../Model/GetSessionResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deliveryCheckoutUpdateSession()`

```php
deliveryCheckoutUpdateSession($body): \OpenAPI\Client\Model\UpdateSessionResponse
```

Update the session with new information. Useful for cases where the customer or cart information is changed. The later being the most common case.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\UpdateSessionRequest(); // \OpenAPI\Client\Model\UpdateSessionRequest

try {
    $result = $apiInstance->deliveryCheckoutUpdateSession($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deliveryCheckoutUpdateSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\UpdateSessionRequest**](../Model/UpdateSessionRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\UpdateSessionResponse**](../Model/UpdateSessionResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
