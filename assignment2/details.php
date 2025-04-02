<?php
include( 'admin/includes/connection.php' );
include( 'admin/includes/config.php' );
include( 'admin/includes/functions.php' );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toronto Attractions | Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    
    <!-- <h1 class="mb-4">Toronto Attractions</h1> -->

    <nav class="navbar navbar-expand-sm bg-warning-subtle mb-4 p-4">
        <div class="container-fluid">
            <a class="navbar-brand " href="#">Toronto Attractions</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active  mx-3" href="index.php">Home</a>
                    <a class="nav-link  mx-3" href="./admin/index.php">Admin</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $query = "SELECT ac.*, ad.name AS name, ad.category FROM attractions_contact AS ac INNER JOIN attractions_description AS ad ON ad.id = ac.attraction_id WHERE ac.attraction_id=$id";
                    $result = mysqli_query($connect, $query);
                    $details = $result->fetch_assoc();
                }
                if ($details) {
                    echo '<div class="card shadow-lg border-0">';
                    if ($details['category'] === "Attraction"){
                        echo '  <div class="card-header bg-primary text-white text-center">';
                        echo '      <h2 class="fw-bold mb-0">' . ($details['name']) . '</h2>';
                        echo '  </div>';    
                    } elseif ($details['category']==="Landmark"){
                        echo '  <div class="card-header bg-info text-white text-center">';
                        echo '      <h2 class="fw-bold mb-0">' . ($details['name']) . '</h2>';
                        echo '  </div>';
                    } elseif ($details['category']==="Museum"){
                        echo '  <div class="card-header bg-warning text-white text-center">';
                        echo '      <h2 class="fw-bold mb-0">' . ($details['name']) . '</h2>';
                        echo '  </div>';
                    } elseif ($details['category']==="Nature/ Park"){
                        echo '  <div class="card-header bg-success text-white text-center">';
                        echo '      <h2 class="fw-bold mb-0">' . ($details['name']) . '</h2>';
                        echo '  </div>';
                    } else {
                        echo '  <div class="card-header bg-danger text-white text-center">';
                        echo '      <h2 class="fw-bold mb-0">' . ($details['name']) . '</h2>';
                        echo '  </div>';
                    }
                    echo '  <div class="card-body">';
                    echo '      <p class="card-text"><strong>Website:</strong> <a href="' . ($details['website']) . '" target="_blank">' . ($details['website']) . '</a></p>';
                    echo '      <p class="card-text"><strong>Address:</strong> ' . ($details['address']) . '</p>';
                    echo '      <p class="card-text"><strong>Phone:</strong> ' . ($details['phone']) . '</p>';
                    echo '      <p class="card-text"><strong>Postal Code:</strong> ' . ($details['postal_code']) . '</p>';
                    echo '      <p class="card-text"><strong>City:</strong> ' . ($details['city']) . '</p>';
                    echo '      <div class="row">';
                    include( 'admin/includes/map.php' );
                    echo '      </div>';
                    echo '     <a href="https://www.google.com/maps/dir/?api=1&destination=' . $details['Latitude'] . ',' . $details['Longitude'] . '" target="_blank" class="mt-3" style="color: blue;">Get Directions</a></p>';
                    echo '  </div>';
                    echo '  <div class="card-footer text-center">';
                    echo '      <a href="index.php" class="btn">Back to Home</a>';
                    echo '  </div>';
                    echo '</div>';
                } else {
                    echo '<div class="alert alert-danger text-center">Attraction details not found.</div>';
                }
                ?>
            </div>
        </div>
    </main>

<?php
include( 'admin/includes/footer.php' );
?>