<?php

function getGetParameters()
{
       return $_GET;
}

function getPostParameters()
{
       return $_POST;
}

function getPutParameters()
{
       $PUT = null;
       return $PUT;
}

function getPatchParameters()
{
       $PATCH = null;
       return $PATCH;
}


function getHeaders()
{
       $headers = apache_request_headers();
       //$headers['Authorization'];
       return $headers;
}
