# API Format

API will be a JSON output and given below will be the its format.

### Success Message

```
{
    "success": true,
    "message": "OUTPUT_MESSAGE",
    "data": [
        {
            DATA_OUTPUT
        }
    ]
}
```

### ERROR Message

```
{
    "success": false,
    "message": "OUTPUT_MESSAGE",
    "error_code": 2
}
```
### Validation Error

```
{
    "success": false,
    "message": "OUTPUT_MESSAGE",
    "data": [
        {
            "password": [
                "pasword must contain minimum 1 simple letter",
                "pasword must contain minimum 1 capital letter",
                "pasword must contain minimum 1 symbol",
            ],
            "first_name": "fist name must be longer than 1 letter",
            "last_name": "last name must be longer than 1 letter",
        }
    ]
}
```


@Thank You, Kenura R. Gunarathna