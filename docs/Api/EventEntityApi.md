# HiCo\EventManagerClient\EventEntityApi

All URIs are relative to https://api.highcohesion.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**updateEventEntity()**](EventEntityApi.md#updateEventEntity) | **PATCH** /event_manager/event_entity | Update Event Entity


## `updateEventEntity()`

```php
updateEventEntity($updateEventEntityRequest): \HiCo\EventManagerClient\Model\AsyncResponse
```

Update Event Entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\EventEntityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateEventEntityRequest = new \HiCo\EventManagerClient\Model\UpdateEventEntityRequest(); // \HiCo\EventManagerClient\Model\UpdateEventEntityRequest | The fields to update

try {
    $result = $apiInstance->updateEventEntity($updateEventEntityRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventEntityApi->updateEventEntity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateEventEntityRequest** | [**\HiCo\EventManagerClient\Model\UpdateEventEntityRequest**](../Model/UpdateEventEntityRequest.md)| The fields to update |

### Return type

[**\HiCo\EventManagerClient\Model\AsyncResponse**](../Model/AsyncResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
