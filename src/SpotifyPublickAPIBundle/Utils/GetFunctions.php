<?php
/**
 * @author Dmitry Shumytskyi <d.shumytskyi@gmail.com>
 */

namespace SpotifyPublickAPI\Utils;

use SpotifyPublickAPIBundle\Utils\Abstracts\SpotifyAbstract;

class GetFunctions extends SpotifyAbstract
{
    /**
     * get an album's details
     *
     * @param $schema
     */
    public function getAlbum($schema)
    {
        $this->result = json_decode($this->sendRequest($schema, $this->prepareQuery($schema)), true);

        $this->pagination($schema);

        $this->setResponse($schema);
    }

    /**
     * create an album for a user / page
     *
     * @param $schema
     */
    public function getAlbumTracks($schema)
    {
        $this->result = json_decode($this->sendRequest($schema, $this->prepareQuery($schema)), true);

        $this->pagination($schema);

        $this->setResponse($schema);
    }

    /**
     * get photos in an album
     *
     * @param $schema
     */
    public function getArtist($schema)
    {
        $this->result = json_decode($this->sendRequest($schema, $this->prepareQuery($schema)), true);

        $this->pagination($schema);

        $this->setResponse($schema);
    }

    /**
     * add a photo to an album
     *
     * @param $schema
     */
    public function getArtistAlbums($schema)
    {
        $this->result = json_decode($this->sendRequest($schema, $this->prepareQuery($schema)), true);

        $this->pagination($schema);

        $this->setResponse($schema);
    }

    /**
     * add a photo to an album
     *
     * @param $schema
     */
    public function getArtistTopTracks($schema)
    {
        $this->result = json_decode($this->sendRequest($schema, $this->prepareQuery($schema)), true);

        $this->pagination($schema);

        $this->setResponse($schema);
    }

    /**
     * add a photo to an album
     *
     * @param $schema
     */
    public function getArtistRelatedArtists($schema)
    {
        $this->result = json_decode($this->sendRequest($schema, $this->prepareQuery($schema)), true);

        $this->pagination($schema);

        $this->setResponse($schema);
    }

    /**
     * add a photo to an album
     *
     * @param $schema
     */
    public function getTrack($schema)
    {
        $this->result = json_decode($this->sendRequest($schema, $this->prepareQuery($schema)), true);

        $this->pagination($schema);

        $this->setResponse($schema);
    }

    /**
     * add a photo to an album
     *
     * @param $schema
     */
    public function getUserProfile($schema)
    {
        $this->result = json_decode($this->sendRequest($schema, $this->prepareQuery($schema)), true);

        $this->pagination($schema);

        $this->setResponse($schema);
    }

}