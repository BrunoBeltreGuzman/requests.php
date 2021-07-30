<?php

require_once "../src/requests.php";

requestDELETE(function () {
       try {
              response200();
       } catch (Exception $exception) {
              responseExeption($exception);
       }
});
