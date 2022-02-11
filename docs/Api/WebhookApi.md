# HiCo\EventManagerClient\WebhookApi

All URIs are relative to https://api.highcohesion.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**postDynamicWebhook()**](WebhookApi.md#postDynamicWebhook) | **POST** /event_manager/webhook/dynamic/{stream_id} | Dynamic Webhook
[**postStaticWebhook()**](WebhookApi.md#postStaticWebhook) | **POST** /event_manager/webhook/static/{stream_id} | Static Webhook
[**replicateDynamicWebhook()**](WebhookApi.md#replicateDynamicWebhook) | **POST** /event_manager/job/replicate/webhook/dynamic | Replicate Dynamic Webhook
[**replicateStaticWebhook()**](WebhookApi.md#replicateStaticWebhook) | **POST** /event_manager/job/replicate/webhook/static | Replicate Static Webhook


## `postDynamicWebhook()`

```php
postDynamicWebhook($streamId, $body): \HiCo\EventManagerClient\Model\AsyncResponse
```

Dynamic Webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$streamId = 123e4567-e89b-12d3-a456-426614174000; // string
$body = array('key' => new \stdClass); // object | Event Data

try {
    $result = $apiInstance->postDynamicWebhook($streamId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->postDynamicWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **streamId** | **string**|  |
 **body** | **object**| Event Data |

### Return type

[**\HiCo\EventManagerClient\Model\AsyncResponse**](../Model/AsyncResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`, `application/csv`, `text/plain`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postStaticWebhook()`

```php
postStaticWebhook($streamId, $body): \HiCo\EventManagerClient\Model\AsyncResponse
```

Static Webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$streamId = 123e4567-e89b-12d3-a456-426614174000; // string
$body = array('key' => new \stdClass); // object | Event Data

try {
    $result = $apiInstance->postStaticWebhook($streamId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->postStaticWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **streamId** | **string**|  |
 **body** | **object**| Event Data |

### Return type

[**\HiCo\EventManagerClient\Model\AsyncResponse**](../Model/AsyncResponse.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`, `application/csv`, `text/plain`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replicateDynamicWebhook()`

```php
replicateDynamicWebhook($replicateWebhook, $organisationId): \HiCo\EventManagerClient\Model\AsyncResponse
```

Replicate Dynamic Webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$replicateWebhook = new \HiCo\EventManagerClient\Model\ReplicateWebhook(); // \HiCo\EventManagerClient\Model\ReplicateWebhook | Job Data
$organisationId = 'organisationId_example'; // string

try {
    $result = $apiInstance->replicateDynamicWebhook($replicateWebhook, $organisationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->replicateDynamicWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replicateWebhook** | [**\HiCo\EventManagerClient\Model\ReplicateWebhook**](../Model/ReplicateWebhook.md)| Job Data |
 **organisationId** | **string**|  | [optional]

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

## `replicateStaticWebhook()`

```php
replicateStaticWebhook($replicateWebhook, $organisationId): \HiCo\EventManagerClient\Model\AsyncResponse
```

Replicate Static Webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$replicateWebhook = new \HiCo\EventManagerClient\Model\ReplicateWebhook(); // \HiCo\EventManagerClient\Model\ReplicateWebhook | Job Data
$organisationId = 'organisationId_example'; // string

try {
    $result = $apiInstance->replicateStaticWebhook($replicateWebhook, $organisationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->replicateStaticWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replicateWebhook** | [**\HiCo\EventManagerClient\Model\ReplicateWebhook**](../Model/ReplicateWebhook.md)| Job Data |
 **organisationId** | **string**|  | [optional]

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
