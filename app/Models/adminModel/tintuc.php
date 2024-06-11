<?php
function load_alltintuc(){
    $sql = "select * from tintuc order by id desc";
    $tintuc = pdo_query($sql);
    return $tintuc;
}
function addTinTuc($tieude,$hinh,$noidung,$tacgia,$ngaydang){
    $sql = "insert into tintuc (tieude,img,noidung,tacgia,ngaydang) values('$tieude','$hinh','$noidung','$tacgia','$ngaydang')";
 pdo_execute($sql);
}
function loadone_TinTuc($id){
    $sql = "select * from tintuc where id=".$id;
   $tt =  pdo_query_one($sql);
   return $tt;
}
function update_TinTuc($id,$tieude,$hinh,$noidung,$tacgia,$ngaydang){
    if($hinh != "")
        $sql = "update tintuc set tieude='$tieude',img = '$hinh',noidung='$noidung',tacgia='$tacgia',ngaydang='$ngaydang' where id='$id'";
 
    else
    $sql = "update tintuc set  tieude='$tieude',noidung='$noidung',tacgia='$tacgia',ngaydang='$ngaydang' where id='$id'";
  pdo_execute($sql);
}
function delete_TinTuc($id){
    $sql = "delete from tintuc where id=".$id;
    pdo_execute($sql);
}