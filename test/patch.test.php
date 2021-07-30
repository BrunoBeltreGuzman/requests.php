<?php

require_once "../src/requests.php";

requestPATCH(function () {
       try {
              response200();
       } catch (Exception $exception) {
              responseExeption($exception);
       }
});
