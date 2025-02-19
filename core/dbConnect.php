<?php
namespace core\connect; 
use PDO;

class DbConnect {
    public static function start() {
        $serverName = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'instant_solar';

        // $serverName = 'fdb1030.awardspace.net';
        // $username = '4333378_instantsolar';
        // $password = 'tNm4SptHZqK5NLF';
        // $dbname = '4333378_instantsolar';
        try {
            return $conn = new PDO( "mysql:host=$serverName;dbname=instant_solar", $username, $password );

            // set the PDO error mode to exception
            $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        } catch( PDOException $e ) {
            dd( "<h1 style='color:red;'>Connection failed: </h1>" . $e->getMessage() );
        }

    }
}
?>