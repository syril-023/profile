<?php
include 'config.php';
session_start();
ob_start();
$username=$_SESSION['u'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>User Details</title>
    <style>
        .container{
            display: b;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Welcome <?php echo $username; ?></h1>
        <h1 class="text-center">User Details</h1>
        <div class="row">
            <div class="col-md-12 text-center">
                <table class="table table-dark table-stripped">
                 <thead>
                 <tr>
                        <th>S.no.</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>DOB</th>
                        <th>Created By</th>
                        <th>Created On</th>
                    </tr>
                 </thead>  
                <tbody>
                    
                <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="js/bootstrap.bundle.min.js"></script>
</html>
<?php

?>