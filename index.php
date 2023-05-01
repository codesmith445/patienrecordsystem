<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fonts.css">
    <title>Document</title>
</head>
<body>
 
<div class="container mt-3">
  <form action="search.php" method="GET">
    <input type="text" value="<?php if(isset($_GET["search"])){echo $_GET["search"];}?>" name="search">
    <button type="submit" class="btn btn-primary">Search</button>
    
  </form>
<h3>Patient Database System</h3>
    <a href="insert.php" class="btn btn-secondary my-2">Add Record</a>
    
    <table class="table table-secondary table-hover">
      <thead>
        <tr>
          <th>Fullname</th>
          <th>Age</th>
          <th>Address</th>
          <th>Occupation</th>
          <th>Diagnosis</th>
          <th>Number</th>
        </tr>
      </thead>
      <tbody>
        <tr>
        <?php
   
   $conn = connectDB();
   $query = mysqli_query($conn, "SELECT * FROM patient_list");
   
   while($row = mysqli_fetch_assoc($query)) {
    $patient_id = $row["id"];
    $name = $row["name"];
    $age = $row["age"];
    $address = $row["address"];
    $occupation = $row["occupation"];
    $diagnosis = $row["diagnosis"];
    $number = $row["number"];

     echo "<div class='container'>
     <table class='table table-success table-hover'>
     <tbody>
     <tr>
     <a href='edit.php?id=$patient_id'><img src='assets/edit.png'></a>
     <a href='delete.php?id=$patient_id'><img src='assets/delete.png'></a>
     <td>$name</td>
          <td>$age</td>
          <td>$address</td>
          <td>$occupation</td>
          <td>$diagnosis</td>
          <td>$number</td>
          </tr>
          </tbody>
          </table>
          </div>";
   }
  ?>
        </tr>
      </tbody>
    </table>
    
      </div>
 
    
</body>
</html>