<?php
include( 'includes/connection.php' );
include( 'includes/config.php' );
include( 'includes/functions.php' );
secure();

if( isset( $_GET['delete'] ) )
{  
  $query = 'DELETE FROM users
    WHERE id = '.$_GET['delete'].'
    LIMIT 1';
  mysqli_query( $connect, $query );
  set_message( 'User has been deleted' );  
  header( 'Location: users.php' );
  die();  
}

include( 'includes/header.php' );
$query = 'SELECT * FROM users ORDER BY ID;';
$result = mysqli_query( $connect, $query );
?>

<main class="container p-4">
  <h1 class="mb-4">Manage Users</h1>

  <div><a href="users_add.php" class="btn add-btn">Add User</a></div>

  <div class="table-responsive mx-4">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Active</th>
      </tr>
    </thead>
    <tbody>
      <?php while( $record = mysqli_fetch_assoc( $result ) ): ?>
      <tr>
        <th scope="row"><?php echo $record['id']; ?></th>
        <td><?php echo htmlentities( $record['first'] ); ?> <?php echo htmlentities( $record['last'] ); ?></td>
        <td><a href="mailto:<?php echo htmlentities( $record['email'] ); ?>"><?php echo htmlentities( $record['email'] ); ?></a></td>
        <td><?php echo $record['active']; ?></td>

        <td><a class="btn edit-btn" href="users_edit.php?id=<?php echo $record['id']; ?>">Edit</a></td>

        <td>
          <?php if( $_SESSION['id'] != $record['id'] ): ?>
            <a class="btn delete-btn" href="users.php?delete=<?php echo $record['id']; ?>" onclick="javascript:confirm('Are you sure you want to delete this user?');">Delete</a>
          <?php endif; ?>
        </td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
  </div>


</main>

<?php
include( 'includes/footer.php' );
?>