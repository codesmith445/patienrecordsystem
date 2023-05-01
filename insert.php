<?php
 include 'db.php';


 if(isset($_POST["submit"])) {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $address = $_POST["address"];
    $occupation = $_POST["occupation"];
    $diagnosis = $_POST["diagnosis"];
    $number = $_POST["number"];
    
    $conn = connectDB();
    $sql = mysqli_query($conn, "INSERT INTO patient_list (name, age, address, occupation, diagnosis, number) VALUES ('$name', '$age', '$address', '$occupation', '$diagnosis', '$number')");

    if($sql) {
        echo "<script>alert('Successfully Added')</script>";
    }  else {
        echo "<scrip>alert(Something Wrong!)</script>";
    }

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
        <form action="" method="POST">
            <div class="row">
                <div class="col-md-11">
                    <input type="text" name="name" class="form-control" placeholder="ENTER FULL NAME" required>
                </div>
                <div class="col-md-11 mt-2">
                    <input type="text" name="age" class="form-control" placeholder="ENTER AGE" required>
                </div>
                <div class="col-md-11 mt-2">
                    <input type="text" name="address" class="form-control" placeholder="ENTER ADDRESS" required>
                </div>
                <div class="col-md-11 mt-2">
                    <input type="text" name="occupation" class="form-control" placeholder="ENTER OCCUPATION" required>
                </div>
                <div class="col-md-11 mt-2">
                    <input type="text" name="diagnosis" class="form-control" placeholder="ENTER DIAGNOSIS" required>
                </div>
                <div class="col-md-6 mt-2">
                    <input type="text" name="number" class="form-control" placeholder="ENTER PHONE NUMBER" required>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <button type="text" name="submit" class="btn btn-primary mt-2">Submit</button>
                        <a href="index.php" class="btn btn-secondary mt-2">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>