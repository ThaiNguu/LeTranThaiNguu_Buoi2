<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="index.css">
    <title>Liên hệ</title>
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
    <div class="container mt-5">
        <h2 class="text-center">Thông Tin Liên Hệ</h2>
        <p>Gọi Điện : 0376548379</p>
        <p>Email : thainguu.com.vn</p>
        <p>Giờ Làm Việc : 07:30 - 22:30 Các Ngày Trong Tuần (Kể Cả Ngày Lễ)</p>
        <h2 class="text-center">Phản Ánh – Khiếu Nại</h2>
        <form>
            <div class="form-group">
                <label for="name">Họ và tên *</label>
                <input type="text" class="form-control" id="name" placeholder="Nhập họ và tên...">
            </div>
            <div class="form-group">
                <label for="phone">Số điện thoại *</label>
                <input type="text" class="form-control" id="phone" placeholder="Nhập số điện thoại...">
            </div>
            <div class="form-group">
                <label>THÔNG TIN PHẢN ÁNH</label>
                <div class="btn-group d-flex" role="group">
                    <button type="button" class="btn btn-warning flex-grow-1">Ứng Dụng</button>
                    <button type="button" class="btn btn-warning flex-grow-1">Thanh Toán</button>
                    <button type="button" class="btn btn-warning flex-grow-1">Đơn Hàng</button>
                    <button type="button" class="btn btn-warning flex-grow-1">Nhân Viên</button>
                    <button type="button" class="btn btn-warning flex-grow-1">Sản Phẩm</button>
                    <button type="button" class="btn btn-warning flex-grow-1">Khác</button>
                </div>
            </div>
            <div class="form-group">
                <label for="feedback">Chi tiết phản ánh</label>
                <textarea class="form-control" id="feedback" rows="3" placeholder="Vui lòng nhập nội dung..."></textarea>
            </div>
            <div class="form-group">
                <label for="file">Đính kèm hình ảnh/video</label>
                <input type="file" class="form-control-file" id="file">
            </div>
            <button type="submit" class="btn btn-secondary btn-block">Gửi phản ánh</button>
        </form>
    </div>
    <footer class="d-flex justify-content-between p-3 bg-dark text-white">
        <img src="{{ asset('images/footer.png') }}" alt="Footer" style="width:10%">
        <div id="copyright">@ Bản quyền thuộc về Ngưu All right reserved</div>
    </footer>
</body>

</html>
