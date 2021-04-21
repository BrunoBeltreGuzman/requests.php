

<?php

/*============================================
                                          Response OK (200)
=============================================*/
function responseOK()
{
       $response = array(
              'code' => 200,
              "message" => "The request has succeeded."
       );
       echo json_encode($response);
}

function responseArrayOK($array)
{
       echo json_encode($array);
}


function responseDataOK($data)
{
       $response = array(
              'code' => 200,
              "message" => "The request has succeeded.",
              "data" => $data
       );
       echo json_encode($response);
}
