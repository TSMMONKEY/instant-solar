<?php
namespace App\Model;

use core\connect\DbConnect;
use PDO;

class ContactModel {
    private $conn;

    public function __construct( $conn ) {
        $this->conn = $conn;
    }

    public function selectAll() {
        $sql = $this->conn->prepare( 'SELECT * FROM contact' );
        $sql->execute();
        return $result = $sql->fetchAll( PDO::FETCH_OBJ );
    }
   
    public function totalEmails() {
        $sql = $this->conn->prepare( "SELECT count('*') FROM contact" );
        $sql->execute();
        return $result = $sql->fetchAll( PDO::FETCH_ASSOC )[ 0 ][ "count('*')" ];
    }

    public function sendInfo() {

        if ( isset( $_POST[ 'submit' ] ) ) {
            $firstName = $_POST[ 'full-name' ];
            $lastName = $_POST[ 'last-name' ];
            $email = $_POST[ 'email' ];
            $number = $_POST[ 'phone' ];
            $message = $_POST[ 'message' ];

            // Replace with the phone number you want to validate

            // Remove any non-digit characters from the phone number
            $number = preg_replace( '/[^0-9]/', '', $number );

            // Validate the phone number length and format
            if ( strlen( $number ) === 10 && preg_match( '/^[0-9]{10}$/', $number ) ) {
                // Valid phone number
                if ( filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
                    // Valid email address
                    $connect = DbConnect::start();
                    $sql = $connect->prepare( "INSERT INTO contact(firstName,lastName,email,phoneNumber,message) VALUES('$firstName','$lastName','$email','$number','$message')" );
                    $sql->execute();

                    redirect( 'thank-you' );
                } else {
                    // Invalid email address
                    return $emailError = 'Email address is invalid.';
                }
            } else {
                // Invalid phone number
                echo 'Phone number is invalid.';
            }
        }
    }
}

?>