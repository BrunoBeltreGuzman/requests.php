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

**Todos**

| Function                                                 |
| -------------------------------------------------------- |
| **response()**                                           |
| **responseData(`$data`)**                                |
| **responseException(`$exception`)**                      |
| **responseError(`$error`)**                              |
| **responseFull(`$code, $message`)**                      |
| **responseDataFull(`$code, $message, $data`)**           |
| **responseExceptionFull(`$code, $message, $exception`)** |
| **responseErrorFull(`$code, $message, $error`)**         |
| **response200()**                                        |
| **responseData200(`$data`)**                             |
| **response300()**                                        |
| **responseData300(`$data`)**                             |
| **response400()**                                        |
| **responseData400(`$data`)**                             |
| **response403()**                                        |
| **responseData403(`$data`)**                             |
| **response500()**                                        |
| **responseData500(`$data`)**                             |

**Parameters**

| Function                  | Descripción                                                       |
| ------------------------- | ----------------------------------------------------------------- |
| **getGetParameters()**    | Returns all the parameters in the request by the `GET` method.    |
| **getPostParameters()**   | Returns all the parameters in the request by the `POST` method.   |
| **getPutParameters()**    | Returns all the parameters in the request by the `PUT` method.    |
| **getPatchParameters()**  | Returns all the parameters in the request by the `PATCH` method.  |
| **getDeleteParameters()** | Returns all the parameters in the request by the `DELETE` method. |

# Test

**Request**

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

**Response**

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

**Parameters**

```php
// {id}
requestPUT(function () {
       try {
              $PUT = getPutParameters();
              if ($PUT["id"]) {
                     $data = [array('id' => $PUT["id"])];
                     responseData($data);
              } else {
                     response400();
              }
       } catch (Exception $exception) {
              responseExeption($exception);
       }
}
```

**Usage**

```php

require_once "../src/response.php";
require_once "../src/requests.php";
require_once "../src/parameters.php";


// {id}
requestGET(function () {
       try {
              $GET = getGetParameters();
              if ($GET["id"]) {
                     $data = [array('id' => $GET["id"])];
                     responseData($data);
              } else {
                     response400();
              }
       } catch (Exception $exception) {
              responseExeption($exception);
       }
});

```

References:

https://www.restapitutorial.com/httpstatuscodes.html
