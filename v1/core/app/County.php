<?php
declare(strict_types=1);

namespace app;

/*
*
---------------------------------------------------------------
This file handles the COUNTY actions:
-> Get all counties ->getCounties()
-> Get a specific county ->getCounty(string $ID)
---------------------------------------------------------------
*
*/


class County extends DatabaseActions
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

  public function getCounties()
  {

    $getCountiesSQL = "SELECT county_code, county_name, capital_city, province_name AS former_province_name, province_id as former_province_code FROM `counties` INNER JOIN `former_provinces` ON former_provinces.entry_id = counties.former_province_entry_id";

    return $this->selectSQLStatement($getCountiesSQL, $this->dbConnection);

  }

  public function getCounty(string $ID)
  {

    $ID = mysqli_real_escape_string($this->dbConnection, $ID);

    $getCountySQL = "SELECT county_code, county_name, capital_city, province_name AS former_province_name, province_id as former_province_code FROM `counties` INNER JOIN `former_provinces` ON former_provinces.entry_id = counties.former_province_entry_id WHERE county_code = '$ID'";

    return $this->selectSQLStatement($getCountySQL, $this->dbConnection);

  }


}
