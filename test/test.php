<?php

require_once "../src/requests.php";

requestGET(function () {
       try {
              response200();
       } catch (Exception $exception) {
              responseExeption($exception);
       }
});

requestPOST(function () {
       response200();
});

requestPUT(function () {
       response200();
});

requestPATCH(function () {
       response200();
});

requestDELETE(function () {
       response200();
});
