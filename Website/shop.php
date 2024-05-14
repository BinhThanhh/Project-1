<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/shop.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery.min.js"></script>
    <link rel="shortcut icon" href="images/UI_NPCTopIcon_Homeworld_Djinn.png" />
    <title>Giỏ hàng</title>
</head>
<body>
    <header id="header" class="p-3 mb-2 bg-primary bg-gradient text-primary-emphasis">
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
                            <button onclick="window.location.href = 'index.php'" class = "mp btn btn-outline-light">Trang chủ</button>
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
                            <button id="shop" onclick="window.location.href = 'shop.php'" class="btn btn-warning">
                                <center>
                                    <img style="width: 70%; margin-top:-20%;" src="images/UI_Icon_Shop.png" alt="">
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
    <section>
        <div style="margin-top: 3%; margin-bottom: 3%; margin-left: 2%;">
            <h1>
                Giỏ hàng
            </h1>
        </div>
        <div id="main" class="container" style="margin-bottom: 5%; background-color: rgb(236, 236, 236); height: 50px;">
            <div class="row">
                <div class="col-lg-6">
                    <h6>
                        Sản phẩm
                    </h6>
                </div>
                <div class="col-lg-2 text-center">
                    <h6>
                        Đơn giá
                    </h6>
                </div>
                <div class="col-lg-2 text-center">
                    <h6>
                        Số lượng
                    </h6>
                </div>
                <div class="col-lg-2 text-center">
                    <h6>
                        Số tiền
                    </h6>
                </div>
            </div>
        </div>
        <div id="main-1" class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-2">
                                    <img src="images/luu-niem/lotchuot.jpg" alt="">
                                </div>
                                <div class="col-lg-6">
                                    <h6>Miếng Lót Chuột Genshin Impact</h6>
                                </div>
                                <div class="col-lg-4">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                          Action
                                        </button>
                                        <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">Action</a></li>
                                          <li><a class="dropdown-item" href="#">Another action</a></li>
                                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                                          <li><hr class="dropdown-divider"></li>
                                          <li><a class="dropdown-item" href="#">Separated link</a></li>
                                        </ul>
                                      </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 text-center">
                            <h6 style="color: red;" name="count">
                                24.000đ
                            </h6>
                        </div>
                        <div class="col-lg-2" style="margin-left:3%;">
                            <div class="row">
                                <div class="col-lg-2">
                                    <button id="down" class="btn-down btn btn-secondary" onclick="handelDown()">
                                        <img style="width: 140%; margin-left: -3px; margin-top: -5px;" src="images/UI_IconSmall_Prev.png" alt="">
                                    </button>
                                </div>
                                <div class="col-lg-4">
                                    <input id="soluong" type="text" name="soluong" value="1">
                                </div>
                                <div class="col-lg-2">
                                    <button id="up" class="btn-up btn btn-secondary" onclick="handelUp()">
                                        <img style="width: 140%; margin-left: -2px; margin-top: -5px;" src="images/UI_IconSmall_Next.png" alt="">
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <h6 id="total"></h6>
                        </div>
                    </div>        
        </div>
    </section>
    <?php
        include('master/footer.php');
    ?>
</body>
</html>
<script src="js/bootstrap.js"></script>
<script>
    //Nút + - số lượng
    const Result = document.getElementById('soluong') //lấy element id

    let soLuong = Result.value; //Lấy số lượng
    //render ra HTMl
    function render(soLuong) {
        Result.value = soLuong
    }
    function handelUp(){
        soLuong++
        render(soLuong)
    }
    function handelDown(){
        if(soLuong > 1) {
            soLuong--
            render(soLuong)
        }
    }

    Result.addEventListener('input', () =>{
        soLuong = Result.value
        soLuong = parseInt(soLuong)
        soLuong = isNaN(soLuong) ? 1 : soLuong
        soLuong = soLuong === 0 ? 1 : soLuong
    })
    const resultElement = document.getElementById('total');
    soLuong.addEventListener('change', () => {
        const number = Result.value
        const result = number * 24000
        resultElement.textContent = result
    });
</script>