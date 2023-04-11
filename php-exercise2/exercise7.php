<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 7 - Chương trình đếm tổng số lần một giá trị cụ thể xuất hiện trong một mảng</title>
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
    <h3 class="text-center">Bài tập 7 - PHP Fullstack training phần 2</h3>
    <p class="description">Viết một đoạn mã PHP để đếm tổng số lần một giá trị cụ thể xuất hiện trong một mảng. Function count_values($array, $item_find)</p>
    <div class="table-flex">
        <?php
        function count_values($array, $item_find) {
            $count = 0;
            foreach ($array as $item) {
                if ($item == $item_find) {
                    $count++;
                }
            }
            return $count;
        }

        // Example usage
        $values = array(5, 6, 8, 5, 2, 4, 5, 9, 5, 1);
        $item_to_find = 5;
        $count = count_values($values, $item_to_find);
        echo "Giá trị $item_to_find xuất hiện trong mảng $count lần.";
        ?>
    </div>
</div>
</body>

</html>
