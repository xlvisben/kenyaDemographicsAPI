<?php
declare(strict_types=1);

namespace app;

/*
*
---------------------------------------------------------------
This file handles the WARD actions:
-> Get all wards ->getWards()
-> Get a specific ward ->getWard(string $ID)
---------------------------------------------------------------
*
*/


class Ward extends DatabaseActions
{

  private $DBConnection;

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

       $this->DBConnection = $dbconnectionAttempt['data'];

     }

  }

  public function getWards()
  {

    $getSubcountiesSQL = "SELECT ward_code, ward_name, constituencies.constituency_code, constituency_name, constituencies.county_code, county_name, capital_city, province_name as former_province_name, province_id as former_province_code FROM `wards` INNER JOIN `constituencies` ON wards.constituency_code = constituencies.constituency_code INNER JOIN `counties` ON constituencies.county_code = counties.county_code INNER JOIN `former_provinces` ON counties.former_province_entry_id = former_provinces.entry_id";

    return $this->selectSQLStatement($getSubcountiesSQL, $this->DBConnection);

  }

  public function getWard(string $ID)
  {

    $ID = mysqli_real_escape_string($this->DBConnection, $ID);

    $getWardSQL = "SELECT ward_code, ward_name, constituencies.constituency_code, constituency_name, constituencies.county_code, county_name, capital_city, province_name as former_province_name, province_id as former_province_code FROM `wards` INNER JOIN `constituencies` ON wards.constituency_code = constituencies.constituency_code INNER JOIN `counties` ON constituencies.county_code = counties.county_code INNER JOIN `former_provinces` ON counties.former_province_entry_id = former_provinces.entry_id WHERE ward_code = '$ID'";

    return $this->selectSQLStatement($getWardSQL, $this->DBConnection);

  }


}
