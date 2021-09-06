# HiCo\EventManagerClient\EventEntityApi

All URIs are relative to https://virtserver.swaggerhub.com/HighCohesion/Public-Gateway/1.0.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**updateEventEntity()**](EventEntityApi.md#updateEventEntity) | **PATCH** /event_manager/event_entity | Update Event Entity


## `updateEventEntity()`

```php
updateEventEntity($updateEventEntityRequest, $organisationId): \HiCo\EventManagerClient\Model\AsyncResponse
```

Update Event Entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\EventEntityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateEventEntityRequest = new \HiCo\EventManagerClient\Model\UpdateEventEntityRequest(); // \HiCo\EventManagerClient\Model\UpdateEventEntityRequest | The fields to update
$organisationId = 'organisationId_example'; // string

try {
    $result = $apiInstance->updateEventEntity($updateEventEntityRequest, $organisationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventEntityApi->updateEventEntity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateEventEntityRequest** | [**\HiCo\EventManagerClient\Model\UpdateEventEntityRequest**](../Model/UpdateEventEntityRequest.md)| The fields to update |
 **organisationId** | **string**|  | [optional]

### Return type

[**\HiCo\EventManagerClient\Model\AsyncResponse**](../Model/AsyncResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `array`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
