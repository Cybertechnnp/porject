<?php
@include 'config.php';
session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

if(isset($_POST['submit'])) {
  // Get the data from the form
  $data = $_POST['data'];
  // Insert the data into the database
  $sql = "INSERT INTO table (data) VALUES (?)";
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "s", $data);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}
?>

<form method="post" action="upload.php">
  <input type="text" name="data">
  <input type="submit" name="submit" value="Upload">
</form>
