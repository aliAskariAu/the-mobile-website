<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
<?php include "../model/connection.php";
?>
<?php
$sql = "SELECT * FROM product ORDER BY product_id";
$statement = $conn->prepare($sql);
$statement->execute();
$result = $statement->fetchAll();
$statement->closeCursor();



?>

                    <div class="col-12 justify-content-around">
                    <div class="row">
          <?php
          foreach($result as $row):
           $product_list = <<<HTML
                        <div class="col-lg-4 col-md-3 col-sm-6">
                           <img src="{$row['image']}" alt="">
                         </div>  
HTML;
          echo $product_list;
endforeach;

?>
                        </div>
                    </div>







</body>
</html>