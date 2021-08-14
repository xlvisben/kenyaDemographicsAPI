<?php
/*
*
---------------------------------------------------------------
Function: This file is used to handle logic when getting all wards in the database
---------------------------------------------------------------
*
*/
header("Access-Control-Allow-Origin: *");

header("Access-Control-Allow-Headers: access");

header("Access-Control-Allow-Methods: GET");

header('Content-Type: application/json');

require_once __DIR__.'/core/composer/vendor/autoload.php';

use app\Ward;

if ($_SERVER['REQUEST_METHOD'] != 'GET') {

  $dataArray = array(
    'status_code' => 405,
    'status_message_short' => 'Method not allowed',
    'status_message_description' => 'Only GET method is supported in this resource',
    'data' => NULL,
  );

} else {

  try {

    $ward = new Ward();

    $getWards = $ward->getWards();

    switch ($getWards['response']) {
      case '200':

        $dataArray = array(
          'status_code' => 200,
          'status_message_short' => 'Success',
          'status_message_description' => 'Success in fetching all wards',
          'data' => $getWards['data'],
        );

        break;

        case '204':

          $dataArray = array(
            'status_code' => 204,
            'status_message_short' => 'No content',
            'status_message_description' => 'No data present for resource',
            'data' => $getWards['data'],
          );

          break;

      default:

        $dataArray = array(
          'status_code' => 500,
          'status_message_short' => 'Internal error',
          'status_message_description' => $getWards['message'],
          'data' => $getWards['data'],
        );

        break;
    }

  } catch (\Exception $error) {

    $dataArray = array(
      'status_code' => 500,
      'status_message_short' => 'Internal error',
      'status_message_description' => $error->getMessage(),
      'data' => NULL,
    );

  }
}


echo json_encode($dataArray);
