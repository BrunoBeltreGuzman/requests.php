<?php

require_once "../src/response.php";
require_once "../src/requests.php";

requestGET(function () {
       response200();
});

requestPOST(function () {
       response200();
});

requestPUT(function () {
       response200();
});

requestPATCH(function () {
       response200();
});

requestDELETE(function () {
       response200();
});
