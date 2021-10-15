<?php
    include("./includes/conn.php");
    session_start();
    // Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
    if (isset($_POST["login"])) {
        // lấy thông tin người dùng
        $username = $_POST["username"];
        $password = md5($_POST["password"]);
        
        if ($username == "" || $password =="") {
            echo "username hoặc password bạn không được để trống!";
        }else{
            $sql = "select * from admin where username = '$username' and password = '$password' ";
            $query = mysqli_query($conn,$sql);
            $num_rows = mysqli_num_rows($query);
            if ($num_rows==0) {
                echo "Tên đăng nhập hoặc mật khẩu không đúng !";
            }else{
                //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
                $_SESSION['username'] = $username;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                header('location: home.php');
            }
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
    <link href="./asset/style.css" rel="stylesheet">
    <link rel="stylesheet" href="./asset/reponsive.css">  
</head>
<body>
    <div class="wrapper">
        <div class="modal-dialog">
            <div class="col-sm-8 main-section">
                <div class="modal-content">
                    <div class="col-12 user-img">
                        <img src="../asset/img/avatar5.png">
                    </div>
                    <div class="col-12 user-name">
                        <h1 style="color: #fff;margin-left: 46px;">User Login</h1>
                    </div>
                    <div class="form-input col-12">
                        <form action="loginForm.php" method="post" style="padding-bottom: 40px;">
                            <div class="form-group">                      
                                <label>Username</label>                             
                                <input type="text" class="form-control" required name="username">                      
                            </div>
                            <div class="form-group">                      
                                <label>Password</label>                            
                                    <input type="password" class="form-control" required name="password">    
                            </div>
                            <button class="btn btn-success col-12" name="login" type="submit">Login</button>                                                
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div> 
    <style>
        body{
            background: url('../asset/img/bg.jpg') fixed center;
            max-height: auto;
            background-repeat: no-repeat;
            background-size: cover;
            overflow-y: hidden;
        }
        .wrapper form label{
            color: #fff;
        }
        .user-img{
            margin-top: -50px;
            margin-left: 80px;
        }
        .user-img img{
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }
        .main-section{
            margin: 0 auto;
            margin-top: 150px;
        }
        .modal-content{
            background-color: #284f78;
            opacity: 0.9;
        }
    </style>
</body>
</html>