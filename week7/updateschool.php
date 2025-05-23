<?php
$schoolID = $_GET['id'];
include('reusables/connection.php');
$query = "SELECT * FROM schools WHERE `Board No` = '$schoolID'";
$school = mysqli_query($connect,$query);
$result = $school -> fetch_assoc();

echo $result['Board'];
if(isset($_POST['updateSchool'])){
  $boardname = $_POST['boardname'];
  $language = $_POST['language'];
  $schooltype = $_POST['schooltype'];

  include('reusables/connection.php');
   $query = "UPDATE schools 
   SET `Board` = $boardname,
       `Language` = $language,
       `School Type` = $schooltype
    WHERE `Board No` = $schoolID
   ";
  $school = mysqli_query($connect,$query);
  if($school){
    echo 'school added successfully';
  }else{
    echo 'There is an Error'. mysqli_error();
  }

  
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ontario Public Schools</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Ontario Public Schools</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add.php">Add A School</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="display-4 mt-5 mb-5">Update</h1>
        </div>
      </div>
    </div>
  </div>
  
  <?php 
      
  ?>

  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <form action="updateschool.php" method="POST">
            <input type="hidden" name = "" value = "">
            <div class="mb-3">
              <label for="boardname" class="form-label">Board Name</label>
              <input type="text" class="form-control" name="boardname" id="boardname" aria-describedby="boardname" 
              value="<?php echo $result['Board'] ?>">
            </div>

            <div class="mb-3">
              <label for="language" class="form-label">Language</label>
              <input type="text" class="form-control" name="language" id="language" aria-describedby="language"
              value="<?php echo $result['Language'] ?>">
            </div>

            <div class="mb-3">
              <label for="schooltype" class="form-label">School Type</label>
              <input type="text" class="form-control" name="schooltype" id="schooltype" aria-describedby="schooltype"
              value="<?php echo $result['School Type']?>">
            </div>
            <button type="submit" class="btn btn-primary" name="updateSchool">Update School</button>
          </form>
        </div>
      </div>
    </div>
  </div>


</body>
</html>