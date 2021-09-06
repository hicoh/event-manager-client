# HiCo\EventManagerClient\ApiKeyApi

All URIs are relative to https://virtserver.swaggerhub.com/HighCohesion/Public-Gateway/1.0.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createApiKey()**](ApiKeyApi.md#createApiKey) | **POST** /event_manager/api_key/{organisation_id} | Create a new API key
[**deleteApiKey()**](ApiKeyApi.md#deleteApiKey) | **DELETE** /event_manager/api_key/{organisation_id}/{key_id} | Delete an API key


## `createApiKey()`

```php
createApiKey($organisationId): \HiCo\EventManagerClient\Model\ApiKeyResponse
```

Create a new API key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: admin_api_key
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\ApiKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisationId = 123e4567-e89b-12d3-a456-426614174000; // string

try {
    $result = $apiInstance->createApiKey($organisationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeyApi->createApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organisationId** | **string**|  |

### Return type

[**\HiCo\EventManagerClient\Model\ApiKeyResponse**](../Model/ApiKeyResponse.md)

### Authorization

[admin_api_key](../../README.md#admin_api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApiKey()`

```php
deleteApiKey($organisationId, $keyId)
```

Delete an API key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: admin_api_key
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\ApiKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisationId = 123e4567-e89b-12d3-a456-426614174000; // string
$keyId = f0a8ba52-f840-434e-8883-1fbf5ddab7ca; // string

try {
    $apiInstance->deleteApiKey($organisationId, $keyId);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeyApi->deleteApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organisationId** | **string**|  |
 **keyId** | **string**|  |

### Return type

void (empty response body)

### Authorization

[admin_api_key](../../README.md#admin_api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
