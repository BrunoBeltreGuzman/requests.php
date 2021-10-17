<?php

require_once "../src/requests.php";

requestPATCH(function () {
       try {
              response();
       } catch (Exception $exception) {
              response($exception, 500);
       }
});
