<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 2 - Viết một tập lệnh PHP để cộng / trừ số ngày từ một ngày cụ thể</title>
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
    <h3 class="text-center">Bài tập 2 - PHP Fullstack training phần 2</h3>
    <p class="description">Viết một tập lệnh PHP để cộng / trừ số ngày từ một ngày cụ thể</p>
    <div class="table-flex">
        <?php
        $date = "2022-03-15";
        $days = 40;
        $add = "+"; // Use "+" to add days
        $subtract = "-"; // Use "-" to subtract days

        // Convert date to timestamp
        $timestamp = strtotime($date);

        // Calculate the new timestamp
        $before_timestamp = strtotime("$subtract $days days", $timestamp);
        $after_timestamp = strtotime("$add $days days", $timestamp);

        // Convert new timestamp to date format
        $date_before = date("Y-m-d", $before_timestamp);
        $date_after = date("Y-m-d", $after_timestamp);


        // Output the result
        echo "Ngày hiện tại là: $date <br>";
        echo "$days ngày trước là: $date_before <br>";
        echo "$days ngày sau là: $date_after";
        ?>

    </div>
</div>
</body>

</html>
