<?php
 include 'db.php';
  
 $conn = connectDB();
  $patient_id = $_REQUEST["id"];
  $get_data = mysqli_query($conn, "SELECT * FROM patient_list WHERE id='$patient_id'");

  while($row = mysqli_fetch_assoc($get_data)) {
    $name = $row["name"];
    $age = $row["age"];
    $address = $row["address"];
    $occupation = $row["occupation"];
    $diagnosis = $row["diagnosis"];
    $number = $row["number"];
  }

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container" style="width:50%">
        <div class="row">
            <div class="col-md-12 my-2">
                <h2>Patient Information System</h2>
            </div>
        </div>
        <form action="edit-process.php" method="POST">
            <div class="row">
            <div class="col-md-11">
                    <input type="hidden" name="id" value="<?php echo $patient_id; ?>">
                </div>
                <div class="col-md-11">
                    <input type="text" name="name" value="<?php echo $name; ?>" class="form-control" placeholder="ENTER FULL NAME" required>
                </div>
                <div class="col-md-11 mt-2">
                    <input type="text" name="age" value="<?php echo $age; ?>" class="form-control" placeholder="ENTER AGE" required>
                </div>
                <div class="col-md-11 mt-2">
                    <input type="text" name="address" value="<?php echo $address; ?>" class="form-control" placeholder="ENTER ADDRESS" required>
                </div>
                <div class="col-md-11 mt-2">
                    <input type="text" name="occupation" value="<?php echo $occupation; ?>" class="form-control" placeholder="ENTER OCCUPATION" required>
                </div>
                <div class="col-md-11 mt-2">
                    <input type="text" name="diagnosis" value="<?php echo $diagnosis; ?>" class="form-control" placeholder="ENTER DIAGNOSIS" required>
                </div>
                <div class="col-md-6 mt-2">
                    <input type="text" name="number" value="<?php echo $number; ?>" class="form-control" placeholder="ENTER PHONE NUMBER" required>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <button type="text" name="submit" class="btn btn-primary mt-2">Confirm</button>
                        <a href="index.php" class="btn btn-secondary mt-2">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>