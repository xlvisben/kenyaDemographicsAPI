<?php
declare(strict_types=1);

namespace app;


/*
*
---------------------------------------------------------------
This file handles the PROVINCE actions:
-> Get all provinces ->getAllProvinces()
-> Get a specific province ->getProvince(int $ID)
---------------------------------------------------------------
*
*/


class Province extends DatabaseActions
{

  private mysqli $dbConnection;

  function __construct()
  {
    // the database connection is first step for every other thing to run
    $dbconnectionAttempt = $this->dbConnect();

    if ($dbconnectionAttempt['response'] != '200') {



     }else {
       $this->$dbConnection = $dbconnectionAttempt['data'];
     }


    return $this->$dbConnection;

  }


}
