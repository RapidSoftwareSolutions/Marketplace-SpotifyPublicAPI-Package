<?php
/**
 * @author Dmitry Shumytskyi <d.shumytskyi@gmail.com>
 */

namespace SpotifyPublickAPIBundle\Utils\Abstracts;


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
     * FacebookAbstract constructor.
     *
     * @param $request
     * @param $httpClient
     */
    public function __construct($request, $httpClient)
    {
        $this->request = $request->getCurrentRequest();
        $this->body = json_decode($this->request->getContent(), true);
        $this->parameters = $this->body['args'];
        $this->httpClient = $httpClient;
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
        $query = [];

        foreach ($schema['args'] as $facebookValue => $rapidApiValue) {
            if (isset($this->parameters[$rapidApiValue]) && $this->parameters[$rapidApiValue] != '') {

                $query[$facebookValue] = $this->parameters[$rapidApiValue];
            }
        }

        if ($schema['object']['optimal'] == false) {
            if ($schema['args_in_body']) {

                return ['url' => $schema['url'] . $schema['object']['default'] . $schema['uri'], 'args' => $query];
            } else {

                return ['url' => $schema['url'] . $schema['object']['default'] . $schema['uri'] . http_build_query($query, '', '&')];
            }
        } elseif (isset($this->parameters[$schema['object']['optimal']])) {
            if ($schema['args_in_body']) {

                return ['url' => $schema['url'] . $this->parameters[$schema['object']['optimal']] . $schema['uri'], 'args' => $query];
            } else {

                return ['url' => $schema['url'] . $this->parameters[$schema['object']['optimal']] . $schema['uri'] . http_build_query($query, '', '&')];
            }
        } elseif ($schema['object']['default'] != false) {
            if ($schema['args_in_body']) {

                return ['url' => $schema['url'] . $schema['object']['default'] . $schema['uri'], 'args' => $query];
            } else {

                return ['url' => $schema['url'] . $schema['object']['default'] . $schema['uri'] . http_build_query($query, '', '&')];
            }
        } else {

            return $schema['object']['error'];
        }
    }

    public function pagination($schema)
    {
        $pagination = $this->result;

        while (isset($pagination['paging']['next'])) {

            $pagination = json_decode($this->sendRequest($schema, ['url' => $pagination['paging']['next']]), true);
            if (isset($pagination['error'])) {

                $this->result['error'] = $pagination['error'];
            } else {
                if (count($pagination["data"]) > 0) {

                    $this->result['data'] = array_merge($this->result['data'], $pagination['data']);
                } else {

                    break;
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
        if ($query == $schema['object']['error']) {

            return $schema['object']['error'];
        } else {

            $headers = array(
                'Content-Type' => 'application/json',
            );

            if ($schema['args_in_body']) {

                $response = $this->httpClient->{$schema['method']}($query['url'], $headers, $query['args']);
            } else {

                $response = $this->httpClient->{$schema['method']}($query['url'], $headers);
            }

            return $response->getContent();
        }
    }

    /**
     * @param $schema
     */
    public function setResponse($schema)
    {
        if ($this->result == $schema['object']['error']) {

            $this->response = ['callback' => $schema['callback_message']['error'], 'contextWrites' => ['to' => json_encode($this->result)]];
        } elseif (isset($this->result['error'])) {

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