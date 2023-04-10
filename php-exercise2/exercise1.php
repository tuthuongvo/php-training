<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 1 - Viết một đoạn mã PHP để tính toán một số ngày giữa hai ngày</title>
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
    <h3 class="text-center">Bài tập 1 - PHP Fullstack training phần 2</h3>
    <p class="description">Viết một đoạn mã PHP để tính toán một số ngày giữa hai ngày</p>
    <div class="table-flex">
        <?php
        $date1 = "2022-04-22";
        $date2 = "2022-03-31";

        // Convert dates to timestamps
        $timestamp1 = strtotime($date1);
        $timestamp2 = strtotime($date2);

        // Calculate the difference in seconds
        $diff = abs($timestamp2 - $timestamp1);

        // Convert seconds to days
        $days = floor($diff / (60*60*24));

        // Output the result
        echo "Số ngày giữa $date1 và $date2 là: $days ngày";
        ?>

    </div>
</div>
</body>

</html>
