<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="shortcut icon" href="images/UI_NPCTopIcon_Homeworld_Djinn.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery.min.js"></script>
    <title>Genshin Impact - miHoYo shop</title>
</head>
<body id="body">

<?php
    if(isset($_GET['page_layout'])) {
        switch($_GET['page_layout']) {
            case 'item': include('item.php'); break;
            case 'account': include('account.php'); break;
            case 'souvenir': include('souvenir.php'); break;
        }
    }
?>

<header id="header" class="p-3 mb-2 bg-primary bg-gradient text-primary-emphasis" style="--bs-bg-opacity: .5;">
        <div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-4">
                            <center>
                                <img style="width: 45%;" src="images/UI_HomeworldLevel_Image_4.png" alt="">
                            </center>
                        </div>
                        <div class="col-lg-8">
                            <nav class="navbar">
                            <div class="container-fluid">
                                <form class="d-flex" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                    <button id="search" class="btn btn-outline-success" type="submit"><img src="images/UI_Icon_Search.png" alt=""></button>
                                  </form>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div id="button-1" class="row">
                        <div class="col-lg-3">
                            <button onclick="window.location.href = 'main.php'" class = "mp btn btn-warning">Trang chủ</button>
                        </div>
                        <div class="col-lg-3">
                            <button onclick="window.location.href = 'item.php'" class = "mp btn btn-outline-light">Vật phẩm</button>
                        </div>
                        <div class="col-lg-3">
                            <button onclick="window.location.href = 'souvenir.php'" class = "mp btn btn-outline-light">Lưu niệm</button>
                        </div>
                        <div class="col-lg-3">
                            <button onclick="window.location.href = 'account.php'" class = "mp btn btn-outline-light">Tài khoản</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-2">
                            <button id="shop" onclick="window.location.href = 'shop.php'" class="btn btn-secondary">
                                <center>
                                    <img style="width: 70%;" src="images/UI_Icon_Shop.png" alt="">
                                </center>
                            </button>
                        </div>
                        <div class="col-lg-1"></div>
                        <div id="button-2" class="col-lg-8">
                            <button onclick="window.location.href = 'Login.php'" class = "main-page btn btn-info text-end" style="margin-right: 5%">Đăng nhập</button>
                            <button onclick="window.location.href = 'signup.php'" class = "main-page btn btn-success text-end">Đăng kí</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="main">
        <div id="search">

        </div>
            <div style="margin-top: -1%;">
                <center>
                    <p style="padding-top: 7%;"> </p>
                    <img style="padding-bottom: 7%;" src="images/UI_Img_Sign_Common.png" alt="">
                </center>
            </div>
        <div>
            <p id="p" class="text-center text-white">Chào mừng Nhà Lữ Hành đến với cửa hàng trực tuyến của miHoYo - tựa game Genshin Impact<br></p>
            <p id="p" class="text-center text-white">Đây là cửa hàng trực tuyến giúp các Nhà Lữ Hành ở ngoài máy chủ Trung Quốc có thể mua những vật phẩm, đồ lưu niệm, tài khoản liên quan tới Genshin Impact</p>
        </div>
        <div id="title" class="text-center p-3 mb-2 bg-white text-dark bg-gradient" style="--bs-bg-opacity: .5;">
            Vật phẩm HOT 🔥
        </div>
        <div id="div-popular" class="container">
            <div id = "popular" class="row">
                <div class="col-lg-4">
                    <div id="bg" class="p-3 mb-2 bg-white text-dark bg-gradient" style="--bs-bg-opacity: .5; height: 780px;">
                        <div class="box">
                            <center>
                                <img id="character" src="images/character/eula.png" alt="">
                            </center>
                        </div>
                        <p id="name-char">Eula - Vũ Điệu Bọt Biển</p>
                        <div class="box-des">
                            <p id="des">Eula mang tiếng hậu duệ của quý tộc cũ từng áp bức nhân dân Mondstadt, thanh danh trong mắt người dân thành phố tự do bị ô uế. Giữa một bên là gia tộc và một bên là Mondstadt, cô lựa chọn đi theo thành phố tự do, gia nhập Đội Kỵ Sĩ Tây Phong và trở thành đội trưởng Đội Du Kích.</p>
                        </div>
                        <a href="product-detail.php" class="btn btn btn-info text-end ">Learn more</a>
                    </div>
                </div>
                <div id="bg" class="col-lg-4">
                    <div class="p-3 mb-2 bg-white text-dark bg-gradient" style="--bs-bg-opacity: .5; height: 780px;">
                        <div class="box">
                            <center>
                                <img id="character" src="images/character/yae-miko.png" alt="">
                            </center>
                        </div>
                        <p id="name-char">Yae Miko - Tiếu Ngạo Thế Gian</p>
                        <div class="box-des">
                            <p id="des">Yae Miko là đền chủ Đền Narukami và là chủ của Nhà Xuất Bản Yae.</p>
                        </div>
                        <a href="product-detail.html" class="btn btn btn-info text-end ">Learn more</a>
                    </div>
                </div>
                <div id="bg" class="col-lg-4">
                    <div class="p-3 mb-2 bg-white text-dark bg-gradient" style="--bs-bg-opacity: .5; height: 780px;">
                        <div class="box">
                            <center>
                                <img id="character" src="images/character/hu-tao.png" alt="">
                            </center>  
                        </div>
                        <p id="name-char">Hu Tao - Tuyết Tễ Mai Hương</p>
                        <div class="box-des">
                            <p id="des">Cô có thiên phú thơ văn và luôn khoác lên mình vẻ ngoài khôi hài, lập dị. Tuy vậy, đằng sau vẻ ngoài ấy là trọng trách của một đường chủ thứ 77 của Vãng Sinh Đường, luôn phải cử hành nghi lễ đưa người say giấc ngàn thu xuống suối vàng bằng tất cả sự thành kính và nghiêm trang.</p>
                        </div>
                        <a href="product-detail.html" class="btn btn btn-info text-end ">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="title" class="text-center p-3 mb-2 bg-white text-dark bg-gradient" style="--bs-bg-opacity: .5;">
            Quà lưu niệm 💎
        </div>
        <div id="div-popular" class="container">
            <div id = "popular" class="row">
                <div class="col-lg-4">
                    <div id="bg" class="p-3 mb-2 bg-white text-dark bg-gradient" style="--bs-bg-opacity: .5; height: 780px;">
                        <div class="box">
                            <center>
                                <img id="character" src="images/luu-niem/fanbook-jp.jpg" alt="">
                            </center>
                        </div>
                        <p id="name-char">Genshin Impact Fan Book</p>
                        <div class="box-des">
                            <p id="des">Thương hiệu: FAHASA<br>Nhập khẩu/ trong nước: Trong nước<br>Ngôn ngữ: Tiếng Anh<br>Loại nắp: Bìa cứng<br>Loại phiên bản: Phiên bản hàng năm<br>Nhà Phát Hành: Shufu<br>Năm xuất bản: 2023</p>
                        </div>
                        <a href="product-detail.html" class="btn btn btn-info text-end ">Learn more</a>
                    </div>
                </div>
                <div id="bg" class="col-lg-4">
                    <div class="p-3 mb-2 bg-white text-dark bg-gradient" style="--bs-bg-opacity: .5; height: 780px;">
                        <div class="box">
                            <center>
                                <img id="character" src="images/luu-niem/mockhoa.jpg" alt="">
                            </center>
                        </div>
                        <p id="name-char">Anime Genshin Impact Móc khóa</p>
                        <div class="box-des">
                            <p id="des">Chất liệu: Acrylic<br>Màu sắc: Như được hiển thị<br>Kích thước: Hình ảnh tham khảo<br>Gói bao gồm: 1 CÁI</p>
                        </div>
                        <a href="product-detail.html" class="btn btn btn-info text-end ">Learn more</a>
                    </div>
                </div>
                <div id="bg" class="col-lg-4">
                    <div class="p-3 mb-2 bg-white text-dark bg-gradient" style="--bs-bg-opacity: .5; height: 780px;">
                        <div class="box">
                            <center>
                                <img id="character" src="images/luu-niem/lotchuot.jpg" alt="">
                            </center>  
                        </div>
                        <p id="name-char">Miếng Lót Chuột genshin impact</p>
                        <div class="box-des">
                            <p id="des">Kích thước sản phẩm<br>700 * 300 * 3mm<br>800 * 300 * 3mm<br>900 * 400 * 3mm<br>1000 * 500 * 3mm<br>300 * 250 * 3mm.</p>
                        </div>
                        <a href="product-detail.html" class="btn btn btn-info text-end ">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
        include('master/footer.php');
    ?>
</body>
<script>
    
</script>
<script src="js/bootstrap.js"></script>
</html>