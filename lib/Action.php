<?php

class Action {
    protected $name;
    protected $price;
    protected $description;
    protected $image;
    public $src;

    CONST AVALIABLE_TYPES = array(
        "image/jpeg",
        "image/jpg",
        "image/png",
    );

    CONST IMG_SIZE=2*1024*1024;
    CONST UPLOAD_DIR='images';

    public function db_connect(){
        $dbh = new PDO('mysql:host=localhost;dbname=catalog', 'root', '455155');
        return $dbh;
    }


    public function addProduct($name, $description, $price, $image){
        $query="INSERT INTO products (name, price, description, image_url) VALUES ('$name','$price','$description','$image')";
        $this->db_connect()->query($query);
    }

    public function delProducts($id){
        $query="DELETE * FROM products WHERE id ='$id'";
        $this->db_connect()->query($query);
    }

    public function getAllProducts(){
        $query="SELECT * FROM products";
        $products = array();
        foreach ($this->db_connect()->query($query) as $row) {
            $products[] = array(
                'id' => $row['id'],
                'name' => $row['name'],
                'price' => $row['price'],
                'description' => $row['description'],
                'image' => $row['image_url'],
            );
        }
        return $products;
    }
    public function validate(){
        //Првоеряет наличие файла и его размеры, допустимость по размеру
        $file=$_FILES['image'];
        if(empty($_FILES['image'])){
            return FALSE;
        }else if(!in_array($file['type'], self::AVALIABLE_TYPES)){
            return FALSE;
        }else if($file['size']>self::IMG_SIZE){
            return FALSE;
        }
        return TRUE;
    }

    public function upload(){
        //
        $file = $_FILES['image'];
        $file_name_parts = explode(".", $file['name']);
        $file_extention = array_pop($file_name_parts);
        $file_base_name = implode("", $file_name_parts);
        $file_name = md5($file_bae_name . rand(1, getrandmax()));
        $file_name .= '.' . $file_extention;
        $this->src = self::UPLOAD_DIR .'/'. $file_name;
        move_uploaded_file($file['tmp_name'], $this->src);
        return $this->src;
    }

}
