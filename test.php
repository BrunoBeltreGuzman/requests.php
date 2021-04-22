<?php

require_once "response.php";
require_once "requests.php";

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
