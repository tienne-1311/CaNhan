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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
        <div class="content-wrapper" style="width: 100%; padding-right: 20px; padding-bottom: 20px;">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="py-3">Thêm mới sản phẩm</h2>
            </div>
            <form action="<?= ROOT_PATH ?>products/create" method="post" enctype="multipart/form-data">

                <div class="mb-3">
                    <label for="ten_san_pham" class="form-label fs-6">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="ten_san_pham" name="title_sanpham" placeholder="Nhập vào tên sản phẩm">
                </div>

                <div class="mb-3">
                    <label for="gia_san_pham" class="form-label fs-6">Giá sản phẩm</label>
                    <input type="text" class="form-control" id="gia_san_pham" name="price" placeholder="Nhập vào giá sản phẩm">
                </div>

                <div class="mb-3">
                    <label for="mo_ta" class="form-label fs-6">Mô tả</label>
                    <textarea cols="30" rows="10" class="form-control" id="mo_ta" name="mota_sanpham"></textarea>
                </div>

                <div class="mb-3">
                    <label for="danhmuc" class="form-label fs-6">Danh mục</label>
                    <select class="form-select" name="id_danhmuc" id="danhmuc">
                        <option value="0" selected>Tất cả</option>
                        <?php foreach ($categories as $cate) : ?>
                            <option value="<?= $cate->id_danhmuc ?>">
                                <?= $cate->name_danhmuc ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="hinh" class="form-label fs-6">Hình</label>
                    <input id="hinh" name="img_sanpham" type="file" class="form-select">
                </div>

                <div class="img-preview mb-5 w-25 h-25">
                    <span class="form-label fs-6">Ảnh hiện tại</span>
                    <img src="https://res.cloudinary.com/dbdozmkxv/image/upload/v1700127884/root/no_image_ylq3ep.jpg" id="img-preview" class="w-100">
                </div>

                <input type="submit" value="Thêm mới" class="btn btn-primary">
                <input type="reset" value="Nhập lại" class="btn btn-warning">
                <button type="button" class="btn btn-primary">
                    <a href="<?= ROOT_PATH ?>products/list" class=" text-decoration-none text-light d-flex align-items-center gap-2"><span>Quay lại</span></a>
                </button>
            </form>
        </div>
    </div>

    <script>
        const ImgPreviewElement = $('#img-preview');
        const InputFileElement = $('#hinh');
        const defaultImg = "https://res.cloudinary.com/dbdozmkxv/image/upload/v1700127884/root/no_image_ylq3ep.jpg";

        InputFileElement.change(function() {
            const file = this.files[0];
            if (file) {
                const extension = file.name.split('.').pop().toLowerCase();
                if (['jpg', 'jpeg', 'png', 'gif', "webp"].includes(extension)) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        ImgPreviewElement.attr('src', e.target.result);
                    };

                    reader.readAsDataURL(file);
                } else {
                    ImgPreviewElement.attr('src', defaultImg);
                }
            } else {
                ImgPreviewElement.attr('src', defaultImg);
            }
        });
    </script>
    </div>


    </div>
</body>

</html>