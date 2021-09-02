<?php
declare(strict_types=1);

namespace app;


/*
*
---------------------------------------------------------------
This file handles the LOGGING actions:
-> Logs errors ->getAllProvinces()
-> Logs specific connection ->getProvince(int $ID)
---------------------------------------------------------------
*
*/

class Logger
{

  const LOGFILESPATH = __DIR__.'/../logs/';

  public function logToFile(string $logType, string $logMessage, string $logCode)
  {
    $clientIP = $_SERVER['REMOTE_ADDR'];

    $userAgent = $_SERVER["HTTP_USER_AGENT"];

    $scriptName = $_SERVER["SCRIPT_FILENAME"];

    $date = new \DateTime("now", new \DateTimeZone('Africa/Nairobi'));

    $time = $date->format('Y-m-d H:i:s');

    if ($logType === 'Error') {

      $logFile = self::LOGFILESPATH.'error_log.txt';

      if (!file_exists($logFile)) {

        file_put_contents($logFile, '');
        chmod($logFile, 0777);

      }


    }else if ($logType === 'Routine') {

      $logFile = self::LOGFILESPATH.'routine_log.txt';

      if (!file_exists($logFile)) {

        file_put_contents($logFile, '');
        chmod($logFile, 0777);

      }

    }

    $contents = file_get_contents($logFile);

    $contents .= $time ."\tIP Address:".$clientIP."\tClient User Agent:".$userAgent."\tScript running:".$scriptName."\tError Message:".$logMessage."\n";

    file_put_contents($logFile, $contents);
  }

}
