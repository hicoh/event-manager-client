# HiCo\EventManagerClient\OrganisationApi

All URIs are relative to https://api.highcohesion.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrganisationIndex()**](OrganisationApi.md#createOrganisationIndex) | **POST** /event_manager/organisation/{organisation_id}/index | Create the organisation tables


## `createOrganisationIndex()`

```php
createOrganisationIndex($organisationId): \HiCo\EventManagerClient\Model\SyncResponse
```

Create the organisation tables

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: admin_apikey
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\OrganisationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisationId = 123e4567-e89b-12d3-a456-426614174000; // string

try {
    $result = $apiInstance->createOrganisationIndex($organisationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationApi->createOrganisationIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organisationId** | **string**|  |

### Return type

[**\HiCo\EventManagerClient\Model\SyncResponse**](../Model/SyncResponse.md)

### Authorization

[admin_apikey](../../README.md#admin_apikey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
