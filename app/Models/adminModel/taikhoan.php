<?php
function loadall_taikhoan(){
    $sql = " select * from taikhoan order by id desc";
    $listtk = pdo_query($sql);
    return $listtk;
}
function insert_taikhoan ($user, $pass,$address,$email,$tel,$role){
    $sql = "insert into taikhoan (user,pass,address,email,tel,role) values('$user','$pass','$address','$email','$tel','$role')";
    pdo_execute($sql);
    
}
function loadone_taikhoan($id){
    $sql = "select * from taikhoan where id =".$id;
    $taikhoan = pdo_query_one($sql);
    return $taikhoan;
}
function  update_taikhoan($id, $role){
    $sql = "update taikhoan set role =".$role." where id =".$id;
    pdo_execute($sql);
}
function delete_taikhoan($id){
    $sql = "delete from taikhoan where id =".$id;
    pdo_execute($sql);
}
function get_role($n){
    switch($n){
        case 0:
            $tt = "người dùng";
            break;
        case 1:
           $tt = "admin";
      break;
      default :
      $tt = "người dùng";
      break;
    }
    return $tt;
}