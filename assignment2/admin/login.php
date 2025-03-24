<?php
include( 'includes/connection.php' );
include( 'includes/config.php' );
include( 'includes/functions.php' );
include( 'includes/header.php' );

if( isset( $_POST['email'] ) )
{  
  $query = 'SELECT *
    FROM users
    WHERE email = "'.$_POST['email'].'"
    AND password = "'.md5( $_POST['password'] ).'"
    AND active = "Yes"
    LIMIT 1';
  $result = mysqli_query( $connect, $query ); // a result set (like a table of data)
  
  if( mysqli_num_rows( $result ) ) // counts the number of row
  {   
    $record = mysqli_fetch_assoc( $result ); // change to array
    
    // security
    $_SESSION['id'] = $record['id'];
    $_SESSION['email'] = $record['email'];
    $_SESSION['first'] = $record['first'];
    
    header( 'Location: dashboard.php' );
    die();    
  }
  else
  {    
    set_message( 'Incorrect email and/or password' );
    header( 'Location: login.php' );
    die();    
  }   
}
?>

<main class="container d-flex justify-content-center p-5 m-5">
  <form method="post">
    <div class="mb-3">
      <label for="email" class="form-label">Email:</label>
      <input type="email" class="form-control" name="email" id="email">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password:</label>
      <input type="password" class="form-control" name="password" id="password">
    </div>
    <input type="submit" class="btn btn-primary" value="Login">
  </form>
</main>
  
<?php
include( 'includes/footer.php' );
?>