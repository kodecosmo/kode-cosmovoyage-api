## Admin Registration

This request can be only done by an admin. THere for you have to pre login to one of the exisitng admin account ( which will be created at the installation of the api ) and use the given `Bearer Token` for authentification.

Method : `POST`

URL : `http://127.0.0.1:8000/api/v1/admin/register`

Authenification method : `Bearer Token`

Request Body : 

```
{
    "username": "ransana",
    "password": "20045#Ransana",
    "password_confirmation": "20045#Ransana",
    "first_name": "ransana",
    "last_name": "gunarathna",
    "email": "ransana@gmail.com",
    "contact_number": "94777190590",
    "gender": "male",
}
```

@Thank You, Kenura R. Gunarathna