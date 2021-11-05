<?php
/**
 * ApiKeyApi
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
 * The version of the OpenAPI document: 1.0.13
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
 * ApiKeyApi Class Doc Comment
 *
 * @category Class
 * @package  HiCo\EventManagerClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ApiKeyApi
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
     * Operation createApiKey
     *
     * Create a new API key
     *
     * @param  \HiCo\EventManagerClient\Model\ApiKeyRequest $apiKeyRequest apiKeyRequest (optional)
     *
     * @throws \HiCo\EventManagerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \HiCo\EventManagerClient\Model\ApiKeyResponse
     */
    public function createApiKey($apiKeyRequest = null)
    {
        list($response) = $this->createApiKeyWithHttpInfo($apiKeyRequest);
        return $response;
    }

    /**
     * Operation createApiKeyWithHttpInfo
     *
     * Create a new API key
     *
     * @param  \HiCo\EventManagerClient\Model\ApiKeyRequest $apiKeyRequest (optional)
     *
     * @throws \HiCo\EventManagerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \HiCo\EventManagerClient\Model\ApiKeyResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createApiKeyWithHttpInfo($apiKeyRequest = null)
    {
        $request = $this->createApiKeyRequest($apiKeyRequest);

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
                case 200:
                    if ('\HiCo\EventManagerClient\Model\ApiKeyResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\HiCo\EventManagerClient\Model\ApiKeyResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\HiCo\EventManagerClient\Model\ApiKeyResponse';
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
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\HiCo\EventManagerClient\Model\ApiKeyResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createApiKeyAsync
     *
     * Create a new API key
     *
     * @param  \HiCo\EventManagerClient\Model\ApiKeyRequest $apiKeyRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createApiKeyAsync($apiKeyRequest = null)
    {
        return $this->createApiKeyAsyncWithHttpInfo($apiKeyRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createApiKeyAsyncWithHttpInfo
     *
     * Create a new API key
     *
     * @param  \HiCo\EventManagerClient\Model\ApiKeyRequest $apiKeyRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createApiKeyAsyncWithHttpInfo($apiKeyRequest = null)
    {
        $returnType = '\HiCo\EventManagerClient\Model\ApiKeyResponse';
        $request = $this->createApiKeyRequest($apiKeyRequest);

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
     * Create request for operation 'createApiKey'
     *
     * @param  \HiCo\EventManagerClient\Model\ApiKeyRequest $apiKeyRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createApiKeyRequest($apiKeyRequest = null)
    {

        $resourcePath = '/event_manager/api_key';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





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
        if (isset($apiKeyRequest)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($apiKeyRequest));
            } else {
                $httpBody = $apiKeyRequest;
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
     * Operation deleteApiKey
     *
     * Delete an API key
     *
     * @param  string $organisationId organisationId (required)
     * @param  string $keyId keyId (required)
     *
     * @throws \HiCo\EventManagerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteApiKey($organisationId, $keyId)
    {
        $this->deleteApiKeyWithHttpInfo($organisationId, $keyId);
    }

    /**
     * Operation deleteApiKeyWithHttpInfo
     *
     * Delete an API key
     *
     * @param  string $organisationId (required)
     * @param  string $keyId (required)
     *
     * @throws \HiCo\EventManagerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteApiKeyWithHttpInfo($organisationId, $keyId)
    {
        $request = $this->deleteApiKeyRequest($organisationId, $keyId);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\HiCo\EventManagerClient\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deleteApiKeyAsync
     *
     * Delete an API key
     *
     * @param  string $organisationId (required)
     * @param  string $keyId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteApiKeyAsync($organisationId, $keyId)
    {
        return $this->deleteApiKeyAsyncWithHttpInfo($organisationId, $keyId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteApiKeyAsyncWithHttpInfo
     *
     * Delete an API key
     *
     * @param  string $organisationId (required)
     * @param  string $keyId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteApiKeyAsyncWithHttpInfo($organisationId, $keyId)
    {
        $returnType = '';
        $request = $this->deleteApiKeyRequest($organisationId, $keyId);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'deleteApiKey'
     *
     * @param  string $organisationId (required)
     * @param  string $keyId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteApiKeyRequest($organisationId, $keyId)
    {
        // verify the required parameter 'organisationId' is set
        if ($organisationId === null || (is_array($organisationId) && count($organisationId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organisationId when calling deleteApiKey'
            );
        }
        // verify the required parameter 'keyId' is set
        if ($keyId === null || (is_array($keyId) && count($keyId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $keyId when calling deleteApiKey'
            );
        }

        $resourcePath = '/event_manager/api_key/{organisation_id}/{key_id}';
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
        if ($keyId !== null) {
            $resourcePath = str_replace(
                '{' . 'key_id' . '}',
                ObjectSerializer::toPathValue($keyId),
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
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getAllApiKeysByOrganisation
     *
     * Fetch all API keys associated with an Organisation
     *
     * @param  string $organisationId organisationId (required)
     *
     * @throws \HiCo\EventManagerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \HiCo\EventManagerClient\Model\FullApiKey[]
     */
    public function getAllApiKeysByOrganisation($organisationId)
    {
        list($response) = $this->getAllApiKeysByOrganisationWithHttpInfo($organisationId);
        return $response;
    }

    /**
     * Operation getAllApiKeysByOrganisationWithHttpInfo
     *
     * Fetch all API keys associated with an Organisation
     *
     * @param  string $organisationId (required)
     *
     * @throws \HiCo\EventManagerClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \HiCo\EventManagerClient\Model\FullApiKey[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllApiKeysByOrganisationWithHttpInfo($organisationId)
    {
        $request = $this->getAllApiKeysByOrganisationRequest($organisationId);

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
                case 200:
                    if ('\HiCo\EventManagerClient\Model\FullApiKey[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\HiCo\EventManagerClient\Model\FullApiKey[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\HiCo\EventManagerClient\Model\FullApiKey[]';
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
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\HiCo\EventManagerClient\Model\FullApiKey[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAllApiKeysByOrganisationAsync
     *
     * Fetch all API keys associated with an Organisation
     *
     * @param  string $organisationId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllApiKeysByOrganisationAsync($organisationId)
    {
        return $this->getAllApiKeysByOrganisationAsyncWithHttpInfo($organisationId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAllApiKeysByOrganisationAsyncWithHttpInfo
     *
     * Fetch all API keys associated with an Organisation
     *
     * @param  string $organisationId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllApiKeysByOrganisationAsyncWithHttpInfo($organisationId)
    {
        $returnType = '\HiCo\EventManagerClient\Model\FullApiKey[]';
        $request = $this->getAllApiKeysByOrganisationRequest($organisationId);

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
     * Create request for operation 'getAllApiKeysByOrganisation'
     *
     * @param  string $organisationId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAllApiKeysByOrganisationRequest($organisationId)
    {
        // verify the required parameter 'organisationId' is set
        if ($organisationId === null || (is_array($organisationId) && count($organisationId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organisationId when calling getAllApiKeysByOrganisation'
            );
        }

        $resourcePath = '/event_manager/api_key/all/organisation/{organisation_id}';
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
