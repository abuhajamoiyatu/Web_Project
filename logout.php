<?php
   //This is for the user to logout of the system or out of the session
    session_aborting();
    header("location: login.php");
    //If there is any Error try and help out because it's anit easy
?>