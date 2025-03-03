<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Games</title>
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <header>
        <?php include('reusables/nav.php'); ?>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <main>
                    <h1 class="display-4">Top 10 Games all over the world</h1>
                    <p class="lead">Check Reviews for each game here</p>
                    <div class="row">
                        <?php
                            include('reusables/connection.php');
                            $query = "SELECT * FROM games";
                            $games = mysqli_query($connect, $query);

                            foreach($games as $g){
                                echo '<div class="col-md-4 my-2">
                                            <div class="card">
                                            <img src="images/'. $g['cover_image'] .'" class="card-image" alt="'. $g['title'] .'">
                                            <div class="card-body">
                                                <h4 class="card-title">'. $g['title'] .'</h4>
                                                <h5 class="card-subtitle mb-2 text-muted">'. $g['genre'] .'</h5>
                                                <p class="card-text">'. $g['description'] .'</p>
                                                <form action="reviews.php" method="GET">
                                                <input type="hidden" name="gameID" value= '. $g['id'] .'>
                                                <button type="submit" class="btn btn-primary">View Reviews</button>
                                                </form>
                                                <div class="card-subtitle mt-2 text-muted d-flex justify-content-between">
                                                <span>Released on: '. $g['release_date'] .'</span>
                                                <span>$'. $g['price'] .'</span>
                                                </div>
                                            </div>
                                            </div>
                                        </div>';
                            }
                        ?>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <div class="row">
            
            
        </div>
    <?php include('reusables/footer.php'); ?>
</body>
</html>