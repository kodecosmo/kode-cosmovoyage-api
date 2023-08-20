## Service Providers

### Get a list of service providers.

Admin or user must have a `Bearer Token` in order to get the request.

Method : `GET`

URL : `http://127.0.0.1:8000/api/v1/service-providers`

Authenification method : `Bearer Token`

### Get a single service provider.

Admin or user must have a `Bearer Token` in order to get the request.

Method : `GET`

URL : `http://127.0.0.1:8000/api/v1/service-providers/{service-provider_id}`

Authenification method : `Bearer Token`

[Update and Delete mothods are also available but no time to document them.](../../app/Http/Controllers/v1/ServiceProviderController.php)

@Thank You, Kenura R. Gunarathna