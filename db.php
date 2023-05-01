<?php
 
 function connectDB() {
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "patientrecordsys";
   $conn = new mysqli($servername, $username, $password, $dbname);

   if($conn->connect_error) {
      echo "Something Went Wrong: ".$conn->connect_error;
   }

   return $conn;
 }

 ?>