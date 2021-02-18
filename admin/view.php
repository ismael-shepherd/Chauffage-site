<?php include '../admin/db_conn.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
</head>
<body>
    <a href="../admin/test.php">&#8592;</a>
    <?php
        $sql = "SELECT * FROM images ORDER BY id DESC";
        $res = mysqli_query($conn, $sql);

        if (mysqli_num_rows($res) > 0) {
            while ($images = mysqli_fetch_assoc($res)) { ?>

            <div class="alb">
                <img src="../admin/uploads/<?=$images['image_url']?>" alt="">
            </div>

        <?php } }?>
</body>
</html>