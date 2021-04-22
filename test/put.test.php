<?php

require_once "../src/response.php";
require_once "../src/requests.php";

requestPUT(function () {
       try {
              response200();
       } catch (Exception $exception) {
              responseExeption($exception);
       }
});
