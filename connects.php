<?php
     //This project was to show a student who want to learn some web
     //She  is just trying to learn php..html..css..usb/xanpp etc
    //The server name and connection
    define("SERVER_NAME","localhost");
    //The user of the system
    define("USERNAME","root");
    //This is the default password of usb
    define("DB_PASSWORD","usbw");
    //Name of the database that you are creating
    define("DATABASE_NAME","medical_system");

          //Create your variablres
    $con = new mysqli(SERVER_NAME, USERNAME, DB_PASSWORD, DATABASE_NAME);


    if(!$con){
        //This Error will display if it does not connecrt to the database
        echo "<h2>Display Errors on Connecting to the database</h2>";
        die();
    }
?>