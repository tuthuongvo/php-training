<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 1 - Bảng cửu chương</title>
    <style>
        .table-flex {
            display: flex;
            grid-column-gap: 30px;
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
    <h3 class="text-center">Bảng cửu chương</h3>
    <p class="description">Viết chương trình để in ra bảng cửu chương trong PHP.</p>
    <div class="table-flex">
        <?php
        $numbers = array(2,3,4,5,6,7,8,9);
        foreach($numbers as $number){
            ?>
            <div class="m-3">
                <?php
                for ($i = 1; $i <10; $i++){
                    echo "$number * $i = ".$number*$i."</br>";
                }
                echo "</br>";
                ?>
            </div>
            <?php
        }
        ?>
    </div>
</div>
</body>

</html>
