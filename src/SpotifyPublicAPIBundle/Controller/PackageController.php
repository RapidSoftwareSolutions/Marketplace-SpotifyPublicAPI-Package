<?php

namespace SpotifyPublicAPIBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @author Dmitry Shumytskyi <d.shumytskyi@gmail.com>
 */
class PackageController extends Controller
{
    /**
     *
     * @Route("/api/{packageName}", requirements={"packageName": "SpotifyPublicAPI"})
     * @Method({"GET"})
     *
     * @return JsonResponse
     */
    public function metadataAction()
    {
        return new JsonResponse($this->getParameter('app_bundle.metadata'));
    }

    /**
     * @Route("/api/{packageName}/searchAlbums", requirements={"packageName": "SpotifyPublicAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function searchAlbumsAction()
    {
        $graph = $this->get('app_bundle.search_functions');

        $callback = $graph->getCallback('searchAlbums');

        $callback($this->getParameter('app_bundle.search_albums'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/searchArtists", requirements={"packageName": "SpotifyPublicAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function searchArtistsAction()
    {
        $graph = $this->get('app_bundle.search_functions');

        $callback = $graph->getCallback('searchArtists');

        $callback($this->getParameter('app_bundle.search_artists'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/searchPlaylists", requirements={"packageName": "SpotifyPublicAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function searchPlaylistsAction()
    {
        $graph = $this->get('app_bundle.search_functions');

        $callback = $graph->getCallback('searchPlaylists');

        $callback($this->getParameter('app_bundle.search_playlists'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/searchTracks", requirements={"packageName": "SpotifyPublicAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function searchTracksAction()
    {
        $graph = $this->get('app_bundle.search_functions');

        $callback = $graph->getCallback('searchTracks');

        $callback($this->getParameter('app_bundle.search_tracks'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/getAlbum", requirements={"packageName": "SpotifyPublicAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function getAlbumAction()
    {
        $graph = $this->get('app_bundle.get_functions');

        $callback = $graph->getCallback('getAlbum');

        $callback($this->getParameter('app_bundle.get_album'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/getAlbumTracks", requirements={"packageName": "SpotifyPublicAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function getAlbumTracksAction()
    {
        $graph = $this->get('app_bundle.get_functions');

        $callback = $graph->getCallback('getAlbumTracks');

        $callback($this->getParameter('app_bundle.get_album_tracks'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/getArtist", requirements={"packageName": "SpotifyPublicAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function getArtistAction()
    {
        $graph = $this->get('app_bundle.get_functions');

        $callback = $graph->getCallback('getArtist');

        $callback($this->getParameter('app_bundle.get_artist'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/getArtistAlbums", requirements={"packageName": "SpotifyPublicAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function getArtistAlbumsAction()
    {
        $graph = $this->get('app_bundle.get_functions');

        $callback = $graph->getCallback('getArtistAlbums');

        $callback($this->getParameter('app_bundle.get_artist_albums'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/getArtistTopTracks", requirements={"packageName": "SpotifyPublicAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function getArtistTopTracksAction()
    {
        $graph = $this->get('app_bundle.get_functions');

        $callback = $graph->getCallback('getArtistTopTracks');

        $callback($this->getParameter('app_bundle.get_artist_top_tracks'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/getArtistRelatedArtists", requirements={"packageName": "SpotifyPublicAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function getArtistRelatedArtistsAction()
    {
        $graph = $this->get('app_bundle.get_functions');

        $callback = $graph->getCallback('getArtistRelatedArtists');

        $callback($this->getParameter('app_bundle.get_artist_related_artists'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/getTrack", requirements={"packageName": "SpotifyPublicAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function getTrackAction()
    {
        $graph = $this->get('app_bundle.get_functions');

        $callback = $graph->getCallback('getTrack');

        $callback($this->getParameter('app_bundle.get_track'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/getUserProfile", requirements={"packageName": "SpotifyPublicAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function getUserProfileAction()
    {
        $graph = $this->get('app_bundle.get_functions');

        $callback = $graph->getCallback('getUserProfile');

        $callback($this->getParameter('app_bundle.get_user_profile'));

        return new JsonResponse($graph->getResponse());
    }

}