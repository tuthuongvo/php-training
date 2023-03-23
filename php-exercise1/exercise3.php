<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 3 - FizzBuzz trong PHP</title>
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
    <h3 class="text-center">Bài toán FizzBuzz trong PHP</h3>
    <p class="description">Viết một chương trình để in ra các số từ 1 đến 100. Nhưng đối với các số chia hết cho 3 thì in ra chữ “Fizz” thay vì hiển thị số đó và đối với các số chia hết cho 5 thì in ra chữ “Buzz”. Đối với các số vừa chia hết cho 3 và 5 thì in ra chữ “FizzBuzz”.</p>
    <div class="table-flex">
        <?php
        for($i = 1; $i <= 100; $i ++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo "FizzBuzz $i" . "<br>";
            } else if ($i % 3 == 0) {
                echo "Fizz $i" . "<br>";
            } else if ($i % 5 == 0) {
                echo "Buzz $i" . "<br>";
            }
        }
        ?>
    </div>
</div>
</body>

</html>
