# SpotifyPublicAPI Package
This package offers a variety of blocks by Spotify that do not require any authentication.
* Domain: spotify.com

## How to get credentials: 
This is public api. No credentials need.

## TOC: 
* [searchAlbums](#searchAlbums)
* [searchArtists](#searchArtists)
* [searchPlaylists](#searchPlaylists)
* [searchTracks](#searchTracks)
* [getAlbum](#getAlbum)
* [getAlbumTracks](#getAlbumTracks)
* [getArtist](#getArtist)
* [getArtistAlbums](#getArtistAlbums)
* [getArtistTopTracks](#getArtistTopTracks)
* [getArtistRelatedArtists](#getArtistRelatedArtists)
* [getTrack](#getTrack)
* [getUserProfile](#getUserProfile)
 
<a name="searchAlbums"/>
## SpotifyPublicAPI.searchAlbums
Method description

| Field | Type  | Description
|-------|-------|----------
| query | String| The search query's keywords (and optional field filters and operators).
| market| String| Optimal: An ISO 3166-1 alpha-2 country code or the string from_token.
| limit | String| Optimal: The maximum number of results to return. Default: 20. Minimum: 1. Maximum: 50.
| offset| String| Optimal: The index of the first result to return. Default: 0 (i.e., the first result). Maximum offset: 100.000. Use with limit to get the next page of search results. 

#### Request example
```json
{	"query": "...",
	"market": "...",
	"limit": "...",
	"offset": "..."
}
```
#### Response example
```json
{
	"callback":"success",
	"contextWrites":{
		"#":{
			"to":{
                   "artists": {
                     "href": "https://api.spotify.com/v1/search?query=tania+bowra&offset=0&limit=20&type=artist",
                     "items": [ {
                       "external_urls": {
                         "spotify": "https://open.spotify.com/artist/08td7MxkoHQkXnWAYD8d6Q"
                       },
                       "genres": [ ],
                       "href": "https://api.spotify.com/v1/artists/08td7MxkoHQkXnWAYD8d6Q",
                       "id": "08td7MxkoHQkXnWAYD8d6Q",
                       "images": [ {
                         "height": 640,
                         "url": "https://i.scdn.co/image/f2798ddab0c7b76dc2d270b65c4f67ddef7f6718",
                         "width": 640
                       }, {
                         "height": 300,
                         "url": "https://i.scdn.co/image/b414091165ea0f4172089c2fc67bb35aa37cfc55",
                         "width": 300
                       }, {
                         "height": 64,
                         "url": "https://i.scdn.co/image/8522fc78be4bf4e83fea8e67bb742e7d3dfe21b4",
                         "width": 64
                       } ],
                       "name": "Tania Bowra",
                       "popularity": 0,
                       "type": "artist",
                       "uri": "spotify:artist:08td7MxkoHQkXnWAYD8d6Q"
                     } ],
                     "limit": 20,
                     "next": null,
                     "offset": 0,
                     "previous": null,
                     "total": 1
                   }
                 }
		}
	}
}
```

<a name="searchArtists"/>
## SpotifyPublicAPI.searchArtists
Method description

| Field | Type  | Description
|-------|-------|----------
| query | String| The search query's keywords (and optional field filters and operators).
| market| String| Optimal: An ISO 3166-1 alpha-2 country code or the string from_token.
| limit | String| Optimal: The maximum number of results to return. Default: 20. Minimum: 1. Maximum: 50.
| offset| String| Optimal: The index of the first result to return. Default: 0 (i.e., the first result). Maximum offset: 100.000. Use with limit to get the next page of search results. 

#### Request example
```json
{	"query": "...",
	"market": "...",
	"limit": "...",
	"offset": "..."
}
```
#### Response example
```json
{
	"callback":"success",
	"contextWrites":{
		"#":{
			"to":{
                   "artists": {
                     "href": "https://api.spotify.com/v1/search?query=tania+bowra&offset=0&limit=20&type=artist",
                     "items": [ {
                       "external_urls": {
                         "spotify": "https://open.spotify.com/artist/08td7MxkoHQkXnWAYD8d6Q"
                       },
                       "genres": [ ],
                       "href": "https://api.spotify.com/v1/artists/08td7MxkoHQkXnWAYD8d6Q",
                       "id": "08td7MxkoHQkXnWAYD8d6Q",
                       "images": [ {
                         "height": 640,
                         "url": "https://i.scdn.co/image/f2798ddab0c7b76dc2d270b65c4f67ddef7f6718",
                         "width": 640
                       }, {
                         "height": 300,
                         "url": "https://i.scdn.co/image/b414091165ea0f4172089c2fc67bb35aa37cfc55",
                         "width": 300
                       }, {
                         "height": 64,
                         "url": "https://i.scdn.co/image/8522fc78be4bf4e83fea8e67bb742e7d3dfe21b4",
                         "width": 64
                       } ],
                       "name": "Tania Bowra",
                       "popularity": 0,
                       "type": "artist",
                       "uri": "spotify:artist:08td7MxkoHQkXnWAYD8d6Q"
                     } ],
                     "limit": 20,
                     "next": null,
                     "offset": 0,
                     "previous": null,
                     "total": 1
                   }
                 }
		}
	}
}
```

<a name="searchPlaylists"/>
## SpotifyPublicAPI.searchPlaylists
Method description

| Field | Type  | Description
|-------|-------|----------
| query | String| The search query's keywords (and optional field filters and operators).
| market| String| Optimal: An ISO 3166-1 alpha-2 country code or the string from_token.
| limit | String| Optimal: The maximum number of results to return. Default: 20. Minimum: 1. Maximum: 50.
| offset| String| Optimal: The index of the first result to return. Default: 0 (i.e., the first result). Maximum offset: 100.000. Use with limit to get the next page of search results. 

#### Request example
```json
{	"query": "...",
	"market": "...",
	"limit": "...",
	"offset": "..."
}
```
#### Response example
```json
{
	"callback":"success",
	"contextWrites":{
		"#":{
			"to":{
                   "artists": {
                     "href": "https://api.spotify.com/v1/search?query=tania+bowra&offset=0&limit=20&type=artist",
                     "items": [ {
                       "external_urls": {
                         "spotify": "https://open.spotify.com/artist/08td7MxkoHQkXnWAYD8d6Q"
                       },
                       "genres": [ ],
                       "href": "https://api.spotify.com/v1/artists/08td7MxkoHQkXnWAYD8d6Q",
                       "id": "08td7MxkoHQkXnWAYD8d6Q",
                       "images": [ {
                         "height": 640,
                         "url": "https://i.scdn.co/image/f2798ddab0c7b76dc2d270b65c4f67ddef7f6718",
                         "width": 640
                       }, {
                         "height": 300,
                         "url": "https://i.scdn.co/image/b414091165ea0f4172089c2fc67bb35aa37cfc55",
                         "width": 300
                       }, {
                         "height": 64,
                         "url": "https://i.scdn.co/image/8522fc78be4bf4e83fea8e67bb742e7d3dfe21b4",
                         "width": 64
                       } ],
                       "name": "Tania Bowra",
                       "popularity": 0,
                       "type": "artist",
                       "uri": "spotify:artist:08td7MxkoHQkXnWAYD8d6Q"
                     } ],
                     "limit": 20,
                     "next": null,
                     "offset": 0,
                     "previous": null,
                     "total": 1
                   }
                 }
		}
	}
}
```

<a name="searchTracks"/>
## SpotifyPublicAPI.searchTracks
Method description

| Field | Type  | Description
|-------|-------|----------
| query | String| The search query's keywords (and optional field filters and operators).
| market| String| Optimal: An ISO 3166-1 alpha-2 country code or the string from_token.
| limit | String| Optimal: The maximum number of results to return. Default: 20. Minimum: 1. Maximum: 50.
| offset| String| Optimal: The index of the first result to return. Default: 0 (i.e., the first result). Maximum offset: 100.000. Use with limit to get the next page of search results. 

#### Request example
```json
{	"query": "...",
	"market": "...",
	"limit": "...",
	"offset": "..."
}
```
#### Response example
```json
{
	"callback":"success",
	"contextWrites":{
		"#":{
			"to":{
                   "artists": {
                     "href": "https://api.spotify.com/v1/search?query=tania+bowra&offset=0&limit=20&type=artist",
                     "items": [ {
                       "external_urls": {
                         "spotify": "https://open.spotify.com/artist/08td7MxkoHQkXnWAYD8d6Q"
                       },
                       "genres": [ ],
                       "href": "https://api.spotify.com/v1/artists/08td7MxkoHQkXnWAYD8d6Q",
                       "id": "08td7MxkoHQkXnWAYD8d6Q",
                       "images": [ {
                         "height": 640,
                         "url": "https://i.scdn.co/image/f2798ddab0c7b76dc2d270b65c4f67ddef7f6718",
                         "width": 640
                       }, {
                         "height": 300,
                         "url": "https://i.scdn.co/image/b414091165ea0f4172089c2fc67bb35aa37cfc55",
                         "width": 300
                       }, {
                         "height": 64,
                         "url": "https://i.scdn.co/image/8522fc78be4bf4e83fea8e67bb742e7d3dfe21b4",
                         "width": 64
                       } ],
                       "name": "Tania Bowra",
                       "popularity": 0,
                       "type": "artist",
                       "uri": "spotify:artist:08td7MxkoHQkXnWAYD8d6Q"
                     } ],
                     "limit": 20,
                     "next": null,
                     "offset": 0,
                     "previous": null,
                     "total": 1
                   }
                 }
		}
	}
}
```

<a name="getAlbum"/>
## SpotifyPublicAPI.getAlbum
Method description

| Field    | Type  | Description
|---|-------|----------
| id| String| The Spotify ID for the album.

#### Request example
```json
{	"id": "..."
}
```
#### Response example
```json
{
	"callback":"success",
	"contextWrites":{
		"#":{
			"to":{
                   "album_type" : "album",
                   "artists" : [ {
                     "external_urls" : {
                       "spotify" : "https://open.spotify.com/artist/2BTZIqw0ntH9MvilQ3ewNY"
                     },
                     "href" : "https://api.spotify.com/v1/artists/2BTZIqw0ntH9MvilQ3ewNY",
                     "id" : "2BTZIqw0ntH9MvilQ3ewNY",
                     "name" : "Cyndi Lauper",
                     "type" : "artist",
                     "uri" : "spotify:artist:2BTZIqw0ntH9MvilQ3ewNY"
                   } ],
                   "available_markets" : [ "AD", "AR", "AT", "AU", "BE", "BG", "BO", "BR", "CA", "CH", "CL", "CO", "CR", "CY", "CZ", "DE", "DK", "DO", "EC", "EE", "ES", "FI", "FR", "GB", "GR", "GT", "HK", "HN", "HU", "IE", "IS", "IT", "LI", "LT", "LU", "LV", "MC", "MT", "MX", "MY", "NI", "NL", "NO", "NZ", "PA", "PE", "PH", "PT", "PY", "RO", "SE", "SG", "SI", "SK", "SV", "TW", "UY" ],
                   "copyrights" : [ {
                     "text" : "(P) 2000 Sony Music Entertainment Inc.",
                     "type" : "P"
                   } ],
                   "external_ids" : {
                     "upc" : "5099749994324"
                   },
                   "external_urls" : {
                     "spotify" : "https://open.spotify.com/album/0sNOF9WDwhWunNAHPD3Baj"
                   },
                   "genres" : [ ],
                   "href" : "https://api.spotify.com/v1/albums/0sNOF9WDwhWunNAHPD3Baj",
                   "id" : "0sNOF9WDwhWunNAHPD3Baj",
                   "images" : [ {
                     "height" : 640,
                     "url" : "https://i.scdn.co/image/07c323340e03e25a8e5dd5b9a8ec72b69c50089d",
                     "width" : 640
                   }, {
                     "height" : 300,
                     "url" : "https://i.scdn.co/image/8b662d81966a0ec40dc10563807696a8479cd48b",
                     "width" : 300
                   }, {
                     "height" : 64,
                     "url" : "https://i.scdn.co/image/54b3222c8aaa77890d1ac37b3aaaa1fc9ba630ae",
                     "width" : 64
                   } ],
                   "name" : "She's So Unusual",
                   "popularity" : 39,
                   "release_date" : "1983",
                   "release_date_precision" : "year",
                   "tracks" : {
                     "href" : "https://api.spotify.com/v1/albums/0sNOF9WDwhWunNAHPD3Baj/tracks?offset=0&limit=50",
                     "items" : [ {
                       "artists" : [ {
                         "external_urls" : {
                           "spotify" : "https://open.spotify.com/artist/2BTZIqw0ntH9MvilQ3ewNY"
                         },
                         "href" : "https://api.spotify.com/v1/artists/2BTZIqw0ntH9MvilQ3ewNY",
                         "id" : "2BTZIqw0ntH9MvilQ3ewNY",
                         "name" : "Cyndi Lauper",
                         "type" : "artist",
                         "uri" : "spotify:artist:2BTZIqw0ntH9MvilQ3ewNY"
                       } ],
                       "available_markets" : [ "AD", "AR", "AT", "AU", "BE", "BG", "BO", "BR", "CA", "CH", "CL", "CO", "CR", "CY", "CZ", "DE", "DK", "DO", "EC", "EE", "ES", "FI", "FR", "GB", "GR", "GT", "HK", "HN", "HU", "IE", "IS", "IT", "LI", "LT", "LU", "LV", "MC", "MT", "MX", "MY", "NI", "NL", "NO", "NZ", "PA", "PE", "PH", "PT", "PY", "RO", "SE", "SG", "SI", "SK", "SV", "TW", "UY" ],
                       "disc_number" : 1,
                       "duration_ms" : 305560,
                       "explicit" : false,
                       "external_urls" : {
                         "spotify" : "https://open.spotify.com/track/3f9zqUnrnIq0LANhmnaF0V"
                       },
                       "href" : "https://api.spotify.com/v1/tracks/3f9zqUnrnIq0LANhmnaF0V",
                       "id" : "3f9zqUnrnIq0LANhmnaF0V",
                       "name" : "Money Changes Everything",
                       "preview_url" : "https://p.scdn.co/mp3-preview/01bb2a6c9a89c05a4300aea427241b1719a26b06",
                       "track_number" : 1,
                       "type" : "track",
                       "uri" : "spotify:track:3f9zqUnrnIq0LANhmnaF0V"
                     }, {
                       ...
                     } ],
                     "limit" : 50,
                     "next" : null,
                     "offset" : 0,
                     "previous" : null,
                     "total" : 13
                   },
                   "type" : "album",
                   "uri" : "spotify:album:0sNOF9WDwhWunNAHPD3Baj"
                 }
		}
	}
}
```

<a name="getAlbumTracks"/>
## SpotifyPublicAPI.getAlbumTracks
Method description

| Field    | Type  | Description
|---|-------|----------
| id| String| The Spotify ID for the track.

#### Request example
```json
{	"id": "..."
}
```
#### Response example
```json
{
	"callback":"success",
	"contextWrites":{
		"#":{
			"to":{
                   "href": "https://api.spotify.com/v1/albums/6akEvsycLGftJxYudPjmqK/tracks?offset=0&limit=2",
                   "items": [ {
                     "artists": [ {
                       "external_urls": {
                         "spotify": "https://open.spotify.com/artist/08td7MxkoHQkXnWAYD8d6Q"
                       },
                       "href": "https://api.spotify.com/v1/artists/08td7MxkoHQkXnWAYD8d6Q",
                       "id": "08td7MxkoHQkXnWAYD8d6Q",
                       "name": "Tania Bowra",
                       "type": "artist",
                       "uri": "spotify:artist:08td7MxkoHQkXnWAYD8d6Q"
                     } ],
                     "available_markets": [ "AD", "AR", "AT", "AU", "BE", "BG", "BO", "BR", "CA", "CH", "CL", "CO", "CR", "CY", "CZ", "DE", "DK", "DO", "EC", "EE", "ES", "FI", "FR", "GB", "GR", "GT", "HK", "HN", "HU", "IE", "IS", "IT", "LI", "LT", "LU", "LV", "MC", "MT", "MX", "MY", "NI", "NL", "NO", "NZ", "PA", "PE", "PH", "PL", "PT", "PY", "RO", "SE", "SG", "SI", "SK", "SV", "TR", "TW", "US", "UY" ],
                     "disc_number": 1,
                     "duration_ms": 276773,
                     "explicit": false,
                     "external_urls": {
                       "spotify": "https://open.spotify.com/track/2TpxZ7JUBn3uw46aR7qd6V"
                     },
                     "href": "https://api.spotify.com/v1/tracks/2TpxZ7JUBn3uw46aR7qd6V",
                     "id": "2TpxZ7JUBn3uw46aR7qd6V",
                     "name": "All I Want",
                     "preview_url": "https://p.scdn.co/mp3-preview/6d00206e32194d15df329d4770e4fa1f2ced3f57",
                     "track_number": 1,
                     "type": "track",
                     "uri": "spotify:track:2TpxZ7JUBn3uw46aR7qd6V"
                   }, {
                     "artists": [ {
                       "external_urls": {
                         "spotify": "https://open.spotify.com/artist/08td7MxkoHQkXnWAYD8d6Q"
                       },
                       "href": "https://api.spotify.com/v1/artists/08td7MxkoHQkXnWAYD8d6Q",
                       "id": "08td7MxkoHQkXnWAYD8d6Q",
                       "name": "Tania Bowra",
                       "type": "artist",
                       "uri": "spotify:artist:08td7MxkoHQkXnWAYD8d6Q"
                     } ],
                     "available_markets": [ "AD", "AR", "AT", "AU", "BE", "BG", "BO", "BR", "CA", "CH", "CL", "CO", "CR", "CY", "CZ", "DE", "DK", "DO", "EC", "EE", "ES", "FI", "FR", "GB", "GR", "GT", "HK", "HN", "HU", "IE", "IS", "IT", "LI", "LT", "LU", "LV", "MC", "MT", "MX", "MY", "NI", "NL", "NO", "NZ", "PA", "PE", "PH", "PL", "PT", "PY", "RO", "SE", "SG", "SI", "SK", "SV", "TR", "TW", "US", "UY" ],
                     "disc_number": 1,
                     "duration_ms": 247680,
                     "explicit": false,
                     "external_urls": {
                       "spotify": "https://open.spotify.com/track/4PjcfyZZVE10TFd9EKA72r"
                     },
                     "href": "https://api.spotify.com/v1/tracks/4PjcfyZZVE10TFd9EKA72r",
                     "id": "4PjcfyZZVE10TFd9EKA72r",
                     "name": "Someday",
                     "preview_url": "https://p.scdn.co/mp3-preview/2b15de922bf4f4b8cfe09c8448079b8ff7a45a5f",
                     "track_number": 2,
                     "type": "track",
                     "uri": "spotify:track:4PjcfyZZVE10TFd9EKA72r"
                   } ],
                   "limit": 2,
                   "next": "https://api.spotify.com/v1/albums/6akEvsycLGftJxYudPjmqK/tracks?offset=2&limit=2",
                   "offset": 0,
                   "previous": null,
                   "total": 11
                 }
		}
	}
}
```

<a name="getArtist"/>
## SpotifyPublicAPI.getArtist
Method description

| Field    | Type  | Description
|---|-------|----------
| id| String| The Spotify ID for the artist.

#### Request example
```json
{	"id": "..."
}
```
#### Response example
```json
{
	"callback":"success",
	"contextWrites":{
		"#":{
			"to":{
                   "external_urls" : {
                     "spotify" : "https://open.spotify.com/artist/0OdUWJ0sBjDrqHygGUXeCF"
                   },
                   "followers" : {
                     "href" : null,
                     "total" : 306565
                   },
                   "genres" : [ "indie folk", "indie pop" ],
                   "href" : "https://api.spotify.com/v1/artists/0OdUWJ0sBjDrqHygGUXeCF",
                   "id" : "0OdUWJ0sBjDrqHygGUXeCF",
                   "images" : [ {
                     "height" : 816,
                     "url" : "https://i.scdn.co/image/eb266625dab075341e8c4378a177a27370f91903",
                     "width" : 1000
                   }, {
                     "height" : 522,
                     "url" : "https://i.scdn.co/image/2f91c3cace3c5a6a48f3d0e2fd21364d4911b332",
                     "width" : 640
                   }, {
                     "height" : 163,
                     "url" : "https://i.scdn.co/image/2efc93d7ee88435116093274980f04ebceb7b527",
                     "width" : 200
                   }, {
                     "height" : 52,
                     "url" : "https://i.scdn.co/image/4f25297750dfa4051195c36809a9049f6b841a23",
                     "width" : 64
                   } ],
                   "name" : "Band of Horses",
                   "popularity" : 59,
                   "type" : "artist",
                   "uri" : "spotify:artist:0OdUWJ0sBjDrqHygGUXeCF"
                 }
		}
	}
}
```

<a name="getArtistAlbums"/>
## SpotifyPublicAPI.getArtistAlbums
Method description

| Field     | Type  | Description
|-----------|-------|----------
| id        | String| The Spotify ID for the artist.
| album_type| String| Optional. A comma-separated list of keywords that will be used to filter the response. If not supplied, all album types will be returned. Valid values are:album, single, appears_on, compilation.
| market    | String| Optional. An ISO 3166-1 alpha-2 country code. Supply this parameter to limit the response to one particular geographical market.
| limit     | String| Optional. The number of album objects to return. Default: 20. Minimum: 1. Maximum: 50.
| offset    | String| Optional. The index of the first album to return. Default: 0 (i.e., the first album). Use with limit to get the next set of albums. 

#### Request example
```json
{	"id": "...",
	"album_type": "...",
	"market": "...",
	"limit": "...",
	"offset": "..."
}
```
#### Response example
```json
{
	"callback":"success",
	"contextWrites":{
		"#":{
			"to":{
                   "href" : "https://api.spotify.com/v1/artists/1vCWHaC5f2uS3yhpwWbIA6/albums?offset=0&limit=2&album_type=single&market=ES",
                   "items" : [ {
                     "album_type" : "single",
                     "available_markets" : [ "AD", "AR", "AT", "AU", "BE", "BG", "BO", "BR", "CH", "CL", "CO", "CR", "CY", "CZ", "DE", "DK", "DO", "EC", "EE", "ES", "FI", "FR", "GB", "GR", "GT", "HK", "HN", "HU", "IE", "IS", "IT", "LI", "LT", "LU", "LV", "MC", "MT", "MY", "NI", "NL", "NO", "NZ", "PA", "PE", "PH", "PL", "PT", "PY", "RO", "SE", "SG", "SI", "SK", "SV", "TR", "TW", "UY" ],
                     "external_urls" : {
                       "spotify" : "https://open.spotify.com/album/3j3cgkuyo015dghNYhHnZJ"
                     },
                     "href" : "https://api.spotify.com/v1/albums/3j3cgkuyo015dghNYhHnZJ",
                     "id" : "3j3cgkuyo015dghNYhHnZJ",
                     "images" : [ {
                       "height" : 640,
                       "url" : "https://i.scdn.co/image/f8717f432506ab213c4de0c66d6ac24cd07ecf72",
                       "width" : 640
                     }, {
                       "height" : 300,
                       "url" : "https://i.scdn.co/image/502bc1e1726e2594cd0045473e10d9166fa79dd8",
                       "width" : 300
                     }, {
                       "height" : 64,
                       "url" : "https://i.scdn.co/image/d709f676d5c16db8941b1084b3ca348d35de04af",
                       "width" : 64
                     } ],
                     "name" : "The Days",
                     "type" : "album",
                     "uri" : "spotify:album:3j3cgkuyo015dghNYhHnZJ"
                   }, {
                     "album_type" : "single",
                     "available_markets" : [ "AD", "AR", "AT", "AU", "BE", "BG", "BO", "BR", "CH", "CL", "CO", "CR", "CY", "CZ", "DE", "DK", "DO", "EC", "EE", "ES", "FI", "GR", "GT", "HK", "HN", "HU", "IS", "IT", "LI", "LT", "LU", "LV", "MC", "MT", "MY", "NI", "NL", "NO", "NZ", "PA", "PE", "PH", "PL", "PT", "PY", "RO", "SE", "SG", "SI", "SK", "SV", "TR", "TW", "UY" ],
                     "external_urls" : {
                       "spotify" : "https://open.spotify.com/album/1moqjcU7BoanAsSKRdHnP1"
                     },
                     "href" : "https://api.spotify.com/v1/albums/1moqjcU7BoanAsSKRdHnP1",
                     "id" : "1moqjcU7BoanAsSKRdHnP1",
                     "images" : [ {
                       "height" : 640,
                       "url" : "https://i.scdn.co/image/5f8349e8e4ed81b48f033a9818939c835520f150",
                       "width" : 640
                     }, {
                       "height" : 300,
                       "url" : "https://i.scdn.co/image/8a5e05379add83b787a4cf0c3909a415e60b93ef",
                       "width" : 300
                     }, {
                       "height" : 64,
                       "url" : "https://i.scdn.co/image/84f3422d4946c71c8891c0f0fcbe78d6e7395f5f",
                       "width" : 64
                     } ],
                     "name" : "Lay Me Down (Black Coffee Remix)",
                     "type" : "album",
                     "uri" : "spotify:album:1moqjcU7BoanAsSKRdHnP1"
                   } ],
                   "limit" : 2,
                   "next" : "https://api.spotify.com/v1/artists/1vCWHaC5f2uS3yhpwWbIA6/albums?offset=2&limit=2&album_type=single&market=ES",
                   "offset" : 0,
                   "previous" : null,
                   "total" : 41
                 }
		}
	}
}
```

<a name="getArtistTopTracks"/>
## SpotifyPublicAPI.getArtistTopTracks
Method description

| Field  | Type  | Description
|--------|-------|----------
| id     | String| The Spotify ID for the artist.
| country| String| The country: an ISO 3166-1 alpha-2 country code.

#### Request example
```json
{	"id": "...",
	"country": "..."
}
```
#### Response example
```json
{
	"callback":"success",
	"contextWrites":{
		"#":{
			"to":{
                   "tracks": [ {
                     "album": {
                       "album_type": "album",
                       "available_markets": [ "AD", "AR", "AT", "AU", "BE", "BG", "BO", "BR", "CA", "CH", "CL", "CO", "CR", "CY", "CZ", "DE", "DK", "DO", "EC", "EE", "ES", "FI", "FR", "GB", "GR", "GT", "HK", "HN", "HU", "IE", "IS", "IT", "LI", "LT", "LU", "LV", "MC", "MT", "MX", "MY", "NI", "NL", "NO", "NZ", "PA", "PE", "PH", "PL", "PT", "PY", "RO", "SE", "SG", "SI", "SK", "SV", "TR", "TW", "US", "UY" ],
                       "external_urls": {
                         "spotify": "https://open.spotify.com/album/34EYk8vvJHCUlNrpGxepea"
                       },
                       "href": "https://api.spotify.com/v1/albums/34EYk8vvJHCUlNrpGxepea",
                       "id": "34EYk8vvJHCUlNrpGxepea",
                       "images": [ {
                         "height": 640,
                         "url": "https://i.scdn.co/image/6324fe377dcedf110025527873dafc9b7ee0bb34",
                         "width": 640
                       }, {
                         "height": 300,
                         "url": "https://i.scdn.co/image/d2e2148023e8a87b7a2f8d2abdfa936154e470b8",
                         "width": 300
                       }, {
                         "height": 64,
                         "url": "https://i.scdn.co/image/af45f7b48d8a4c7252e1b1ad9240ed8b08c06b31",
                         "width": 64
                       } ],
                       "name": "Elvis 75 - Good Rockin' Tonight",
                       "type": "album",
                       "uri": "spotify:album:34EYk8vvJHCUlNrpGxepea"
                     },
                     "artists": [ {
                       "external_urls": {
                         "spotify": "https://open.spotify.com/artist/43ZHCT0cAZBISjO8DG9PnE"
                       },
                       "href": "https://api.spotify.com/v1/artists/43ZHCT0cAZBISjO8DG9PnE",
                       "id": "43ZHCT0cAZBISjO8DG9PnE",
                       "name": "Elvis Presley",
                       "type": "artist",
                       "uri": "spotify:artist:43ZHCT0cAZBISjO8DG9PnE"
                     } ],
                     "available_markets": [ "AD", "AR", "AT", "AU", "BE", "BG", "BO", "BR", "CA", "CH", "CL", "CO", "CR", "CY", "CZ", "DE", "DK", "DO", "EC", "EE", "ES", "FI", "FR", "GB", "GR", "GT", "HK", "HN", "HU", "IE", "IS", "IT", "LI", "LT", "LU", "LV", "MC", "MT", "MX", "MY", "NI", "NL", "NO", "NZ", "PA", "PE", "PH", "PL", "PT", "PY", "RO", "SE", "SG", "SI", "SK", "SV", "TR", "TW", "US", "UY" ],
                     "disc_number": 3,
                     "duration_ms": 260973,
                     "explicit": false,
                     "external_ids": {
                       "isrc": "USRC16901355"
                     },
                     "external_urls": {
                       "spotify": "https://open.spotify.com/track/6fgjU6IfBOXHI3OKtndEeE"
                     },
                     "href": "https://api.spotify.com/v1/tracks/6fgjU6IfBOXHI3OKtndEeE",
                     "id": "6fgjU6IfBOXHI3OKtndEeE",
                     "name": "Suspicious Minds",
                     "popularity": 70,
                     "preview_url": "https://p.scdn.co/mp3-preview/3742af306537513a4f446d7c8f9cdb1cea6e36d1",
                     "track_number": 19,
                     "type": "track",
                     "uri": "spotify:track:6fgjU6IfBOXHI3OKtndEeE"
                   }, {
                 ...
                   } ]
                 }
		}
	}
}
```

<a name="getArtistRelatedArtists"/>
## SpotifyPublicAPI.getArtistRelatedArtists
Method description

| Field    | Type  | Description
|---|-------|----------
| id| String| The Spotify ID for the artist.

#### Request example
```json
{	"id": "..."
}
```
#### Response example
```json
{
	"callback":"success",
	"contextWrites":{
		"#":{
			"to":{
                   "artists" : [ {
                     "external_urls" : {
                       "spotify" : "https://open.spotify.com/artist/5ZKMPRDHc7qElVJFh3uRqB"
                     },
                     "followers" : {
                       "href" : null,
                       "total" : 18108
                     },
                     "genres" : [ "rockabilly" ],
                     "href" : "https://api.spotify.com/v1/artists/5ZKMPRDHc7qElVJFh3uRqB",
                     "id" : "5ZKMPRDHc7qElVJFh3uRqB",
                     "images" : [ {
                       "height" : 997,
                       "url" : "https://i.scdn.co/image/beff5827580bcc4d129cbc0872768095eeba8c14",
                       "width" : 1000
                     }, {
                       "height" : 638,
                       "url" : "https://i.scdn.co/image/dbabf703779789917c4dd1c0e54da62c7a45ce92",
                       "width" : 640
                     }, {
                       "height" : 199,
                       "url" : "https://i.scdn.co/image/74761c343bec27c814b8e44e4bc095cbf1b674bb",
                       "width" : 200
                     }, {
                       "height" : 64,
                       "url" : "https://i.scdn.co/image/0c30af5647c74fee14fb97981c23b336abbc9f21",
                       "width" : 64
                     } ],
                     "name" : "Wanda Jackson",
                     "popularity" : 59,
                     "type" : "artist",
                     "uri" : "spotify:artist:5ZKMPRDHc7qElVJFh3uRqB"
                   }, {
                     ...
                   } ]
                 }
		}
	}
}
```

<a name="getTrack"/>
## SpotifyPublicAPI.getTrack
Method description

| Field    | Type  | Description
|---|-------|----------
| id| String| The Spotify ID for the track.

#### Request example
```json
{	"id": "..."
}
```
#### Response example
```json
{
	"callback":"success",
	"contextWrites":{
		"#":{
			"to":{
                   "album": {
                     "album_type": "album",
                     "external_urls": {
                       "spotify": "https://open.spotify.com/album/6TJmQnO44YE5BtTxH8pop1"
                     },
                     "href": "https://api.spotify.com/v1/albums/6TJmQnO44YE5BtTxH8pop1",
                     "id": "6TJmQnO44YE5BtTxH8pop1",
                     "images": [
                       {
                         "height": 640,
                         "url": "https://i.scdn.co/image/8e13218039f81b000553e25522a7f0d7a0600f2e",
                         "width": 629
                       },
                       {
                         "height": 300,
                         "url": "https://i.scdn.co/image/8c1e066b5d1045038437d92815d49987f519e44f",
                         "width": 295
                       },
                       {
                         "height": 64,
                         "url": "https://i.scdn.co/image/d49268a8fc0768084f4750cf1647709e89a27172",
                         "width": 63
                       }
                     ],
                     "name": "Hot Fuss",
                     "type": "album",
                     "uri": "spotify:album:6TJmQnO44YE5BtTxH8pop1"
                   },
                   "artists": [
                     {
                       "external_urls": {
                         "spotify": "https://open.spotify.com/artist/0C0XlULifJtAgn6ZNCW2eu"
                       },
                       "href": "https://api.spotify.com/v1/artists/0C0XlULifJtAgn6ZNCW2eu",
                       "id": "0C0XlULifJtAgn6ZNCW2eu",
                       "name": "The Killers",
                       "type": "artist",
                       "uri": "spotify:artist:0C0XlULifJtAgn6ZNCW2eu"
                     }
                   ],
                   "available_markets": [
                     "AD",
                     "AR",
                 ...
                     "TW",
                     "UY"
                   ],
                   "disc_number": 1,
                   "duration_ms": 222075,
                   "explicit": false,
                   "external_ids": {
                     "isrc": "USIR20400274"
                   },
                   "external_urls": {
                     "spotify": "https://open.spotify.com/track/0eGsygTp906u18L0Oimnem"
                   },
                   "href": "https://api.spotify.com/v1/tracks/0eGsygTp906u18L0Oimnem",
                   "id": "0eGsygTp906u18L0Oimnem",
                   "name": "Mr. Brightside",
                   "popularity": 0,
                   "preview_url": "http://d318706lgtcm8e.cloudfront.net/mp3-preview/f454c8224828e21fa146af84916fd22cb89cedc6",
                   "track_number": 2,
                   "type": "track",
                   "uri": "spotify:track:0eGsygTp906u18L0Oimnem"
                 }
		}
	}
}
```

<a name="getUserProfile"/>
## SpotifyPublicAPI.getUserProfile
Method description

| Field    | Type  | Description
|---|-------|----------
| id| String| The Spotify ID for the user profile.

#### Request example
```json
{	"id": "..."
}
```
#### Response example
```json
{
	"callback":"success",
	"contextWrites":{
		"#":{
			"to":{
                  "display_name" : "Lilla Namo",
                  "external_urls" : {
                    "spotify" : "https://open.spotify.com/user/tuggareutangranser"
                  },
                  "followers" : {
                    "href" : null,
                    "total" : 4561
                  },
                  "href" : "https://api.spotify.com/v1/users/tuggareutangranser",
                  "id" : "tuggareutangranser",
                  "images" : [ {
                    "height" : null,
                    "url" : "http://profile-images.scdn.co/artists/default/d4f208d4d49c6f3e1363765597d10c4277f5b74f",
                    "width" : null
                  } ],
                  "type" : "user",
                  "uri" : "spotify:user:tuggareutangranser"
                 }
		}
	}
}
```

