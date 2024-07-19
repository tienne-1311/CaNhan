<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

        * {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            /* mặc định mình cho là 1140px */
            max-width: 1140px;
            margin: 0 auto;
        }

        header {
            background: #fff;
            padding: 5px 0;
        }

        header .container .content__header {
            display: flex;
            align-items: center;
        }

        header .container .content__header .logo__header {
            flex-basis: 10%;
        }

        header .container .content__header .menu__header {
            flex-basis: 80%;
        }

        header .container .content__header .card__head {
            flex-basis: 10%;
        }

        header .container .content__header .users {
            display: inline-block;
            list-style: none;
            margin-right: 50px;
        }

        header .container .content__header .users li a {
            margin: 0 10px;
            text-decoration: none;
            color: #626A67;
            font-weight: bold;
        }

        header .container .content__header .users li a:hover {
            text-decoration: underline;
            color: red;
        }

        header .container .content__header .card__head .card {
            position: relative;
            width: 40px;
            cursor: pointer;
        }

        header .container .content__header .card__head .card span {
            position: absolute;
            top: 0;
            right: -10px;
            width: 50%;
            height: 50%;
            background: rgba(20, 120, 250, 1);
            color: #fff;
            text-align: center;
            box-sizing: border-box;
            border-radius: 50%;
        }

        header .container .content__header .menu__header nav .nav__link li {
            display: inline-block;
            list-style: none;
            margin: 0 20px;
        }

        header .container .content__header .menu__header nav .nav__link li a {
            text-decoration: none;
            color: #626A67;
            font-weight: bold;
        }

        header .container .content__header .menu__header nav .nav__link li a:hover {
            text-decoration: underline;
            color: red;
        }

        header .container .content__header .card__head {
            flex-basis: 10%;
        }

        #banner {
            width: 100%;
            margin-top: 10px;
            background-image: url("../assets/banner.png");
            height: 463px;
            display: flex;
            padding: 0px 133px;
            position: relative;
        }

        #banner .box-left,
        #banner .box-right {
            width: 50%;
        }

        #banner .box-left h2 {
            font-size: 48px;
            margin-top: 75px;
            color: #fff;
        }

        #banner .box-left p {
            color: #D0D0D0;
        }

        #banner .box-left button {
            width: 191px;
            height: 40px;
            margin-top: 41px;
            background: #1d1a1a;
            border: none;
            outline: none;
            color: #fff;
            font-weight: bold;
            border-radius: 20px;
            transition: 0.4s;
        }

        #banner .box-left button:hover {
            background: orange;
        }

        #banner .box-right {
            padding-left: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #banner .box-right img {
            margin: 0px 10px;
            animation: animation 3s infinite linear;
        }


        #banner .box-right img:nth-child(1) {
            animation-delay: 0.5s;
        }

        #banner .box-right img:nth-child(2) {

            animation-delay: 1s;
        }

        @keyframes animation {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0px);
            }

        }

        /* end banner  */
        /* end banner  */
        /* end banner ======================================================================================================= */
        .catalog {
            display: flex;
            gap: 30px;
        }

        .catalog .boxspleft {
            width: 25%;
        }

        .catalog .boxspright {

            width: 75%;
        }

        .boxsp_title {
            font-weight: bold;
            display: flex;
            background: #262525ee;
            border-top: 1px solid #ccc;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            border-left: 1px solid #ccc;
            border-right: 1px solid #ccc;
            padding: 10px;
            color: #ffffff;
            height: 50px;
            align-items: center;
            margin-left: 55px;
            margin-top: 55px;
        }

        .mb .boxsp_content {
            border-left: 1px solid #ccc;
            border-right: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
            min-height: 200px;
            padding: 20px;
            margin-left: 55px;

        }

        .boxspleft .mb .boxsp_content2 {
            padding: 20px;
            background: #EEEE;
            border-left: 1px solid #ccc;
            border-right: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
            min-height: 200px;
            margin-left: 55px;
        }

        form {
            text-align: center;
        }

        .form_li a {
            text-decoration: none;
            color: aqua;
        }

        .form_li a:hover {
            text-decoration: underline;
            color: red;
        }

        .form_li {
            list-style: none;
        }

        /*  CSS CHO PHẦN DANH MỤC */
        .product_portfolio ul {
            margin: 0;
            list-style-type: none;
            padding: 0;
        }

        .product_portfolio ul li {
            padding: 10px 20px;
            background-color: #EEEE;
            border-bottom: 1px #ccc solid;
        }

        .product_portfolio ul li a {
            text-decoration: none;
            color: #000;
        }

        .product_portfolio ul li:hover {

            background-color: #CCC;
        }

        .box_search input {
            margin-top: 9px;
            padding: 5px 10px;
            background-color: #ffff;
            border-radius: 5px;
            border: 1px #ccc solid;
        }

        .selling_products img {
            width: 20%;
            height: 50px;
            margin-right: 10px;
        }

        .selling_products a {
            color: #000;
            text-decoration: none;
        }

        .selling_products a:hover {
            color: #000;
            text-decoration: underline;
        }

        .banner2 img {
            width: 60%;
        }

        /* end nd */
        /* phảiiiiiiiiiiiiiiiiiiiiiiiiii========================================================================================         */
        /* Body product one */
        .body_productsp {
            padding: 30px 0;
        }

        .body_productsp .container .title {
            width: 100%;
            text-align: center;
            background: #ddd;
            padding: 15px 0;
        }

        .body_productsp .container .title h3 {
            text-transform: uppercase;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .body_productsp .container .show_product {
            margin: 20px 0;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .body_productsp .container .show_product .card {
            flex-basis: 30%;
            margin: 10px 5px;
        }

        .body_productsp .container .show_product .card .items {
            position: relative;
            display: block;
            padding: 20px;
            border-radius: 20px;
            border: 1px solid #ccc;
        }

        .body_productsp .container .show_product .card .items .image img {
            width: 100%;
        }

        .body_productsp .container .show_product .card .items .text {
            text-align: left;
            padding: 5px 0;
        }

        .body_productsp .container .show_product .card .items .text h3 {
            font-weight: 400;
            font-size: 20px;
            text-align: center;
        }

        .body_productsp .container .show_product .card .items .text p {
            font-weight: 500;
            margin: 5px 0;
            text-align: center;
        }

        .body_productsp .container .show_product .card .items .color {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }


        .body_productsp .container .show_product .card .items .button {
            position: absolute;
            top: 100%;
            left: 50%;
            width: 100%;
            transform: translate(-50%, -50%);
            text-align: center;
            opacity: 0;
            transition: 0.5s ease-out;
        }

        .body_productsp .container .show_product .card .items:hover .button {
            opacity: 1;
            top: 50%;
        }

        .body_productsp .container .show_product .card .items .button a {
            display: inline-block;
            margin: 0 5px;
            padding: 10px 15px;
            background: #2E2EFE;
            color: #ffff;
            border-radius: 20px;
            text-decoration: none;
            transition: 0.5s;
        }

        .body_productsp .container .show_product .card .items .button a:hover {
            background: #FE2E64;
        }

        /* discount */
        .body_productsp .discount .show_product .card .items .text span {
            color: #FF0040;
            font-weight: 600;
        }

        .body_productsp .discount .show_product .card .items .text span s {
            font-weight: 300;
        }

        .body_productsp .discount .show_product .card .items span.discount {
            width: 50px;
            height: 50px;
            background: #FF0040;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            color: #ffffff;
            border-radius: 50%;
            box-shadow: 3px 3px 5px #FF0040;
            position: absolute;
            top: -10px;
            right: 0;
        }

        /*end phảiiiiiiiiiiiiiiiiiiiiiiiiii========================================================================================         */
        /* mở footer ============================================================================================================*/
        /* mở footer */
        /* mở footer */
        #footer {
            width: 100%;
            background: rgb(0, 0, 0, 0.79);
            height: 322px;
            margin-top: 38px;
            padding: 0px 63px;
            padding-top: 57px;
            display: flex;
            justify-content: space-around;
        }

        #footer .box {
            width: 250px;
            color: #fff;
        }

        #footer .box .quick-menu {
            margin-top: 40px;

        }


        #footer .box .quick-menu .item {
            margin-bottom: 12px;

        }

        #footer .box .quick-menu,
        .item a {
            color: #fff;
            text-decoration: none;
        }



        #footer .box form input_footer {
            width: 294px;
            height: 42px;
            background: transparent;
            padding-left: 20px;
            color: #fff;
            margin-top: 30px;
        }

        #footer .box form button {
            background: #362f2f;
            box-shadow: 5px 5px 4px rgba(0, 0, 0.25);
            width: 163px;
            height: 38px;
            margin-top: 29px;
            color: #fff;
        }

        /* end footer */
        /* giỏ hàng -----------------------------------------------------------------------------------------------------------------------------  */
        .popup_shopping {
            visibility: hidden;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #fff;
            padding: 15px 30px;
            z-index: 11;
            width: 60rem;
        }

        .popup_shopping.active {
            /* visibility: visible; */
            animation: animate 1s ease-out forwards;
        }

        @keyframes animate {
            0% {
                visibility: hidden;
                top: 0;
            }

            50% {
                top: 40%;
            }

            80% {
                top: 45%;
            }

            90% {
                top: 50%;
            }

            100% {
                visibility: visible;
            }
        }

        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            min-height: 100vh;
            min-width: 100vw;
            background: rgba(0, 0, 0, 0.8);
            z-index: 10;
        }

        .overlay.active {
            display: block;
        }

        .popup_shopping .body_shopping table {
            border-collapse: collapse;
            width: 100%;
        }

        .popup_shopping .body_shopping table td,
        th {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }

        .popup_shopping .body_shopping table td a {
            display: inline-block;
            color: #fff;
            text-decoration: none;
            padding: 5px 15px;
            margin: 5px;
        }

        .popup_shopping .body_shopping table td a:first-child {
            background: #FF0040;
        }

        .popup_shopping .body_shopping table td a:last-child {
            background: #0066ff;
        }

        .popup_shopping .body_shopping .close {
            text-align: right;
            margin: 15px 0 0 0;
        }

        .popup_shopping .body_shopping .close button {
            background: #ff0000;
            color: #fff;
            font-weight: 600;
            outline: none;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        .popup_shopping .body_shopping .close button:hover {
            opacity: 0.8;
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <div class="content__header">
                <div class="logo__header">
                    <a href="index.php"><img src="assets/chobanVine.png" alt=""></a>
                </div>
                <div class="menu__header">
                    <nav>
                        <ul class="nav__link">
                            <li><a href="http://localhost/php2/root/">Trang chủ</a></li>
                            <li><a href="http://localhost/php2/root//categorie">Sản phẩm</a></li>
                            <li><a href="">Tin tức</a></li>
                            <li><a href="">Liên hệ</a></li>
                            <?php
                            if (isset($_SESSION['user'])) {
                                extract($_SESSION['user']);
                            ?>

                                <li><a href="?act=lichsudonhang">Lịch sử đơn hàng</a></li>

                            <?php
                            } else {
                            ?>

                            <?php } ?>
                        </ul>
                    </nav>
                </div>

                <form action="">
                    <input type="hidden" name="act" value="tim_kiem">
                    <input type="text" class="input_footer" name="keywords" style="border: 0.1px solid #ffff;" placeholder="tìm kiếm">
                </form>
                <div class="card__head">
                    <div class="card" id="popup_card">
                        <a href="index.php?act=addcart"><img src="assets/Group 16.png" alt=""></a>
                        <!-- <span>2</span> -->
                    </div>
                </div>

                <?php
                if (isset($_SESSION['user'])) {
                    extract($_SESSION['user']);
                ?>

                    <div class="menudoc">
                        <nav>
                            <ul>
                                <li>
                                    <a href="index.php?act=trang_taikhoan.php" style="color: #626A67; text-decoration: none;font-weight: bold;"><?php echo $name_user ?></a>
                                </li>
                            </ul>
                        </nav>
                    </div>


                <?php
                } else {
                ?>
                    <div class="users">
                        <a href="index.php?act=dangnhap"><i class="fa-regular fa-user"></i></a>
                    </div>
                <?php } ?>
            </div>
    </header>
    <main class="catalog  mb ">
        <div class="boxspleft">
            <div class="mb">
                <div class="boxsp_title">DANH MỤC</div>
                <div class="boxsp_content2 product_portfolio">
                    <ul>
                        <?php foreach ($categories as $cate) : ?>
                            <li><a href="<?= ROOT_PATH ?>categorieDM?id=<?= $cate->id_danhmuc ?>"><?= $cate->name_danhmuc ?></a></li>
                        <?php endforeach ?>

                    </ul>
                </div>
            </div>
            <!-- DANH MỤC SẢN PHẨM BÁN CHẠY -->
            <div class="mb">
                <div class="boxsp_title">SẢN PHẨM BÁN CHẠY</div>
                <div class="boxsp_content">
                    <?php
                    // foreach ($dstop10 as $sp) {
                    //   extract($sp);
                    //   $linksp = "index.php?act=sanphamct&idsp=" . $id_sanpham;
                    //   $img = $img_path . $img_sanpham;
                    //   echo '<div class="selling_products" style="width:100%;">
                    //         <img src="' . $img . '" alt="anh">
                    //         <a href="' . $linksp . '">' . $title_sanpham . '</a>
                    //       </div>';
                    // }
                    ?>
                </div>
            </div>
        </div>
        <div class="boxspright">
            <section class="body_productsp">
                <div class="container">
                    <div class="show_product">
                        <?php
                        foreach ($products as $pro) : ?>

                            '<div class="card">
                                <div class="items">
                                    <div class="image">
                                        <img src="assets/<?= $pro->img_sanpham ?>" alt="">
                                    </div>
                                    <div class="text">
                                        <h3><?= $pro->title_sanpham ?></h3>
                                        <p><?= $pro->price ?> đ</p>
                                    </div>
                                    <div class="button">
                                        <a href="#">Mua</a>
                                        <a href="<?= ROOT_PATH ?>detail?id=<?= $pro->id_sanpham ?>">Xem chi tiết</a>
                                    </div>
                                </div>
                            </div>';
                        <?php endforeach ?>
                    </div>
            </section>
        </div>
    </main>
</body>

</html>