<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>week - 4</title>
</head>
<body>
<?php
// Function to fetch user data from the JSONPlaceholder API
    function getUsers() {
        $url = "https://jsonplaceholder.typicode.com/users";
        $data = file_get_contents($url);
        return json_decode($data, true);
    }
    // Get the list of users
    $users = getUsers();
    
    for($i=0; $i<count($users); $i++){
        echo '<strong>Name:</strong> ' .$users[$i]['name']. '<br>';
        echo '<strong>Username:</strong> ' .$users[$i]['username']. '<br>';
        echo '<strong>email:</strong> <a href="'.$users[$i]['email'].'">' .$users[$i]['email']. '</a><br>';
        echo '<strong>Address:</strong> ' .$users[$i]['address']['suite'];
        echo ', ' .$users[$i]['address']['street'];
        echo ', ' .$users[$i]['address']['city'];
        echo ', ' .$users[$i]['address']['zipcode']. '<br>';
        echo "Google Maps Link: <a href='https://maps.google.com/?q=" .$users[$i]['address']['geo']['lat']. "," .$users[$i]['address']['geo']['lng']. "'> Click Here! </a> <br>";
        echo 'Google Maps Link: <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d7429864.670612343!2d77.75191249137288!3d-36.8774113332183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzfCsDE4JzU3LjIiUyA4McKwMDgnNTguNiJF!5e0!3m2!1sen!2sca!4v1738704720667!5m2!1sen!2sca" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> </a> <br>';
        
        echo '<br>';
    }
?>
</body>
</html>