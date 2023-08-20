## Docking Stations

### Get a list of docking stations.

Admin or user must have a `Bearer Token` in order to get the request.

Method : `GET`

URL : `http://127.0.0.1:8000/api/v1/docking-stations`

Authenification method : `Bearer Token`

### Get the docking stations inside a celestial.

Admin or user must have a `Bearer Token` in order to get the request.

Method : `GET`

URL : `http://127.0.0.1:8000/api/v1/celestials/{celestial_id}/docking-stations`

Authenification method : `Bearer Token`

### Get a single docking station.

Admin or user must have a `Bearer Token` in order to get the request.

Method : `GET`

URL : `http://127.0.0.1:8000/api/v1/docking-stations/{docking_station_id}`

Authenification method : `Bearer Token`

[Update and Delete mothods are also available but no time to document them.](../../app/Http/Controllers/v1/DockingStationController.php)

@Thank You, Kenura R. Gunarathna