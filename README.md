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
composer require requests.php/php
```

```console
git clone https://github.com/BrunoBeltreGuzman/requests.php.git
```

[Download.zip](https://github.com/BrunoBeltreGuzman/requests.php/archive/refs/heads/main.zip)

> Note:
>
> _You can delete `test` directory and `README.md`, `index.php` files._

# Usage

**Requests**

| Function                       | Descripción                             |
| ------------------------------ | --------------------------------------- |
| **Request::get($callback)**    | set request with method HTTP `GET` .    |
| **Request::post($callback)**   | set request with method HTTP `POST` .   |
| **Request::put($callback)**    | set request with method HTTP `PUT` .    |
| **Request::patch($callback)**  | set request with method HTTP `PATCH` .  |
| **Request::delete($callback)** | set request with method HTTP `DELETE` . |

> Note:
>
> _In request PUT, PATCH, and DELETE for sen data, can you use form `x-www-form-urlencoded`_

**Response**

**Function:**

| Function                                       |
| ---------------------------------------------- |
| **response(`$response = ""`, `$code = 200`);** |

**Parameters**

| Function                      | Descripción                                                    |
| ----------------------------- | -------------------------------------------------------------- |
| **Response::getParameters()** | Returns all the parameters in the request by the `ANY` method. |

# Test

**Request**

**Request:** Request GET

```php
Request::get(function (Response $response) {
       //you do anything
});
```

**Request:** Request POST

```php
Request::post(function (Response $response) {
       //you do anything
});
```

**Request:** Request PUT

```php
Request::put(function (Response $response) {
       //you do anything
});
```

**Request:** Request PATCH

```php
Request::patch(function (Response $response) {
       //you do anything
});
```

**Request:** Request DELETE

```php
Request::delete(function (Response $response) {
       //you do anything
});
```

**Usage**

```php

use Requests\Php\Request;
use Requests\Php\Response;

include __DIR__ . "/../vendor/autoload.php";

// {id}
Request::get(function (Response $response) { {
       try {
              $GET = $response->getParameters();
              if ($GET["id"]) {
                     $data = [array('id' => $GET["id"])];
                     $response->response($data);
              } else {
                     $response->response("BadRequest", 400);
              }
       } catch (Exception $exception) {
              $response->response($exception, 500);
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
