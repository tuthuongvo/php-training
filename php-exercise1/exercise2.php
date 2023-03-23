<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 2 - Vẽ tam giác</title>
    <style>
        .table-flex {
            display: flex;
            grid-column-gap: 30px;
            justify-content: center;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
        }
        .text-center {
            text-align: center;
        }
        .m-3 {
            width: calc(100% / 8);
        }
    </style>
</head>

<body>
<div class="container">
    <h3 class="text-center">Vẽ tam giác</h3>
    <p class="description">Sử dụng vòng lặp for - vẽ tam giác trong PHP</p>
    <div class="table-flex">
        <?php
        for($i = 0; $i < 20; $i ++) {
            for($j = (20 - $i); $j < 20; $j ++) {
                echo "*";
            }
            echo "<br>";
        }
        ?>
    </div>
</div>
</body>

</html>
