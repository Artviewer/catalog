<?php

class Action {
    protected $name;
    protected $price;
    protected $description;
    protected $image;
    
    public function __construct($name, $price, $description, $image) {
        $this->name=$name;
        $this->price=$price;
        $this->description=$description;
        $this->image=$image;
    }

    public function db_connect(){
        $dbh = new PDO('mysql:host=localhost;dbname=catalog', 'root', '');
        return $dbh;
    }

    public function addProduct($name, $description, $price, $image){
        $query="INSERT INTO products (name, price, description, image_url) VALUES ('$name','$description','$price','$image')";
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
                'image' => $row['image_url'],
            );
            return $products;
        }
    }
}
