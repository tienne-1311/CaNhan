<?php

use App\Router;
use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\UserController;

require_once __DIR__ . "/env.php";
require_once __DIR__ . "/config.php";
require_once __DIR__ . "/vendor/autoload.php";

$router = new Router;

Router::get("/home",            [HomeController::class, 'index']);
Router::get("/detail",          [HomeController::class, 'detail']);
Router::get("/categorie",       [HomeController::class, 'categorie']);
Router::get("/categorieDM",     [HomeController::class, 'categorieDM']);
Router::get("/",                [HomeController::class, 'index']);
Router::get("/about", function () {
    echo "trang giới thiệu";
});
// Product
Router::get("/products/list",   [ProductController::class, 'index']);
Router::get("/products/create", [ProductController::class, 'create']);
Router::post("/products/create", [ProductController::class, 'store']);
Router::get("/products/edit",   [ProductController::class, 'edit']);
Router::post("/products/edit",  [ProductController::class, 'update']);
Router::get("/products/delete", [ProductController::class, 'delete']);

// User
Router::get("/users/list",   [UserController::class, 'index']);
Router::get("/users/create", [UserController::class, 'create']);
Router::post("/users/create", [UserController::class, 'store']);
Router::get("/users/edit",   [UserController::class, 'edit']);
Router::post("/users/edit",   [UserController::class, 'update']);
Router::get("/users/delete", [UserController::class, 'delete']);

$router->resolve();

// use App\Models\ProductModel;
// dd(ProductModel::all());
// dd(ProductModel::find(3));
// $pro =ProductModel::where("title_sanpham","like","%z%")
// ->andWhere('price','>',10000)
// ->get();

// dd($pro);
// $data= [
//     "title_sanpham" => "zi",
//     "price" => 20000,
//     "mota_sanpham"=>"aiiii"

// ];
// dd(ProductModel::insert($data));
// dd(ProductModel::update(42,$data));
// dd(ProductModel::delete(42));