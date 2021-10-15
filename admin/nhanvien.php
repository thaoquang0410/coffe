<?php 
require_once('./includes/dbhelp.php');

$s_fullname = $s_age = $s_image = $s_numberphone = $s_email = $s_address = 
    $s_position = $s_cccd = $s_level = $s_salary = '';

if(!empty($_POST)){ 
    $s_id = '';
    if(isset($_POST['fullname'])){
        $s_fullname = $_POST['fullname'];
    }
    if(isset($_POST['age'])){
        $s_age = $_POST['age'];
    }
    // xu ly anh
    $s_image = $_FILES['image']['name'];
    $s_image_tmp = $_FILES['image']['tmp_name'];
    $s_image = time().'_'.$s_image;

    if(isset($_POST['numberphone'])){
        $s_numberphone = $_POST['numberphone'];
    }
    if(isset($_POST['email'])){
        $s_email = $_POST['email'];
    }
    if(isset($_POST['address'])){
        $s_address = $_POST['address'];
    }
    if(isset($_POST['position'])){
        $s_position = $_POST['position'];
    }
    if(isset($_POST['cccd'])){
        $s_cccd = $_POST['cccd'];
    }
    if(isset($_POST['level'])){
        $s_level = $_POST['level'];
    }
    if(isset($_POST['salary'])){
        $s_salary = $_POST['salary'];
    }
    if(isset($_POST['id'])){
        $s_id = $_POST['id'];
    }
    

    if($s_id == ''){
         // insert
        $sql = "INSERT INTO `employee`(`nv_fullname`, `nv_age`, `nv_image`, `nv_numberphone`,`nv_email`, `nv_address`, `nv_position`,  `nv_cccd`, `nv_level`, `nv_salary`) VALUES ('$s_fullname', '$s_age', '$s_image', '$s_numberphone', '$s_email', '$s_address', '$s_position', $s_cccd, '$s_level', '$s_salary')";     
    }else{
       // update
        if(!empty($_POST['image']) && !empty($_POST['position'])){
            
            $sql = "update employee set nv_fullname = '$s_fullname', nv_age = '$s_age', nv_image = '$s_image',
                nv_numberphone = '$s_numberphone', nv_email = '$s_email', nv_address = '$s_address', nv_position = '$s_position', nv_cccd = '$s_cccd',nv_level = '$s_level', nv_salary = '$s_salary' where nv_id=" .$s_id;
        }else{
            $sql = "update employee set nv_fullname = '$s_fullname', nv_age = '$s_age',  nv_numberphone = '$s_numberphone', nv_email = '$s_email', nv_address = '$s_address', nv_cccd = '$s_cccd',nv_level = '$s_level', nv_salary = '$s_salary' where nv_id=" .$s_id;
        }
    }
    move_uploaded_file($s_image_tmp, 'uploads/'.$s_image);
    execute($sql);  
    header('location: home.php');
    die();

}

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
                                <p class="title">Nhân viên </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="phongban.php" class="nav-link">
                                <span class="icon">
                                    <i class="fab fa-black-tie"></i>
                                </span>
                                <p class="title">Chức vụ</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="chamcong.php" class="nav-link">
                                <span class="icon">
                                    <i class="far fa-clipboard "></i>
                                </span>
                                <p class="title">Đánh giá</p>
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
                            <h1>Nhân viên</h1>
                        </div>
                        <div class="col-sm-6"> <!-- menu điều hướng nằm ngang -->
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">
                                    <a href="home.php">Home</a>
                                </li>
                                <li class="breadcrumb-item">Nhân viên</li>
                            </ol>
                        </div> 
                        
                    </div>
                </div>
            </div>
                        
                    <form method="post" style="padding: 20px" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Họ tên</label>
                                    <input type="number" name="id" value="<?=$id?>" style="display: none;">
                                    <input type="text" required class="form-control" name="fullname" placeholder="Nhập họ và tên" id="name" value="<?=$s_fullname?>">
                                </div>    
                                 <div class="form-group">
                                    <label>Ảnh</label>
                                    <input type="file" class="form-control" name="image" placeholder="Nhập ảnh" id="image" >
                                    <img src="uploads/<?php echo $s_image ?>" width = "100px" style = "margin-top: 8px"">
                                </div> 

                             <div class="form-group">                       
                                 <label>Tuổi</label>
                                 <input type="number" required class="form-control" name="age" placeholder="Nhập tuổi" id="dob" value="<?=$s_age?>">
                             </div>                
                                 <div class="form-group">                                   
                                     <label>Số điện thoại</label>
                                     <input type="text" required class="form-control" name="numberphone" placeholder="Nhập số điện thoại" id="phone" value="<?=$s_numberphone?>">
                                 </div>                              
                                 <div class="form-group">
                                     
                                     <label>Email</label>
                                     <input type="mail" required class="form-control" name="email" placeholder="Nhập email" id="email" value="<?=$s_email?>">
                                 </div>                            
                                                        
                            </div>

                            <div class="col-md-6">
                                 <div class="form-group">
                                     <label>Quê quán</label>
                                     <input type="text" required class="form-control" name="address" placeholder="Nhập quê quán" id="hometown" value="<?=$s_address?>">                       
                                 </div>   
                                  <div class="form-group">
                                     <label for="position" >Chức vụ</label>
                                        <div >
                                        <select  class="form-control" name="position" id="position" required>
                                        <option  selected>
                                            <?php
                                            if($id != ''){
                                                echo $s_position;
                                            } else{
                                                echo "Chọn nhân viên";
                                            }  
                                        ?></option>
                                        <?php
                                        include('./includes/conn.php');
                                        $sql = "SELECT * FROM position";
                                        $query = $conn->query($sql);
                                        while($prow = $query->fetch_assoc()){
                                        echo "
                                            <option value='".$prow['pos_id']."'>".$prow['pos_name']."</option>
                                        ";
                                        }
                                        ?>
                                        </select>
                                     </div>
                                </div> 
                                
                                <div class="form-group" style="margin-top: 38px;">                                   
                                    <label>Số CCCD</label>
                                    <input type="text"required class="form-control" name="cccd" placeholder="Nhập số CCCD" id="id" value="<?=$s_cccd?>">
                                </div>                                  
                                 <div class="form-group">
                                     <label>Trình độ</label>
                                     <input type="text"required class="form-control" name="level" placeholder="Nhập trình độ" id="level" value="<?=$s_level?>">
                                 </div>   
                                 <div class="form-group">
                                     <label>Lương</label>
                                     <input type="text"required class="form-control" name="salary" placeholder="Nhập lương" id="salary" value="<?=$s_salary?>">
                                 </div>                         
                            </div>    
                        </div>
                        <button class="btn btn-success" >Lưu</button>
                    </form>
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