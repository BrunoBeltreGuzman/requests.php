<?php

require_once "../src/requests.php";

requestGET(function () {
       try {
              response();
       } catch (Exception $exception) {
              response($exception, 500);
       }
});

requestPOST(function () {
       response();
});

requestPUT(function () {
       response();
});

requestPATCH(function () {
       response();
});

requestDELETE(function () {
       response();
});
