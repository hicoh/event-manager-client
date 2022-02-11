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

## API Endpoints

All URIs are relative to *https://api.highcohesion.com/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AggregateApi* | [**getAggregateEvents**](docs/Api/AggregateApi.md#getaggregateevents) | **GET** /event_manager/aggregate_events/{organisation_id}/{stream_id}/{job_id} | Aggregate all events from a specific job
*AggregateApi* | [**replicateChildAggregateEvent**](docs/Api/AggregateApi.md#replicatechildaggregateevent) | **POST** /event_manager/aggregate_events/replicate_child | Replicate Child Aggregate Event
*AggregateApi* | [**replicateParentAggregateEvent**](docs/Api/AggregateApi.md#replicateparentaggregateevent) | **POST** /event_manager/aggregate_events/replicate_parent | Replicate a Parent Aggregate event
*ApiKeyApi* | [**createApiKey**](docs/Api/ApiKeyApi.md#createapikey) | **POST** /event_manager/api_key | Create a new API key
*ApiKeyApi* | [**deleteApiKey**](docs/Api/ApiKeyApi.md#deleteapikey) | **DELETE** /event_manager/api_key/{organisation_id}/{key_id} | Delete an API key
*ApiKeyApi* | [**getAllApiKeysByOrganisation**](docs/Api/ApiKeyApi.md#getallapikeysbyorganisation) | **GET** /event_manager/api_key/all/organisation/{organisation_id} | Fetch all API keys associated with an Organisation
*EventApi* | [**getEventById**](docs/Api/EventApi.md#geteventbyid) | **GET** /event_manager/event/{event_id} | Get an event by event id
*EventApi* | [**getEventsBy**](docs/Api/EventApi.md#geteventsby) | **GET** /event_manager/event | Get a list of events by
*EventApi* | [**postEvent**](docs/Api/EventApi.md#postevent) | **POST** /event_manager/event | Create a new batch of events and send them to be transformed
*EventApi* | [**replicateEvent**](docs/Api/EventApi.md#replicateevent) | **POST** /event_manager/event/replicate | Replicate Event
*EventApi* | [**updateChildEvent**](docs/Api/EventApi.md#updatechildevent) | **PATCH** /event_manager/child_event | Update Child Event via the Parent Event ID and the entity name
*EventApi* | [**updateEvent**](docs/Api/EventApi.md#updateevent) | **PATCH** /event_manager/event | Update Event
*EventEntityApi* | [**updateEventEntity**](docs/Api/EventEntityApi.md#updateevententity) | **PATCH** /event_manager/event_entity | Update Event Entity
*HealthApi* | [**getHealth**](docs/Api/HealthApi.md#gethealth) | **GET** /event_manager/health | Get Health
*JobApi* | [**createJob**](docs/Api/JobApi.md#createjob) | **POST** /event_manager/job | Create a new job
*JobApi* | [**createJobSchedule**](docs/Api/JobApi.md#createjobschedule) | **POST** /event_manager/job/schedule | Create a job schedule
*JobApi* | [**createSourceJob**](docs/Api/JobApi.md#createsourcejob) | **POST** /event_manager/job/source | Trigger a job to be sent to the source
*JobApi* | [**deleteJob**](docs/Api/JobApi.md#deletejob) | **DELETE** /event_manager/job | Delete jobs
*JobApi* | [**getJobById**](docs/Api/JobApi.md#getjobbyid) | **GET** /event_manager/job/{job_id} | Get a job by job id
*JobApi* | [**getJobsBy**](docs/Api/JobApi.md#getjobsby) | **GET** /event_manager/job | Get a list of jobs by
*JobApi* | [**replicateJob**](docs/Api/JobApi.md#replicatejob) | **POST** /event_manager/job/replicate | Replicate job
*JobApi* | [**updateJob**](docs/Api/JobApi.md#updatejob) | **PATCH** /event_manager/job | Update job
*KeyApi* | [**getKey**](docs/Api/KeyApi.md#getkey) | **GET** /event_manager/key/{id} | Fetch key
*OrganisationApi* | [**createOrganisationIndex**](docs/Api/OrganisationApi.md#createorganisationindex) | **POST** /event_manager/organisation/{organisation_id}/index | Create the organisation tables
*StreamApi* | [**createScheduleConfiguration**](docs/Api/StreamApi.md#createscheduleconfiguration) | **POST** /event_manager/stream/schedule_configuration | Create a new Stream Schedule Configuration
*StreamApi* | [**deleteScheduleConfiguration**](docs/Api/StreamApi.md#deletescheduleconfiguration) | **DELETE** /event_manager/stream/schedule_configuration/{stream_id} | Delete a Stream Schedule Configuration
*StreamApi* | [**getScheduleConfiguration**](docs/Api/StreamApi.md#getscheduleconfiguration) | **GET** /event_manager/stream/schedule_configuration/{stream_id} | Get a Stream Schedule Configuration by Stream Id
*StreamApi* | [**updateScheduleConfigurationAttributes**](docs/Api/StreamApi.md#updatescheduleconfigurationattributes) | **PATCH** /event_manager/stream/schedule_configuration | Updates Stream Schedule Configuration option and active attributes.
*WebhookApi* | [**postDynamicWebhook**](docs/Api/WebhookApi.md#postdynamicwebhook) | **POST** /event_manager/webhook/dynamic/{stream_id} | Dynamic Webhook
*WebhookApi* | [**postStaticWebhook**](docs/Api/WebhookApi.md#poststaticwebhook) | **POST** /event_manager/webhook/static/{stream_id} | Static Webhook
*WebhookApi* | [**replicateDynamicWebhook**](docs/Api/WebhookApi.md#replicatedynamicwebhook) | **POST** /event_manager/job/replicate/webhook/dynamic | Replicate Dynamic Webhook
*WebhookApi* | [**replicateStaticWebhook**](docs/Api/WebhookApi.md#replicatestaticwebhook) | **POST** /event_manager/job/replicate/webhook/static | Replicate Static Webhook

## Models

- [ApiKeyRequest](docs/Model/ApiKeyRequest.md)
- [ApiKeyResponse](docs/Model/ApiKeyResponse.md)
- [AsyncResponse](docs/Model/AsyncResponse.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [Event](docs/Model/Event.md)
- [FullApiKey](docs/Model/FullApiKey.md)
- [Health](docs/Model/Health.md)
- [Job](docs/Model/Job.md)
- [JobRequest](docs/Model/JobRequest.md)
- [JobScheduleRequest](docs/Model/JobScheduleRequest.md)
- [PatchSyncResponse](docs/Model/PatchSyncResponse.md)
- [PostEventRequest](docs/Model/PostEventRequest.md)
- [ReplicateEventRequest](docs/Model/ReplicateEventRequest.md)
- [ReplicateJobRequest](docs/Model/ReplicateJobRequest.md)
- [ReplicateParentAggregateEventRequest](docs/Model/ReplicateParentAggregateEventRequest.md)
- [ReplicateWebhook](docs/Model/ReplicateWebhook.md)
- [ScheduleConfiguration](docs/Model/ScheduleConfiguration.md)
- [ScheduleConfigurationRequest](docs/Model/ScheduleConfigurationRequest.md)
- [SourceJobRequest](docs/Model/SourceJobRequest.md)
- [SyncResponse](docs/Model/SyncResponse.md)
- [UpdateChildEventRequest](docs/Model/UpdateChildEventRequest.md)
- [UpdateEventEntityRequest](docs/Model/UpdateEventEntityRequest.md)
- [UpdateEventRequest](docs/Model/UpdateEventRequest.md)
- [UpdateJobRequest](docs/Model/UpdateJobRequest.md)

## Authorization

### admin_apikey

- **Type**: API key
- **API key parameter name**: apikey
- **Location**: HTTP header



### apikey

- **Type**: API key
- **API key parameter name**: apikey
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

- API version: `1.0.30`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
