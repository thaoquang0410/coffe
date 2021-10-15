<?php 
    require_once('./includes/dbhelp.php');
 ?>
<?php
include('./includes/conn.php');
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['username'])) {
     header('location: loginForm.php');
}
?>
<?php 
        $sql = "SELECT * FROM position";
        $qr1 = executeResult($sql);
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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!-- chart -->
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['positions', 'amount'],
          <?php 
            foreach ($qr1 as $pos) {
             echo"['".$pos['pos_name']."',".$pos['pos_sl']."],";
            }
           ?>
        ]);
        

        var options = {
          title: 'Tỉ lệ số lượng các chức vụ',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
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
                            <a href="logout.php" class="nav-link">
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
                            <h1>Trang chủ</h1>
                        </div>
                        <div class="col-sm-6"> <!-- menu điều hướng nằm ngang -->
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                              
                            </ol>
                        </div> 
                        
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-tittle">Danh sách nhân viên</h3>
                                </div>
                                <div class="card-body">
                                    <div class="dataTables-wrapper">
                                        <div class="row">
                                            <div class="col-sm-12 col col-md-6">
                                                <label >
                                                    Show 
                                                    <select name="ex_length" >
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="-1">All</option>
                                                    </select>
                                                    entries
                                                </label>
                                            </div>
                                            <div class="col-sm-12 col col-md-6">
                                                <div class="dataTables_filter">
                                                    <form method="get">
                                                        <label >
                                                            Search: <input placeholder="Tìm theo tên" name="search_nv" type="text" class="form-control form-control-sm">
                                                        </label>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table class="table table-bordered table-striped table-hover ">
                                                    <thead>
                                                        <tr>
                                                            <th>Mã nhân viên</th>
                                                            <th>Ảnh</th>
                                                            <th>Họ tên</th>
                                                            <th>Tuổi</th>
                                                            <th>Địa chỉ</th>
                                                            <th>Chức vụ</th>
                                                            <th>Lương</th>
                                                            <th>Trình độ</th>
                                                            <th>Thao tác</th>
                                                        </tr>

                                                    </thead>
                                                   <tbody>
                                                   
                                                       <?php 
                                                        if(isset($_GET['search_nv']) && $_GET['search_nv'] != ''){
                                                            $sql = 'SELECT * FROM employee LEFT JOIN position ON position.pos_id=employee.nv_position where nv_fullname like "%'.$_GET['search_nv'].'%" ';
                                                        }else{
                                                            $sql = "SELECT * FROM employee LEFT JOIN position ON position.pos_id=employee.nv_position";
                                                        }        
                                                        $staffList = executeResult($sql);
                                                        foreach ($staffList as $st) {
                                                            echo '<tr>
                                                                <td>'.$st['nv_id'] .'</td>          
                                                                <td>'. '<img src="uploads/'.$st['nv_image'] .'" width = "100px">' .'</td>
                                                                <td>'.$st['nv_fullname'] .'</td>
                                                                <td>'.$st['nv_age'] .'</td>
                                                                <td>'.$st['nv_address'] .'</td>
                                                                <td>'.$st['pos_name'] .'</td>
                                                                <td>'.$st['nv_salary'] .'</td>
                                                                <td>'.$st['nv_level'] .'</td>
                                                                <td>
                                                                <a onclick = \' window.open("detailStaff.php?id='.$st['nv_id'] .'", "_self") \'><button class="btn btn-info">Chi tiết</button></a> 

                                                                <a onclick = \' window.open("nhanvien.php?id='.$st['nv_id'] .'", "_self") \' ><button class="btn btn-warning">Sửa</button></a> 

                                                                <button class="btn btn-danger" onclick="deleteStaff('.$st['nv_id'] .')">Xóa</button> 
                                                                
                                                                </td>

                                                            </tr>';
                                                        }
                                                        ?>
                                                        <script type="text/javascript">
                                                            function deleteStaff(id){
                                                                option = confirm('Bạn có chắc chắn muốn xóa nhân viên này không');
                                                                if(!option){
                                                                    return;
                                                                }
                                                                $.post('deleteStaff.php',{
                                                                    'id' : id
                                                                } , function(data){
                                                                    alert(data)
                                                                    location.reload()
                                                                })

                                                            }
                                                        </script>
                                                   </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-success" onclick="window.open('nhanvien.php', '_self')">Thêm nhân viên</button>
                                    <ul class="pagination ">
                                        <li class="page-item disabled">
                                            <a href="#" class="page-link">Previous</a>
                                        </li>
                                        <li class="page-item active">
                                            <a href="#" class="page-link">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">Next</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-tittle">Danh sách chức vụ</h3>
                                </div>
                                <!-- gg chart -->
                                <div id="piechart_3d" style="width: 1200px; height: 500px;"></div>
                                <div class="card-body">
                                    <div class="dataTables-wrapper">
                                        <div class="row">
                                            <div class="col-sm-12 col col-md-6">
                                                <label >
                                                    Show 
                                                    <select name="ex_length" >
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="-1">All</option>
                                                    </select>
                                                    entries
                                                </label>
                                            </div>
                                            <div class="col-sm-12 col col-md-6">
                                                <div class="dataTables_filter">
                                                    <label >
                                                        Search: <input type="search_pb" placeholder="Nhập theo tên"  class="form-control form-control-sm">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table class="table table-bordered table-striped table-hover ">
                                                    <thead>
                                                        <tr>
                                                            <th>Mã chức vụ</th>                                                 
                                                            <th>Tên chức vụ</th>                                                        
                                                            <th>Thao tác</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody> 
                                                        <?php 
                                                        if(isset($_GET['search_pb']) && $_GET['search_pb'] != ''){
                                                            $sql = 'select * from position where pos_name like "%'.$_GET['search_pb'].'%"';
                                                        }else{
                                                            $sql = 'select * from position';
                                                        }        
                                                        $posList = executeResult($sql);
                                                        foreach ($posList as $st) {
                                                            echo '<tr>
                                                                <td>'.$st['pos_id'] .'</td>          
                                                                <td>'.$st['pos_name'] .'</td>
                                                                <td>                                                               
                                                                <a onclick = \' window.open("phongban.php?id='.$st['pos_id'] .'", "_self") \' ><button class="btn btn-warning">Sửa</button></a> 

                                                                <button class="btn btn-danger" onclick="deletePos('.$st['pos_id'] .')">Xóa</button> 
                                                                
                                                                </td>

                                                            </tr>';
                                                        }
                                                        ?>
                                                         <script type="text/javascript">
                                                            function deletePos(id){
                                                                option = confirm('Bạn có chắc chắn muốn xóa chức vụ này không');
                                                                if(!option){
                                                                    return;
                                                                }
                                                                $.post('deletePos.php',{
                                                                    'id' : id
                                                                } , function(data){
                                                                    alert(data)
                                                                    location.reload()
                                                                })

                                                            }
                                                        </script>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-success" onclick="window.open('phongban.php', '_self')">Thêm chức vụ</button>
                                    <ul class="pagination ">
                                        <li class="page-item disabled">
                                            <a href="#" class="page-link">Previous</a>
                                        </li>
                                        <li class="page-item active">
                                            <a href="#" class="page-link">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">Next</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    
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