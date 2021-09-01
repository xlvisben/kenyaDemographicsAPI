<?php
header("Access-Control-Allow-Origin: *");

header("Access-Control-Allow-Headers: access");

header("Access-Control-Allow-Methods: GET");

header('Content-Type: application/json');

header("HTTP/1.1 400 Not Found");

$dataArray = array(
  'status_code' => 404,
  'status_message_short' => 'Not found',
  'status_message_description' => 'Resource requested is non-existent',
  'data' => null,
);

echo json_encode($dataArray);
