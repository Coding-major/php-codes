<?php
    define("servername","localhost");
    define("username","mustapham");
    define("password","");
    define("dbname","mymy");

    $connect = new mysqli(servername, username, password, dbname);

    if ($connect->connect_error) {
        die("connection failed: ". $connect->error);
    } 
    // else {
    //     echo "connection sucessful";
    // }

    $sql = "CREATE TABLE detergent(
        id INT(6) UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";


    if ($connect->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $connect->error;
    }

    $connect->close();
?>