<?php
//quy tắc đặt tên namespace đặt tên theo thư mục (Pascal case)
//Ký tự dầu của từ viết hoa 
//nhiều thu mục sẽ cách nhau bởi dấu \
namespace App\Models;

use PDO;

class BaseModel
{
    protected $conn;
    protected $sqlBuilder;
    protected $tableName;
    //dặt tên cột khóa chính 
    protected $primaryKey = "id";
    public function __construct()
    {
        $host = HOSTNAME;
        $dbname = DBNAME;
        $username = USERNAME;
        $password = PASSWORD;
        try {
            $this->conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo "Loi ket noi" . $e->getMessage();
        }
    }
    //function all dung de lay toan bo du lieu cua bang
    public static function all()
    {
        $model = new static;
        $model->sqlBuilder = "select * from $model->tableName";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        return $stmt->fetchALL(PDO::FETCH_CLASS);
    }
    //method find :tìm kiếm theo id
    //id : tham số  truyền vào
    public static function find($id)
    {
        $model = new static;
        $model->sqlBuilder = "select * from $model->tableName where $model->primaryKey=:$model->primaryKey";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $data = ["$model->primaryKey" => $id];
        $stmt->execute($data);
        $result = $stmt->fetchALL(PDO::FETCH_CLASS);
        // kiểm tra nó có dữ liệu ko 
        if ($result) {
            return $result[0];
        }
        return $result;
    }
    //medthod where :tìm kiếm dữ liệu theo điều kiện , xây dyngjw câu lệnh sql
    //$column :tên cột làm điểuf kiênj
    //$codition điêu kiện =; >; < ;..
    //$value là giá trị của điều kiện 
    public static function where($column, $codition, $value)
    {
        $model = new static;
        $model->sqlBuilder = "SELECT * FROM $model->tableName WHERE `$column`$codition'$value'";
        return $model;
    }
    //Method andwhere :dùng để thêm tiếp điều kiện cho caia lệnh sqlBùier
    public function andWhere($column, $codition, $value)
    {
        $this->sqlBuilder .= " AND `$column` $codition '$value'";
        return $this;
    }
    //Method orwhere :dùng để thêm tiếp điều kiện cho caia lệnh sqlBùier
    public function orWhere($column, $codition, $value)
    {
        $this->sqlBuilder .= " OR `$column` $codition '$value'";
        return $this;
    }
    //method get dùng để thực thi câu lệnh điều kiện
    public function get()
    {
        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    //method executeSql dùng để thực thi câu lệnh điều kiện
    public static function executeSql($model)
    {
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    /**
     * method insert: dùng để thêm dữ liệu vào bảng
     * @$data: tham số là 1 mảng gồm có key là tên cột
     */
    public static function insert($data)
    {
        $model = new static;
        $model->sqlBuilder = "INSERT INTO $model->tableName( ";
        //Biến $values để lưu trữ tham số value của câu lệnh sqlBuilder
        $values = "";
        foreach ($data as $column => $val) {
            $model->sqlBuilder .= " `{$column}`, ";
            $values .= " :$column, ";
        }
        //Xóa ký tự ", " bên phải chuỗi
        $model->sqlBuilder = rtrim($model->sqlBuilder, ", ") . ") ";
        $values = "VALUES( " . rtrim($values, ", ") . ")";
        //Nối chuỗi sqlBuilder
        $model->sqlBuilder .= $values;

        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute($data);
        return $model->conn->lastInsertId();
    }
    //update cập nhất cở du kiệu 

    public static function update($id, $data)
    {
        $model = new static;
        $model->sqlBuilder = "UPDATE $model->tableName SET ";
        foreach ($data as $column => $value) {
            $model->sqlBuilder .= " `{$column}`=:$column, ";
        }
        //Loại bỏ dấu ", " ở cuỗi chuỗi
        $model->sqlBuilder = rtrim($model->sqlBuilder, ", ");
        //Thêm điều kiện cho câu lệnh sql
        $model->sqlBuilder .= " WHERE `$model->primaryKey`=:$model->primaryKey";

        $stmt = $model->conn->prepare($model->sqlBuilder);
        //thêm id vào data
        $data["$model->primaryKey"] = $id;
        return $stmt->execute($data);
    }
    public static function delete($id)
    {
        $model = new static;
        $model->sqlBuilder = "delete from  $model->tableName where `$model->primaryKey`=:$model->primaryKey";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        return $stmt->execute(["$model->primaryKey" => $id]);
    }
}
