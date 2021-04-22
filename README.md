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

References:

https://www.restapitutorial.com/httpstatuscodes.html
