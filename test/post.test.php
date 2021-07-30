<?php

require_once "../src/requests.php";

requestPOST(function () {
       try {
              response200();
       } catch (Exception $exception) {
              responseExeption($exception);
       }
});
