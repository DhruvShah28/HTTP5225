<?php
  include('reusables/connection.php');

  $attraction = $connect->query("SELECT * FROM attractions_description");
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $desc = $_POST['description'];
    
// add a foreign key pls in contact table that links to description table.
// there will be one form that will add details for description and contact information. so there will be two fieldsets and one will be for adding details for description
// and one will be for adding details of contact.
// we have to figure out how we are going to add details directly for two tables.
    $query = "INSERT INTO movies (name, category, description) 
            VALUES ('$name', '$category', '$desc')";
    $result = mysqli_query($connect, $query);
    if ($result) {
        echo "Movie added successfully.";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap CDN CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>

<body>
  
    <?php 
        include('connection.php');
        $query = 'SELECT * FROM movies';
        $movies = mysqli_query($connect, $query);
    ?>

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow-lg border-0 rounded-3" style="max-width: 400px; width: 100%;">
            <h2 class="text-center mb-4">Add Movie</h2>

            <?php if (isset($_GET['error'])): ?>
                <div class="alert alert-danger text-center">
                    <?= htmlspecialchars($_GET['error']) ?>
                </div>
            <?php endif; ?>

            <form action="adddescription.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="desc" class="form-label">Description:</label>
                    <input type="text" name="desc" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="studio_id" class="form-label">Select Studio</label>
                    <select name="studio_id" required class="form-control">
                        <?php while ($studio = $studios->fetch_assoc()) : ?>
                            <option value="<?= $studio['id'] ?>"><?= $studio['studio_name'] ?></option>
                        <?php endwhile; ?>
                    </select>
               </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Upload Image:</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary w-50">Add</button>
                    <a href="admin.php" class="btn btn-secondary w-45">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap CDN JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYBBdMx3m8bzzp3f5f5rhzT9g8FF93zX2Q3EzI3BeFf4hK51/ZzJvB3J9" crossorigin="anonymous"></script>
</body>
</html>