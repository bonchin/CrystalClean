<?php 

include "connect.php";

$fname = $_POST['fname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$id_services = $_POST['id_services'];
$description = $_POST['description'];
$date = $_POST['date'];

$getid = mysqli_query($connect, "SELECT `id_services` FROM `servicestest` WHERE `name`='$id_services'");
$getid = mysqli_fetch_assoc($getid);
$id = $getid["id_services"];

    $connect->query("INSERT INTO `offer` (`id`, `fname`, `phone`, `email`, `id_services`, `description`, `date`) VALUES (NULL, '$fname','$phone','$email', '$id', '$description', '$date')");
    // $connect->query("INSERT INTO `offer` (`id`, `fname`, `phone`, `email`, `id_services`, `description`, `date`) VALUES (NULL, '$fname','$phone','$email','',)");
header('Location: index.php');

?>