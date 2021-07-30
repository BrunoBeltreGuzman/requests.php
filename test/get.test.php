<?php

require_once "../src/requests.php";

requestGETStrict(function () {
       $data = array('id' => 10,);
       try {
              responseData200($data);
              responseData200($data);
              responseData200($data);
       } catch (Exception $exception) {
              responseExeption($exception);
       }
});
