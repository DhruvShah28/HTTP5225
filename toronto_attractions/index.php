<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
                    <h1 class="display-4">Attractions all over Toronto</h1>
                    <div class="row">
                        <?php
                            include('reusables/connection.php');
                            $query = "SELECT * FROM attractions_description";
                            $desc = mysqli_query($connect, $query);

                            foreach($desc as $d){
                                echo '<div class="col-md-4 my-2">
                                            <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">'. $d['name'] .'</h4>
                                                <p class="card-text">'. $d['description'] .'</p>
                                                
                                                <div class="card-subtitle mt-2 text-muted d-flex justify-content-between">
                                                <span>'. $d['category'] .'</span>
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