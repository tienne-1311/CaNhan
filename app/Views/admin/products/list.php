<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.css" integrity="sha512-r0fo0kMK8myZfuKWk9b6yY8azUnHCPhgNz/uWDl2rtMdWJlk7gmd9socvGZdZzICwAkMgfTkVrplDahQ07Gi0A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="wapprer d-flex gap-3">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark position-sticky fixed-top" style="width: 280px; height: 100vh;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none" previewlistener="true">
                <img src="../assets/chobanVine.png" alt="">
                <span class="fs-4">NVT</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto gap-2">
                <li class="nav-item">
                    <a href="#" class="nav-link d-flex align-items-center text-white" aria-current="page">
                        <ion-icon class="bi pe-none me-2" width="16" height="16" name="home-outline"></ion-icon>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT_PATH ?>products/list" class="nav-link d-flex active align-items-center text-white" aria-current="page">
                        <ion-icon class="bi pe-none me-2" width="16" height="16" name="flower-outline"></ion-icon>
                        <span>Products</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT_PATH ?>users/list" class="nav-link d-flex align-items-center text-white" aria-current="page">
                        <ion-icon class="bi pe-none me-2" width="16" height="16" name="person-outline"></ion-icon>
                        <span>User</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link d-flex align-items-center text-white" aria-current="page">
                        <ion-icon class="bi pe-none me-2" width="16" height="16" name="flower-outline"></ion-icon>
                        <span>2</span>
                    </a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>mdo</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
        <div class="content-wrapper" style="width: 100%; padding-right: 20px;">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="py-3">Quản lý sản phẩm</h2>
                <button type="button" class="btn btn-primary">
                    <a href="<?= ROOT_PATH ?>products/create" class="text-decoration-none text-light d-flex align-items-center gap-2"><ion-icon class="fs-5" name="add-circle-outline"></ion-icon><span>Thêm sản phẩm</span></a>
                </button>
            </div>
            <form action="index.php?act=listsp" method="post" class="d-flex align-items-end gap-4 py-2">
                <div class="mb-3">
                    <label for="timkiem" class="form-label fs-6">Tìm kiếm</label>
                    <input type="text" name="keyw" class="form-control" id="timkiem" placeholder="Nhập từ khóa">
                </div>
                <div class="mb-3">
                    <label for="danhmuc" class="form-label fs-6">Danh mục</label>
                    <select class="form-select" name="iddm" id="danhmuc">
                        <option value="0" selected>Tất cả</option>
                        <?php foreach ($categories as $cate) : ?>
                            <option value="<?= $cate->id_danhmuc ?>">
                                <?= $cate->name_danhmuc ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <input type="submit" name="clickOK" value="Tìm kiếm" class="btn btn-primary mb-3">
            </form>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Mã sảm phẩm</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Hình sản phẩm</th>
                        <th scope="col">Lượt xem</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (is_array($products) && count($products) > 0) {
                        foreach ($products as $pro) {

                    ?>
                            <tr>
                                <th scope="row"><?= $pro->id_sanpham ?></th>
                                <td><?= $pro->title_sanpham ?></td>
                                <td><?= $pro->price ?>đ</td>
                                <td><img src="<?= ROOT_PATH . "assets/" . $pro->img_sanpham ?>" width="80" alt=""></td>
                                <td><?= $pro->luot_xem ?></td>
                                <td><?= $pro->trang_thai ?></td>
                                <td class="d-flex align-items-center gap-2">
                                    <button type="button" class="btn btn-warning">
                                        <a href="<?= ROOT_PATH ?>products/edit?id=<?= $pro->id_sanpham ?>" class="text-decoration-none text-dark d-flex align-items-center gap-2"><ion-icon class="fs-5" name="create-outline"></ion-icon><span>Sửa</span></a>
                                    </button>
                                    <button type="button" class="btn btn-danger">
                                        <a href="<?= ROOT_PATH ?>products/delete?id=<?= $pro->id_sanpham ?>" class="text-decoration-none text-light d-flex align-items-center gap-2" onclick="return confirm('Bạn có chắc chắn muốn xóa')"><ion-icon class="fs-5" name="trash-outline"></ion-icon><span>Ẩn</span></a>
                                    </button>
                                    <button type="button" class="btn btn-danger">
                                        <a href="<?= ROOT_PATH ?>products/delete?id=<?= $pro->id_sanpham ?>" class="text-decoration-none text-light d-flex align-items-center gap-2" onclick="return confirm('Bạn có chắc chắn muốn xóa')"><ion-icon class="fs-5" name="trash-outline"></ion-icon><span>Xóa</span></a>
                                    </button>
                                </td>
                            </tr>
                        <?php
                        }
                    } else { ?>
                        <tr>
                            <td colspan="7">
                                <div class="d-flex flex-column justify-content-center align-items-center py-5">
                                    <ion-icon name="server-outline" class="fs-1"></ion-icon>
                                    <span class="fs-5">Không có dữ liệu</span>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>


    </div>
</body>

</html>