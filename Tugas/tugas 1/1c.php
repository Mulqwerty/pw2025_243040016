<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1c</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: lightgreen;
            color: black;
            text-align: center;
            line-height: 50px;
            font-size: 20px;
            font-weight: bold;
            border: 2px solid black;
            display: inline-block;
            margin: 1px;
        }
    </style>
</head>
<body>

<?php  
for ($i = 1; $i <= 3; $i++) {  
    for ($j = 1; $j <= $i; $j++) {  
        echo "<div class='kotak'>$i</div>";  
    }  
    echo "<br>";  
}  
?>

</body>
</html>
