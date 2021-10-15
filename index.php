<?php 
    require_once('./admin/includes/dbhelp.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitsuné Café</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">       
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./asset/style2.css">
    <link rel="stylesheet" href="./asset/reponsive2.css">
</head>

<body>
    <div class="wrapper">
        <!-- header -->
        <nav class="navbar navbar-expand-md navbar-light bg-light">   
                <!-- left header -->
                    <!-- brand -->
                    <a href="" class="navbar-brand">
                     <img src="./asset/img/logo2.png" alt="">
                    </a>
                    <!-- collapse bbutton -->
                    <button class="navbar-toggler" onclick="toggleMenu()">
                        <i class="fas fa-bars"></i>    
                    </button>

                    <div class="navbar-collapse">
                        <ul class="navbar-nav">
                            <li class="navbar-item">
                                <a href="#" class="nav-link">Trang chủ</a>
                            </li>
                            <li class="navbar-item">
                                <a href="#introduce" class="nav-link">Giới thiệu</a>
                            </li>
                            <li class="navbar-item">
                                <a href="#product" class="nav-link">Sản phẩm</a>
                            </li>
                            <li class="navbar-item">
                                <a href="#staff" class="nav-link">Đội ngũ nhân viên</a>
                            </li>
                            <li class="navbar-item">
                                <a href="#lh" class="nav-link">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                <!-- right header -->
                    <div class="header-right">
                        <i class="fas fa-search"></i>
                        <span style="padding: 0 8px;">|</span>
                        <a href="./admin" > <i class="fas fa-user" style="color: #707070;"></i> </a>
                        <span style="padding: 0 8px;" >|</span>
                        
                        <i class="fas fa-shopping-bag"></i>
                    </div>
        </nav>
            <!-- wallpaper -->
        <div class="wallpaper">
            <img src="./asset/img/wallpaper.jpg" alt="">
        </div>

        <!-- introduce -->
        <div id="introduce" class="container-fluid intro-section row pd-64">
            <div class="intro-left col-lg-6 ta-center">
                <h2 class="large-heading toUpcase">Chúng tôi là</h2>
                <span class="mini-heading">Kitsuné Coffee</span>
                <div class="section-times">
                    Thứ hai đến Thứ bảy
                    <b>7:30am - 11:00pm</b>
                    | Hotline: 
                    <a class="hover-style" href="tel: 0968157224"> 18006789 </a>
                </div>
                <p class="intro-desc">Café Kitsuné tôn vinh niềm vui khi thưởng thức một ly cà phê đậm đà, thơm ngon và chất 
                    lượng tại những địa điểm vừa hiện đại, phong cách vừa mang vẻ đẹp bình dị, mộc mạc.</p>
            </div>

            <div class="intro-right col-lg-6">
                <img src="./asset/img/section-img.png" alt="coffee" class="section-img">
            </div>
        </div>

        <!--  product -->
        <div id="product" class="menu pd-64 container-fluid">
            <h2 class="large-heading toUpcase ta-center">Menu hôm nay</h2>
            <span class="mini-heading ta-center">Hôm nay có gì?</span>   
            <div class="menu-section row">
                <div class="menu-left container col-lg-6">
                    <!-- pd-1 -->
                    <img src="./asset/img/pd-1.jpg" alt="" class="product-img">
                    <div class="pd-group">
                        <div class="pd-section">
                            <h4 class="pd-section__title hover-style">Cà phê Americano</h4>
                            <span class="pd-section__price">
                                100.000 ₫
                            </span>
                        </div>
                    <p class="pd-desc">Ly cà phê mang hương vị đậm đà, thơm ngon được chọn lọc từ vùng đất Buôn Mê Thuột</p>   
                    </div>
                    <!-- pd-2 -->
                    <img src="./asset/img/pd-2.jpg" alt="" class="product-img">
                    <div class="pd-group">
                        <div class="pd-section">
                            <h4 class="pd-section__title hover-style">Cà phê Latte</h4>
                            <span class="pd-section__price">
                                60.000 ₫
                            </span>
                        </div>
                    <p class="pd-desc">Ly cà phê mang hương vị đậm đà, thơm ngon được chọn lọc từ vùng đất Buôn Mê Thuột</p>   
                    </div>
                    <!-- pd-3 -->
                    <img src="./asset/img/pd-3.jpg" alt="" class="product-img">
                    <div class="pd-group">
                        <div class="pd-section">
                            <h4 class="pd-section__title hover-style">Cà phê đen</h4>
                            <span class="pd-section__price">
                                25.000 ₫
                            </span>
                        </div>
                    <p class="pd-desc">Ly cà phê mang hương vị đậm đà, thơm ngon được chọn lọc từ vùng đất Buôn Mê Thuột</p>   
                    </div>
                    <!-- pd-4 -->
                    <img src="./asset/img/pd-4.jpg" alt="" class="product-img">
                    <div class="pd-group">
                        <div class="pd-section">
                            <h4 class="pd-section__title hover-style">Cà phê Espresso</h4>
                            <span class="pd-section__price">
                                70.000 ₫
                            </span>
                        </div>
                    <p class="pd-desc">Ly cà phê mang hương vị đậm đà, thơm ngon được chọn lọc từ vùng đất Buôn Mê Thuột</p>   
                    </div>
                </div>
    
                <div class="menu-right container col-lg-6">
                    <!-- pd-5 -->
                    <img src="./asset/img/pd-5.jpg" alt="" class="product-img">
                    <div class="pd-group">
                        <div class="pd-section">
                            <h4 class="pd-section__title hover-style">Cà phê Caipirinha</h4>
                            <span class="pd-section__price">
                                50.000 ₫
                            </span>
                        </div>
                    <p class="pd-desc">Ly cà phê mang hương vị đậm đà, thơm ngon được chọn lọc từ vùng đất Buôn Mê Thuột</p>
                    </div>
                    <!-- pd-6 -->
                    <img src="./asset/img/pd-6.jpg" alt="" class="product-img">
                    <div class="pd-group">
                        <div class="pd-section">
                            <h4 class="pd-section__title hover-style">Cà phê Capuchino</h4>
                            <span class="pd-section__price">
                                120.000 ₫
                            </span>
                        </div>
                    <p class="pd-desc">Ly cà phê mang hương vị đậm đà, thơm ngon được chọn lọc từ vùng đất Buôn Mê Thuột</p>   
                    </div>
                    <!-- pd-7 -->
                    <img src="./asset/img/pd7.jpg" alt="" class="product-img">
                    <div class="pd-group">
                        <div class="pd-section">
                            <h4 class="pd-section__title hover-style">Cà phê Trứng</h4>
                            <span class="pd-section__price">
                                40.000 ₫
                            </span>
                        </div>
                    <p class="pd-desc">Ly cà phê mang hương vị đậm đà, thơm ngon được chọn lọc từ vùng đất Buôn Mê Thuột</p>   
                    </div>
                    <!-- pd-8 -->
                    <img src="./asset/img/pd8.jpg" alt="" class="product-img">
                    <div class="pd-group">
                        <div class="pd-section">
                            <h4 class="pd-section__title hover-style">Cà phê Mocha</h4>
                            <span class="pd-section__price">
                                60.000 ₫
                            </span>
                        </div>
                    <p class="pd-desc">Ly cà phê mang hương vị đậm đà, thơm ngon được chọn lọc từ vùng đất Buôn Mê Thuột</p>   
                    </div>
                </div>             
            </div>
        </div>

        <!-- Staff -->
        <div id="staff" class="container-fluid staff-section pd-64">
            <h2 class="large-heading toUpcase ta-center">Kitsuné Staffs</h2>
            <span class="mini-heading ta-center">Luôn luôn đem lại sự thoải mái cho khách hàng!</span>
            <img class="staff-img ta-center" src="./asset/img/staff2.jpg" alt="">
            <h4 class="large-heading toUpcase ta-center">Nhân viên có thành tích tốt trong tháng</h4>
            <div id="slides" class="carousel slide" data-ride="carousel">
                            <ul class="carousel-indicators">
                                <?php 
                                $sql = "SELECT * FROM employee where nv_rate > 3";
                                $staffList = executeResult($sql);
                                $i = 0;
                                foreach($staffList as $st){
                                    $active = '';
                                    if($i == 0){
                                         $active = 'active';
                                    }
                                ?>
                                <li data-target="#slides" data-slide-to="<?= $i ?>" class="<?= $active ?>"></li>
                                <?php $i++; } ?>
                            </ul>
                            <div class="carousel-inner">
                    <?php 
                    $sql = "SELECT * FROM employee where nv_rate > 3";
                    $staffList = executeResult($sql);
                    $i = 0;
                    foreach ($staffList as $st){
                         $active = '';
                                    if($i == 0){
                                         $active = 'active';
                                    }
                    ?>
                                <div class="carousel-item <?= $active ?>">
                                     <div class="card ta-center">
                                        <img class="card-img-staff" src="admin/uploads/<?=$st['nv_image'] ?>">
                                        <div class="card-body">
                                        <h5><?=$st['nv_fullname'] ?></h5>  
                                        </div>
                                    </div>
                                </div>
                                <?php $i++; } ?>
                        </div>
            </div>
        </div>

        <!-- Contact -->
        <div id="lh" class="contact container-fluid pd-64">
            <h2 class="large-heading toUpcase ta-center">Kitsuné Contact </h2>
            <span class="mini-heading ta-center">Drop a note!</span>
            <div class="contact-section row">
                <div class="info-section col-lg-6">
                    <div>
                        <i class="fas fa-map-marker-alt hover-style"></i>
                        Ha Dong, Ha Noi
                    </div>
                    <div>
                        <i class="fas fa-phone hover-style"></i>
                        Phone: 18006789
                    </div>
                    <div>
                        <i class="fas fa-envelope hover-style"></i>
                        Mail:   mail@email.com
                    </div>
                </div>

                <div class="form-place col-lg-6">
                    <form action="">
                        <div class="row">
                            <div class="col-lg-6">
                                <input class="form-input" type="text" required placeholder="Tên của bạn">
                            </div>
                            <div class="col-lg-6">
                             <input class="form-input" type="text" required placeholder="Số điện thoại">
                         </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <input class="form-input" type="text" required placeholder="Giờ đặt bàn">
                            </div>
                        </div>
                        <button class="btn btn-dark contact-btn">
                            Gửi ngay cho chúng tôi
                        </button>
                    </form>
                </div>
            </div>
        </div>


        <!--footer-->
        <div class="footer pd-64">
            <div class="row container-fluid ta-center">
                <div class="footer-map col-lg-6">
                    <img src="./asset/img/map.png" alt="">
                </div>
                <div class="footer-decs col-lg-6 mini-heading">
                    <p>Kitsuné là một chút cảm xúc về Tokyo của chủ quán là một người rất yêu Tolyo, nằm trên một con phố nhỏ của Hà Đông, Hà Nội. Nếu bạn là người thích ngắm hoa, thì ở đây như một vườn hoa cổ tích với hàng trăm loại hoa khác nhau, được bày trí đẹp mắt. Chẳng có gì tuyệt hơn khi ghé quán, 
                        chọn cho mình những góc tĩnh, ngắm hoa, nghe một bản nhạc Lofi và thưởng thức không gian vẫn còn nhộn nhịp ngoài kia.
                    </p>
                </div>
            </div>
            <div class="footer-contact ta-center ">
                <i class="fab fa-facebook-f hover-style"></i>
                <i class="fab fa-youtube hover-style"></i>
                <i class="fab fa-instagram hover-style"></i>
            </div>
            <div class="copy-right ta-center">
                <div>
                    @2021 - Bản quyền thuộc về
                    <span style="color: #e7b45a;">Kitsuné Café</span>
                </div>
                <div>
                    Lập trình bởi 
                    <span style="color: #e7b45a;">Thành Hưng</span>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function toggleMenu(){
            let collapseMenu = document.querySelector('.navbar-collapse')
            collapseMenu.classList.toggle('active')
        }
    </script>
</body>
</html>