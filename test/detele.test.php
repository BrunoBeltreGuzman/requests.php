<?php

require_once "../src/requests.php";

requestDELETE(function () {
       try {
              response("OK!");
       } catch (Exception $exception) {
              response($exception, 500);
       }
});
