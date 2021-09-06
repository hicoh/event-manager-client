# OpenAPIClient-php

HighCohesion API
[https://highcohesion.co.uk](https://highcohesion.co.uk)



## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/hicoh/event-manager-client.git"
    }
  ],
  "require": {
    "hicoh/event-manager-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: admin_api_key
$config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = HiCo\EventManagerClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');


$apiInstance = new HiCo\EventManagerClient\Api\ApiKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisationId = 123e4567-e89b-12d3-a456-426614174000; // string

try {
    $result = $apiInstance->createApiKey($organisationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeyApi->createApiKey: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://virtserver.swaggerhub.com/HighCohesion/Public-Gateway/1.0.0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ApiKeyApi* | [**createApiKey**](docs/Api/ApiKeyApi.md#createapikey) | **POST** /event_manager/api_key/{organisation_id} | Create a new API key
*ApiKeyApi* | [**deleteApiKey**](docs/Api/ApiKeyApi.md#deleteapikey) | **DELETE** /event_manager/api_key/{organisation_id}/{key_id} | Delete an API key
*EventApi* | [**getEventById**](docs/Api/EventApi.md#geteventbyid) | **GET** /event_manager/event/{event_id} | Get an event by event id
*EventApi* | [**getEventsBy**](docs/Api/EventApi.md#geteventsby) | **GET** /event_manager/event | Get a list of events by
*EventApi* | [**redriveEvent**](docs/Api/EventApi.md#redriveevent) | **POST** /event_manager/event/redrive | Redrive Event
*EventApi* | [**replicateEvent**](docs/Api/EventApi.md#replicateevent) | **POST** /event_manager/event/replicate | Replicate Event
*EventApi* | [**updateEvent**](docs/Api/EventApi.md#updateevent) | **PATCH** /event_manager/event | Update Event
*EventEntityApi* | [**updateEventEntity**](docs/Api/EventEntityApi.md#updateevententity) | **PATCH** /event_manager/event_entity | Update Event Entity
*JobApi* | [**createJob**](docs/Api/JobApi.md#createjob) | **POST** /event_manager/job | Create a new job
*JobApi* | [**createJobSchedule**](docs/Api/JobApi.md#createjobschedule) | **POST** /event_manager/job/schedule | Create a job schedule
*JobApi* | [**getJobById**](docs/Api/JobApi.md#getjobbyid) | **GET** /event_manager/job/{job_id} | Get a job by job id
*JobApi* | [**getJobsBy**](docs/Api/JobApi.md#getjobsby) | **GET** /event_manager/job | Get a list of jobs by
*JobApi* | [**replicateJob**](docs/Api/JobApi.md#replicatejob) | **POST** /event_manager/job/replicate | Replicate job
*JobApi* | [**updateJob**](docs/Api/JobApi.md#updatejob) | **PATCH** /event_manager/job | Update job
*OrganisationApi* | [**createOrganisationIndex**](docs/Api/OrganisationApi.md#createorganisationindex) | **POST** /event_manager/organisation/{organisation_id}/index | Create the organisation tables
*StreamApi* | [**createScheduleConfiguration**](docs/Api/StreamApi.md#createscheduleconfiguration) | **POST** /event_manager/stream/schedule_configuration | Create a new Stream Schedule Configuration
*StreamApi* | [**updateScheduleConfigurationAttributes**](docs/Api/StreamApi.md#updatescheduleconfigurationattributes) | **PATCH** /event_manager/stream/schedule_configuration | Updates Stream Schedule Configuration option and active attributes.
*WebhookApi* | [**postDynamicWebhook**](docs/Api/WebhookApi.md#postdynamicwebhook) | **POST** /event_manager/webhook/dynamic/{stream_id}/{access_token} | Dynamic Webhook
*WebhookApi* | [**postStaticWebhook**](docs/Api/WebhookApi.md#poststaticwebhook) | **POST** /event_manager/webhook/static/{stream_id}/{access_token} | Static Webhook
*WebhookApi* | [**replicateDynamicWebhook**](docs/Api/WebhookApi.md#replicatedynamicwebhook) | **POST** /event_manager/job/replicate/webhook/dynamic | Replicate Dynamic Webhook
*WebhookApi* | [**replicateStaticWebhook**](docs/Api/WebhookApi.md#replicatestaticwebhook) | **POST** /event_manager/job/replicate/webhook/static | Replicate Static Webhook

## Models

- [ApiKeyResponse](docs/Model/ApiKeyResponse.md)
- [AsyncResponse](docs/Model/AsyncResponse.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [Event](docs/Model/Event.md)
- [Job](docs/Model/Job.md)
- [JobRequest](docs/Model/JobRequest.md)
- [JobScheduleRequest](docs/Model/JobScheduleRequest.md)
- [PatchSyncResponse](docs/Model/PatchSyncResponse.md)
- [RedriveEventRequest](docs/Model/RedriveEventRequest.md)
- [ReplicateEventRequest](docs/Model/ReplicateEventRequest.md)
- [ReplicateJobRequest](docs/Model/ReplicateJobRequest.md)
- [ReplicateWebhook](docs/Model/ReplicateWebhook.md)
- [ScheduleConfiguration](docs/Model/ScheduleConfiguration.md)
- [ScheduleConfigurationRequest](docs/Model/ScheduleConfigurationRequest.md)
- [SyncResponse](docs/Model/SyncResponse.md)
- [UpdateEventEntityRequest](docs/Model/UpdateEventEntityRequest.md)
- [UpdateEventRequest](docs/Model/UpdateEventRequest.md)
- [UpdateJobRequest](docs/Model/UpdateJobRequest.md)

## Authorization

### admin_api_key

- **Type**: API key
- **API key parameter name**: api_key
- **Location**: HTTP header



### api_key

- **Type**: API key
- **API key parameter name**: api_key
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

admin@highcohesion.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
