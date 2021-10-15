<?php 
    require_once('./includes/dbhelp.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">       
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="../asset/style.css" rel="stylesheet">
    <link href="../asset/reponsive.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <!-- header -->
        <div class="header">
            <nav class="navbar navbar-expand navbar-light navbar-white">   
                <!-- right nav -->
                <div class="toggler" onclick="toggleMenu()"> <i class="fas fa-bars"></i></div>
    
                <!-- sidebar -->
                <div class="sidebar">
                    <ul class="nav nav-pills flex-column" >
                        <li class="nav-item">
                            <a href="home.php" class="brand">
                                <img class="brand-img img-circle" src="../asset/img/logo.png" >
                                
                            </a>
                        </li>         
                        <li class="nav-item">
                            <a href="home.php" class="nav-link">
                                <span class="icon">
                                    <i class="fas fa-home"></i>
                                </span>
                                <p class="title">Trang chủ</p>
                            </a>
                        </li>               
                        <li class="nav-item">
                            <a href="nhanvien.php" class="nav-link">
                                <span class="icon">
                                    <i class="fas fa-users"></i>
                                </span>
                                <p class="title">Nhân viên</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="phongban.php" class="nav-link">
                                <span class="icon">
                                    <i class="fab fa-black-tie"></i>
                                </span>
                                <p class="title">Phòng ban</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="chamcong.php" class="nav-link">
                                <span class="icon">
                                    <i class="far fa-clipboard "></i>
                                </span>
                                <p class="title">Bảng chấm công</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="loginForm.php" class="nav-link">
                                <span class="icon">
                                    <i class="fas fa-sign-out-alt"></i>
                                </span>
                                <p class="title">Đăng xuất</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    
        <!-- content -->
        <div class="content-wrapper" style="min-height: 640px;">
            <div class="content-header">
                <div class="container-fluid">
                    <!-- grid system -->
                    <div class="row">
                        <div class="col-sm-6">
                            <h1>Thông tin nhân viên</h1>
                        </div>
                        <div class="col-sm-6"> <!-- menu điều hướng nằm ngang -->
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item">Nhân viên</li>
                                <li class="breadcrumb-item">Thông tin nhân viên</li>
                            </ol>
                        </div> 
                        
                    </div>
                </div>
            </div>
        
        <?php 
        $id = '';
        if (isset($_GET['id'])) {
            $id          = $_GET['id'];
            $sql         = 'SELECT * FROM employee LEFT JOIN position ON position.pos_id=employee.nv_position where nv_id = '.$id;
            $staffList = executeResult($sql);
        if ($staffList != null && count($staffList) > 0) {
            $st = $staffList[0];
            $s_fullname = $st['nv_fullname'];
            $s_image = $st['nv_image'];
            $s_level = $st['nv_level'];
            $s_position = $st['pos_name'];
            $s_numberphone = $st['nv_numberphone'];
            $s_cccd = $st['nv_cccd'];
            $s_salary = $st['nv_salary'];
            $s_email = $st['nv_email'];
            $s_age      = $st['nv_age'];
            $s_address  = $st['nv_address'];
    } else {
        $id = '';
    }
    }
?>
        <div class="row infoStaff"style = " margin-left: 36px; margin-right: 36px" >
            <div class="col-sm-6" >
                <img src="uploads/<?php echo $s_image ?>" width = "360px" style ="margin-top : 28px" >
            </div>
            <div class="col-sm-6" style ="margin-top : 68px">
                <h3 class="nameStaff" style = "color: #19B3C1">
                    <?php echo $s_fullname ?>

                </h3>
                <h6>
                    - ID Staff: <?php echo $id ?>
                </h6>
                <h6>
                    - Age: <?php echo $s_age ?>
                </h6>
                <h6>
                    - Address: <?php echo $s_address ?>
                </h6>
                <h6>
                    - Position: <?php echo $s_position ?>
                </h6>
                <h6>
                    - PhoneNumber: <?php echo $s_numberphone ?>
                </h6>
                <h6>
                    - Email: <?php echo $s_email ?>
                </h6>
                <h6>
                    - Level: <?php echo $s_level ?>
                </h6>
                <h6>
                    - ID card: <?php echo $s_cccd ?>
                </h6>
                <br></br>
                <!-- Rating here -->
                <!-- <p><b>Viết đánh giá của bạn</b></p> -->
            </div>
        </div>
        </div>

        <!-- footer -->
        <footer class="main-footer">         
            <strong>
                Copyright © 2020-2021 
                <a href="https://www.facebook.com/hwngnaf/" style="text-decoration: none; color: #19B3D3;">Thành Hưng</a>
                .
            </strong>    
        </footer>
    </div>

    <script type="text/javascript">
        function toggleMenu(){
            let sidebar = document.querySelector('.sidebar')
            sidebar.classList.toggle('active')
        }
    </script>
</body>
</html>