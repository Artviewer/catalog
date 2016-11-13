<?php

$name=filter_input(INPUT_POST,'name');
$price=filter_input(INPUT_POST,'price');
$description=filter_input(INPUT_POST,'description');
$get=$_GET['action'];


function __autoload($className) {
    if (file_exists('./lib/'.$className . '.php')) {
        require_once './lib/'.$className . '.php';
        return true;
    }
    return false;
}

if($get='add') {
    $act=new Action();
    if($act->validate()){
        $image=$act->upload();
    }
    $act->addProduct($name, $description, $price, $image);
    unset($get);
    //Header("Location: index.php");
}elseif($get='ajax'){
    $query="SELECT * FROM products WHERE id<=";
    header("Content-type: application/json");
    echo json_encode();
}elseif($get='del'){
    $del_id=$_GET['id'];
    $query='SELECT * FROM products WHERE id="$id"';
    $act->db_connect()->query($query);
    unset($get);
    Header("Location: admin.php");
}