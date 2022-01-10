<?php
/**
 * AggregateApi
 * PHP version 7.3
 *
 * @category Class
 * @package  HiCo\EventManagerClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * HighCohesion API
 *
 * HighCohesion API [https://highcohesion.co.uk](https://highcohesion.co.uk)
 *
 * The version of the OpenAPI document: 1.0.20
 * Contact: admin@highcohesion.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HiCo\EventManagerClient\Service;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use HiCo\EventManagerClient\ApiException;
use HiCo\EventManagerClient\Configuration;
use HiCo\EventManagerClient\HeaderSelector;
use HiCo\EventManagerClient\ObjectSerializer;

/**
 * AggregateApi Class Doc Comment
 *
 * @category Class
 * @package  HiCo\EventManagerClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AggregateApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getAggregateEvents
     *
     * Aggregate all events from a specific job
     *
     * @param  string $organisationId organisationId (required)
     * @param  string $streamId streamId (required)
     * @param  string $jobId jobId (required)
     *
     * @throws \HiCo\EventManagerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \HiCo\EventManagerClient\Model\AsyncResponse
     */
    public function getAggregateEvents($organisationId, $streamId, $jobId)
    {
        list($response) = $this->getAggregateEventsWithHttpInfo($organisationId, $streamId, $jobId);
        return $response;
    }

    /**
     * Operation getAggregateEventsWithHttpInfo
     *
     * Aggregate all events from a specific job
     *
     * @param  string $organisationId (required)
     * @param  string $streamId (required)
     * @param  string $jobId (required)
     *
     * @throws \HiCo\EventManagerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \HiCo\EventManagerClient\Model\AsyncResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAggregateEventsWithHttpInfo($organisationId, $streamId, $jobId)
    {
        $request = $this->getAggregateEventsRequest($organisationId, $streamId, $jobId);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 202:
                    if ('\HiCo\EventManagerClient\Model\AsyncResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\HiCo\EventManagerClient\Model\AsyncResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\HiCo\EventManagerClient\Model\AsyncResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 202:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\HiCo\EventManagerClient\Model\AsyncResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAggregateEventsAsync
     *
     * Aggregate all events from a specific job
     *
     * @param  string $organisationId (required)
     * @param  string $streamId (required)
     * @param  string $jobId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAggregateEventsAsync($organisationId, $streamId, $jobId)
    {
        return $this->getAggregateEventsAsyncWithHttpInfo($organisationId, $streamId, $jobId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAggregateEventsAsyncWithHttpInfo
     *
     * Aggregate all events from a specific job
     *
     * @param  string $organisationId (required)
     * @param  string $streamId (required)
     * @param  string $jobId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAggregateEventsAsyncWithHttpInfo($organisationId, $streamId, $jobId)
    {
        $returnType = '\HiCo\EventManagerClient\Model\AsyncResponse';
        $request = $this->getAggregateEventsRequest($organisationId, $streamId, $jobId);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getAggregateEvents'
     *
     * @param  string $organisationId (required)
     * @param  string $streamId (required)
     * @param  string $jobId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAggregateEventsRequest($organisationId, $streamId, $jobId)
    {
        // verify the required parameter 'organisationId' is set
        if ($organisationId === null || (is_array($organisationId) && count($organisationId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organisationId when calling getAggregateEvents'
            );
        }
        // verify the required parameter 'streamId' is set
        if ($streamId === null || (is_array($streamId) && count($streamId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $streamId when calling getAggregateEvents'
            );
        }
        // verify the required parameter 'jobId' is set
        if ($jobId === null || (is_array($jobId) && count($jobId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $jobId when calling getAggregateEvents'
            );
        }

        $resourcePath = '/event_manager/aggregate_events/{organisation_id}/{stream_id}/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($organisationId !== null) {
            $resourcePath = str_replace(
                '{' . 'organisation_id' . '}',
                ObjectSerializer::toPathValue($organisationId),
                $resourcePath
            );
        }
        // path params
        if ($streamId !== null) {
            $resourcePath = str_replace(
                '{' . 'stream_id' . '}',
                ObjectSerializer::toPathValue($streamId),
                $resourcePath
            );
        }
        // path params
        if ($jobId !== null) {
            $resourcePath = str_replace(
                '{' . 'job_id' . '}',
                ObjectSerializer::toPathValue($jobId),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('apikey');
        if ($apiKey !== null) {
            $headers['apikey'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation replicateChildAggregateEvent
     *
     * Replicate Child Aggregate Event
     *
     * @param  string $organisationId organisationId (optional)
     * @param  \HiCo\EventManagerClient\Model\ReplicateEventRequest $replicateEventRequest replicateEventRequest (optional)
     *
     * @throws \HiCo\EventManagerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \HiCo\EventManagerClient\Model\AsyncResponse
     */
    public function replicateChildAggregateEvent($organisationId = null, $replicateEventRequest = null)
    {
        list($response) = $this->replicateChildAggregateEventWithHttpInfo($organisationId, $replicateEventRequest);
        return $response;
    }

    /**
     * Operation replicateChildAggregateEventWithHttpInfo
     *
     * Replicate Child Aggregate Event
     *
     * @param  string $organisationId (optional)
     * @param  \HiCo\EventManagerClient\Model\ReplicateEventRequest $replicateEventRequest (optional)
     *
     * @throws \HiCo\EventManagerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \HiCo\EventManagerClient\Model\AsyncResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function replicateChildAggregateEventWithHttpInfo($organisationId = null, $replicateEventRequest = null)
    {
        $request = $this->replicateChildAggregateEventRequest($organisationId, $replicateEventRequest);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 202:
                    if ('\HiCo\EventManagerClient\Model\AsyncResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\HiCo\EventManagerClient\Model\AsyncResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\HiCo\EventManagerClient\Model\AsyncResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 202:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\HiCo\EventManagerClient\Model\AsyncResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation replicateChildAggregateEventAsync
     *
     * Replicate Child Aggregate Event
     *
     * @param  string $organisationId (optional)
     * @param  \HiCo\EventManagerClient\Model\ReplicateEventRequest $replicateEventRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function replicateChildAggregateEventAsync($organisationId = null, $replicateEventRequest = null)
    {
        return $this->replicateChildAggregateEventAsyncWithHttpInfo($organisationId, $replicateEventRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation replicateChildAggregateEventAsyncWithHttpInfo
     *
     * Replicate Child Aggregate Event
     *
     * @param  string $organisationId (optional)
     * @param  \HiCo\EventManagerClient\Model\ReplicateEventRequest $replicateEventRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function replicateChildAggregateEventAsyncWithHttpInfo($organisationId = null, $replicateEventRequest = null)
    {
        $returnType = '\HiCo\EventManagerClient\Model\AsyncResponse';
        $request = $this->replicateChildAggregateEventRequest($organisationId, $replicateEventRequest);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'replicateChildAggregateEvent'
     *
     * @param  string $organisationId (optional)
     * @param  \HiCo\EventManagerClient\Model\ReplicateEventRequest $replicateEventRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function replicateChildAggregateEventRequest($organisationId = null, $replicateEventRequest = null)
    {

        $resourcePath = '/event_manager/aggregate_events/replicate_child';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($organisationId !== null) {
            $headerParams['organisation-id'] = ObjectSerializer::toHeaderValue($organisationId);
        }



        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($replicateEventRequest)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($replicateEventRequest));
            } else {
                $httpBody = $replicateEventRequest;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('apikey');
        if ($apiKey !== null) {
            $headers['apikey'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation replicateParentAggregateEvent
     *
     * Replicate a Parent Aggregate event
     *
     * @param  \HiCo\EventManagerClient\Model\ReplicateParentAggregateEventRequest $replicateParentAggregateEventRequest Event Data (required)
     * @param  string $organisationId organisationId (optional)
     *
     * @throws \HiCo\EventManagerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \HiCo\EventManagerClient\Model\AsyncResponse
     */
    public function replicateParentAggregateEvent($replicateParentAggregateEventRequest, $organisationId = null)
    {
        list($response) = $this->replicateParentAggregateEventWithHttpInfo($replicateParentAggregateEventRequest, $organisationId);
        return $response;
    }

    /**
     * Operation replicateParentAggregateEventWithHttpInfo
     *
     * Replicate a Parent Aggregate event
     *
     * @param  \HiCo\EventManagerClient\Model\ReplicateParentAggregateEventRequest $replicateParentAggregateEventRequest Event Data (required)
     * @param  string $organisationId (optional)
     *
     * @throws \HiCo\EventManagerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \HiCo\EventManagerClient\Model\AsyncResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function replicateParentAggregateEventWithHttpInfo($replicateParentAggregateEventRequest, $organisationId = null)
    {
        $request = $this->replicateParentAggregateEventRequest($replicateParentAggregateEventRequest, $organisationId);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 202:
                    if ('\HiCo\EventManagerClient\Model\AsyncResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\HiCo\EventManagerClient\Model\AsyncResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\HiCo\EventManagerClient\Model\AsyncResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 202:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\HiCo\EventManagerClient\Model\AsyncResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation replicateParentAggregateEventAsync
     *
     * Replicate a Parent Aggregate event
     *
     * @param  \HiCo\EventManagerClient\Model\ReplicateParentAggregateEventRequest $replicateParentAggregateEventRequest Event Data (required)
     * @param  string $organisationId (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function replicateParentAggregateEventAsync($replicateParentAggregateEventRequest, $organisationId = null)
    {
        return $this->replicateParentAggregateEventAsyncWithHttpInfo($replicateParentAggregateEventRequest, $organisationId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation replicateParentAggregateEventAsyncWithHttpInfo
     *
     * Replicate a Parent Aggregate event
     *
     * @param  \HiCo\EventManagerClient\Model\ReplicateParentAggregateEventRequest $replicateParentAggregateEventRequest Event Data (required)
     * @param  string $organisationId (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function replicateParentAggregateEventAsyncWithHttpInfo($replicateParentAggregateEventRequest, $organisationId = null)
    {
        $returnType = '\HiCo\EventManagerClient\Model\AsyncResponse';
        $request = $this->replicateParentAggregateEventRequest($replicateParentAggregateEventRequest, $organisationId);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'replicateParentAggregateEvent'
     *
     * @param  \HiCo\EventManagerClient\Model\ReplicateParentAggregateEventRequest $replicateParentAggregateEventRequest Event Data (required)
     * @param  string $organisationId (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function replicateParentAggregateEventRequest($replicateParentAggregateEventRequest, $organisationId = null)
    {
        // verify the required parameter 'replicateParentAggregateEventRequest' is set
        if ($replicateParentAggregateEventRequest === null || (is_array($replicateParentAggregateEventRequest) && count($replicateParentAggregateEventRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $replicateParentAggregateEventRequest when calling replicateParentAggregateEvent'
            );
        }

        $resourcePath = '/event_manager/aggregate_events/replicate_parent';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($organisationId !== null) {
            $headerParams['organisation-id'] = ObjectSerializer::toHeaderValue($organisationId);
        }



        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($replicateParentAggregateEventRequest)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($replicateParentAggregateEventRequest));
            } else {
                $httpBody = $replicateParentAggregateEventRequest;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('apikey');
        if ($apiKey !== null) {
            $headers['apikey'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
