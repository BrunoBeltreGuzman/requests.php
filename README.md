# Requests.php
Routers and methods to HTTP Requests and Response

```php
requestGET(function () {
       try {
              response200();
       } catch (Exception $exception) {
              responseException($exception);
       }
});
```

# Request and Response

**Request:** Request GET

```php
requestGET(function () {
       //you do anything
});
```

**Request:** Request POST

```php
requestPOST(function () {
       //you do anything
});
```

**Request:** Request PUT

```php
requestPUT(function () {
       //you do anything
});
```

**Request:** Request PATCH

```php
requestPATCH(function () {
       //you do anything
});
```

**Request:** Request DELETE

```php
requestDELETE(function () {
       //you do anything
});
```

**Response:** OK `response200();`

```php
response200();
```

```json
[
       {
              "code": 200,
              "message": "The request has succeeded."
       }
]
```

```php
$data = [array(
       'id' => 1,
       "name" => "Bobo",
       "email" => "bobo@gmail.com"
)];
responseData200($data);
```

```json
[
       {
              "code": 200,
              "message": "The request has succeeded.",
              "data": [
                     {
                            "id": 1,
                            "name": "Bobo",
                            "email": "bobo@gmail.com"
                     }
              ]
       }
]
```


References:

https://www.restapitutorial.com/httpstatuscodes.html
