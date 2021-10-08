<?php

require_once "../src/requests.php";

requestPOST(function () {
       try {
              response();
       } catch (Exception $exception) {
              response($exception, 500);
       }
});
