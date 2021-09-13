# HiCo\EventManagerClient\JobApi

All URIs are relative to https://api.highcohesion.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createJob()**](JobApi.md#createJob) | **POST** /event_manager/job | Create a new job
[**createJobSchedule()**](JobApi.md#createJobSchedule) | **POST** /event_manager/job/schedule | Create a job schedule
[**getJobById()**](JobApi.md#getJobById) | **GET** /event_manager/job/{job_id} | Get a job by job id
[**getJobsBy()**](JobApi.md#getJobsBy) | **GET** /event_manager/job | Get a list of jobs by
[**replicateJob()**](JobApi.md#replicateJob) | **POST** /event_manager/job/replicate | Replicate job
[**updateJob()**](JobApi.md#updateJob) | **PATCH** /event_manager/job | Update job


## `createJob()`

```php
createJob($jobRequest): \HiCo\EventManagerClient\Model\AsyncResponse
```

Create a new job

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$jobRequest = new \HiCo\EventManagerClient\Model\JobRequest(); // \HiCo\EventManagerClient\Model\JobRequest

try {
    $result = $apiInstance->createJob($jobRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->createJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jobRequest** | [**\HiCo\EventManagerClient\Model\JobRequest**](../Model/JobRequest.md)|  | [optional]

### Return type

[**\HiCo\EventManagerClient\Model\AsyncResponse**](../Model/AsyncResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createJobSchedule()`

```php
createJobSchedule($jobScheduleRequest): \HiCo\EventManagerClient\Model\AsyncResponse
```

Create a job schedule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$jobScheduleRequest = new \HiCo\EventManagerClient\Model\JobScheduleRequest(); // \HiCo\EventManagerClient\Model\JobScheduleRequest

try {
    $result = $apiInstance->createJobSchedule($jobScheduleRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->createJobSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jobScheduleRequest** | [**\HiCo\EventManagerClient\Model\JobScheduleRequest**](../Model/JobScheduleRequest.md)|  | [optional]

### Return type

[**\HiCo\EventManagerClient\Model\AsyncResponse**](../Model/AsyncResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getJobById()`

```php
getJobById($jobId): \HiCo\EventManagerClient\Model\Job
```

Get a job by job id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$jobId = 'jobId_example'; // string | The job id

try {
    $result = $apiInstance->getJobById($jobId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getJobById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jobId** | **string**| The job id |

### Return type

[**\HiCo\EventManagerClient\Model\Job**](../Model/Job.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getJobsBy()`

```php
getJobsBy($id, $streamId, $status, $limit, $orderBy, $offset): \HiCo\EventManagerClient\Model\Job[]
```

Get a list of jobs by

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The job id
$streamId = 'streamId_example'; // string | The stream id of the job
$status = 'status_example'; // string | The job status
$limit = 'limit_example'; // string | The limit (limit=20 to get the first 20 jobs)
$orderBy = 'orderBy_example'; // string | order by one specific field (orderBy=createdAt,desc, orderBy=status,asc)
$offset = 'offset_example'; // string | the position of the first result to retrieve (offset=100)

try {
    $result = $apiInstance->getJobsBy($id, $streamId, $status, $limit, $orderBy, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getJobsBy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The job id | [optional]
 **streamId** | **string**| The stream id of the job | [optional]
 **status** | **string**| The job status | [optional]
 **limit** | **string**| The limit (limit&#x3D;20 to get the first 20 jobs) | [optional]
 **orderBy** | **string**| order by one specific field (orderBy&#x3D;createdAt,desc, orderBy&#x3D;status,asc) | [optional]
 **offset** | **string**| the position of the first result to retrieve (offset&#x3D;100) | [optional]

### Return type

[**\HiCo\EventManagerClient\Model\Job[]**](../Model/Job.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replicateJob()`

```php
replicateJob($replicateJobRequest): \HiCo\EventManagerClient\Model\AsyncResponse
```

Replicate job

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$replicateJobRequest = new \HiCo\EventManagerClient\Model\ReplicateJobRequest(); // \HiCo\EventManagerClient\Model\ReplicateJobRequest

try {
    $result = $apiInstance->replicateJob($replicateJobRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->replicateJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replicateJobRequest** | [**\HiCo\EventManagerClient\Model\ReplicateJobRequest**](../Model/ReplicateJobRequest.md)|  | [optional]

### Return type

[**\HiCo\EventManagerClient\Model\AsyncResponse**](../Model/AsyncResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateJob()`

```php
updateJob($updateJobRequest): \HiCo\EventManagerClient\Model\AsyncResponse
```

Update job

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateJobRequest = new \HiCo\EventManagerClient\Model\UpdateJobRequest(); // \HiCo\EventManagerClient\Model\UpdateJobRequest | The fields to update

try {
    $result = $apiInstance->updateJob($updateJobRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->updateJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateJobRequest** | [**\HiCo\EventManagerClient\Model\UpdateJobRequest**](../Model/UpdateJobRequest.md)| The fields to update |

### Return type

[**\HiCo\EventManagerClient\Model\AsyncResponse**](../Model/AsyncResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
