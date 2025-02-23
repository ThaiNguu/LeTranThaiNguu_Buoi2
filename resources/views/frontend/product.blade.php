<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <link rel="stylesheet" href="index.css">
    <title>Tất cả sản phẩm</title>
</head>

<body>
    <section class="header">
        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-6 col-md-2 py-1">
                    <a href="index.php">
                        <img src="{{ asset('images/logo.jpg') }}" class="img-fluid" alt="Logo">
                    </a>
                </div>
                <div class="col-12 col-sm-9 d-none d-md-block col-md-5 py-3">
                    <div class="input-group mb-3">
                        <form method="post" action="index.php?option=customer&search=true" name="search">
                            <input name="search" type="text" style=" width:450px;height:40px;"
                                placeholder="Nhập nội dung tìm kiếm" class="btn btn-light text text-primary"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <button style="height:40px;" class="btn btn-warning" type="submit" name="TIM"><i
                                    class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-sm-12 d-none d-md-block col-md-4 text-center py-2">
                    <div class="call-login--register border-bottom">
                        <ul class="nav nav-fills py-0 my-0">

                            <li class="nav-item">
                                <a class="nav-link" href="#">Giỏ hàng</a>
                            </li>

                            <li class="nav-item bg-warning">
                                <a class="nav-link" href="#"><span class="text-light">Đăng nhập</span></a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-6 col-sm-6 col-md-1 text-end py-4 py-md-2">
                    <a href="index.php?option=cart">
                        <div class="box-cart float-end border">
                            <i class="fa fa-shopping-bag " aria-hidden="true"></i>
                            <span id="showcart" class="text-light">

                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-sm bg-warning navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Trang chủ</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="san-pham">Tất cả sản phẩm</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="lien-he">Liên hệ</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown">Danh mục sản phẩm</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Link</a></li>
                                <li><a class="dropdown-item" href="#">Another link</a></li>
                                <li><a class="dropdown-item" href="#">A third link</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Áo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Quần</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Phụ kiện</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <section class="hdl-maincontent py-2">
        <div class="container">
            <div class="row">

                <div class="col-md-3 order-2 order-md-1">
                    <ul class="list-group mb-3 list-category">
                        <li class="list-group-item bg-warning py-3">Danh mục sản phẩm</li>

                        <li class="list-group-item">
                            <a href="#"></a>
                        </li>

                    </ul>
                    <ul class="list-group mb-3 list-brand">
                        <li class="list-group-item bg-warning py-3">Danh mục thương hiệu</li>

                        <li class="list-group-item">
                            <a href="#"></a>
                        </li>

                    </ul>
                    <ul class="list-group mb-3 list-product-new">
                        <li class="list-group-item bg-warning py-3">Sản phẩm mới</li>
                        <li class="list-group-item">
                            <div class="product-item border">
                                <div class="product-item-image">
                                    <a href="#">
                                        <img src="{{ asset('images/sanpham1.jpg') }}" class="img-fluid" alt="Product_New">
                                    </a>
                                </div>
                                <h2 class="product-item-name text-main text-center fs-5 py-1">
                                    <a href="#"></a>
                                </h2>
                                <h3 class="product-item-price fs-6 p-2 d-flex">
                                    <div class="flex-fill"><del></del></div>
                                    <div class="flex-fill text-end text-main"></div>
                                </h3>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-9 order-1 order-md-2">
                    <div class="category-title bg-warning">
                        <h3 class="fs-5 py-3 text-center">Tất cả sản phẩm</h3>
                    </div>
                    <section class="hdl-maincontent py-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 order-2 order-md-1">
                                    <!-- Sidebar code here -->
                                </div>

                                <!-- Filter, sort by, and view type -->
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <label for="filter">Filter:</label>
                                        <select id="filter" class="form-select">
                                            <option selected>Choose...</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="sort">Sort by:</label>
                                        <select id="sort" class="form-select">
                                            <option selected>Choose...</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                        </select>
                                    </div>
                                    <div>
                                        <button class="btn btn-secondary">List view</button>
                                        <button class="btn btn-secondary">Grid view</button>
                                    </div>
                                </div>
                    </section>
                    <div class="product-category mt-3">
                        <div class="row product-list">
                            <!-- Sản phẩm 1 -->
                            <div class="col-6 col-md-3 mb-4">
                                <div class="card">
                                    <img src="{{ asset('images/sanpham1.jpg') }}" class="card-img-top" alt="Product_New"
                                        id="img1">
                                    <div class="card-body">
                                        <h5 class="card-title">Tên sản phẩm</h5>
                                        <p class="card-text">
                                            <s>100000đ</s> 99000đ
                                        </p>
                                        <a href="#" class="btn btn-warning">Xem chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Sản phẩm 2 -->
                            <div class="col-6 col-md-3 mb-4">
                                <div class="card">
                                    <img src="{{ asset('images/sanpham1.jpg') }}" class="card-img-top" alt="Product_New"
                                        id="img2">
                                    <div class="card-body">
                                        <h5 class="card-title">Tên sản phẩm</h5>
                                        <p class="card-text">
                                            <s>120000đ</s> 110000đ
                                        </p>
                                        <a href="product_detail.html" class="btn btn-warning">Xem chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-4">
                                <div class="card">
                                    <img src="{{ asset('images/sanpham1.jpg') }}" class="card-img-top" alt="Product_New"
                                        id="img2">
                                    <div class="card-body">
                                        <h5 class="card-title">Tên sản phẩm</h5>
                                        <p class="card-text">
                                            <s>120000đ</s> 110000đ
                                        </p>
                                        <a href="product_detail.html" class="btn btn-warning">Xem chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-4">
                                <div class="card">
                                    <img src="{{ asset('images/sanpham1.jpg') }}" class="card-img-top" alt="Product_New"
                                        id="img2">
                                    <div class="card-body">
                                        <h5 class="card-title">Tên sản phẩm</h5>
                                        <p class="card-text">
                                            <s>120000đ</s> 110000đ
                                        </p>
                                        <a href="product_detail.html" class="btn btn-warning">Xem chi tiết</a>
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

    </section>
    <footer class="d-flex justify-content-between p-3 bg-dark text-white">
        <img src="{{ asset('images/footer.png') }}" alt="Footer" style="width:10%">
        <div id="copyright">@ Bản quyền thuộc về Ngưu All right reserved</div>
    </footer>
</body>

</html>
