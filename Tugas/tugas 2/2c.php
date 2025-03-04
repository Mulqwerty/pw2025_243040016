<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2c</title>
    <style>
        .box {
            display: inline-block;
            width: 30px;
            height: 30px;
            text-align: center;
            line-height: 30px;
            margin: 1px;
            background-color: green;
            color: white;
            font-weight: bold;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<?php
for ($i = 10; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "<div class='box'>$j</div>";
    }
    echo "<br>";
}
?>

</body>
</html>
