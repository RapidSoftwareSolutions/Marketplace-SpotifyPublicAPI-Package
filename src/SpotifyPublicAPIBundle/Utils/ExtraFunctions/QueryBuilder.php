<?php

namespace SpotifyPublicAPIBundle\Utils\ExtraFunctions;

/**
 * @author Dmitry Shumytskyi <d.shumytskyi@gmail.com>
 */
class QueryBuilder
{
    public function buildObjectsParams($schema, $parameters)
    {
        $uri = [];

        if ((array)$schema['object'] === $schema['object']) {
            foreach ($schema['object'] as $apiValue => $rapidApiValue) {
                if (isset($parameters[$rapidApiValue]) && $parameters[$rapidApiValue] != '') {

                    $uri[$apiValue] = $parameters[$rapidApiValue];

                }
            }
        }

        return $uri;
    }

    public function buildArgsParams($schema, $parameters)
    {
        $query = [];

        if ((array)$schema['args'] === $schema['args']) {
            foreach ($schema['args'] as $apiValue => $rapidApiValue) {
                if (isset($parameters[$rapidApiValue]) && $parameters[$rapidApiValue] != '') {

                    $query[$apiValue] = $parameters[$rapidApiValue];

                }
            }
        }

        return $query;
    }
}