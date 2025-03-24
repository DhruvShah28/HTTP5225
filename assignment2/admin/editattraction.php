<?php 
    include ('includes/connection.php');

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
        $id = $_GET['id'];    
        $query = 'SELECT * FROM attractions_description AS ad INNER JOIN attractions_contact AS ac ON ad.id = ac.attraction_id';
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
            WHERE attraction_id=$id";

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
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-info-subtle bg-body-tertiary mb-4 p-4">
    <div class="container-fluid">
        <a class="navbar-brand fs-1 text-dark" href="dashboard.php">Website Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link fs-3 text-dark mx-3" href="logout.php">Logout</a>
          </div>
        </div>
    </div>
  </nav>
 
<div className="container d-flex justify-content-center align-items-center my-5">
    <div className="card p-4 shadow-lg border-0 rounded-3">
    <?php if (isset($_GET['error'])): ?>
        <div class="alert alert-danger text-center">
            <?= htmlspecialchars($_GET['error']) ?>
        </div>
    <?php endif; ?>
    <h2 className="text-center mb-4">Edit Attraction</h2>
    <form action="addattraction.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $attraction['attraction_id']; ?>">
        <fieldset className="border p-3 mb-3">
        <legend className="fw-bold">Description Details</legend>
        <div className="mb-3">
            <label className="form-label">Category</label>
            <select name="category" id="category">
                <option value="XX" disabled selected>Select an Option</option>
                <option value="Landmark">Landmark</option>
                <option value="Museum">Museum</option>
                <option value="NP">Nature/ Park</option>
                <option value="Attraction">Attraction</option>
                <option value="GC">Garden / Conservatory</option>
            </select>
        </div>
        <div className="mb-3">
            <label className="form-label">Name</label>
            <input type="text" name="name" className="form-control" value="<?php echo htmlspecialchars($attraction['name']); ?>" value="<?php echo htmlspecialchars($attraction['name']); ?>">
        </div>
        <div className="mb-3">
            <label className="form-label">Description</label>
            <textarea name="description"  className="form-control" value=""><?php echo htmlspecialchars($attraction['description']); ?></textarea>
        </div>
        </fieldset>
        
        <fieldset className="border p-3 mb-3">
        <legend className="fw-bold">Contact Details</legend>
        <div className="mb-3">
            <label className="form-label">Website</label>
            <input type="url" name="website"  className="form-control" value="<?php echo htmlspecialchars($attraction['website']); ?>" >
        </div>
        <div className="mb-3">
            <label className="form-label">Address</label>
            <input type="text" name="address" className="form-control" value="<?php echo htmlspecialchars($attraction['address']); ?>" >
        </div>
        <div className="mb-3">
            <label className="form-label">Phone</label>
            <input type="tel" name="phone" className="form-control" value="<?php echo htmlspecialchars($attraction['phone']); ?>" >
        </div>
        <div className="mb-3">
            <label className="form-label">Postal Code</label>
            <input type="text" name="postalCode" className="form-control" value="<?php echo htmlspecialchars($attraction['postal_code']); ?>" >
        </div>
        <div className="mb-3">
            <label className="form-label">City</label>
            <input type="text" name="city" className="form-control" value="<?php echo htmlspecialchars($attraction['city']); ?>" >
        </div>
        <div className="mb-3">
            <label className="form-label">Longitude</label>
            <input type="text" name="longitude" className="form-control" value="<?php echo htmlspecialchars($attraction['Longitude']); ?>" >
        </div>
        <div className="mb-3">
            <label className="form-label">Latitude</label>
            <input type="text" name="latitude" className="form-control" value="<?php echo htmlspecialchars($attraction['Latitude']); ?>" >
        </div>
        </fieldset>
        
        <div className="d-flex justify-content-between">
        <button type="submit" className="btn btn-primary w-50">Add</button>
        <button type="button" className="btn btn-secondary w-45">Cancel</button>
        </div>
    </form>
<!-- Bootstrap CDN JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYBBdMx3m8bzzp3f5f5rhzT9g8FF93zX2Q3EzI3BeFf4hK51/ZzJvB3J9" crossorigin="anonymous"></script>
</body>
</html>