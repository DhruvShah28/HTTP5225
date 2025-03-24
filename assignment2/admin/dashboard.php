<?php
include( 'includes/connection.php' );
include( 'includes/config.php' );
include( 'includes/functions.php' );
include( 'includes/header.php' );

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
} else {
    $first = $_SESSION['first'];
}
?>

<?php

?>

<main class="container d-flex flex-column align-items-center p-4">
  <h1>Hi, <?php echo htmlspecialchars($first); ?>!</h1>
  

  <a href="index.php" class="list-group-item list-group-item-action list-group-item-success my-3 p-4 fs-4 dashboard-item">Manage Attractions</a>
  <a href="users.php" class="list-group-item list-group-item-action list-group-item-danger my-3 p-4 fs-4 dashboard-item">Manage Users</a>
</main>


<?php
include( 'includes/footer.php' );
?>
