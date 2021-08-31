<?php
declare(strict_types=1);

namespace app;

use \mysqli;
/*
*
---------------------------------------------------------------
This file handles the SUBCOUNTY actions:
-> Get all subcounties ->getSubcounties()
-> Get a specific subcounty ->getSubcounty(string $ID)
---------------------------------------------------------------
*
*/


class Subcounty extends DatabaseActions
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

  public function getSubcounties()
  {

    $getSubcountiesSQL = "SELECT subcounty_code, subcounty_name, county_name, capital_city, province_name AS former_province_name, province_id as former_province_code FROM `sub_counties` INNER JOIN `counties` ON counties.county_code = sub_counties.county_code INNER JOIN `former_provinces` ON former_provinces.entry_id = counties.former_province_entry_id";

    return $this->selectSQLStatement($getSubcountiesSQL, $this->dbConnection);

  }

  public function getSubcounty(string $ID)
  {

    $ID = mysqli_real_escape_string($this->dbConnection, $ID);

    $getSubcountySQL = "SELECT subcounty_code, subcounty_name, county_name, capital_city, province_name AS former_province_name, province_id as former_province_code FROM `sub_counties` INNER JOIN `counties` ON counties.county_code = sub_counties.county_code INNER JOIN `former_provinces` ON former_provinces.entry_id = counties.former_province_entry_id WHERE subcounty_code = '$ID'";

    return $this->selectSQLStatement($getSubcountySQL, $this->dbConnection);

  }


}
