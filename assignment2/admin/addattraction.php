<?php
    include ('includes/connection.php');
    $query = 'SELECT * FROM attractions_description AS ad INNER JOIN attractions_contact AS ac ON ad.id = ac.attraction_id ';
    $attraction = mysqli_query($connect, $query);

  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $category = $_POST['category'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $phone = $_POST['phone'];
    $website = $_POST['website'];
    $address = $_POST['address'];
    $postal_code = $_POST['postal_code'];
    $city = $_POST['city'];
    $longitute = $_POST['Longitute'];
    $latitude = $_POST['Latitude'];
    
    $query1 = "INSERT INTO attractions_description (category, `name`, `description`) 
               VALUES ('$category', '$name', '$description')";
    $result1 = mysqli_query($connect, $query1);

    if ($result1) {
        $attraction_id = mysqli_insert_id($connect);

        $query2 = "INSERT INTO attractions_contact (attraction_id, phone, website, `address`, postal_code, city, Longitude, Latitude)  
                   VALUES ('$attraction_id', '$phone', '$website', '$address', '$postal_code', '$city', '$longitude', '$latitude')";
        
        $result2 = mysqli_query($connect, $query2);

        if ($result2) {
            header("Location: index.php");  
            exit();
        } else {
            echo "Failed to insert into attractions_contact: " . mysqli_error($connect);
        }
    } else {
        echo "Failed to insert into attractions_description: " . mysqli_error($connect);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Attraction</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="dashboard.php">Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link" href="logout.php">Logout</a>
          </div>
        </div>
    </div>
  </nav>
 
<div class="container d-flex justify-content-center align-items-center my-5">
<div class="card addform">    
<?php if (isset($_GET['error'])): ?>
        <div class="alert alert-danger text-center">
            <?= htmlspecialchars($_GET['error']) ?>
        </div>
    <?php endif; ?>
    <h1 class="text-center mb-4">Add Attraction</h1>
    <form action="addattraction.php" method="POST">
        <fieldset >
        <legend >Description Details</legend>
        <div >
            <label class="form-label">Category</label>
            <select name="category" id="category" class="form-control" >
                <option value="XX" disabled selected>Select an Option</option>
                <option value="Landmark">Landmark</option>
                <option value="Museum">Museum</option>
                <option value="NP">Nature/ Park</option>
                <option value="Attraction">Attraction</option>
                <option value="GC">Garden / Conservatory</option>
            </select>
        </div>
        <div >
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" />
        </div>
        <div >
            <label class="form-label">Description</label>
            <textarea name="description"  class="form-control"></textarea>
        </div>
        </fieldset>
        
        <fieldset>
        <legend >Contact Details</legend>
        <div >
            <label class="form-label">Website</label>
            <input type="url" name="website"  class="form-control" />
        </div>
        <div >
            <label>Address</label>
            <input type="text" name="address" class="form-control" />
        </div>
        <div >
            <label class="form-label">Phone</label>
            <input type="tel" name="phone" class="form-control" />
        </div>
        <div >
            <label class="form-label">Postal Code</label>
            <input type="text" name="postalCode" class="form-control" />
        </div>
        <div >
            <label class="form-label">City</label>
            <input type="text" name="city" class="form-control" />
        </div>
        <div >
            <label class="form-label">Longitude</label>
            <input type="text" name="longitude" class="form-control" />
        </div>
        <div >
            <label class="form-label">Latitude</label>
            <input type="text" name="latitude" class="form-control" />
        </div>
        </fieldset>
        
        <div class="d-flexd-flex btns gap-2">
        <button type="submit" class="btn add-btn">Add</button>
        <button type="button" class="btn cancel-btn" onclick="window.location.href='index.php';">Cancel</button>
        </div>
    </form>
<!-- Bootstrap CDN JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYBBdMx3m8bzzp3f5f5rhzT9g8FF93zX2Q3EzI3BeFf4hK51/ZzJvB3J9" crossorigin="anonymous"></script>
</body>
</html>