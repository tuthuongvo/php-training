<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 5 - Sắp xếp mảng</title>
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
    <h3 class="text-center">Bài tập 5 - PHP Fullstack training phần 2</h3>
    <p class="description">Sắp xếp mảng theo yêu cầu: <br>
        giá trị nhập vào Array ( [a] => 31 [b] => 41 [c] => 39 [d] => 40 )</p>
    <div class="table-flex">
        <?php
        $arr = array("a" => 31, "b" => 41, "c" => 39, "d" => 40);

        // Sort the array in ascending order by value
        asort($arr);
        echo "Sắp xếp mảng tăng dần theo giá trị:\n";
        print_r($arr);

        // Sort the array in ascending order by key
        ksort($arr);
        echo "<br>Sắp xếp mảng tăng dần theo key:\n";
        print_r($arr);

        // Sort the array in descending order by value
        arsort($arr);
        echo "<br>Sắp xếp mảng Giảm dần theo giá trị:\n";
        print_r($arr);

        // Sort the array in descending order by key
        krsort($arr);
        echo "<br>Sắp xếp mảng giảm dần theo key:\n";
        print_r($arr);
        ?>


    </div>
</div>
</body>

</html>
