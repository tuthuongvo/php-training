<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 4 - Viết một tập lệnh PHP để giải mã chuỗi JSON</title>
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
    <h3 class="text-center">Bài tập 4 - PHP Fullstack training phần 2</h3>
    <p class="description">Viết một tập lệnh PHP để giải mã chuỗi JSON sau <br>
        JSON code : {"Title": "The Cuckoos Calling", "Author": "Robert Galbraith", "Detail": { "Publisher": "Little Brown" }} </p>
    <div class="table-flex">
        <?php
        $json_str = '{"Title": "The Cuckoos Calling", "Author": "Robert Galbraith", "Detail": { "Publisher": "Little Brown" }}';

        // Decode the JSON string into a PHP object
        $obj = json_decode($json_str);

        // Access the properties of the object
        $title = $obj->Title;
        $author = $obj->Author;
        $publisher = $obj->Detail->Publisher;

        // Output the result
        echo "Title: $title <br>";
        echo "Author: $author <br>";
        echo "Publisher: $publisher <br>";
        ?>

    </div>
</div>
</body>

</html>
