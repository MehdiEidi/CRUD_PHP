<?php
include "functions.php";

if (isset($_POST['submit'])) {
    updateRow();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>
<body>
<div style="max-width: 70%; margin: 80px auto auto;">
    <form action="update_data.php" method="POST">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username">
            <div class="form-text">What a nice username.</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="mb-3">
            <select class="form-select" name="id">
                <?php getAllIds(); ?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>
</div>
</body>
</html>
