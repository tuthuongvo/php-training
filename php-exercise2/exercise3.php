<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 3 - Viết một đoạn mã PHP để lấy số ngày của tháng hiện tại</title>
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
    <h3 class="text-center">Bài tập 3 - PHP Fullstack training phần 2</h3>
    <p class="description">Viết một đoạn mã PHP để lấy số ngày của tháng hiện tại</p>
    <div class="table-flex">
        <?php
        $days = date('t');

        echo "Tháng hiện tại có $days ngày";
        ?>
    </div>
</div>
</body>

</html>
