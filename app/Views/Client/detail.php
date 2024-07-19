<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
*{
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.container{
    /* mặc định mình cho là 1140px */
    max-width: 1140px;
    margin: 0 auto;
}
header{
    background: #fff;
    padding: 5px 0;
}
header .container .content__header{
    display: flex;
    align-items: center;
}
header .container .content__header .logo__header{
    flex-basis: 10%;
}
header .container .content__header .menu__header{
    flex-basis: 80%;
}
header .container .content__header .card__head{
    flex-basis: 10%;
}
header .container .content__header .card__head .card{
    position: relative;
    width: 40px;
    cursor: pointer;
}

header .container .content__header .card__head .card span{
    position: absolute;
    top: 0;
    right: -10px;
    width: 50%;
    height: 50%;
    background: rgba(20,120,250,1);
    color: #fff;
    text-align: center;
    box-sizing: border-box;
    border-radius: 50%;
}
header .container .content__header .menu__header nav .nav__link li{
    display: inline-block;
    list-style: none;
    margin: 0 20px;
}
header .container .content__header .menu__header nav .nav__link li a{
    text-decoration: none;
    color: #626A67;
    font-weight: bold;
}
header .container .content__header .menu__header nav .nav__link li a:hover{
    text-decoration: underline;
    color: red;
}
header .container .content__header .card__head{
    flex-basis: 10%;
}
/* end header ------------------------------------------------------*/
.row {
    display: flex;
    flex-wrap: wrap;
    width: 100%;
}
.col-6{
  flex-wrap: 30%;  
  flex: 1;
}
.col-4 {
    flex-wrap: 70%;
    flex: 1;
}
.body_detail {
    padding:  35px 0;
}
.body_detail.container.row{
    display: flex;
    flex-wrap: wrap;
    padding: 0 15px;
    width: 100%;
}
.body_detail .container .row .col-6 .box_product img{
    border:1px solid #ccc;
    border-radius: 25px;
}
.body_detail .container .row .col-6 .box_product img:hover{
    opacity: 75%;
}
.body_detail .container .row .col-4{
    margin-top: 10px;
}
.body_detail .container .row .col-4 h3 {
    font-size: 30px;
    margin-bottom: 10px;
}
.body_detail .container .row .col-4 .price {
    margin-top: 30px;
    color: red;
    font-weight: bold;
    font-size: 25px;
}
.body_detail .container .row .col-4 .mota{
    margin-top: 30px;
    color: #544242;
}
.body_detail .container .row .col-4 input{
    width: 100px;
    height: 40px;
    border: 1px solid #ccc;
    border-radius: 10px;
}
.body_detail .container .row .col-4 button {
    width: 200px;
    height: 42px;
    padding-left:20px;
    color:#fff;
    margin-top:30px;
    background: #211f1f;
    border-radius: 5px;
    border: 1px solid #ccc;
}
.body_detail .container .row .col-4 button a{
    color: #ffffff;
    font-weight: bold;
    text-decoration: none;
}
/* cmttttttttttttttttttttttttttt */
.mb .box_title{
    margin: 0 180px;
    height: 40px;
    width: 300px;
    background: #ccc;
    border:1px solid #ccc;
    border-radius: 0 0 0 0;
}
.mb .box_title_bl p{
    color: #ffff;
    margin:10px 10px;
    font-weight: bold;
}
.mb .box_content2 {
    border:1px solid #ccc;
    margin: 0 180px;
    height: 200px;
}
.mb .box_search {
    border:1px solid #ccc;
    margin: 0 180px;
    height: 40px;
    background: #ccc;
}
.mb .box_search .noidung input{
    float:left;
    width: 850px;
    height: 25px;
    margin: 8px 50px;
    border: 1px solid #ccc;
}
.mb .box_search .submit input {
    float: right;
    margin-right: 10px;
    width: 100px;
    height: 25px;
    margin: 8px 50px;
    border: 1px solid #ccc;
    background: #050505a7;
    color: #dddddd;
    font-weight: bold;

}
.mb .box_title {
    margin: 50px 180px 0;
    height: 40px;
    width: 300px;
    background: #ccc;
    border:1px solid #ccc;
    border-radius: 0 0 0 0;
    color: #ffff;
}
.mb .box_title p{
    color: #ffff;
    margin:10px 10px;
    font-weight: bold;
}
.mb .box_content{
    border:1px solid #ccc;
    margin: 0 180px;
    height: 200px;
}
/* mở footer */
/* mở footer */
/* mở footer */
#footer {
    width: 100%;
    background:rgb(0,0,0,0.79);
    height: 322px;
    margin-top:38px;
    padding:0px 63px;
    padding-top:57px;
    display: flex;
    justify-content: space-around;
}

