<?php
  include('includes/connection.php');
  include('includes/functions.php');

  if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])){
    $id = intval($_POST['id']);

    $query1 = "DELETE FROM attractions_description WHERE id = '$id'";
    $query2 = "DELETE FROM attractions_contact WHERE attraction_id = '$id'";

    $result1 = mysqli_query($connect, $query1);
    $result2 = mysqli_query($connect, $query2);

    if($result1 && $result2) {
    set_message('Attraction was deleted successfully!', 'danger');
    header('Location: index.php');
    exit();
} else {
    echo "Failed: " . mysqli_error($connect);
}

  }else{
    echo "Not Authorized";
  }