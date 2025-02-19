<?php
namespace core\connect; 
use PDO;

class DbConnect {
    public static function start() {
        $serverName = 'fdb1030.awardspace.net';
        $username = '4333378_instantsolar';
        $password = 'tNm4SptHZqK5NLF';
        try {
            return $conn = new PDO( "mysql:host=$serverName;dbname=4333378_instantsolar", $username, $password );

            // set the PDO error mode to exception
            $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        } catch( PDOException $e ) {
            dd( "<h1 style='color:red;'>Connection failed: </h1>" . $e->getMessage() );
        }

    }
}
?>