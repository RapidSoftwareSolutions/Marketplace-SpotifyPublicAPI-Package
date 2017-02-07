[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/SpotifyPublicAPI/functions?utm_source=RapidAPIGitHub_SpotifyPublicFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)


# SpotifyPublicAPI Package
This package offers a variety of blocks by Spotify that do not require any authentication.
* Domain: spotify.com

## How to get credentials: 
This is public api. No credentials need.

## SpotifyPublicAPI.searchAlbums

| Field | Type  | Description
|-------|-------|----------
| query | String| The search query's keywords (and optional field filters and operators).
| market| String| Optimal: An ISO 3166-1 alpha-2 country code or the string from_token.
| limit | String| Optimal: The maximum number of results to return. Default: 20. Minimum: 1. Maximum: 50.
| offset| String| Optimal: The index of the first result to return. Default: 0 (i.e., the first result). Maximum offset: 100.000. Use with limit to get the next page of search results. 

#### Request example
```json
{	
  "query": "...",
	"market": "...",
	"limit": "...",
	"offset": "..."
}
```

## SpotifyPublicAPI.searchArtists

| Field | Type  | Description
|-------|-------|----------
| query | String| The search query's keywords (and optional field filters and operators).
| market| String| Optimal: An ISO 3166-1 alpha-2 country code or the string from_token.
| limit | String| Optimal: The maximum number of results to return. Default: 20. Minimum: 1. Maximum: 50.
| offset| String| Optimal: The index of the first result to return. Default: 0 (i.e., the first result). Maximum offset: 100.000. Use with limit to get the next page of search results. 

#### Request example
```json
{	
  "query": "...",
	"market": "...",
	"limit": "...",
	"offset": "..."
}
```

## SpotifyPublicAPI.searchPlaylists

| Field | Type  | Description
|-------|-------|----------
| query | String| The search query's keywords (and optional field filters and operators).
| market| String| Optimal: An ISO 3166-1 alpha-2 country code or the string from_token.
| limit | String| Optimal: The maximum number of results to return. Default: 20. Minimum: 1. Maximum: 50.
| offset| String| Optimal: The index of the first result to return. Default: 0 (i.e., the first result). Maximum offset: 100.000. Use with limit to get the next page of search results. 

#### Request example
```json
{	
  "query": "...",
	"market": "...",
	"limit": "...",
	"offset": "..."
}
```

## SpotifyPublicAPI.searchTracks

| Field | Type  | Description
|-------|-------|----------
| query | String| The search query's keywords (and optional field filters and operators).
| market| String| Optimal: An ISO 3166-1 alpha-2 country code or the string from_token.
| limit | String| Optimal: The maximum number of results to return. Default: 20. Minimum: 1. Maximum: 50.
| offset| String| Optimal: The index of the first result to return. Default: 0 (i.e., the first result). Maximum offset: 100.000. Use with limit to get the next page of search results. 

#### Request example
```json
{	
  "query": "...",
	"market": "...",
	"limit": "...",
	"offset": "..."
}
```

## SpotifyPublicAPI.getAlbum

| Field    | Type  | Description
|---|-------|----------
| id| String| The Spotify ID for the album.

#### Request example
```json
{	
  "id": "..."
}
```

## SpotifyPublicAPI.getAlbumTracks

| Field    | Type  | Description
|---|-------|----------
| id| String| The Spotify ID for the track.

#### Request example
```json
{	
  "id": "..."
}
```

## SpotifyPublicAPI.getArtist

| Field    | Type  | Description
|---|-------|----------
| id| String| The Spotify ID for the artist.

#### Request example
```json
{	
  "id": "..."
}
```

## SpotifyPublicAPI.getArtistAlbums

| Field     | Type  | Description
|-----------|-------|----------
| id        | String| The Spotify ID for the artist.
| album_type| String| Optional. A comma-separated list of keywords that will be used to filter the response. If not supplied, all album types will be returned. Valid values are:album, single, appears_on, compilation.
| market    | String| Optional. An ISO 3166-1 alpha-2 country code. Supply this parameter to limit the response to one particular geographical market.
| limit     | String| Optional. The number of album objects to return. Default: 20. Minimum: 1. Maximum: 50.
| offset    | String| Optional. The index of the first album to return. Default: 0 (i.e., the first album). Use with limit to get the next set of albums. 

#### Request example
```json
{	
  "id": "...",
	"album_type": "...",
	"market": "...",
	"limit": "...",
	"offset": "..."
}
```

## SpotifyPublicAPI.getArtistTopTracks

| Field  | Type  | Description
|--------|-------|----------
| id     | String| The Spotify ID for the artist.
| country| String| The country: an ISO 3166-1 alpha-2 country code.

#### Request example
```json
{	
  "id": "...",
	"country": "..."
}
```

## SpotifyPublicAPI.getArtistRelatedArtists

| Field    | Type  | Description
|---|-------|----------
| id| String| The Spotify ID for the artist.

#### Request example
```json
{	
  "id": "..."
}
```

## SpotifyPublicAPI.getTrack

| Field    | Type  | Description
|---|-------|----------
| id| String| The Spotify ID for the track.

#### Request example
```json
{	
  "id": "..."
}
```

## SpotifyPublicAPI.getUserProfile

| Field    | Type  | Description
|---|-------|----------
| id| String| The Spotify ID for the user profile.

#### Request example
```json
{	
  "id": "..."
}
```
