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
    <title>Document</title>
 </head>
 <body>

 <div class="col-md-12">
      <div class="card mt-4">
        <div class="card-body">
            <a href="index.php" class="btn btn-primary">Back</a>
          <table class="table table-secondary table-hover">
            <thead>
              <tr>
                <th>Full Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Occupation</th>
                <th>Diagnosis</th>
                <th>Number</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $conn = connectDB();
              if(isset($_GET["search"])) {
                $filtervalues = $_GET["search"];
                $query = "SELECT * FROM patient_list WHERE CONCAT(name, age, address, occupation, diagnosis, number) LIKE '%$filtervalues%'";
                $query_run = mysqli_query($conn, $query);
                if(mysqli_num_rows($query_run) > 0) {
                      foreach($query_run as $items) {
                        ?>
                        <tr>
                          <td><?= $items["name"]; ?></td>
                          <td><?= $items["age"]; ?></td>
                          <td><?= $items["address"]; ?></td>
                          <td><?= $items["occupation"]; ?></td>
                          <td><?= $items["diagnosis"]; ?></td>
                          <td><?= $items["number"]; ?></td>
                        </tr>
                        <?php
                      }
                } else {
                  ?> 
                  <tr>
                    <td colspan="6">No Records Found</td>
                  </tr>
                  <?php
                }
              }
              
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    
 </body>
 </html>

