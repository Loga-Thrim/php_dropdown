<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include 'api/dbconfig.php';
        $sql = 'SELECT * FROM menu_dropdown';
        $query = mysqli_query($dbcon, $sql);
    ?>
    <h3>User</h3>
    <select>
        <?php
            if(mysqli_num_rows($query) > 0) {
                while($menu = mysqli_fetch_assoc($query)) {
                    echo "<option value='". $menu['name'] ."'>". $menu['name'] ."</option>";
                }
            }
        ?>
    </select>
    <br><br>
    <a href="add.php">Add menu</a>
</body>
</html>