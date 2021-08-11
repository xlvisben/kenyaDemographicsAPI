<?php
declare(strict_types=1);

namespace app;

use \Dotenv\Dotenv as Dotenvloader;
/*
*
---------------------------------------------------------------
This file handles database ACTIONS:
-> Connecting to DB
-> Inserting to DB
-> Reading from DB
-> Updating DB
-> Deleting from DB
---------------------------------------------------------------
*
*/

require_once __DIR__.'/../composer/vendor/autoload.php';


abstract class DatabaseActions
{

  /*
  * Connecting to the Database.
  * @ Future -> a database connection method that can be passed different credentials.
  */
  protected function dbConnect():array
  {
    // pull in the environment variables
    $dotENVInstance = Dotenvloader::createImmutable(__DIR__.'/../config');
    $dotENVInstance->load();

    // Create connection
    $DBConnection=mysqli_connect($_ENV['DB_HOSTNAME'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_NAME']);

    // Check connection
    if (!$DBConnection) {

      // the connection failed
      $responseArray['response'] = '500';

      $responseArray['message'] = 'There was an error connecting to the database. Description: ' . mysqli_connect_error();

      $responseArray['data'] = NULL;

    } else {

      // the connection was successful
      $responseArray['response'] = '200';

      $responseArray['message'] = 'Connected to the database: '. $_ENV['DB_NAME'];

      $responseArray['data'] = $DBConnection;

    }

    return $responseArray;

  }

}
