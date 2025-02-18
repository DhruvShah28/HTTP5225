<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php
  include('common/nav.php');
?>

<!--  -->

<div class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="display-5">All Schooooooooooools</h1>
      </div>
    </div>
    <div class="row">
      <?php 
        include('common/connect.php');
       
        $query = 'SELECT * FROM schools';
        $schools = mysqli_query($connect, $query);

        foreach ($schools as $school) {
          // echo "wow";
          echo '<div class="col-md-4 my-1">
                <div class="card" style="">
                  <div class="card-body">
                    <h5 class="card-title">'. $school["Board"] .'</h5>
                      <span class="badge bg-primary">' . $school['School Type'] .'</span>
                      <span class="badge bg-success">' . $school['Language'] .'</span>
                  </div>
                </div>

                </div>';
        }
      ?>
    </div>
  </div>
</div>
</body>
</html>