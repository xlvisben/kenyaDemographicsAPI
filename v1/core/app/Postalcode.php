<?php
declare(strict_types=1);

namespace app;

use \mysqli;
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

  public function getPostalcodes()
  {

    $getPostalcodesSQL = "SELECT postal_code, office, county_name FROM `postal_codes` INNER JOIN `counties` ON counties.county_code = postal_codes.county_code";

    return $this->selectSQLStatement($getPostalcodesSQL, $this->dbConnection);

  }

  public function getPostalcode(string $ID)
  {

    $ID = mysqli_real_escape_string($this->dbConnection, $ID);

    $getPostalcodeSQL = "SELECT postal_code, office FROM `postal_codes` INNER JOIN `counties` ON counties.county_code = postal_codes.county_code WHERE postal_code = '$ID'";

    return $this->selectSQLStatement($getPostalcodeSQL, $this->dbConnection);

  }


}
