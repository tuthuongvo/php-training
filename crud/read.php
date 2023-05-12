<?php
// Check existence of id parameter before processing further

if(isset($_GET["MAKH"]) && !empty(trim($_GET["MAKH"]))){
    // Include config file
    require_once "config.php";

    // Prepare a select statement
    $sql = "SELECT * FROM KHACHHANG WHERE MAKH = ?";

    if ($stmt = $mysqli->prepare($sql)){
        $stmt->bind_param("s", $param_id);
        $param_id = trim($_GET["MAKH"]);

        if ($stmt->execute()){
            $result = $stmt->get_result();
            if ($result->num_rows == 1) {
                $row = $result->fetch_array(MYSQLI_ASSOC);

                $makh = $row["MAKH"];
            } else {
                header("location: error.php");
                exit();
            }
        } else {
            echo "Opps! Something went wrong. Please try again later.";
        }
    }
    $stmt->close();

    $mysqli->close();
} else {
    header("location: error.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mt-5 mb-3">View Record</h1>
                <div class="form-group">
                    <label>MAKH</label>
                    <p><b><?php echo $row["MAKH"]; ?></b></p>
                </div>
                <div class="form-group">
                    <label>Họ tên</label>
                    <p><b><?php echo $row["HOTEN"]; ?></b></p>
                </div>
                <div class="form-group">
                    <label>Địa chỉ</label>
                    <p><b><?php echo $row["DCHI"]; ?></b></p>
                </div>
                <div class="form-group">
                    <label>Số điện thoại</label>
                    <p><b><?php echo $row["SODT"]; ?></b></p>
                </div>
                <div class="form-group">
                    <label>Ngày sinh</label>
                    <p><b><?php echo $row["NGSINH"]; ?></b></p>
                </div>
                <div class="form-group">
                    <label>Ngày đăng ký</label>
                    <p><b><?php echo $row["NGDK"]; ?></b></p>
                </div>
                <div class="form-group">
                    <label>Doanh số</label>
                    <p><b><?php echo $row["DOANHSO"]; ?></b></p>
                </div>
                <div class="form-group">
                    <label>Loại KH</label>
                    <p><b><?php echo $row["LOAIKH"]; ?></b></p>
                </div>
                <p><a href="index.php" class="btn btn-primary">Back</a></p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