#footer .box {
    width: 250px;
    color:#fff;
}

#footer .box .quick-menu {
    margin-top:40px;

}


#footer .box .quick-menu .item{
    margin-bottom:12px;

}
#footer .box .quick-menu ,.item a{
    color:#fff;
    text-decoration: none;
}



#footer .box form input_footer {
    width: 294px;
    height: 42px;
    background:transparent;
    padding-left:20px;
    color:#fff;
    margin-top:30px;
}

#footer .box form button {
    background:#362f2f;
    box-shadow: 5px 5px 4px rgba(0,0,0.25);
    width: 163px;
    height: 38px;
    margin-top:29px;
    color:#fff;
}
/* end footer -----------------------------------------------------------------------------------------------------------------*/
/* giỏ hàng -----------------------------------------------------------------------------------------------------------------------------  */
.popup_shopping{
    visibility: hidden;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background: #fff;
    padding: 15px 30px;
    z-index: 11;
    width: 60rem;
}
.popup_shopping.active{
    /* visibility: visible; */
    animation: animate 1s ease-out forwards;
}
@keyframes animate{
    0%{
        visibility: hidden;
        top: 0;
    }
    50%{
        top: 40%;
    }
    80%{
        top: 45%;
    }
    90%{
        top: 50%; 
    }
    100%{
        visibility: visible;
    }
}
.overlay{
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    min-height: 100vh;
    min-width: 100vw;
    background: rgba(0, 0, 0, 0.8);
    z-index: 10;
}
.overlay.active{
    display: block;
}
.popup_shopping .body_shopping table{
    border-collapse: collapse;
    width: 100%;
}
.popup_shopping .body_shopping table td, th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
}
.popup_shopping .body_shopping table td a{
    display: inline-block;
    color: #fff;
    text-decoration: none;
    padding: 5px 15px;
    margin: 5px;
}
.popup_shopping .body_shopping table td a:first-child{
    background: #FF0040;
}
.popup_shopping .body_shopping table td a:last-child{
    background: #0066ff;
}
.popup_shopping .body_shopping .close{
    text-align: right;
    margin: 15px 0 0 0;
}
.popup_shopping .body_shopping .close button{
    background: #ff0000;
    color: #fff;
    font-weight: 600;
    outline: none;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
}
.popup_shopping .body_shopping .close button:hover{
    opacity: 0.8;
}

    </style>
</head>

<body>
    <style>
  td {
    padding: 8px 20px;
  }
