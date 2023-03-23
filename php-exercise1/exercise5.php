<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 5 - loại bỏ phần tử trùng lặp và sắp xếp lại danh sách</title>
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
    <h3 class="text-center">Loại bỏ phần tử trùng lặp và sắp xếp lại danh sách</h3>
    <p class="description">Viết chương trình loại bỏ phần tử trùng lặp và sắp xếp lại danh sách Input: (5,5,1,1,2,2,3,4)</p>
    <div class="table-flex">
        Output:
        <?php
        $input = array(5, 5, 1, 1, 2, 3, 4);

        // Remove duplicate elements
        $unique_array = array_unique($input);

        // Rearrange the list
        sort($unique_array);

        // Output the result
        foreach ($unique_array as $value) {
            echo $value . " ";
        }
        ?>


    </div>
</div>
</body>

</html>
