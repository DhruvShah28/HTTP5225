<?php 
        $connect = mysqli_connect(
            'localhost',
            'root',
            '',
            'attractions'
        );

        if(!$connect){
            echo 'Error Code: ' . mysqli_connect_errno();
            echo 'Error Message: ' . mysqli_connect_error();
            exit;
        }
?>