<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 6 - Chương trình tính toán và hiển thị nhiệt độ trung bình, năm nhiệt độ thấp nhất và cao nhất</title>
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
    <h3 class="text-center">Bài tập 6 - PHP Fullstack training phần 2</h3>
    <p class="description">Viết một đoạn mã PHP để tính toán và hiển thị nhiệt độ trung bình, năm nhiệt độ thấp nhất và cao nhất.<br>
        Input:  78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62 , 62, 65, 64, 68, 73, 75, 79, 73</p>
    <div class="table-flex">
        <?php
        // Input temperatures
        $temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

        // Calculate and display average temperature
        $average_temp = array_sum($temperatures) / count($temperatures);
        echo "Nhiệt độ trung bình là: " . round($average_temp, 2) . "°F\n\n";

        // Find and display five lowest temperatures
        sort($temperatures);
        $lowest_temperatures = array_slice($temperatures, 0, 5);
        echo "<br>Danh sách năm nhiệt độ thấp nhất: " . implode(", ", $lowest_temperatures) . "°F\n\n";

        // Find and display five highest temperatures
        rsort($temperatures);
        $highest_temperatures = array_slice($temperatures, 0, 5);
        echo "<br>Danh sách năm nhiệt độ cao nhất: " . implode(", ", $highest_temperatures) . "°F\n";
        ?>
    </div>
</div>
</body>

</html>
