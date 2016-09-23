<?php
/**
 * @author Dmitry Shumytskyi <d.shumytskyi@gmail.com>
 */

namespace SpotifyPublicAPIBundle\Utils\ApiFunctions;



use SpotifyPublicAPIBundle\Utils\ApiFunctions\Abstracts\SpotifyAbstract;

class SearchFunctions extends SpotifyAbstract
{
    /**
     * @param $schema
     */
    public function searchAlbums($schema)
    {
        $this->result = json_decode($this->sendRequest($schema, $this->prepareQuery($schema)), true);

        $this->pagination($schema);

        $this->setResponse($schema);
    }

    /**
     * @param $schema
     */
    public function searchArtists($schema)
    {
        $this->result = json_decode($this->sendRequest($schema, $this->prepareQuery($schema)), true);

        $this->pagination($schema);

        $this->setResponse($schema);
    }

    /**
     * @param $schema
     */
    public function searchPlaylists($schema)
    {
        $this->result = json_decode($this->sendRequest($schema, $this->prepareQuery($schema)), true);

        $this->pagination($schema);

        $this->setResponse($schema);
    }

    /**
     * @param $schema
     */
    public function searchTracks($schema)
    {
        $this->result = json_decode($this->sendRequest($schema, $this->prepareQuery($schema)), true);

        $this->pagination($schema);

        $this->setResponse($schema);
    }

}