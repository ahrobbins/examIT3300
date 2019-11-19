<?php

/**
 * Configuration for database connection
 *
 */

//$host       = "localhost";
$host = "exammysql";
$username = "alicia";
$password = "lock3D*";
$dbname = "armysql";

//$username   = "root";
//$password   = "root";
//$dbname     = "test";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
