<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$makh = $hoten = $diachhi = $sodt = $ngaysinh = $ngaydk = $doanhso = $loaikh = "";
$makh_err = $hoten_err = $diachhi_err = $sodt_err = $ngaysinh_err = $ngaydk_err = $doanhso_err = $loaikh_err ="";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate MaKH
    $input_makh = trim($_POST["makh"]);
    if(empty($input_makh)){
        $makh_err = "Nhập mã makh.";
    } else{
        $makh = $input_makh;
    }
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $hoten_err = "Nhập họ tên.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $hoten_err = "Nhập vào họ tên hợp lệ..";
    } else{
        $hoten = $input_name;
    }

    // Validate address
    $input_address = trim($_POST["address"]);
    if(empty($input_address)){
        $diachhi_err = "Nhập địa chỉ.";
    } else{
        $diachhi = $input_address;
    }

    // Validate sodt
    $input_sodt = trim($_POST["phone"]);
    if(empty($input_sodt)){
        $sodt_err = "Nhập số điện thoại.";
    } elseif(!ctype_digit($input_sodt)){
        $sodt_err = "Vui lòng nhập một giá trị nguyên dương.";
    } else{
        $sodt = $input_sodt;
    }
    // Validate ngaysinh
    $input_ngaysinh = trim($_POST["birthday"]);
    if(empty($input_ngaysinh)){
        $ngaysinh_err = "Nhập ngày sinh của bạn.";
    } elseif(!$input_ngaysinh){
        $ngaysinh_err = "Vui lòng nhập một ngày sinh.";
    } else{
        $ngaysinh = $input_ngaysinh;
    }


    // Validate ngaydk
    $input_ngaydk = trim($_POST["registerday"]);
    if(empty($input_ngaydk)){
        $ngaydk_err = "Nhập ngày đăng ký của bạn.";
    } elseif(!$input_ngaydk){
        $ngaydk_err = "Vui lòng nhập một ngày đăng ký.";
    } else{
        $ngaydk = $input_ngaydk;
    }

    // Validate doanhso
    $input_doanhso = trim($_POST["sales"]);
    if(empty($input_doanhso)){
        $doanhso_err = "Nhập doanh số.";
    } elseif(!ctype_digit($input_doanhso)){
        $doanhso_err = "Vui lòng nhập giá trị.";
    } else{
        $doanhso = $input_doanhso;
    }

    // Validate loaikh
    $input_loaikh = trim($_POST["type"]);
    $loaikh = $input_loaikh;

    // Check input errors before inserting in database
    if(empty($makh_err) && empty($hoten_err) && empty($diachhi_err) && empty($sodt_err) && empty($ngaysinh_err) && empty($ngaydk_err) && empty($doanhso_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO KHACHHANG VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ssssssss", $param_makh, $param_hoten, $param_dchi, $param_sodt, $param_ngsinh, $param_ngdk, $param_doanhso, $param_loaikh);
            //$sqlt = mysqli_stmt_bind_param($stmt, "ssssssss", $param_makh, $param_hoten, $param_dchi, $param_sodt, $param_ngsinh, $param_ngdk, $param_doanhso, $param_loaikh);

            // Set parameters
            $param_makh = $makh;
            $param_hoten = $hoten;
            $param_dchi = $diachhi;
            $param_sodt = $sodt;
            $param_ngsinh = $ngaysinh;
            $param_ngdk = $ngaydk;
            $param_doanhso = $doanhso;
            $param_loaikh = $loaikh;

//            echo $sqlt;
//            exit;
             //Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        $stmt->close();
    }

    // Close connection
    $mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
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
                <h2 class="mt-5">Create Record</h2>
                <p>Please fill this form and submit to add employee record to the database.</p>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <label>Mã khách hàng</label>
                        <input type="text" name="makh" class="form-control <?php echo (!empty($makh_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $makh; ?>">
                        <span class="invalid-feedback"><?php echo $makh_err;?></span>
                    </div>
                    <div class="form-group">
                        <label>Họ tên</label>
                        <input type="text" name="name" class="form-control <?php echo (!empty($hoten_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $hoten; ?>">
                        <span class="invalid-feedback"><?php echo $hoten_err;?></span>
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <textarea name="address" class="form-control <?php echo (!empty($diachhi_err)) ? 'is-invalid' : ''; ?>"><?php echo $diachhi; ?></textarea>
                        <span class="invalid-feedback"><?php echo $diachhi_err;?></span>
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type="text" name="phone" class="form-control <?php echo (!empty($sodt_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $sodt; ?>">
                        <span class="invalid-feedback"><?php echo $sodt_err;?></span>
                    </div>
                    <div class="form-group">
                        <label>Ngày sinh</label>
                        <input type="date" data-date="" data-date-format="YYYY-MM-DD" name="birthday" class="form-control <?php echo (!empty($ngaysinh_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $ngaysinh; ?>">
                        <span class="invalid-feedback"><?php echo $ngaysinh_err;?></span>
                    </div>
                    <div class="form-group">
                        <label>Ngày đăng ký</label>
                        <input type="date" data-date="" data-date-format="YYYY-MM-DD" name="registerday" class="form-control <?php echo (!empty($ngaydk_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $ngaydk; ?>">
                        <span class="invalid-feedback"><?php echo $ngaydk_err;?></span>
                    </div>
                    <div class="form-group">
                        <label>Doanh số</label>
                        <input type="text" name="sales" class="form-control <?php echo (!empty($doanhso_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $doanhso; ?>">
                        <span class="invalid-feedback"><?php echo $doanhso_err;?></span>
                    </div>
                    <div class="form-group">
                        <label>Loại KH</label>
                        <input type="text" name="type" class="form-control" value="<?php echo $loaikh; ?>">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
