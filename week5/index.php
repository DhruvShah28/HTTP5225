<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 5</title>
</head>
<body>
    <?php
        $connect = mysqli_connect('localhost', 'root', '', 'http5225');
        $query = "SELECT * FROM colors";
        $colors = mysqli_query($connect, $query);

        if(!$connect){
            die("Connection Failed: ". mysqli_connect_error());
        }

        //to test if it has conected to your colors
        //echo '<pre> '.print_r($colors).'  </pre>'

        while($record = mysqli_fetch_assoc($colors)){
            // echo '<span>';
            // print_r($record);
            // echo '</span>';
            echo '<div style="
                    width:100%;
                    height:100px;
                    font-size:28px;
                    text-align:center;
                    align-content:center;
                    background-color: '.$record['Hex'].';">'.$record['Name'].'</div>
                <hr>';

        
    }

    ?>
</body>
</html>