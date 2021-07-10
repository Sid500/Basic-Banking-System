<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body style="background-color : #ececec;">

<?php
  include 'navbar.php';
?>

	<div class="container">
    <div class="content">
           <h1 class="heading">
            <span>H</span>
            <span>I</span>
            <span>S</span>
            <span>T</span>
            <span>O</span>
            <span>R</span>
            <span>Y</span>
           
            
            </h1>

            
        </div>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-info table-bordered">
        <thead style="color : black;">
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="SELECT * FROM transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color : white;">
            <td class="py-2" style="color : black;"><?php echo $rows['sno']; ?></td>
            <td class="py-2" style="color : black;"><?php echo $rows['sender']; ?></td>
            <td class="py-2" style="color : black;"><?php echo $rows['receiver']; ?></td>
            <td class="py-2" style="color : black;">Rs. <?php echo $rows['balance']; ?> /-</td>
            <td class="py-2" style="color : black;"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<footer class="text-center mt-5 py-2">
            <p>&copy 2021 Made by <b>Siddhant Patil</b></p>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>