<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$hoten = $diachi = $sodt = $ngsinh = $ngdk = $doanhso = "";
$hoten_err = $diachi_err = $sodt_err = $ngsinh_err = $ngdk_err = $doanhso_err = "";

// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];

    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $hoten_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $hoten_err = "Please enter a valid name.";
    } else{
        $hoten = $input_name;
    }

    // Validate address address
    $input_address = trim($_POST["address"]);
    if(empty($input_address)){
        $diachi_err = "Please enter an address.";
    } else{
        $diachi = $input_address;
    }

    // Validate salary
    $input_sodt = trim($_POST["phone"]);
    if(empty($input_sodt)){
        $sodt_err = "Please enter the salary amount.";
    } elseif(!ctype_digit($input_sodt)){
        $sodt_err = "Please enter a positive integer value.";
    } else{
        $sodt = $input_sodt;
    }
    // Validate ngaysinh
    $input_ngsinh = trim($_POST["birthday"]);
    if(empty($input_ngsinh)){
        $ngsinh_err = "Nhập ngày sinh của bạn.";
    } elseif(!$input_ngsinh){
        $ngsinh_err = "Vui lòng nhập một ngày sinh.";
    } else{
        $ngsinh = $input_ngsinh;
    }
    // Validate ngaydk
    $input_ngdk = trim($_POST["registerday"]);
    if(empty($input_ngdk)){
        $ngdk_err = "Nhập ngày đăng ký của bạn.";
    } elseif(!$input_ngdk){
        $ngdk_err = "Vui lòng nhập một ngày đăng ký.";
    } else{
        $ngdk = $input_ngdk;
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
    $input_loaikh = trim($_POST["type"]);
    $loaikh = $input_loaikh;

    // Check input errors before inserting in database
    if(empty($name_err) && empty($address_err) && empty($salary_err)){
        // Prepare an update statement
        $sql = "UPDATE KHACHHANG SET HOTEN=?, DCHI=?, SODT=?, NGSINH=?, NGDK=?, DOANHSO=?, LOAIKH=? WHERE MAKH=?";

        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ssssssss", $param_hoten, $param_dchi, $param_sodt, $param_ngsinh, $param_ngdk, $param_doanhso, $param_loaikh, $param_makh);

            // Set parameters
            $param_hoten = $hoten;
            $param_dchi = $diachi;
            $param_sodt = $sodt;
            $param_ngsinh = $ngsinh;
            $param_ngdk = $ngdk;
            $param_doanhso = $doanhso;
            $param_loaikh = $loaikh;
            $param_makh = $id;

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records updated successfully. Redirect to landing page
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
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["MAKH"]) && !empty(trim($_GET["MAKH"]))){
        // Get URL parameter
        $makh =  trim($_GET["MAKH"]);

        // Prepare a select statement
        $sql = "SELECT * FROM KHACHHANG WHERE MAKH = ?";
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_id);

            // Set parameters
            $param_id = $makh;

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                $result = $stmt->get_result();

                if($result->num_rows == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = $result->fetch_array(MYSQLI_ASSOC);

                    // Retrieve individual field value
                    $hoten = $row["HOTEN"];
                    $diachi = $row["DCHI"];
                    $sodt = $row["SODT"];
                    $ngsinh = $row["NGSINH"];
                    $ngdk = $row["NGDK"];
                    $doanhso = $row["DOANHSO"];
                    $loaikh = $row["LOAIKH"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }

            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        $stmt->close();

        // Close connection
        $mysqli->close();
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
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
                <h2 class="mt-5">Update Record</h2>
                <p>Please edit the input values and submit to update the employee record.</p>
                <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                    <div class="form-group">
                        <label>Họ tên</label>
                        <input type="text" name="name" class="form-control <?php echo (!empty($hoten_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $hoten; ?>">
                        <span class="invalid-feedback"><?php echo $hoten_err;?></span>
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <textarea name="address" class="form-control <?php echo (!empty($diachi_err)) ? 'is-invalid' : ''; ?>"><?php echo $diachi; ?></textarea>
                        <span class="invalid-feedback"><?php echo $diachi_err;?></span>
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type="text" name="phone" class="form-control <?php echo (!empty($sodt_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $sodt; ?>">
                        <span class="invalid-feedback"><?php echo $sodt_err;?></span>
                    </div>
                    <div class="form-group">
                        <label>Ngày sinh</label>
                        <input type="date" data-date="" data-date-format="YYYY-MM-DD" name="birthday" class="form-control <?php echo (!empty($ngsinh_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $ngsinh; ?>">
                        <span class="invalid-feedback"><?php echo $ngsinh_err;?></span>
                    </div>
                    <div class="form-group">
                        <label>Ngày đăng ký</label>
                        <input type="date" data-date="" data-date-format="YYYY-MM-DD" name="registerday" class="form-control <?php echo (!empty($ngdk_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $ngdk; ?>">
                        <span class="invalid-feedback"><?php echo $ngdk_err;?></span>
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
                    <input type="hidden" name="id" value="<?php echo $makh; ?>"/>
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
