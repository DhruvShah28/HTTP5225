<?php
include( 'includes/connection.php' );
include( 'includes/config.php' );
include( 'includes/functions.php' );
secure();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attractions Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./script.js"></script>
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
            <a class="nav-link fs-3 text-dark mx-3" href="addattraction.php">Add Attraction</a>
            <a class="nav-link fs-3 text-dark mx-3" href="logout.php">Logout</a>
          </div>
        </div>
    </div>
  </nav>
 
    <main class="container-fluid d-flex justify-content-center">

        <div class="row row-cols-1 row-cols-md-4 g-4">
        
        <?php
        $query = "SELECT * FROM `attractions_description`";
        $attractions = mysqli_query($connect, $query);
        foreach($attractions as $attraction){
            echo '<div class="col">
                <div class="card h-100">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->';

                    if ($attraction['category'] === "Attraction"){
                        echo '<div class="card-header text-bg-primary">'.$attraction['category'].'</div>';
                    } elseif ($attraction['category']==="Landmark"){
                        echo '<div class="card-header text-bg-info">'.$attraction['category'].'</div>';
                    } elseif ($attraction['category']==="Museum"){
                        echo '<div class="card-header text-bg-warning">'.$attraction['category'].'</div>';
                    } elseif ($attraction['category']==="Nature/ Park"){
                        echo '<div class="card-header text-bg-success">'.$attraction['category'].'</div>';
                    } else {
                        echo '<div class="card-header text-bg-danger">'.$attraction['category'].'</div>';
                    } 
                    echo '<div class="card-body">
                        <h5 class="card-title">'.$attraction['name'].'</h5>
                        <p class="card-text">'.$attraction['description'].'</p>
                        <div class="d-flex btns gap-3">
                            <form action="details.php" method="GET">
                                <input type="hidden" name="id" value="' . $attraction['id'] . '">
                                <button type="submit" class="btn btn-sm btn-primary mt-3">More Details</button>
                            </form>
                            <form action="editattraction.php" method="GET">
                                <input type="hidden" name="id" value="' . $attraction['id'] . '">
                                <button type="submit" class="btn btn-sm btn-primary mt-3">Edit</button>
                            </form>
                            <button type="button" class="btn btn-danger delete-btn" 
                                        data-id=" '. htmlspecialchars($attraction['id']) .'" 
                                        data-name=" '. htmlspecialchars($attraction['name']) .'" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#deleteModal">
                                    Delete
                            </button>

                        </div>
                    </div>
                </div>
            </div>';
        }
        ?>
        </div>
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete "<strong id="attraction_name"></strong>"?</p>
                    </div>
                    <div class="modal-footer">
                    <form id="deleteForm" method="POST" action="deleteattraction.php">
                        <input type="hidden" name="id" id="attraction_id">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php
include( 'includes/footer.php' );
?>