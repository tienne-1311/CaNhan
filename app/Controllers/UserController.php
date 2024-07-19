<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        $users = UserModel::all();
        return $this->view(
            "admin/user/list",
            ["users" => $users]
        );
    }
    public function create()
    {
        return $this->view(
            "admin/user/add"
        );
    }
    public function store()
    {
        $data = $_POST;
        $file = $_FILES['avatar'];
        $image = $file['name'];
        move_uploaded_file($file['tmp_name'], "assets/user/" . $image);
        $data['avatar'] = $image;
        UserModel::insert($data);
        header("location:" . ROOT_PATH . "users/list");
        die;
    }
    public function edit()
    {
        $id = $_GET['id'];
        $user = UserModel::find($id);
        return $this->view(
            "admin/user/edit",
            ["user" => $user]
        );
    }
    public function update()
    {
        $data = $_POST;
        //sử lý
        $file = $_FILES['avatar'];
        if ($file['size'] > 0) {
            $image = $file['name'];
            move_uploaded_file($file['tmp_name'], "assets/" . $image);
            //thêm ảnh vào data
            $data['avatar'] = $image;
            //cập nnhaatj
            UserModel::update($data['id_user'], $data);
            header("location:" . ROOT_PATH . "users/edit?id=" . $data['id_user']);
            die;
        }
    }
    public function delete()
    {
        $id = $_GET['id'];
        UserModel::delete($id);
        //thông báo 
        setcookie("message", "xóa dữ liệu thành công ", time() + 2);
        //chuyển hướng sang list
        header("location:" . ROOT_PATH . "users/list");
        die;
    }
}
