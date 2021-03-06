# HiCo\EventManagerClient\AggregateApi

All URIs are relative to https://api.highcohesion.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAggregateEvents()**](AggregateApi.md#getAggregateEvents) | **GET** /event_manager/aggregate_events/{organisation_id}/{stream_id}/{job_id} | Aggregate all events from a specific job
[**replicateChildAggregateEvent()**](AggregateApi.md#replicateChildAggregateEvent) | **POST** /event_manager/aggregate_events/replicate_child | Replicate Child Aggregate Event
[**replicateParentAggregateEvent()**](AggregateApi.md#replicateParentAggregateEvent) | **POST** /event_manager/aggregate_events/replicate_parent | Replicate a Parent Aggregate event


## `getAggregateEvents()`

```php
getAggregateEvents($organisationId, $streamId, $jobId): \HiCo\EventManagerClient\Model\AsyncResponse
```

Aggregate all events from a specific job

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: admin_apikey
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\AggregateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisationId = 123e4567-e89b-12d3-a456-426614174000; // string
$streamId = 123e4567-e89b-12d3-a456-426614174000; // string
$jobId = 123e4567-e89b-12d3-a456-426614174000; // string

try {
    $result = $apiInstance->getAggregateEvents($organisationId, $streamId, $jobId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AggregateApi->getAggregateEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organisationId** | **string**|  |
 **streamId** | **string**|  |
 **jobId** | **string**|  |

### Return type

[**\HiCo\EventManagerClient\Model\AsyncResponse**](../Model/AsyncResponse.md)

### Authorization

[admin_apikey](../../README.md#admin_apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replicateChildAggregateEvent()`

```php
replicateChildAggregateEvent($organisationId, $replicateEventRequest): \HiCo\EventManagerClient\Model\AsyncResponse
```

Replicate Child Aggregate Event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\AggregateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisationId = 'organisationId_example'; // string
$replicateEventRequest = new \HiCo\EventManagerClient\Model\ReplicateEventRequest(); // \HiCo\EventManagerClient\Model\ReplicateEventRequest

try {
    $result = $apiInstance->replicateChildAggregateEvent($organisationId, $replicateEventRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AggregateApi->replicateChildAggregateEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organisationId** | **string**|  | [optional]
 **replicateEventRequest** | [**\HiCo\EventManagerClient\Model\ReplicateEventRequest**](../Model/ReplicateEventRequest.md)|  | [optional]

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

## `replicateParentAggregateEvent()`

```php
replicateParentAggregateEvent($replicateParentAggregateEventRequest, $organisationId): \HiCo\EventManagerClient\Model\AsyncResponse
```

Replicate a Parent Aggregate event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: admin_apikey
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\AggregateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$replicateParentAggregateEventRequest = new \HiCo\EventManagerClient\Model\ReplicateParentAggregateEventRequest(); // \HiCo\EventManagerClient\Model\ReplicateParentAggregateEventRequest | Event Data
$organisationId = 'organisationId_example'; // string

try {
    $result = $apiInstance->replicateParentAggregateEvent($replicateParentAggregateEventRequest, $organisationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AggregateApi->replicateParentAggregateEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replicateParentAggregateEventRequest** | [**\HiCo\EventManagerClient\Model\ReplicateParentAggregateEventRequest**](../Model/ReplicateParentAggregateEventRequest.md)| Event Data |
 **organisationId** | **string**|  | [optional]

### Return type

[**\HiCo\EventManagerClient\Model\AsyncResponse**](../Model/AsyncResponse.md)

### Authorization

[admin_apikey](../../README.md#admin_apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
