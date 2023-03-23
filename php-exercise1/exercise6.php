<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 6 - Nhập vào 2 mảng loại bỏ phần tử trùng lặp</title>
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
    <h3 class="text-center">Nhập vào 2 mảng loại bỏ phần tử trùng lặp</h3>
    <p class="description">Nhập vào 2 mảng loại bỏ phần tử trùng lặp. Without [2, 1, 2, 3] , [ 1, 2]</p>
    <div class="table-flex">
        Output:
        <?php
        $array1 = array(2, 1, 2, 3);
        $array2 = array(1, 2);

        // Remove duplicates from array1
        $array1 = array_unique($array1);

        // Remove duplicates from array2
        $array2 = array_unique($array2);

        // Remove elements in array1 that also exist in array2
        $array1 = array_diff($array1, $array2);

        // Output the result
        print_r($array1);
        ?>
    </div>
</div>
</body>

</html>
