<?php
/**
 * @author Dmitry Shumytskyi <d.shumytskyi@gmail.com>
 */

namespace SpotifyPublicAPIBundle\Utils\ApiFunctions;

use SpotifyPublicAPIBundle\Utils\ApiFunctions\Abstracts\SpotifyAbstract;

class GetFunctions extends SpotifyAbstract
{
    /**
     * @param $schema
     */
    public function getAlbum($schema)
    {
        $this->result = json_decode($this->sendRequest($schema, $this->prepareQuery($schema)), true);

        $this->pagination($schema);

        $this->setResponse($schema);
    }

    /**
     * @param $schema
     */
    public function getAlbumTracks($schema)
    {
        $this->result = json_decode($this->sendRequest($schema, $this->prepareQuery($schema)), true);

        $this->pagination($schema);

        $this->setResponse($schema);
    }

    /**
     * @param $schema
     */
    public function getArtist($schema)
    {
        $this->result = json_decode($this->sendRequest($schema, $this->prepareQuery($schema)), true);

        $this->pagination($schema);

        $this->setResponse($schema);
    }

    /**
     * @param $schema
     */
    public function getArtistAlbums($schema)
    {
        $this->result = json_decode($this->sendRequest($schema, $this->prepareQuery($schema)), true);

        $this->pagination($schema);

        $this->setResponse($schema);
    }

    /**
     * @param $schema
     */
    public function getArtistTopTracks($schema)
    {
        $this->result = json_decode($this->sendRequest($schema, $this->prepareQuery($schema)), true);

        $this->pagination($schema);

        $this->setResponse($schema);
    }

    /**
     * @param $schema
     */
    public function getArtistRelatedArtists($schema)
    {
        $this->result = json_decode($this->sendRequest($schema, $this->prepareQuery($schema)), true);

        $this->pagination($schema);

        $this->setResponse($schema);
    }

    /**
     * @param $schema
     */
    public function getTrack($schema)
    {
        $this->result = json_decode($this->sendRequest($schema, $this->prepareQuery($schema)), true);

        $this->pagination($schema);

        $this->setResponse($schema);
    }

    /**
     * @param $schema
     */
    public function getUserProfile($schema)
    {
        $this->result = json_decode($this->sendRequest($schema, $this->prepareQuery($schema)), true);

        $this->pagination($schema);

        $this->setResponse($schema);
    }

}