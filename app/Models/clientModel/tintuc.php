<?php
function showall_TinTuc(){
    $sql = "select * from tintuc order by id limit 4 ";
    $tintuc = pdo_query($sql);
    return $tintuc;
}