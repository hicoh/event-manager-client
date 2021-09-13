# HiCo\EventManagerClient\StreamApi

All URIs are relative to https://api.highcohesion.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createScheduleConfiguration()**](StreamApi.md#createScheduleConfiguration) | **POST** /event_manager/stream/schedule_configuration | Create a new Stream Schedule Configuration
[**updateScheduleConfigurationAttributes()**](StreamApi.md#updateScheduleConfigurationAttributes) | **PATCH** /event_manager/stream/schedule_configuration | Updates Stream Schedule Configuration option and active attributes.


## `createScheduleConfiguration()`

```php
createScheduleConfiguration($scheduleConfigurationRequest): \HiCo\EventManagerClient\Model\ScheduleConfiguration
```

Create a new Stream Schedule Configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\StreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scheduleConfigurationRequest = new \HiCo\EventManagerClient\Model\ScheduleConfigurationRequest(); // \HiCo\EventManagerClient\Model\ScheduleConfigurationRequest

try {
    $result = $apiInstance->createScheduleConfiguration($scheduleConfigurationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamApi->createScheduleConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scheduleConfigurationRequest** | [**\HiCo\EventManagerClient\Model\ScheduleConfigurationRequest**](../Model/ScheduleConfigurationRequest.md)|  | [optional]

### Return type

[**\HiCo\EventManagerClient\Model\ScheduleConfiguration**](../Model/ScheduleConfiguration.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateScheduleConfigurationAttributes()`

```php
updateScheduleConfigurationAttributes($scheduleConfigurationRequest): \HiCo\EventManagerClient\Model\PatchSyncResponse
```

Updates Stream Schedule Configuration option and active attributes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\StreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scheduleConfigurationRequest = new \HiCo\EventManagerClient\Model\ScheduleConfigurationRequest(); // \HiCo\EventManagerClient\Model\ScheduleConfigurationRequest

try {
    $result = $apiInstance->updateScheduleConfigurationAttributes($scheduleConfigurationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamApi->updateScheduleConfigurationAttributes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scheduleConfigurationRequest** | [**\HiCo\EventManagerClient\Model\ScheduleConfigurationRequest**](../Model/ScheduleConfigurationRequest.md)|  | [optional]

### Return type

[**\HiCo\EventManagerClient\Model\PatchSyncResponse**](../Model/PatchSyncResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
