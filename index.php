<?php
    echo "Hello world";
    $conn =  mysqli_connect("localhost", "root", "", "o2");
    $sql = "SELECT * FROM topic";
    $result = mysqli_query($conn, $sql);
    $row =mysqli_fetch_assoc($result);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1><?php print($row['title']); ?></h1>
    
    <?php print($row['description']); ?>
</body>
</html>