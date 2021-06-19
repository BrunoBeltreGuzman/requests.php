<?php

requestGETStrict(function () {
       try {
              response200();
              responseData200(array('id' => 10,));
       } catch (Exception $exception) {
              responseExeption($exception);
       }
});
