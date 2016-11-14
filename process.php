<?php


$get=$_GET['action'];


function __autoload($className) {
    if (file_exists('./lib/'.$className . '.php')) {
        require_once './lib/'.$className . '.php';
        return true;
    }
    return false;
}
//exit ($get);

if($get==='add') {
    $name=filter_input(INPUT_POST,'name');
    $price=filter_input(INPUT_POST,'price');
    $description=filter_input(INPUT_POST,'description');
    $act=new Action();
        if(isset($name)){
            if($act->validate()) {
                $image = $act->upload();
            }
            $act->addProduct($name, $description, $price, $image);
            header("Location: index.php");
        }
}

    if($get==='ajax'){
    $query="SELECT * FROM products LIMIT 5, 5";
    header("Content-type: application/json");
    echo json_encode();
}

if($get==='del'){
    $act=new Action();
    $del_id=$_POST['id'];
    $query="DELETE  FROM products  WHERE id=$del_id";
    $act->db_connect()->query($query);
    header("Location: admin.php");
}