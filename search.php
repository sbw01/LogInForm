<?php

$conn = mysqli_connect("localhost", "root", "Sebastian11082003!") or die("Error connecting to database".mysqli_error());

mysqli_select_db($conn, "mydb") or die(mysqli_error($conn));

    $query = $_GET['search'];
    $min_length = 3;



    if(strlen($query) >= $min_length){
        $query = htmlspecialchars($query);
        $query = mysqli_real_escape_string($conn, $query);
        $sth = "SELECT * FROM animals
           WHERE (`Name` LIKE '%".$query."%')";
        $raw_results = mysqli_query($conn, $sth) or die(mysqli_error());

        if(mysqli_num_rows($raw_results) > 0){
            while ($results = mysqli_fetch_array($raw_results)){
                echo "<p><h3>".$results['Name']."</h3>".$results['Spieces']."</p>";
            }
        } else {
            echo "No results";
        }

    }
