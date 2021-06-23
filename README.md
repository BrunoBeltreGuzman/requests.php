# Requests.php

Routers and methods to HTTP Requests and Response

# Table of Contents

- [Validator.php](#validator.php)

     - [Table of Contents](#Table-of-Contents)
     - [Download](#Download)
     - [Usage](#Usage)
     - [Test](#Test)
     - [License](#License)

# Download

```console
git clone https://github.com/BrunoBeltreGuzman/requests.php.git
```
> Note:
>
_You can delete `test` directory and `README.md`, `index.php` files._

# Usage

**Requests**

| Function                     | Descripción                             |
| ---------------------------- | --------------------------------------- |
| **requestGET($callback)**    | set request with method HTTP `GET` .    |
| **requestPOST($callback)**   | set request with method HTTP `POST` .   |
| **requestPUT($callback)**    | set request with method HTTP `PUT` .    |
| **requestPATCH($callback)**  | set request with method HTTP `PATCH` .  |
| **requestDELETE($callback)** | set request with method HTTP `DELETE` . |

Also you can use endpoint strictly, using `request` `method` and `strict`:

```PHP
requestGETStrict(callback);
```
> Note:
>
_In request PUT, PATCH, and DELETE for sen data, can you use form `x-www-form-urlencoded`_

**Response**

**Function:**

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

# MIT License

Copyright (c) 2021 @BrunoDev

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

# References:

https://www.restapitutorial.com/httpstatuscodes.html
