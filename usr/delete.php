<?php
    $id_Usr = $_GET['id'];
    include_once '../connecttoDatabase.php';
    $sql = "DELETE FROM user WHERE id_Usr = $id_Usr";
    if (mysqli_query($conn, $sql)) {
        header('Location: show.php');
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }