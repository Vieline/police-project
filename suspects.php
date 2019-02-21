<?php
require 'security.php'
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Suspects</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">

    <script src="bootstrap-4.2/js/jquery.min.js"></script>
    <script src="bootstrap-4.2/js/popper.min.js"></script>
    <script src="bootstrap-4.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
require 'navbar.php'; ?>

<div class="container">
    <table class="table">
        <thead>
        <tr>
            <td>ID</td>
            <td>NAMES</td>
            <td>IDENTITY</td>
            <td>GENDER</td>
            <td>DATE IN</td>
            <td>TYPE</td>
        </tr>
        </thead>

        <tbody>
           <!--<tr>
               <td>1</td>
               <td>John Mark</td>
               <td>789876</td>
               <td>Male</td>
               <td>2018-02-10</td>
               <td>Murder</td>
           </tr>-->

           <?php
           require 'db.php';
           $sql = "SELECT * FROM suspects";
           $results = mysqli_query($conn, $sql);
           while ($row = mysqli_fetch_assoc($results))
           {
               extract($row);
               echo "<tr>
               <td>$id</td>
               <td>$names</td>
               <td>$identity</td>
               <td>$gender</td>
               <td>$date</td>
               <td>$type</td>
           </tr>";
           }
           ?>
        </tbody>
    </table>
</div>
</body>
</html>