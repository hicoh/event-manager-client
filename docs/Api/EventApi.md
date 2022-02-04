# HiCo\EventManagerClient\EventApi

All URIs are relative to https://api.highcohesion.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEventById()**](EventApi.md#getEventById) | **GET** /event_manager/event/{event_id} | Get an event by event id
[**getEventsBy()**](EventApi.md#getEventsBy) | **GET** /event_manager/event | Get a list of events by
[**replicateEvent()**](EventApi.md#replicateEvent) | **POST** /event_manager/event/replicate | Replicate Event
[**updateChildEvent()**](EventApi.md#updateChildEvent) | **PATCH** /event_manager/child_event | Update Child Event via the Parent Event ID and the entity name
[**updateEvent()**](EventApi.md#updateEvent) | **PATCH** /event_manager/event | Update Event


## `getEventById()`

```php
getEventById($eventId): \HiCo\EventManagerClient\Model\Event
```

Get an event by event id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eventId = 'eventId_example'; // string | The event id

try {
    $result = $apiInstance->getEventById($eventId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getEventById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **eventId** | **string**| The event id |

### Return type

[**\HiCo\EventManagerClient\Model\Event**](../Model/Event.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEventsBy()`

```php
getEventsBy($id, $jobId, $streamId, $status, $limit, $orderBy, $offset): \HiCo\EventManagerClient\Model\Event[]
```

Get a list of events by

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The event id
$jobId = 'jobId_example'; // string | The job id
$streamId = 'streamId_example'; // string | The stream id
$status = 'status_example'; // string | The status
$limit = 'limit_example'; // string | The limit (limit=20 to get the first 20 events)
$orderBy = 'orderBy_example'; // string | order by one specific field (orderBy=createdAt,desc, orderBy=status,asc)
$offset = 'offset_example'; // string | the position of the first result to retrieve (offset=100)

try {
    $result = $apiInstance->getEventsBy($id, $jobId, $streamId, $status, $limit, $orderBy, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->getEventsBy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The event id | [optional]
 **jobId** | **string**| The job id | [optional]
 **streamId** | **string**| The stream id | [optional]
 **status** | **string**| The status | [optional]
 **limit** | **string**| The limit (limit&#x3D;20 to get the first 20 events) | [optional]
 **orderBy** | **string**| order by one specific field (orderBy&#x3D;createdAt,desc, orderBy&#x3D;status,asc) | [optional]
 **offset** | **string**| the position of the first result to retrieve (offset&#x3D;100) | [optional]

### Return type

[**\HiCo\EventManagerClient\Model\Event[]**](../Model/Event.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replicateEvent()`

```php
replicateEvent($organisationId, $replicateEventRequest): \HiCo\EventManagerClient\Model\AsyncResponse
```

Replicate Event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisationId = 'organisationId_example'; // string
$replicateEventRequest = new \HiCo\EventManagerClient\Model\ReplicateEventRequest(); // \HiCo\EventManagerClient\Model\ReplicateEventRequest

try {
    $result = $apiInstance->replicateEvent($organisationId, $replicateEventRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->replicateEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organisationId** | [**string**](../Model/.md)|  | [optional]
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

## `updateChildEvent()`

```php
updateChildEvent($updateChildEventRequest, $organisationId): \HiCo\EventManagerClient\Model\AsyncResponse
```

Update Child Event via the Parent Event ID and the entity name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateChildEventRequest = new \HiCo\EventManagerClient\Model\UpdateChildEventRequest(); // \HiCo\EventManagerClient\Model\UpdateChildEventRequest | The parent ID and entity name identify the child event, the other fields will be updated on that event
$organisationId = 'organisationId_example'; // string

try {
    $result = $apiInstance->updateChildEvent($updateChildEventRequest, $organisationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->updateChildEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateChildEventRequest** | [**\HiCo\EventManagerClient\Model\UpdateChildEventRequest**](../Model/UpdateChildEventRequest.md)| The parent ID and entity name identify the child event, the other fields will be updated on that event |
 **organisationId** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\HiCo\EventManagerClient\Model\AsyncResponse**](../Model/AsyncResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `array`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEvent()`

```php
updateEvent($updateEventRequest, $organisationId): \HiCo\EventManagerClient\Model\AsyncResponse
```

Update Event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateEventRequest = new \HiCo\EventManagerClient\Model\UpdateEventRequest(); // \HiCo\EventManagerClient\Model\UpdateEventRequest | The fields to update
$organisationId = 'organisationId_example'; // string

try {
    $result = $apiInstance->updateEvent($updateEventRequest, $organisationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->updateEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateEventRequest** | [**\HiCo\EventManagerClient\Model\UpdateEventRequest**](../Model/UpdateEventRequest.md)| The fields to update |
 **organisationId** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\HiCo\EventManagerClient\Model\AsyncResponse**](../Model/AsyncResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `array`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
