<?php
    if(isset($_POST['send'])){
        if(isset($_POST['Name'])&&
        isset($_POST['Email'])&&
        $_POST['Name'] != "" &&
        $_POST['Name'] != ""
        ){
            include_once "../connecttoDatabase.php";
            extract($_POST);

            $sql = "INSERT Into user (Name, Email) VALUES ('$Name', '$Email')";
            if (mysqli_query($conn, $sql))
            {
                header("location:show.php");
            }
                else{
                header("location:add.php?message=AddFail");
            }
        }
        else{
            header("location:add.php?message=EmptyFields");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="Name" required>
        <label for="email">Email:</label>
        <input type="email" name="Email" required>
        <!-- <label for="password">Password:</label>
        <input type="password" name="password" id="password" required> -->
        <input type="submit" value="Create" name="send" >
        <a href="show.php" value="Annuler">Annuler</a>
    </form>
</body>
</html>