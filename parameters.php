<?php

// Get Parameters
function getGetParameters()
{
       return $_GET;
}

// Post Parameters
function getPostParameters()
{
       return $_POST;
}

//Put Parameters
function getPutParameters()
{
       $PUT = null;
       parse_str(file_get_contents("php://input"), $PUT);
       return $PUT;
}

//PaTCH Parameters
function getPatchParameters()
{
       $PATCH = null;
       parse_str(file_get_contents("php://input"), $PATCH);
       return $PATCH;
}

//Delete Parameters
function getDeleteParameters()
{
       $DELETE = null;
       parse_str(file_get_contents("php://input"), $DELETE);
       return $DELETE;
}

//Headers Parameters
function getHeaders()
{
       $headers = apache_request_headers();
       //$headers['Authorization'];
       return $headers;
}
