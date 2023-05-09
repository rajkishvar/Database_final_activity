<?php 
    require('local_settings.php');
    error_reporting(0);
    $conn = mysqli_connect("localhost","root","","dadelahi_db2");
    if(count($_POST)>0) {
    $ORIGIN=$_POST['ORIGIN'];
    $DESTINATION=$_POST['DESTINATION'];
    $result = mysqli_query($conn,"SELECT * FROM TRIPS where ORIGIN='$ORIGIN' AND DESTINATION='$DESTINATION'");
    }
?>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    </head>
    <body>
        <div>
            <form method="POST" action="booking_page.php">
            <?php
                $i=0;
                while($row = mysqli_fetch_array($result)) {
            ?>
                
                <?php echo $row["ORIGIN"]; ?>
                <?php echo $row["DESTINATION"]; ?>
                <?php echo $row["DATE"]; ?>
                
              
                <button type="submit" class="btn btn-primary">BOOK NOW</button>         
                
                <?php
                $i++;
                }
                ?>

                

            </form>
        </div>

    </body>
</html>