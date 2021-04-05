<?php
session_start();

$username = "";
$email    = "";
$errors = array(); 
$db = mysqli_connect('localhost', 'root', '', 'database');

if (isset($_POST['submit'])) {

  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $pesan = $_POST['pesan'];
  
  if (count($errors) == 0) {
  	$query = "INSERT INTO pesan VALUES('', '$nama', '$email', '$pesan')";
  	mysqli_query($db, $query);
  	echo '<script language="javascript">';
    echo 'alert("Pesan anda telah kami terima")';
    echo '</script>';
  }
}
?>
