<?php
    $id_Usr = $_GET['id'];
        if(isset($_POST['send'])){
            if(isset($_POST['Name'])&&
            isset($_POST['Email']) &&
            $_POST['Name']!= "" &&
            $_POST['Name']!= ""
            ){
                include_once '../connecttoDatabase.php';
                extract($_POST);
                $sql  = "UPDATE user SET Name='$Name', Email='$Email' WHERE id_Usr='$id_Usr' ";
                if (mysqli_query($conn, $sql)){
                    header("location:show.php");
                }
                else {
                    header("location:show.php?message=ModifyFail");
                }
            }else {
                header("location:show.php?message=EmptyFields");
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Modify</title>
</head>
<body>
    <?php 
        include_once "../connecttoDatabase.php";
        // liste des users
        $sql = "SELECT * FROM user where id_Usr = $id_Usr";
        $result = mysqli_query($conn, $sql);
            // output data of each row
            while($row = mysqli_fetch_assoc($result)){
    ?>
    <form action="" method="post">
        <h1>Modify</h1>
        <input type="text" name="Name" value="<?=$row['Name']?>" placeholder="votre nom ici">
        <input type="email" name="Email" value="<?=$row['Email']?>" placeholder="votre email ici">
        <input type="submit" value="Modifier" name="send">
        <a href="show.php">Annuler</a>
    </form>
    <?php
            }
            ?>
</body>
</html>