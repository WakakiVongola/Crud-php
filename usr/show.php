<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <div type="container">
            <a class="link" href="add.php">Ajouter un utilisateur</a>
        </div>
        <table>
            <thead>
                <?php
                include_once '../connecttoDatabase.php';
                //liste des utilisateurs
                $sql = "SELECT * FROM user";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) 
                {
                    // output data of each row
                    ?>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?=$row['id_Usr']?></td>
                    <td><?=$row['Name']?></td>
                    <td><?=$row['Email']?></td>
                    <td class="image"><a href="modify.php?id=<?=$row['id_Usr']?>"><img src="../img/yoda.png" alt="voici une image"></a></td>
                    <td class="image"><a href="delete.php?id=<?=$row['id_Usr']?>"><img src="../img/sumimasen.jpg" alt="voici une image"></a></td>
                </tr>
                <?php
                    }
                } 
                    else {
                    echo "<p class='message'> 0 results</p>";
                }
                ?>
        </table>
    </main>
    
</body>
</html>