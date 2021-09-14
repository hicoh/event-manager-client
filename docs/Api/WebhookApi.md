# HiCo\EventManagerClient\WebhookApi

All URIs are relative to https://api.highcohesion.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**postDynamicWebhook()**](WebhookApi.md#postDynamicWebhook) | **POST** /event_manager/webhook/dynamic/{stream_id}/{access_token} | Dynamic Webhook
[**postStaticWebhook()**](WebhookApi.md#postStaticWebhook) | **POST** /event_manager/webhook/static/{stream_id}/{access_token} | Static Webhook
[**replicateDynamicWebhook()**](WebhookApi.md#replicateDynamicWebhook) | **POST** /event_manager/job/replicate/webhook/dynamic | Replicate Dynamic Webhook
[**replicateStaticWebhook()**](WebhookApi.md#replicateStaticWebhook) | **POST** /event_manager/job/replicate/webhook/static | Replicate Static Webhook


## `postDynamicWebhook()`

```php
postDynamicWebhook($streamId, $accessToken, $body): \HiCo\EventManagerClient\Model\AsyncResponse
```

Dynamic Webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new HiCo\EventManagerClient\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$streamId = 123e4567-e89b-12d3-a456-426614174000; // string
$accessToken = 1234567890; // string
$body = new \stdClass; // object | Event Data

try {
    $result = $apiInstance->postDynamicWebhook($streamId, $accessToken, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->postDynamicWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **streamId** | **string**|  |
 **accessToken** | **string**|  |
 **body** | **object**| Event Data |

### Return type

[**\HiCo\EventManagerClient\Model\AsyncResponse**](../Model/AsyncResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`, `application/csv`, `text/plain`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postStaticWebhook()`

```php
postStaticWebhook($streamId, $accessToken, $body): \HiCo\EventManagerClient\Model\AsyncResponse
```

Static Webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new HiCo\EventManagerClient\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$streamId = 123e4567-e89b-12d3-a456-426614174000; // string
$accessToken = 1234567890; // string
$body = new \stdClass; // object | Event Data

try {
    $result = $apiInstance->postStaticWebhook($streamId, $accessToken, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->postStaticWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **streamId** | **string**|  |
 **accessToken** | **string**|  |
 **body** | **object**| Event Data |

### Return type

[**\HiCo\EventManagerClient\Model\AsyncResponse**](../Model/AsyncResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`, `application/csv`, `text/plain`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replicateDynamicWebhook()`

```php
replicateDynamicWebhook($replicateWebhook): \HiCo\EventManagerClient\Model\AsyncResponse
```

Replicate Dynamic Webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new HiCo\EventManagerClient\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$replicateWebhook = new \HiCo\EventManagerClient\Model\ReplicateWebhook(); // \HiCo\EventManagerClient\Model\ReplicateWebhook | Job Data

try {
    $result = $apiInstance->replicateDynamicWebhook($replicateWebhook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->replicateDynamicWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replicateWebhook** | [**\HiCo\EventManagerClient\Model\ReplicateWebhook**](../Model/ReplicateWebhook.md)| Job Data |

### Return type

[**\HiCo\EventManagerClient\Model\AsyncResponse**](../Model/AsyncResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replicateStaticWebhook()`

```php
replicateStaticWebhook($replicateWebhook): \HiCo\EventManagerClient\Model\AsyncResponse
```

Replicate Static Webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new HiCo\EventManagerClient\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$replicateWebhook = new \HiCo\EventManagerClient\Model\ReplicateWebhook(); // \HiCo\EventManagerClient\Model\ReplicateWebhook | Job Data

try {
    $result = $apiInstance->replicateStaticWebhook($replicateWebhook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->replicateStaticWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replicateWebhook** | [**\HiCo\EventManagerClient\Model\ReplicateWebhook**](../Model/ReplicateWebhook.md)| Job Data |

### Return type

[**\HiCo\EventManagerClient\Model\AsyncResponse**](../Model/AsyncResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
