<?php
/*
*
---------------------------------------------------------------
Function: This file is used to handle logic when getting a specific ward in the database
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
  header("HTTP/1.1 405 Method Not Allowed");
  $dataArray = array(
    'status_code' => 405,
    'status_message_short' => 'Method not allowed',
    'status_message_description' => 'Only GET method is supported in this resource',
    'data' => NULL,
  );

} else {

if (!isset($_GET['id']) || empty($_GET['id'])) {
  header("HTTP/1.1 400 Bad Request");
  $dataArray = array(
    'status_code' => 400,
    'status_message_short' => 'Bad request',
    'status_message_description' => 'Requested resource is missing a required parameter',
    'data' => NULL,
  );

}else {

  try {

    $ward = new Ward();

    $getWard = $ward->getWard($_GET['id']);

    switch ($getWard['response']) {
      case '200':

        $dataArray = array(
          'status_code' => 200,
          'status_message_short' => 'Success',
          'status_message_description' => 'Success in fetching a specific subcounty',
          'data' => $getWard['data'],
        );

        break;

        case '204':
          header("HTTP/1.1 204 No Content");
          $dataArray = array(
            'status_code' => 204,
            'status_message_short' => 'No content',
            'status_message_description' => 'No data present for resource',
            'data' => $getWard['data'],
          );

          break;

      default:
        header("HTTP/1.1 500 Internal Server Error");
        $dataArray = array(
          'status_code' => 500,
          'status_message_short' => 'Internal error',
          'status_message_description' => $getWard['message'],
          'data' => $getWard['data'],
        );

        break;
    }

  } catch (\Exception $error) {
    header("HTTP/1.1 500 Internal Server Error");
    $dataArray = array(
      'status_code' => 500,
      'status_message_short' => 'Internal error',
      'status_message_description' => $error->getMessage(),
      'data' => NULL,
    );

  }

}
}


echo json_encode($dataArray);
