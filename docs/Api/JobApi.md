# HiCo\EventManagerClient\JobApi

All URIs are relative to https://api.highcohesion.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createJob()**](JobApi.md#createJob) | **POST** /event_manager/job | Create a new job
[**createJobSchedule()**](JobApi.md#createJobSchedule) | **POST** /event_manager/job/schedule | Create a job schedule
[**createSourceJob()**](JobApi.md#createSourceJob) | **POST** /event_manager/job/source | Trigger a job to be sent to the source
[**deleteJob()**](JobApi.md#deleteJob) | **DELETE** /event_manager/job | Delete jobs
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


// Configure API key authorization: apikey
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


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

[apikey](../../README.md#apikey)

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


// Configure API key authorization: apikey
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


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

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSourceJob()`

```php
createSourceJob($organisationId, $sourceJobRequest): \HiCo\EventManagerClient\Model\AsyncResponse
```

Trigger a job to be sent to the source

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisationId = 'organisationId_example'; // string
$sourceJobRequest = new \HiCo\EventManagerClient\Model\SourceJobRequest(); // \HiCo\EventManagerClient\Model\SourceJobRequest

try {
    $result = $apiInstance->createSourceJob($organisationId, $sourceJobRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->createSourceJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organisationId** | **string**|  | [optional]
 **sourceJobRequest** | [**\HiCo\EventManagerClient\Model\SourceJobRequest**](../Model/SourceJobRequest.md)|  | [optional]

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

## `deleteJob()`

```php
deleteJob($organisationId, $id, $streamId, $status, $dueAt): \HiCo\EventManagerClient\Model\SyncResponse
```

Delete jobs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisationId = 'organisationId_example'; // string
$id = 'id_example'; // string | The job id
$streamId = 'streamId_example'; // string | The stream id of the job
$status = 'status_example'; // string | The job status
$dueAt = 2021/03/21 12:23:22; // string | Delete jobs filtered by due_at date (due_at=2021/03/21 12:23:22,gte)

try {
    $result = $apiInstance->deleteJob($organisationId, $id, $streamId, $status, $dueAt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->deleteJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organisationId** | **string**|  | [optional]
 **id** | **string**| The job id | [optional]
 **streamId** | **string**| The stream id of the job | [optional]
 **status** | **string**| The job status | [optional]
 **dueAt** | **string**| Delete jobs filtered by due_at date (due_at&#x3D;2021/03/21 12:23:22,gte) | [optional]

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

## `getJobById()`

```php
getJobById($jobId): \HiCo\EventManagerClient\Model\Job
```

Get a job by job id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apikey
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


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

[apikey](../../README.md#apikey)

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


// Configure API key authorization: apikey
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


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

[apikey](../../README.md#apikey)

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


// Configure API key authorization: apikey
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


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

[apikey](../../README.md#apikey)

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


// Configure API key authorization: apikey
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


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

[apikey](../../README.md#apikey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
