<?php
$connection = mysqli_connect('localhost', 'root', '', 'login_crud');

if (!$connection) {
    die("Connection failed. " . mysqli_error($connection));
}