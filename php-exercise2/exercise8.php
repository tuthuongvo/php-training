<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 8 - Chương trình đọc dữ liệu từ file csv và xuất ra table</title>
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
    <h3 class="text-center">Bài tập 8 - PHP Fullstack training phần 2</h3>
    <p class="description">Đọc dữ liệu từ file csv và xuất ra table</p>
    <div class="table-flex">
        <?php
        // open the CSV file
        $file = fopen('vi_VN.csv', 'r');

        // create an empty array to store the data
        $data = array();

        // read each line of the CSV file and add it to the array
        while (($line = fgetcsv($file)) !== FALSE) {
            $data[] = $line;
        }

        // close the file
        fclose($file);

        // output the data as an HTML table
        echo "<table>";
        foreach ($data as $row) {
            echo "<tr>";
            foreach ($row as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>

    </div>
</div>
</body>

</html>
