# HiCo\EventManagerClient\JobApi

All URIs are relative to https://virtserver.swaggerhub.com/HighCohesion/Public-Gateway/1.0.0.

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
createJob($organisationId, $jobRequest): \HiCo\EventManagerClient\Model\AsyncResponse
```

Create a new job

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisationId = 'organisationId_example'; // string
$jobRequest = new \HiCo\EventManagerClient\Model\JobRequest(); // \HiCo\EventManagerClient\Model\JobRequest

try {
    $result = $apiInstance->createJob($organisationId, $jobRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->createJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organisationId** | **string**|  | [optional]
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
createJobSchedule($organisationId, $jobScheduleRequest): \HiCo\EventManagerClient\Model\AsyncResponse
```

Create a job schedule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisationId = 'organisationId_example'; // string
$jobScheduleRequest = new \HiCo\EventManagerClient\Model\JobScheduleRequest(); // \HiCo\EventManagerClient\Model\JobScheduleRequest

try {
    $result = $apiInstance->createJobSchedule($organisationId, $jobScheduleRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->createJobSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organisationId** | **string**|  | [optional]
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
getJobById($jobId, $organisationId): \HiCo\EventManagerClient\Model\Job
```

Get a job by job id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$jobId = 'jobId_example'; // string | The job id
$organisationId = 'organisationId_example'; // string

try {
    $result = $apiInstance->getJobById($jobId, $organisationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getJobById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jobId** | **string**| The job id |
 **organisationId** | **string**|  | [optional]

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
getJobsBy($organisationId, $jobId, $streamId, $status): \HiCo\EventManagerClient\Model\Job[]
```

Get a list of jobs by

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisationId = 'organisationId_example'; // string
$jobId = 'jobId_example'; // string | The job id
$streamId = 'streamId_example'; // string | The stream id of the job
$status = 'status_example'; // string | The job status

try {
    $result = $apiInstance->getJobsBy($organisationId, $jobId, $streamId, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getJobsBy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organisationId** | **string**|  | [optional]
 **jobId** | **string**| The job id | [optional]
 **streamId** | **string**| The stream id of the job | [optional]
 **status** | **string**| The job status | [optional]

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
replicateJob($organisationId, $replicateJobRequest): \HiCo\EventManagerClient\Model\AsyncResponse
```

Replicate job

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisationId = 'organisationId_example'; // string
$replicateJobRequest = new \HiCo\EventManagerClient\Model\ReplicateJobRequest(); // \HiCo\EventManagerClient\Model\ReplicateJobRequest

try {
    $result = $apiInstance->replicateJob($organisationId, $replicateJobRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->replicateJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organisationId** | **string**|  | [optional]
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
updateJob($updateJobRequest, $organisationId): \HiCo\EventManagerClient\Model\AsyncResponse
```

Update job

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateJobRequest = new \HiCo\EventManagerClient\Model\UpdateJobRequest(); // \HiCo\EventManagerClient\Model\UpdateJobRequest | The fields to update
$organisationId = 'organisationId_example'; // string

try {
    $result = $apiInstance->updateJob($updateJobRequest, $organisationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->updateJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateJobRequest** | [**\HiCo\EventManagerClient\Model\UpdateJobRequest**](../Model/UpdateJobRequest.md)| The fields to update |
 **organisationId** | **string**|  | [optional]

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
