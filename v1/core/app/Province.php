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


class Province extends DatabaseActions
{

  private $dbConnection;

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

  public function getProvinces()
  {

    $getProvincesSQL = "SELECT province_id, province_name FROM `former_provinces`";

    return $this->selectSQLStatement($getProvincesSQL, $this->dbConnection);

  }

  public function getProvince(string $ID)
  {

    $ID = mysqli_real_escape_string($this->dbConnection, $ID);

    $getProvinceSQL = "SELECT province_id, province_name FROM `former_provinces` WHERE province_id = '$ID'";

    return $this->selectSQLStatement($getProvinceSQL, $this->dbConnection);

  }


}
