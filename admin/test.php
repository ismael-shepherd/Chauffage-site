<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload image</title>
</head>
<body>
    <?php if(isset($_GET['error'])): ?>
        <p><?php echo $_GET['error'] ?></p>
    <?php endif ?>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="my_image">
        <button type="submit" name="submit" value="Upload">UPLOAD FILE</button>
    </form>
</body>
</html>