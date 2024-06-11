<?php
function loadallsp_home(){
    $sql = "SELECT * FROM sanpham ORDER BY id DESC LIMIT 8 ";
   $toplx = pdo_query($sql);
   return $toplx;
}
function loadAllSpAds(){
    $query="SELECT * FROM sanpham ORDER BY luotxem desc limit 0,4";
    return pdo_query($query);
}


function load_one_spdm($iddm){
    $query="SELECT * FROM sanpham WHERE iddm=".$iddm;
    return pdo_query_one($query);
}
function loadSpTheoDm($iddm){
    $sql = "SELECT *,sanpham.name as name_sp, sanpham.id as idsp FROM danhmuc
    JOIN sanpham ON danhmuc.id = sanpham.iddm
    WHERE iddm = $iddm";
    $reuslt = pdo_query($sql);
    return $reuslt;
}
function chiTietSanPham($idsp){
    $sql = "SELECT *,sanpham.name as name_sp,danhmuc.name as name_dm, sanpham.id as idsp FROM danhmuc
    JOIN sanpham ON danhmuc.id = sanpham.iddm
    WHERE sanpham.id = $idsp";
    $reuslt = pdo_query($sql);
    return $reuslt;
}