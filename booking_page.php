<?php 
    require('local_settings.php');
    $AC_NUMBER=$_GET['AC_NUMBER'];
    $query="SELECT * FROM trips INNER JOIN AC_NUMBER.trips ON AC_NUMBER.aircraft ";
?>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">

    </head>
    <body>
        <div>
            <form method="POST" action="register_customer.php">
                <input type="text"name="CUS_LNAME" placeholder="Last Name">
                <input type="text" name="CUS_FNAME" placeholder="First Name">
                <input type="text"name="CUS_INITIAL" placeholder="Initial">
                <input type="text" name="CUS_AREACODE" placeholder="Area code">
                <input type="text" name="CUS_PHONE" placeholder="Phone">
                <input type="hidden" name="AC_NUMBER">
                <button type="submit" class="btn btn-primary">SUBMIT</button>
            </form>
        </div>
    </body>
</html>