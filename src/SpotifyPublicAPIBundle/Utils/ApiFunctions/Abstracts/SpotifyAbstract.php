<?php
/**
 * @author Dmitry Shumytskyi <d.shumytskyi@gmail.com>
 */

namespace SpotifyPublicAPIBundle\Utils\ApiFunctions\Abstracts;

abstract class SpotifyAbstract
{
    /**
     * @var array
     */
    protected $response;
    /**
     * @var mixed
     */
    protected $parameters;
    /**
     * @var mixed
     */
    protected $httpClient;
    /**
     * @var array
     */
    protected $result;
    /**
     * @var mixed
     */
    protected $queryBuilder;
    /**
     * @var mixed
     */
    protected $finder;

    /**
     * SpotifyAbstract constructor.
     *
     * @param $request
     * @param $httpClient
     * @param $queryBuilder
     * @param $finder
     */
    public function __construct($request, $httpClient, $queryBuilder, $finder)
    {
        $this->request = $request->getCurrentRequest();
        $this->body = json_decode($this->request->getContent(), true);
        $this->parameters = $this->body['args'];
        $this->httpClient = $httpClient;
        $this->queryBuilder = $queryBuilder;
        $this->finder = $finder;
    }

    /**
     * return a method to be used as a callback
     *
     * @param $callbackMethod
     * @return array
     */
    public function getCallback($callbackMethod)
    {
        return [$this, $callbackMethod];
    }

    /**
     * @param $schema
     * @return string
     */
    public function prepareQuery($schema)
    {
        $query = $this->queryBuilder->buildArgsParams($schema, $this->parameters);

        $uri = $this->queryBuilder->buildObjectsParams($schema, $this->parameters);

        $patterns = array_keys($uri);

        $replacements = array_values($uri);

        return ['url' => $schema['url'] . str_replace($patterns, $replacements, $schema['uri']), 'args' => $query];
    }

    /**
     * @param $schema
     */
    public function pagination($schema)
    {
        if (
            $schema['limit_field_stop_pagination'] == false
            || ($schema['limit_field_stop_pagination'] == true && $this->parameters[$schema['args']['limit']] == '')
        ) {

            $next = $this->finder->recursiveFindValueInMultiArray($this->result, $schema['pagination_next_url_key']);

            while ($next) {

                $pagination = json_decode($this->sendRequest($schema, ['url' => $next]), true);

                $next = $this->finder->recursiveFindValueInMultiArray($pagination, $schema['pagination_next_url_key']);

                if (isset($pagination['error'])) {

                    $this->result['error'] = $pagination['error'];

                } else {

                    $items = $this->finder->recursiveFindValueInMultiArray($pagination, $schema['content_field_name']);

                    if (count($items) > 0) {

                        $this->result = array_merge($this->result, $items);

                    } else {
                        break;
                    }
                }
            }
        }
    }

    /**
     * @param $schema
     * @param $query
     *
     * @return mixed
     */
    public function sendRequest($schema, $query)
    {
        $headers = array(
            'Content-Type' => 'application/json',
        );

        if ($schema['args_in_body']) {

            $response = $this->httpClient->{$schema['method']}($query['url'], $headers, $query['args']);
        } else {
            if (isset($query['args'])) {
                $response = $this->httpClient->{$schema['method']}($query['url'] . http_build_query($query['args'], '', '&'), $headers);
            } else {
                $response = $this->httpClient->{$schema['method']}($query['url'], $headers);
            }
        }

        return $response->getContent();
    }

    /**
     * @param $schema
     */
    public function setResponse($schema)
    {
        if (isset($this->result['error'])) {

            $this->response = ['callback' => $schema['callback_message']['error'], 'contextWrites' => ['to' => json_encode($this->result)]];
        } else {

            $this->response = ['callback' => $schema['callback_message']['success'], 'contextWrites' => ['to' => json_encode($this->result)]];
        }
    }

    /**
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }

}