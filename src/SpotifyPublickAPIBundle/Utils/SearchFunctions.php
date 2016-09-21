<?php
/**
 * @author Dmitry Shumytskyi <d.shumytskyi@gmail.com>
 */

namespace SpotifyPublickAPI\Utils;



use SpotifyPublickAPIBundle\Utils\Abstracts\SpotifyAbstract;

class SearchFunctions extends SpotifyAbstract
{
    /**
     * get an album's details
     *
     * @param $schema
     */
    public function searchAlbums($schema)
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
    public function searchArtists($schema)
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
    public function searchPlaylists($schema)
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
    public function searchTracks($schema)
    {
        $this->result = json_decode($this->sendRequest($schema, $this->prepareQuery($schema)), true);

        $this->pagination($schema);

        $this->setResponse($schema);
    }

}