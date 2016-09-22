# SpotifyPublicAPI Package
This package offers a variety of blocks by Spotify that do not require any authentication.
* Domain: spotify.com
* Credentials: public

## How to get credentials: 
0. Item one 
1. Item two

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
			"to":"..."
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
			"to":"..."
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
			"to":"..."
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
			"to":"..."
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
			"to":"..."
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
			"to":"..."
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
			"to":"..."
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
			"to":"..."
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
			"to":"..."
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
			"to":"..."
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
			"to":"..."
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
			"to":"..."
		}
	}
}
```

