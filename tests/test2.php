<html>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<?php


$server = "localhost:3307";
$username = "root";
$password = "";
$db = "the_mobile_hour";
$connection = mysqli_connect($server, $username, $password, $db);

if (!$connection) {
    echo mysqli_connect_error();
} else {
    echo "Connection Success";
}





if (isset($_POST['btn'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
}
$sql = "INSERT INTO user (username)
    VALUES ('$username')";
mysqli_query($connection, $sql);


?>

<body>

    <form action="" method="post">
        Name: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        First Name: <input type="text" name="first_name"><br>
        Last Name: <input type="text" name="last_name"><br>
        <input type="submit" name="btn">
    </form>

    <div class="container">
        <div class="row">
                <div class="col-lg">

                <table class="table table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>Username</th>
      <th>First Name</th>
      <th>Last Name</th>
    </tr>
  </thead>
  <tbody>
  <?php

$sql_test = "SELECT * FROM user_tbl";
$result = mysqli_query($connection, $sql_test);

while($row = mysqli_fetch_assoc($result)) {
 $users = <<<DELIMETER
 <tr>
 <td>{$row['id']}</td>
 <td>{$row['username']}</td>
 <td>{$row['password']}</td>
 <td>{$row['firstname']}</td>
 <td>{$row['lastname']}</td>
</tr>
DELIMETER;
echo $users;
 // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
}
?>
</tbody>
</table>
                </div>
        </div>

    </div>

    


</body>

</html>