<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 4 - Đổi chữ sang số</title>
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
    <h3 class="text-center">Đổi chữ sang số</h3>
    <p class="description">Viết chương trình đổi chữ sang số:<br> Input: zero;three;five;six;eight;one</p>
    <div class="table-flex">
        Output:
        <?php
        $input = "zero;three;five;six;eight;one";

        $number_array = array(
            "zero" => "0",
            "one" => "1",
            "two" => "2",
            "three" => "3",
            "four" => "4",
            "five" => "5",
            "six" => "6",
            "seven" => "7",
            "eight" => "8",
            "nine" => "9"
        );

        $input_array = explode(";", $input);

        foreach ($input_array as $letter) {
            $number = $number_array[$letter];
            echo $number;
        }
        ?>

    </div>
</div>
</body>

</html>
