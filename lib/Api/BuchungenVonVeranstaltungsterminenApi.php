<?php
/**
 * BuchungenVonVeranstaltungsterminenApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * VEDA Bildungsmanager API
 *
 * Dokumentation der REST-Schnittstellen des VEDA Bildungsmanagers für die Version 2. Die Dokumentation zu speziellen Versionen kann über die Angabe des zusätzlichen Parameters \"group\" angezeigt werden. Beispiel: .../api/docs?group=v1 für die Dokumentation der Version 1, die aktuelle Version ist unter .../api/docs erreichbar.
 *
 * OpenAPI spec version: 2
 * Contact: info@veda.net
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.10
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * BuchungenVonVeranstaltungsterminenApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BuchungenVonVeranstaltungsterminenApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation lernerfolgAufVeranstaltungsterminMeldenUsingPOST
     *
     * Ermöglicht es, zu einer Teilnehmerbuchung eines Veranstaltungstermins einen Lernerfolg zu melden
     *
     * @param  string $teilnehmerbuchung_id ID der Teilnehmerbuchung (required)
     * @param  \Swagger\Client\Model\VeranstaltungsterminTeilnehmerbuchungLernerfolgMeldenApiDto $veranstaltungstermin_teilnehmerbuchung_lernerfolg_melden_api_dto Informationen zum Melden des Lernerfolgs. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function lernerfolgAufVeranstaltungsterminMeldenUsingPOST($teilnehmerbuchung_id, $veranstaltungstermin_teilnehmerbuchung_lernerfolg_melden_api_dto = null)
    {
        $this->lernerfolgAufVeranstaltungsterminMeldenUsingPOSTWithHttpInfo($teilnehmerbuchung_id, $veranstaltungstermin_teilnehmerbuchung_lernerfolg_melden_api_dto);
    }

    /**
     * Operation lernerfolgAufVeranstaltungsterminMeldenUsingPOSTWithHttpInfo
     *
     * Ermöglicht es, zu einer Teilnehmerbuchung eines Veranstaltungstermins einen Lernerfolg zu melden
     *
     * @param  string $teilnehmerbuchung_id ID der Teilnehmerbuchung (required)
     * @param  \Swagger\Client\Model\VeranstaltungsterminTeilnehmerbuchungLernerfolgMeldenApiDto $veranstaltungstermin_teilnehmerbuchung_lernerfolg_melden_api_dto Informationen zum Melden des Lernerfolgs. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function lernerfolgAufVeranstaltungsterminMeldenUsingPOSTWithHttpInfo($teilnehmerbuchung_id, $veranstaltungstermin_teilnehmerbuchung_lernerfolg_melden_api_dto = null)
    {
        $returnType = '';
        $request = $this->lernerfolgAufVeranstaltungsterminMeldenUsingPOSTRequest($teilnehmerbuchung_id, $veranstaltungstermin_teilnehmerbuchung_lernerfolg_melden_api_dto);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation lernerfolgAufVeranstaltungsterminMeldenUsingPOSTAsync
     *
     * Ermöglicht es, zu einer Teilnehmerbuchung eines Veranstaltungstermins einen Lernerfolg zu melden
     *
     * @param  string $teilnehmerbuchung_id ID der Teilnehmerbuchung (required)
     * @param  \Swagger\Client\Model\VeranstaltungsterminTeilnehmerbuchungLernerfolgMeldenApiDto $veranstaltungstermin_teilnehmerbuchung_lernerfolg_melden_api_dto Informationen zum Melden des Lernerfolgs. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function lernerfolgAufVeranstaltungsterminMeldenUsingPOSTAsync($teilnehmerbuchung_id, $veranstaltungstermin_teilnehmerbuchung_lernerfolg_melden_api_dto = null)
    {
        return $this->lernerfolgAufVeranstaltungsterminMeldenUsingPOSTAsyncWithHttpInfo($teilnehmerbuchung_id, $veranstaltungstermin_teilnehmerbuchung_lernerfolg_melden_api_dto)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation lernerfolgAufVeranstaltungsterminMeldenUsingPOSTAsyncWithHttpInfo
     *
     * Ermöglicht es, zu einer Teilnehmerbuchung eines Veranstaltungstermins einen Lernerfolg zu melden
     *
     * @param  string $teilnehmerbuchung_id ID der Teilnehmerbuchung (required)
     * @param  \Swagger\Client\Model\VeranstaltungsterminTeilnehmerbuchungLernerfolgMeldenApiDto $veranstaltungstermin_teilnehmerbuchung_lernerfolg_melden_api_dto Informationen zum Melden des Lernerfolgs. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function lernerfolgAufVeranstaltungsterminMeldenUsingPOSTAsyncWithHttpInfo($teilnehmerbuchung_id, $veranstaltungstermin_teilnehmerbuchung_lernerfolg_melden_api_dto = null)
    {
        $returnType = '';
        $request = $this->lernerfolgAufVeranstaltungsterminMeldenUsingPOSTRequest($teilnehmerbuchung_id, $veranstaltungstermin_teilnehmerbuchung_lernerfolg_melden_api_dto);

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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'lernerfolgAufVeranstaltungsterminMeldenUsingPOST'
     *
     * @param  string $teilnehmerbuchung_id ID der Teilnehmerbuchung (required)
     * @param  \Swagger\Client\Model\VeranstaltungsterminTeilnehmerbuchungLernerfolgMeldenApiDto $veranstaltungstermin_teilnehmerbuchung_lernerfolg_melden_api_dto Informationen zum Melden des Lernerfolgs. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function lernerfolgAufVeranstaltungsterminMeldenUsingPOSTRequest($teilnehmerbuchung_id, $veranstaltungstermin_teilnehmerbuchung_lernerfolg_melden_api_dto = null)
    {
        // verify the required parameter 'teilnehmerbuchung_id' is set
        if ($teilnehmerbuchung_id === null || (is_array($teilnehmerbuchung_id) && count($teilnehmerbuchung_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $teilnehmerbuchung_id when calling lernerfolgAufVeranstaltungsterminMeldenUsingPOST'
            );
        }

        $resourcePath = '/v2/veranstaltungsterminteilnehmerbuchungen/{teilnehmerbuchungId}/lernerfolgmelden';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($teilnehmerbuchung_id !== null) {
            $resourcePath = str_replace(
                '{' . 'teilnehmerbuchungId' . '}',
                ObjectSerializer::toPathValue($teilnehmerbuchung_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($veranstaltungstermin_teilnehmerbuchung_lernerfolg_melden_api_dto)) {
            $_tempBody = $veranstaltungstermin_teilnehmerbuchung_lernerfolg_melden_api_dto;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
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
     * Operation storniereBuchungAufVeranstaltungsterminUsingPOST
     *
     * Storniert die Buchung eines Teilnehmers auf einen Veranstaltungstermin (Noch nicht implementiert)
     *
     * @param  string $teilnehmerbuchung_id ID der Teilnehmerbuchung, die storniert werden soll. (required)
     * @param  \Swagger\Client\Model\TeilnehmerAktionStornierenApiDto $teilnehmer_aktion_stornieren_api_dto Definition der Daten die zum stornieren benötigt werden (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function storniereBuchungAufVeranstaltungsterminUsingPOST($teilnehmerbuchung_id, $teilnehmer_aktion_stornieren_api_dto = null)
    {
        $this->storniereBuchungAufVeranstaltungsterminUsingPOSTWithHttpInfo($teilnehmerbuchung_id, $teilnehmer_aktion_stornieren_api_dto);
    }

    /**
     * Operation storniereBuchungAufVeranstaltungsterminUsingPOSTWithHttpInfo
     *
     * Storniert die Buchung eines Teilnehmers auf einen Veranstaltungstermin (Noch nicht implementiert)
     *
     * @param  string $teilnehmerbuchung_id ID der Teilnehmerbuchung, die storniert werden soll. (required)
     * @param  \Swagger\Client\Model\TeilnehmerAktionStornierenApiDto $teilnehmer_aktion_stornieren_api_dto Definition der Daten die zum stornieren benötigt werden (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function storniereBuchungAufVeranstaltungsterminUsingPOSTWithHttpInfo($teilnehmerbuchung_id, $teilnehmer_aktion_stornieren_api_dto = null)
    {
        $returnType = '';
        $request = $this->storniereBuchungAufVeranstaltungsterminUsingPOSTRequest($teilnehmerbuchung_id, $teilnehmer_aktion_stornieren_api_dto);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation storniereBuchungAufVeranstaltungsterminUsingPOSTAsync
     *
     * Storniert die Buchung eines Teilnehmers auf einen Veranstaltungstermin (Noch nicht implementiert)
     *
     * @param  string $teilnehmerbuchung_id ID der Teilnehmerbuchung, die storniert werden soll. (required)
     * @param  \Swagger\Client\Model\TeilnehmerAktionStornierenApiDto $teilnehmer_aktion_stornieren_api_dto Definition der Daten die zum stornieren benötigt werden (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function storniereBuchungAufVeranstaltungsterminUsingPOSTAsync($teilnehmerbuchung_id, $teilnehmer_aktion_stornieren_api_dto = null)
    {
        return $this->storniereBuchungAufVeranstaltungsterminUsingPOSTAsyncWithHttpInfo($teilnehmerbuchung_id, $teilnehmer_aktion_stornieren_api_dto)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation storniereBuchungAufVeranstaltungsterminUsingPOSTAsyncWithHttpInfo
     *
     * Storniert die Buchung eines Teilnehmers auf einen Veranstaltungstermin (Noch nicht implementiert)
     *
     * @param  string $teilnehmerbuchung_id ID der Teilnehmerbuchung, die storniert werden soll. (required)
     * @param  \Swagger\Client\Model\TeilnehmerAktionStornierenApiDto $teilnehmer_aktion_stornieren_api_dto Definition der Daten die zum stornieren benötigt werden (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function storniereBuchungAufVeranstaltungsterminUsingPOSTAsyncWithHttpInfo($teilnehmerbuchung_id, $teilnehmer_aktion_stornieren_api_dto = null)
    {
        $returnType = '';
        $request = $this->storniereBuchungAufVeranstaltungsterminUsingPOSTRequest($teilnehmerbuchung_id, $teilnehmer_aktion_stornieren_api_dto);

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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'storniereBuchungAufVeranstaltungsterminUsingPOST'
     *
     * @param  string $teilnehmerbuchung_id ID der Teilnehmerbuchung, die storniert werden soll. (required)
     * @param  \Swagger\Client\Model\TeilnehmerAktionStornierenApiDto $teilnehmer_aktion_stornieren_api_dto Definition der Daten die zum stornieren benötigt werden (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function storniereBuchungAufVeranstaltungsterminUsingPOSTRequest($teilnehmerbuchung_id, $teilnehmer_aktion_stornieren_api_dto = null)
    {
        // verify the required parameter 'teilnehmerbuchung_id' is set
        if ($teilnehmerbuchung_id === null || (is_array($teilnehmerbuchung_id) && count($teilnehmerbuchung_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $teilnehmerbuchung_id when calling storniereBuchungAufVeranstaltungsterminUsingPOST'
            );
        }

        $resourcePath = '/v2/veranstaltungsterminteilnehmerbuchungen/{teilnehmerbuchungId}/stornieren';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($teilnehmerbuchung_id !== null) {
            $resourcePath = str_replace(
                '{' . 'teilnehmerbuchungId' . '}',
                ObjectSerializer::toPathValue($teilnehmerbuchung_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($teilnehmer_aktion_stornieren_api_dto)) {
            $_tempBody = $teilnehmer_aktion_stornieren_api_dto;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
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
