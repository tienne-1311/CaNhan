<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoryModel;
use App\Models\ProductModel;

class ProductController extends BaseController
{
    //hiển thị danh sác sản phẩm
    public function index()
    {
        $products = ProductModel::all();
        ///lấy thông tin
        return $this->view(
            "admin/products/list",
            ["products" => $products]
        );
    }
    // hiển  thị from  thêm mói sp 
    public function create()
    {
        $categories = CategoryModel::all();
        return $this->view(
            "admin/products/add",
            ["categories" => $categories]
        );
    }

    // them du liệu vào database 
    public function store()
    {
        $data = $_POST;
        //xử lý ảnh 
        $file = $_FILES['img_sanpham'];
        //lấy tên 
        $image = $file['name'];
        //upload
        move_uploaded_file($file['tmp_name'], "assets/" . $image);
        //thêm ảnh vào $data
        $data['img_sanpham'] = $image;
        //insert
        ProductModel::insert($data);
        header("location:" . ROOT_PATH . "products/list");
        die;
    }

    // upload
    public function edit()
    {
        $id = $_GET['id'];
        $products = ProductModel::find($id);
        $categories = CategoryModel::all();
        return $this->view(
            "admin/products/edit",
            [
                "products" => $products,
                "categories" => $categories
            ]
        );
    }
    public function update()
    {
        $data = $_POST;
        //sử lý
        $file = $_FILES['img_sanpham'];
        if ($file['size'] > 0) {
            $image = $file['name'];
            move_uploaded_file($file['tmp_name'], "assets/" . $image);
            //thêm ảnh vào data
            $data['img_sanpham'] = $image;
            //cập nnhaatj
            ProductModel::update($data['id_sanpham'], $data);
            header("location:" . ROOT_PATH . "products/edit?id=" . $data['id_sanpham']);
            die;
        }
    }
    public function delete()
    {
        $id = $_GET['id'];
        ProductModel::delete($id);
        //thông báo 
        setcookie("message", "xóa dữ liệu thành công ", time() + 2);
        //chuyển hướng sang list
        header("location:" . ROOT_PATH . "products/list");
        die;
    }
}
