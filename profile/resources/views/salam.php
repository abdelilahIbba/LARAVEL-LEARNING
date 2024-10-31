<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Hello, Mr <?php echo $Fname ." ". $Lname; ?> </h2>
    <h2>courses</h2>
    <ul>
        <?php foreach ($courses as $val): ?>
            <li><?= $val; ?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>
