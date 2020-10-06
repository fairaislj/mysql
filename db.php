<?php
	$id = $_GET("id");

    $servername = "localhost";
    $username = "root";
    $dbname = "blog";

    $conn = mysqli_connect($servername, $username, $dbname);

    $sql = "SELECT * FROM Articles WHERE id=$'id'";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_num($result)

    echo "id " . $row[0]. " - name: " . $row["content"]. " ". $row["title"]. "<br>";

    ?>
