# Requests.php

Routers and methods to HTTP Requests and Response

# Download file

https://www.requests.com/

# Table of Contents

- [Validator.php](#validator.php)

     - [Table of Contents](#Table-of-Contents)
     - [Download file](#Download-File)
     - [Usage](#Usage)
     - [Test](#Test)
     - [License](#License)

# Usage

**Requests**

| Function                     | Descripción                             |
| ---------------------------- | --------------------------------------- |
| **requestGET($callback)**    | set request with method HTTP `GET` .    |
| **requestPOST($callback)**   | set request with method HTTP `POST` .   |
| **requestPUT($callback)**    | set request with method HTTP `PUT` .    |
| **requestPATCH($callback)**  | set request with method HTTP `PATCH` .  |
| **requestDELETE($callback)** | set request with method HTTP `DELETE` . |

**Response**

**Function:** `response()`

```php
$response = [array(
       'code' => 200,
       "message" => "The request has succeeded.",
)];
```

**Function:** `responseData($data)`

```php
$response = [array(
       'code' => 200,
       "message" => "The request has succeeded.",
       "data" => $data
)];
```

**Function:** `responseExeption($exception)`

```php
$response = [array(
       'code' => 500,
       "message" => "The server encountered an unexpected condition which prevented it from fulfilling the request.",
       "exception" => $exception
)];
```

**Function:** `responseError($error)`

```php
$response = [array(
       'code' => 503,
       "message" => "The server encountered an unexpected condition which prevented it from fulfilling the request.",
       "error" => $error
)];
```

# Test

**Request and Response**

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

References:

https://www.restapitutorial.com/httpstatuscodes.html
