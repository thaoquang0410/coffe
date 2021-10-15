<?php 
require_once('./includes/dbhelp.php');
$s_name = $s_sl = '';
if(!empty($_POST)){ 
    $s_id = '';
    if(isset($_POST['pb_name'])){
        $s_name = $_POST['pb_name'];
    }
     if(isset($_POST['pb_sl'])){
        $s_sl = $_POST['pb_sl'];
    }
    if(isset($_POST['id'])){
        $s_id = $_POST['id'];
    }
    if($s_id == ''){
         // insert
        $sql = "INSERT INTO `position`(`pos_name`, `pos_sl`) VALUES ('$s_name', '$s_sl')";     
    }else{
       // update
        $sql = "UPDATE `position` SET `pos_name`='$s_name', `pos_sl`='$s_sl'  WHERE pos_id=" .$s_id;
    }
    echo $sql;
    execute($sql);  
    header('location: home.php');
    die();
    

}

$id = '';
if (isset($_GET['id'])) {
    $id          = $_GET['id'];
    $sql         = "SELECT * FROM `position` WHERE pos_id = ".$id;
    $posList = executeResult($sql);
    if ($posList != null && count($posList) > 0) {
        $st = $posList[0];
        $s_name = $st['pos_name'];
        $s_sl = $st['pos_sl'];
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
                            <h1>Chức vụ</h1>
                        </div>
                        <div class="col-sm-6"> <!-- menu điều hướng nằm ngang -->
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item">Chức vụ</li>
                            </ol>
                        </div> 
                        
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                   
                  

                    <form method="post"  style="padding: 20px">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tên chức vụ</label>
                                    <input type="number" name="id" value="<?=$id?>" style = "display: none;">
                                    <input type="text" required class="form-control" name="pb_name" placeholder="Nhập tên chức vụ" id="name
                                    " value="<?=$s_name?>">
                                </div>     
                                <div class="form-group">
                                    <label>Số lượng</label>
                                    <input type="number" required class="form-control" name="pb_sl" placeholder="Nhập số lượng" id="sl
                                    " value="<?=$s_sl?>">
                                </div>                                                               
                            </div>    
                        </div>
                        <button class="btn btn-primary" type="submit">Lưu</button>
                    </form>
                </div>
            </div>
        </div>
    <!-- footer -->

    <script type="text/javascript">
        function toggleMenu(){
            let sidebar = document.querySelector('.sidebar')
            sidebar.classList.toggle('active')
        }
    </script>
</body>
</html>