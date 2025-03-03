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
    <main>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <?php 
                        $gameID = $_GET['gameID'];
                        include('reusables/connection.php');
                        $query = "SELECT g.title FROM reviews AS r INNER JOIN games AS g ON r.game_id = g.id WHERE r.game_id = '$gameID'";
                        $gamename = mysqli_query($connect, $query);
                        $result = $gamename -> fetch_assoc();

                        echo '<h1 class="display-4">Reviews for '. $result['title'] .'</h1>';
                    ?>
                    <div class="row">
                    <?php 
                        $gameID = $_GET['gameID'];
                        include('reusables/connection.php');
                        $query = "SELECT * FROM reviews WHERE `game_id` = '$gameID'";
                        $reviews = mysqli_query($connect, $query);

                        foreach($reviews as $r){

                            if ($r['rating'] < 3) {
                                $check = "list-group-item-danger";
                            } elseif ($r['rating'] > 3) {
                                $check = "list-group-item-success";
                            } else {
                                $check = "list-group-item-secondary";
                            }

                            echo '<div class="col-md-12 mylist">
                                    <ul class="list-group">
                                        <li class="list-group-item '. $check .'">
                                            <div>
                                                <h3 class="mb-1">'. $r['player_name'] .'</h3>
                                                <h4 class="mb-1">Review: '. $r['review_text'] .'</h4>
                                                <p>Rating: '. $r['rating'] .'</p>
                                            </div>
                                        </li>

                                    </ul>    
                                </div>';
                            }
                        ?>
                    </div>
            </div>
        </div>
    </div>
    </main>
    <?php include('reusables/footer.php'); ?>
</body>
</html>