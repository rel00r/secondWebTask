<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "map";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $data = $_POST['button'];

    $sql = "INSERT INTO map (direction) VALUES ('$data')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

   
    $conn->close();

    header("Location: index1.html ");
?>