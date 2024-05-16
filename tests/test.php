<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Shop all Products || The Mobile Hour</title>
  </head>
  <?php


$server = "localhost";
$username = "root";
$password = "";
$db = "the_mobile_hour";
$connection = mysqli_connect($server, $username, $password, $db);

if (!$connection) {
    echo mysqli_connect_error();
} else {
    echo "Connection Success";
}


include_once("connection.php");

if (isset($_POST['btn'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
}

$sql = "INSERT INTO user (firstname,lastname, user_role,username,user_password)
    VALUES ('$first_name', '$last_name','$user_role','$username','$user_password')";

  mysqli_query($connection, $sql);


?>
<!--INSERT INTO and VALUES need to match (in correct order also)-->

  <body>
    
 <form action="" method="post">
        Name: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        First Name: <input type="text" name="first_name"><br>
        Last Name: <input type="text" name="last_name"><br>
        <input type="submit" name="btn">
    </form>



    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
