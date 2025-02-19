<?php
namespace App\Model;

use core\connect\DbConnect;
use PDO;

class EmailModel {
    private $conn;

    public function __construct( $conn ) {
        $this->conn = $conn;
    }
    public function sendEmail() {

        // dd('awe');
        if ( isset( $_POST[ 'submit' ] ) ) {
            $email = $_POST[ 'newsletter-name' ];

                if ( filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
                    // Valid email address
                    $connect = DbConnect::start();
                    $sql = $connect->prepare( "INSERT INTO emails(email) VALUES('$email')" );
                    $sql->execute();

                    redirect( 'thank-you' );
                } else {
                    // Invalid email address
                    return $emailError = 'Email address is invalid.';
                }
        }
    }
}

?>