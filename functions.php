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
        echo "<div class='alert alert-danger' role='alert'>Record Creation Failed.</div> " . mysqli_error($connection);
    } else {
        echo "<div class='alert alert-success' role='alert'>Record Created.</div>";
    }
}

function readAllData() {
    $query = "SELECT * FROM users";

    global $connection;
    $queryResult = mysqli_query($connection, $query);

    if (!$queryResult) {
        echo "<div class='alert alert-danger' role='alert'>Reading Failed.</div> " . mysqli_error($connection);
    } else {
        return $queryResult;
    }
}

function getAllIds() {
    $query = "SELECT * FROM users";

    global $connection;
    $queryResult = mysqli_query($connection, $query);

    if (!$queryResult) {
        echo "<div class='alert alert-danger' role='alert'>Reading Failed.</div> " . mysqli_error($connection);
    } else {
        while ($row = mysqli_fetch_assoc($queryResult)) {
            $id = $row['id'];

            echo "<option value='$id'>$id</option>";
        }
    }
}

function updateRow() {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password'";
    $query .= "WHERE id = $id";

    global $connection;
    $queryResult = mysqli_query($connection, $query);

    if (!$queryResult) {
        echo "<div class='alert alert-danger' role='alert'>Update Failed.</div> " . mysqli_error($connection);
    } else {
        echo "<div class='alert alert-success' role='alert'>Record Updated.</div>";
    }
}

function deleteRow() {
    $id = $_POST['id'];

    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id";

    global $connection;
    $queryResult = mysqli_query($connection, $query);

    if (!$queryResult) {
        echo "<div class='alert alert-danger' role='alert'>Delete Failed.</div> " . mysqli_error($connection);
    } else {
        echo "<div class='alert alert-success' role='alert'>Record Deleted.</div>";
    }
}