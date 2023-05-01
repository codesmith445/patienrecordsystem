<?php
 include 'db.php';
 
 $conn = connectDB();
 $patient_id = $_POST["id"];
 $name = $_POST["name"];
 $age = $_POST["age"];
 $address = $_POST["address"];
 $occupation = $_POST["occupation"];
 $diagnosis = $_POST["diagnosis"];
 $number = $_POST["number"];

 mysqli_query($conn, "UPDATE patient_list SET name='$name', age='$age', address='$address', occupation='$occupation', diagnosis='$diagnosis', number='$number' WHERE id='$patient_id'");
 
 echo "<script>alert('Successfully Updated')</script>";
 echo "<script>window.location.href='index.php';</script>";
 
 ?>

