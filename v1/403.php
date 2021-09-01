<?php
header("Access-Control-Allow-Origin: *");

header("Access-Control-Allow-Headers: access");

header("Access-Control-Allow-Methods: GET");

header('Content-Type: application/json');

header("HTTP/1.1 403 Forbidden");

$dataArray = array(
  'status_code' => 403,
  'status_message_short' => 'Forbidden',
  'status_message_description' => 'Resource requested is forbidden',
  'data' => null,
);

echo json_encode($dataArray);
