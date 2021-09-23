# HiCo\EventManagerClient\HealthApi

All URIs are relative to https://api.highcohesion.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getHealth()**](HealthApi.md#getHealth) | **GET** /event_manager/health | Get Health


## `getHealth()`

```php
getHealth(): \HiCo\EventManagerClient\Model\Health
```

Get Health

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\HealthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getHealth();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthApi->getHealth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\HiCo\EventManagerClient\Model\Health**](../Model/Health.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
