
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
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
                            <h1>Đánh giá nhân viên trong tháng</h1>
                        </div>
                        <div class="col-sm-6"> <!-- menu điều hướng nằm ngang -->
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item">Đánh giá</li>
                            </ol>
                        </div> 
                        
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
 
                <form action="chamcong.php" method="post">
 
                
 
                <div style="margin: 16px 0;">
                    <label>Mã nhân viên</label>
                    <input type="text" name="id" placeholder="Nhập mã nhân viên">
                </div>
                <div class="row">
                
                <div style="margin: 0 16px ;" class="rateyo" id= "rating"
                    data-rateyo-rating="4"
                    data-rateyo-num-stars="5">
                    //data-rateyo-score="3"
                </div>
                <span class='result' >0</span>
                <input type="hidden" name="rating">
                </div>
                
 
                
 
                </div>
 
                <button class="btn btn-success" style="margin-top: 16px;">Thêm</button>
 
                </form>
                </div>
                </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
 
<script>
 
 
    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            // $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('Xếp hạng : '+ rating );
            $(this).parent().find('input[name=rating]').val(rating); 
        });
    });
 
</script>

<?php
require './includes/conn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $id = $_POST["id"];
    $rating = $_POST["rating"];
 
    $sql = "update employee set nv_rate = '$rating' where nv_id =" .$id;
    if (mysqli_query($conn, $sql))
    {
        echo "Đánh giá nhân viên thành công!";
    }
    else
    {
        echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
    </div>
    
        
    <script type="text/javascript">
        function toggleMenu(){
            let sidebar = document.querySelector('.sidebar')
            sidebar.classList.toggle('active')
        }
    </script>
</body>
</html>