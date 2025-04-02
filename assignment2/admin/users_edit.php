<?php
include( 'includes/connection.php' );
include( 'includes/config.php' );
include( 'includes/functions.php' );
secure();

if( !isset( $_GET['id'] ) )
{  
  header( 'Location: users.php' );
  die();  
}

if( isset( $_POST['first'] ) )
{  
  if( $_POST['first'] and $_POST['last'] and $_POST['email'] )
  {    
    $query = 'UPDATE users SET
      first = "'.mysqli_real_escape_string( $connect, $_POST['first'] ).'",
      last = "'.mysqli_real_escape_string( $connect, $_POST['last'] ).'",
      email = "'.mysqli_real_escape_string( $connect, $_POST['email'] ).'",
      active = "'.$_POST['active'].'"
      WHERE id = '.$_GET['id'].'
      LIMIT 1';
    mysqli_query( $connect, $query );
    
    if( $_POST['password'] )
    {      
      $query = 'UPDATE users SET
        password = "'.md5( $_POST['password'] ).'"
        WHERE id = '.$_GET['id'].'
        LIMIT 1';
      mysqli_query( $connect, $query );      
    }

    set_message( 'User has been updated' );    
  }
  header( 'Location: users.php' );
  die();  
}

include( 'includes/header.php' );

if( isset( $_GET['id'] ) )
{  
  $query = 'SELECT *
    FROM users
    WHERE id = '.$_GET['id'].'
    LIMIT 1';
  $result = mysqli_query( $connect, $query );  
  if( !mysqli_num_rows( $result ) )
  {    
    header( 'Location: users.php' );
    die();    
  }  
  $record = mysqli_fetch_assoc( $result );  
}
?>

<main class="container p-3">
  <h1 class="mb-4">Edit User</h1>

  <form method="post">
    <div class="mb-3">
      <label for="first" class="form-label">First Name</label>
      <input type="text" class="form-control" name="first" id="first" value="<?php echo htmlentities( $record['first'] ); ?>">
    </div>
    <div class="mb-3">
      <label for="last" class="form-label">Last Name</label>
      <input type="text" class="form-control" name="last" id="last" value="<?php echo htmlentities( $record['last'] ); ?>">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email Address</label>
      <input type="email" class="form-control" name="email" id="email" value="<?php echo htmlentities( $record['email'] ); ?>">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" id="password">
    </div>
    <div class="mb-3">
      <label for="active" class="form-label">Active</label>
      <select  class="form-control" name="active" id="active">
      <?php
      $values = array( 'Yes', 'No' );
      foreach( $values as $key => $value )
      {
        echo '<option value="'.$value.'"';
        if( $value == $record['active'] ) echo ' selected="selected"';
        echo '>'.$value.'</option>';
      }
      ?>
      </select>
      <div class="d-flexd-flex btns gap-2">
      <button type="submit" class="btn edit-btn" value="Edit User">Edit</button>
      <a href="users.php" class="btn cancel-btn">Cancel</a>
    </div>
  </form>
</main>

<?php
include( 'includes/footer.php' );
?>