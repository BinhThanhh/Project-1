<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/product-detail.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery.min.js"></script>
    <link rel="shortcut icon" href="images/UI_NPCTopIcon_Homeworld_Djinn.png" />
    <title>Chi tiết sản phẩm</title>
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
                            <button onclick="window.location.href = 'index.html'"" class = "mp btn btn-outline-light">Trang chủ</button>
                        </div>
                        <div class="col-lg-3">
                            <button onclick="window.location.href = 'item.html'"" class = "mp btn btn-outline-light">Vật phẩm</button>
                        </div>
                        <div class="col-lg-3">
                            <button onclick="window.location.href = 'souvenir.html'"" class = "mp btn btn-outline-light">Lưu niệm</button>
                        </div>
                        <div class="col-lg-3">
                            <button onclick="window.location.href = 'account.html'"" class = "mp btn btn-outline-light">Tài khoản</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-2">
                            <button id="shop" onclick="window.location.href = 'shop.php'" class="btn btn-secondary">
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
    <div id="main" class="container">
        <div class="row">
            <div id="product" class="col-lg-5 border-end border-danger">
                <center>
                    <img id="img-product" src="images/character/sangonomiya-kokomi.png" alt="">
                </center>
            </div>
            <div class="col-lg-7">
                <div id="main-product" style="margin-left: 4%;">
                    <h3>Character - Sangonomiya Kokomi</h3>
                    <div class="row">
                        <div class="col-lg-2 border-end border-black text-center">
                            <h6>3</h6>
                            <h6>Đã Bán</h6>
                        </div>
                        <div class="col-lg-2 text-center">
                            <h6>1</h6>
                            <h6>Đánh Giá</h6>
                        </div>
                    </div>
                    <div id="cost-main">
                        <div id="cost">
                            <h4>200.000.000đ</h4>
                        </div>
                    </div>
                    <div style="margin-top:5%;" class="row">
                        <div class="col-lg-2">
                            <h6>Vận chuyển: </h6>
                        </div>
                        <div class="col-lg-10">
                            <img style="display: inline; width: 5%;" src="images/UI_GrowFlowersDonate_GiveIcon.png" alt="">
                            <h6 style="padding-left: 2%;">Miễn phí vận chuyển và được kiểm hàng.</h6>
                        </div>
                        <div style="margin-top: 10%;">
                            <div class="row">
                                <div class="col-lg-2">
                                    <h6>Số lượng</h6>
                                </div>
                                <div class="col-lg-2">
                                    <button id="down" class="btn-down btn btn-secondary" onclick="handelDown()">
                                        <img style="width: 140%; margin-left: -3px; margin-top: -5px;" src="images/UI_IconSmall_Prev.png" alt="">
                                    </button>
                                </div>
                                <div class="col-lg-2">
                                    <input id="soluong" type="text" name="soluong" value="1">
                                </div>
                                <div class="col-lg-2">
                                    <button id="up" class="btn-up btn btn-secondary" onclick="handelUp()">
                                        <img style="width: 140%; margin-left: -2px; margin-top: -5px;" src="images/UI_IconSmall_Next.png" alt="">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 5%;" class="row">
                        <div class="col-lg-5">
                            <!--Nút thêm vào giỏ-->
                            <button style="width: 80%; height: 50px;" type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                <img style="width: 15%;" src="images/UI_Icon_Shop.png" alt="">
                                Thêm vào giỏ hàng
                            </button>
                            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel1">Thêm vào giỏ hàng</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          Thêm vào giỏ hàng thành công!
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Xác nhận</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <!--Nút đặt hàng-->
                            <div style="margin-left:-60px;">
                                <!-- Button trigger modal -->
                                <button style="width: 70%; height: 50px;" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Đặt hàng
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Xác nhận đặt hàng</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                              Bạn có xác nhận đặt hàng không?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Hủy</button>
                                                <button id="exampleModal" type="button" class="btn btn-success" data-bs-dismiss="modal" data-bs-toggle="modal" onclick="confirmed()">Xác nhận</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer" class="bg bg-black text-white footer">
        <div class="container">
            <center>
                <img src="images/logo-GI.png" alt="">
            </center>
        </div>
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-5"></div>
                <div class="col-lg-4" style="margin-left: -50px; margin-top: 5px;">
                    <nav class="navbar navbar-expand-lg">
                        <div class="collapse navbar-collapse" id="navbarNav">
                          <ul class="navbar-nav">
                            <li class="nav-item">
                              <a class="nav-link" href="https://genshin.hoyoverse.com/en/company/privacy">Privacy Policy</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="https://genshin.hoyoverse.com/en/company/terms">Terms of Service</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="https://www.hoyoverse.com/about-us?utm_source=genshin&utm_medium=footer">About Us</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="mailto:genshin_cs@hoyoverse.com">Contact Us</a>
                            </li>
                          </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
        <div class="container">
            <div>
                <center>
                    <img style="width: 16%;" src="images/warning-age.png" alt="">
                </center>
            </div>
        </div>
        <div class="container">
            <div class="text-center">
                <p class="text-footer">PlayStation Family Mark," "PS5 logo" and "PS4 logo" are registered trademarks or trademarks of Sony Interactive Entertainment Inc.<br>Epic, Epic Games, Epic Games Store, the Epic Games Store logo, and Epic Online Services are trademarks and/or registered trademarks of Epic Games. All other trademarks are the property of their respective owners.</p>
            </div>
        </div>
        <div class="container">
            <center>
                <img style="width: 25%;" src="images/logo-hoyoverse.png" alt="">
            </center>
        </div>
        <div class="container text-center">
            <p style="font-size: 75%; margin-top: 35px; margin-bottom: 0px; padding-bottom: 25px;">Copyright © COGNOSPHERE. All Rights Reserved.</p>
        </div>
        <div></div>
    </footer>
</body>
<script src="js/bootstrap.js"></script>
<script>
    function confirmed() {
        alert("Bạn đã đặt hàng thành công!")
    }
</script>
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
</script>
<script>
    //Nút đặt hàng & thêm vào giỏ
    const myModal = document.getElementById('myModal')
    const myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', () => {
    myInput.focus()
    })
</script>
</html>

<!--voucher

    <div class="btn-group" role="group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      Dropdown
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Dropdown link</a></li>
      <li><a class="dropdown-item" href="#">Dropdown link</a></li>
    </ul>
  </div>
-->