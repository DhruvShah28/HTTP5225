<?php
include( 'includes/connection.php' );
include( 'includes/config.php' );
include( 'includes/functions.php' );
secure();

if( isset( $_POST['first'] ) )
{  
  if( $_POST['first'] and $_POST['last'] and $_POST['email'] and $_POST['password'] )
  {    
    $query = 'INSERT INTO users (
        first,
        last,
        email,
        password,
        active
      ) VALUES (
        "'.mysqli_real_escape_string( $connect, $_POST['first'] ).'",
        "'.mysqli_real_escape_string( $connect, $_POST['last'] ).'",
        "'.mysqli_real_escape_string( $connect, $_POST['email'] ).'",
        "'.md5( $_POST['password'] ).'",
        "'.$_POST['active'].'"
      )';
    mysqli_query( $connect, $query );    
    set_message( 'User has been added' );    
  }
  header( 'Location: users.php' );
  die();  
}
include( 'includes/header.php' );
?>

<main class="container-fluid p-3">
  <h1 class="mb-4">Add User</h1>

  <form method="post">
    <div class="mb-3">
      <label for="first" class="form-label">First Name:</label>
      <input type="text" class="form-control" name="first" id="first">
    </div>
    <div class="mb-3">
      <label for="last" class="form-label">Last Name:</label>
      <input type="text" class="form-control" name="last" id="last">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email:</label>
      <input type="email" class="form-control" name="email" id="email">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password:</label>
      <input type="password" class="form-control" name="password" id="password">
    </div>
    <div class="mb-3">
      <label for="active" class="form-label">Active:</label>
      <select class="form-select" name="active" id="active">
      <?php
      $values = array( 'Yes', 'No' );
      foreach( $values as $key => $value )
      {
        echo '<option value="'.$value.'"';
        echo '>'.$value.'</option>';
      }
      ?>
      </select>
    </div>
    <input type="submit" class="btn btn-success mb-4" value="Add User">
  </form>

  <div><a href="users.php" class="btn btn-danger">Return to User List</a></div>
</main>

<?php
include( 'includes/footer.php' );
?>