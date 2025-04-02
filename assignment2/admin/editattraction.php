<?php 
    include ('includes/connection.php');

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
        $id = $_GET['id'];    
        $query = "SELECT * FROM attractions_description AS ad 
          INNER JOIN attractions_contact AS ac 
          ON ad.id = ac.attraction_id 
          WHERE ad.id = $id";
          
        $result = mysqli_query($connect, $query);
        
        if ($result->num_rows > 0) {
            $attraction = $result->fetch_assoc();
        } else {
            die("Attraction ID not found.");
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];
        $category = mysqli_real_escape_string($connect, $_POST['category']);
        $name = mysqli_real_escape_string($connect, $_POST['name']);
        $description = mysqli_real_escape_string($connect, $_POST['description']);
        $phone = mysqli_real_escape_string($connect, $_POST['phone']);
        $website = mysqli_real_escape_string($connect, $_POST['website']);
        $address = mysqli_real_escape_string($connect, $_POST['address']);
        $postal_code = mysqli_real_escape_string($connect, $_POST['postal_code']);
        $city = mysqli_real_escape_string($connect, $_POST['city']);
        $longitude = mysqli_real_escape_string($connect, $_POST['Longitude']); 
        $latitude = mysqli_real_escape_string($connect, $_POST['Latitude']); 

        $query1 = "UPDATE attractions_description SET 
            category='$category', 
            `name`='$name', 
            `description`='$description' 
            WHERE id=$id";

            $result1 = mysqli_query($connect, $query1);

            if ($result1) {
                $query2 = "UPDATE attractions_contact SET 
                            phone='$phone', 
                            website='$website', 
                            `address`='$address', 
                            postal_code='$postal_code', 
                            city='$city', 
                            Longitude='$longitude', 
                            Latitude='$latitude' 
                            WHERE attraction_id=$id";

                $result2 = mysqli_query($connect, $query2);

                if ($result2) {
                    header("Location: index.php");  
                    exit();
                } else {
                    echo "Failed to update attractions_contact: " . mysqli_error($connect);
                }
            } else {
                echo "Failed to update attractions_description: " . mysqli_error($connect);
            }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Attraction</title>
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
    <div class="card editform">
    <?php if (isset($_GET['error'])): ?>
        <div class="alert alert-danger text-center">
            <?= htmlspecialchars($_GET['error']) ?>
        </div>
    <?php endif; ?>
    <h1 class="text-center mb-4">Edit Attraction</h1>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $attraction['attraction_id']; ?>">
        <fieldset>
        <legend >Description Details</legend>
        <div >
            <label class="form-label">Category</label>
            <select name="category" id="category" class="form-control">
                <option value="XX" disabled selected>Select an Option</option>
                <option value="Landmark">Landmark</option>
                <option value="Museum">Museum</option>
                <option value="Nature/ Park">Nature / Park</option>
                <option value="Attraction">Attraction</option>
                <option value="Garden / Conservatory">Garden / Conservatory</option>
            </select>
        </div>
        <div >
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo htmlspecialchars($attraction['name']); ?>" value="<?php echo htmlspecialchars($attraction['name']); ?>">
        </div>
        <div >
            <label class="form-label">Description</label>
            <textarea name="description"  class="form-control" value=""><?php echo htmlspecialchars($attraction['description']); ?></textarea>
        </div>
        </fieldset>
        
        <fieldset>
        <legend>Contact Details</legend>
        <div >
            <label class="form-label">Website</label>
            <input type="url" name="website"  class="form-control" value="<?php echo htmlspecialchars($attraction['website']); ?>" >
        </div>
        <div >
            <label class="form-label">Address</label>
            <input type="text" name="address" class="form-control" value="<?php echo htmlspecialchars($attraction['address']); ?>" >
        </div>
        <div >
            <label class="form-label">Phone</label>
            <input type="tel" name="phone" class="form-control" value="<?php echo htmlspecialchars($attraction['phone']); ?>" >
        </div>
        <div >
            <label class="form-label">Postal Code</label>
            <input type="text" name="postal_code" class="form-control" value="<?php echo htmlspecialchars($attraction['postal_code']); ?>" >
        </div>
        <div >
            <label class="form-label">City</label>
            <input type="text" name="city" class="form-control" value="<?php echo htmlspecialchars($attraction['city']); ?>" >
        </div>
        <div >
            <label class="form-label">Longitude</label>
            <input type="text" name="Longitude" class="form-control" value="<?php echo htmlspecialchars($attraction['Longitude']); ?>" >
        </div>
        <div >
            <label class="form-label">Latitude</label>
            <input type="text" name="Latitude" class="form-control" value="<?php echo htmlspecialchars($attraction['Latitude']); ?>" >
        </div>
        </fieldset>
        
        <div class="d-flexd-flex btns gap-2">
        <button type="submit" class="btn edit-btn">Edit</button>
        <button type="button" class="btn cancel-btn" onclick="window.location.href='index.php';">Cancel</button>
        </div>
    </form>
<!-- Bootstrap CDN JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYBBdMx3m8bzzp3f5f5rhzT9g8FF93zX2Q3EzI3BeFf4hK51/ZzJvB3J9" crossorigin="anonymous"></script>
</body>
</html>