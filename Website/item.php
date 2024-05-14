<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/item.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="shortcut icon" href="images/UI_NPCTopIcon_Homeworld_Djinn.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery.min.js"></script>
    <title>Genshin Impact - Vật phẩm</title>
</head>
<body id="body">
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
                            <button onclick="window.location.href = 'main.php'" class = "mp btn btn-outline-light">Trang chủ</button>
                        </div>
                        <div class="col-lg-3">
                            <button onclick="window.location.href = 'item.php'" class = "mp btn btn-warning">Vật phẩm</button>
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
                            <button onclick="window.location.href = 'index.html'" class = "main-page btn btn-info text-end" style="margin-right: 5%">Đăng nhập</button>
                            <button onclick="window.location.href = 'index.html'" class = "main-page btn btn-success text-end">Đăng kí</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="main">
        <center>
            <img src="images/UI_MarkSwitch_GoldenAppleIsles.png" alt="">
        </center>
        <p>Genshin Impact - Vật Phẩm</p>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="p-3 mb-2 bg-white text-dark bg-gradient" style="--bs-bg-opacity: .5; height: 400px;">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="p-3 mb-2 bg-white text-dark bg-gradient" style="--bs-bg-opacity: .5; height: 400px;">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="p-3 mb-2 bg-white text-dark bg-gradient" style="--bs-bg-opacity: .5; height: 400px;">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="p-3 mb-2 bg-white text-dark bg-gradient" style="--bs-bg-opacity: .5; height: 400px;">
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 2%; margin-bottom: 5%;">
            <div class="row">
                <div class="col-lg-3">
                    <div class="p-3 mb-2 bg-white text-dark bg-gradient" style="--bs-bg-opacity: .5; height: 400px;">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="p-3 mb-2 bg-white text-dark bg-gradient" style="--bs-bg-opacity: .5; height: 400px;">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="p-3 mb-2 bg-white text-dark bg-gradient" style="--bs-bg-opacity: .5; height: 400px;">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="p-3 mb-2 bg-white text-dark bg-gradient" style="--bs-bg-opacity: .5; height: 400px;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
        include('master/footer.php');
    ?>
</body>
<script src="js/bootstrap.js"></script>
</html>