<?php
declare(strict_types=1);

namespace app;


/*
*
---------------------------------------------------------------
This file handles the PROVINCE actions:
-> Get all provinces ->getProvinces()
-> Get a specific province ->getProvince(string $ID)
---------------------------------------------------------------
*
*/


class Postalcode extends DatabaseActions
{

  private \mysqli $dbConnection;

  function __construct()
  {
    // the database connection is first step for every other thing to run
    $dbconnectionAttempt = $this->dbConnect();

    if ($dbconnectionAttempt['response'] != '200') {

      $Logger = new Logger();

      $Logger->logToFile('Error', $dbconnectionAttempt['message'], $dbconnectionAttempt['response']);

      throw new \Exception("Internal error experienced in the application", 1);

      exit();

     }else {

       $this->dbConnection = $dbconnectionAttempt['data'];

     }

  }

  public function getPostalcodes()
  {

    $getPostalcodesSQL = "SELECT code as postal_code, office FROM `postal_codes`";

    return $this->selectSQLStatement($getPostalcodesSQL, $this->dbConnection);

  }

  public function getPostalcode(string $ID)
  {

    $ID = mysqli_real_escape_string($this->dbConnection, $ID);

    $getPostalcodeSQL = "SELECT code as postal_code, office FROM `postal_codes` WHERE code = '$ID'";

    return $this->selectSQLStatement($getPostalcodeSQL, $this->dbConnection);

  }


}
