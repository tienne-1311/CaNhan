<?php
namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;

class HomeController extends BaseController{
    public function index()
    {
        $products = ProductModel::all();
        return $this->view(
            "client/home",
            [
                "products" => $products,
            ]
        );
    }
    public function categorie()
    {
        
        $products = ProductModel::all();
        $categories = CategoryModel::all();
        return $this->view(
            "client/categorie",
            [
                "products" => $products,
                "categories" => $categories
            ]
        );
    }
    public function categorieDM()
    {
        $id = $_GET['id'];
        $categorieDM = CategoryModel::all();
        $getProductByID = ProductModel::where("id_danhmuc","=",$id);
        $products = ProductModel::executeSql($getProductByID);
        return $this->view(
        "client/categorieDM",
        [
            "categorieDM" => $categorieDM,
            "products" => $products
        ]
        );
    }
    public function detail()
    {
        $id = $_GET['id'];
        $product = ProductModel::find($id);
        return $this->view(
            "client/detail",
            ['product' => $product]
        );
    }
}