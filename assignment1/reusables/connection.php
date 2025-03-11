<?php 
        $connect = mysqli_connect(
            'localhost',
            'u384574077_dhruv',
            'Shruti28$',
            'u384574077_phpdhruva1'
        );

        if(!$connect){
            echo 'Error Code: ' . mysqli_connect_errno();
            echo 'Error Message: ' . mysqli_connect_error();
            exit;
        }
?>