</style>
    <!-- header -->
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
                            <li><a href="?act=sanpham">Sản phẩm</a></li>
                            <li><a href="">Tin tức</a></li>
                            <li><a href="">Liên hệ</a></li>
                            <?php 
                            if(isset($_SESSION['user'])){
                                extract($_SESSION['user']);
                            ?>
                                    
                                <li><a href="?act=lichsudonhang">Lịch sử đơn hàng</a></li>
                            
                            <?php 
                    }else{
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
                    if(isset($_SESSION['user'])){
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
                    }else{
                ?>
                <div class="users">
                    <a href="index.php?act=dangnhap"><i class="fa-regular fa-user"></i></a>
                </div>
                <?php } ?>
            </div>
    </header>
<section class="body_detail">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <div class="box_product">
        <img src="assets/<?= $product->img_sanpham ?>"  width='400px' height='400px' alt=''>
        </div>
      </div>
      <div class="col-4">
        <div class="info_product">
          <div class="title">
            <h3><?= $product->title_sanpham ?></h3>
            <hr>
          </div>
          <p class="price"><?= $product->price ?>đ</p>
          <p class="mota">
          <?= $product->mota_sanpham ?>
          </p>
          <form action="index.php?act=addcart" method="post">
            <input type="hidden" name="id" value="<?= $product->$id_sanpham ?>">
            <input type="hidden" name="name" value="<?= $product->$title_sanpham ?>">
            <input type="hidden" name="img" value="<?= $product->$img_sanpham ?>">
            <input type="hidden" name="price" value="<?= $product->$price ?>">
            Số lượng :<input type="number" name="soluong" value="1" min="1" max="10000" required="" style="width: 50px;height: 50px;">
            <input type="submit" value="Thêm vào giỏ hàng" name="addcart" style="width: 200px;height: 42px;padding-left: 20px;color: #fff; margin-top: 30px;background: #211f1f;border-radius: 5px;border: 1px solid #ccc;">
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- <section style="background-color: #ccc;">
  <div class="container my-5 py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-12 col-lg-10 col-xl-8">
        <div class="card">
          <div class="card-body">
            <h4>Bình luận sản phẩm</h4>
            <?php foreach ($binhluan as $value) : ?>
              <?php extract($value); ?>
              <div class="d-flex flex-start align-items-center">
                <img class="rounded-circle shadow-1-strong me-3" src="assets/nguoidung.png" alt="avatar" width="60" height="60" />
                <div>
                  <h6 class="fw-bold text-primary mb-1"><?php echo $name_user ?>:</h6>
                  <p class="text-muted small mb-0">
                    Chia sẻ công khai
                  </p>
                </div>
              </div>
              <p class="mt-3 mb-4 pb-2">
                <?php echo $noidung_binhluan ?>
              </p>
              <div class="small d-flex justify-content-start">
                <a href="#!" class="d-flex align-items-center me-3">
                  <i class="far fa-thumbs-up me-2"></i>
                  <p class="mb-0">Like</p>
                </a>
                <a href="#!" class="d-flex align-items-center me-3">
                  <i class="far fa-comment-dots me-2"></i>
                  <p class="mb-0">Comment</p>
                </a>
                <a href="#!" class="d-flex align-items-center me-3">
                  <i class="fas fa-share me-2"></i>
                  <p class="mb-0">Share</p>
                </a>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
            <?php if (!isset($_SESSION["user"])) : ?>
              <div class="login-comment">
                <p>Bạn cần <a href="index.php?act=dangnhap" >Đăng Nhập</a> để bình Luận</p>
              </div>
            <?php else : ?>
              <div class="box_search">
                <form action="index.php?act=sanphamct" method="POST">
                  <input type="hidden" name="idpro" value="<?php echo $id_sanpham; ?>">
                  <div class="d-flex flex-start w-100">
                    <img class="rounded-circle shadow-1-strong me-3" src="assets/nguoidung.png" name="idpro" alt="avatar" width="40" height="40" />
                    <input type="text" class="form-control" name="noidung">
                    <input type="submit" class="btn btn-outline-primary btn-sm" name="guibinhluan" value="Gửi bình luận">
                  </div>
                </form>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!-- hết giao diện bl mới -->


</div>

<!-- <div class=" mb">
  <div class="box_title">
    <p>SẢN PHẨM CÙNG LOẠI</p>
  </div>
  <div class="box_content">
    <?php foreach ($sp_cungloai as $value) : ?>
      <li>
        <?php
        $img = $img_path . $value['img_sanpham'];
        echo "<img src='$img' width='40px' height='40px' alt=''>";
        ?>
        <a href="index.php?act=sanphamct&idsp=<?= $value['id_sanpham'] ?>">
          <?= $value['title_sanpham'] ?>
        </a>

      </li>
    <?php endforeach; ?>



  </div>
</div>
</div> -->

<?php
$link = "";
$link .= $_SERVER['REQUEST_URI'];
$link = substr($link, 8);
$_SESSION['url'] = $link;
?>
</body>

</html>
