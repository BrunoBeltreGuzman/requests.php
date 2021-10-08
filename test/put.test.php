<?php

require_once "../src/requests.php";

requestPUT(function () {
       try {
              response();
       } catch (Exception $exception) {
              response($exception, 500);
       }
});
