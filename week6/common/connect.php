<?php
// change localhost to the one that your hosting service has provided
$connect = mysqli_connect('localhost', 'root', '', 'http5225');
        // not madatory but helpful to see if the connection is not working
        if(!$connect){
          echo 'ERROR CODE: '. mysqli_connect_errno();
          echo 'ERROR Message: '. mysqli_connect_error();
          die();
        }