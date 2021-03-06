# HiCo\EventManagerClient\StreamApi

All URIs are relative to https://api.highcohesion.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createScheduleConfiguration()**](StreamApi.md#createScheduleConfiguration) | **POST** /event_manager/stream/schedule_configuration | Create a new Stream Schedule Configuration
[**deleteScheduleConfiguration()**](StreamApi.md#deleteScheduleConfiguration) | **DELETE** /event_manager/stream/schedule_configuration/{stream_id} | Delete a Stream Schedule Configuration
[**getScheduleConfiguration()**](StreamApi.md#getScheduleConfiguration) | **GET** /event_manager/stream/schedule_configuration/{stream_id} | Get a Stream Schedule Configuration by Stream Id
[**updateScheduleConfigurationAttributes()**](StreamApi.md#updateScheduleConfigurationAttributes) | **PATCH** /event_manager/stream/schedule_configuration | Updates Stream Schedule Configuration option and active attributes.


## `createScheduleConfiguration()`

```php
createScheduleConfiguration($organisationId, $scheduleConfigurationRequest): \HiCo\EventManagerClient\Model\ScheduleConfiguration
```

Create a new Stream Schedule Configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\StreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisationId = 'organisationId_example'; // string
$scheduleConfigurationRequest = new \HiCo\EventManagerClient\Model\ScheduleConfigurationRequest(); // \HiCo\EventManagerClient\Model\ScheduleConfigurationRequest

try {
    $result = $apiInstance->createScheduleConfiguration($organisationId, $scheduleConfigurationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamApi->createScheduleConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organisationId** | **string**|  | [optional]
 **scheduleConfigurationRequest** | [**\HiCo\EventManagerClient\Model\ScheduleConfigurationRequest**](../Model/ScheduleConfigurationRequest.md)|  | [optional]

### Return type

[**\HiCo\EventManagerClient\Model\ScheduleConfiguration**](../Model/ScheduleConfiguration.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteScheduleConfiguration()`

```php
deleteScheduleConfiguration($streamId, $organisationId): \HiCo\EventManagerClient\Model\SyncResponse
```

Delete a Stream Schedule Configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\StreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$streamId = 'streamId_example'; // string | Stream Id
$organisationId = 'organisationId_example'; // string

try {
    $result = $apiInstance->deleteScheduleConfiguration($streamId, $organisationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamApi->deleteScheduleConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **streamId** | **string**| Stream Id |
 **organisationId** | **string**|  | [optional]

### Return type

[**\HiCo\EventManagerClient\Model\SyncResponse**](../Model/SyncResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getScheduleConfiguration()`

```php
getScheduleConfiguration($streamId, $organisationId): \HiCo\EventManagerClient\Model\ScheduleConfiguration
```

Get a Stream Schedule Configuration by Stream Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\StreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$streamId = 'streamId_example'; // string | Stream Id
$organisationId = 'organisationId_example'; // string

try {
    $result = $apiInstance->getScheduleConfiguration($streamId, $organisationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamApi->getScheduleConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **streamId** | **string**| Stream Id |
 **organisationId** | **string**|  | [optional]

### Return type

[**\HiCo\EventManagerClient\Model\ScheduleConfiguration**](../Model/ScheduleConfiguration.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateScheduleConfigurationAttributes()`

```php
updateScheduleConfigurationAttributes($organisationId, $scheduleConfigurationRequest): \HiCo\EventManagerClient\Model\PatchSyncResponse
```

Updates Stream Schedule Configuration option and active attributes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\StreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisationId = 'organisationId_example'; // string
$scheduleConfigurationRequest = new \HiCo\EventManagerClient\Model\ScheduleConfigurationRequest(); // \HiCo\EventManagerClient\Model\ScheduleConfigurationRequest

try {
    $result = $apiInstance->updateScheduleConfigurationAttributes($organisationId, $scheduleConfigurationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamApi->updateScheduleConfigurationAttributes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organisationId** | **string**|  | [optional]
 **scheduleConfigurationRequest** | [**\HiCo\EventManagerClient\Model\ScheduleConfigurationRequest**](../Model/ScheduleConfigurationRequest.md)|  | [optional]

### Return type

[**\HiCo\EventManagerClient\Model\PatchSyncResponse**](../Model/PatchSyncResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
