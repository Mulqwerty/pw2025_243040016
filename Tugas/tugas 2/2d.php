<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papan Catur</title>
    <style>
        .container {
            display: grid;
            grid-template-columns: repeat(8, 50px);
            grid-template-rows: repeat(8, 50px);
            border: 5px solid black; /* Garis luar papan catur */
            width: 400px;
            height: 400px;
        }
        .box {
            width: 50px;
            height: 50px;
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>

<div class="container">
<?php
for ($i = 0; $i < 8; $i++) {
    for ($j = 0; $j < 8; $j++) {
        $class = ($i + $j) % 2 == 0 ? "white" : "black";
        echo "<div class='box $class'></div>";
    }
}
?>
</div>

</body>
</html>
    