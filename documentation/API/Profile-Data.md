## Profile Data

### Get the personal profile details

For admin and the user must have a `Bearer Token` in order to get the request.

Method : `GET`

URL : `http://127.0.0.1:8000/api/v1/profile`

Authenification method : `Bearer Token`

Request Body : 

```
{
    "username": "ransana",
    "password": "20045#Ransana"
}
```

### Get the profile details of a selected user.

Only accessible for the admin.

For admin must have a `Bearer Token` in order to get the request.

Method : `GET`

URL : `http://127.0.0.1:8000/api/v1/profile/{user_id}`

Authenification method : `Bearer Token`

@Thank You, Kenura R. Gunarathna