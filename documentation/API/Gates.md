## Gates

### Get a list of gates.

Admin or user must have a `Bearer Token` in order to get the request.

Method : `GET`

URL : `http://127.0.0.1:8000/api/v1/gates`

Authenification method : `Bearer Token`

### Get the gates inside a docking station.

Admin or user must have a `Bearer Token` in order to get the request.

Method : `GET`

URL : `http://127.0.0.1:8000/api/v1/docking-stations/{docking_station_id}/gates`

Authenification method : `Bearer Token`

### Get a single gate.

Admin or user must have a `Bearer Token` in order to get the request.

Method : `GET`

URL : `http://127.0.0.1:8000/api/v1/gates/{gate_id}`

Authenification method : `Bearer Token`

[Update and Delete mothods are also available but no time to document them.](../../app/Http/Controllers/v1/GateController.php)

@Thank You, Kenura R. Gunarathna