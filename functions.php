<?php
include "db_connect.php";

function insertDataToDatabase() {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO users(username, password) ";
    $query .= "VALUES ('$username', '$password')";

    global $connection;
    $queryResult = mysqli_query($connection, $query);

    if (!$queryResult) {
        die("Query failed. " . mysqli_error($connection));
    } else {
        echo "<div class='alert alert-success' role='alert'>Record Created.</div>";
    }
}
