

<?php

require_once "../src/requests.php";


// {id}
requestGET(function () {
       try {
              $GET = getGetParameters();
              $data = [array('id' => $GET["id"])];
              response($data);
       } catch (Exception $exception) {
              response($exception, 500);
       }
});

// {name}
requestPOST(function () {
       try {
              $POST = getPostParameters();
              $data = [array('name' => $POST["name"])];
              response($data);
       } catch (Exception $exception) {
              response($exception, 500);
       }
});


// {id}
requestPUT(function () {
       try {
              $PUT = getPutParameters();

              $data = [array('id' => $PUT["id"])];
              response($data);
       } catch (Exception $exception) {
              response($exception, 500);
       }
});


// {name}
requestPATCH(function () {
       try {
              $PATCH = getPatchParameters();
              $data = [array('name' => $PATCH["name"])];
              response($data);
       } catch (Exception $exception) {
              response($exception, 500);
       }
});


// {id}
requestDELETE(function () {
       try {
              $DELETE = getDeleteParameters();
              $data = [array('id' => $DELETE["id"])];
              response($data);
       } catch (Exception $exception) {
              response($exception, 500);
       }
});
