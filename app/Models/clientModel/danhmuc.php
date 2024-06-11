<?php
function loadAllDm(){
    $sql = "SELECT * FROM danhmuc";
    $result = pdo_query($sql);
    return $result;
}

function loadDmOld(){
    $sql = "SELECT * FROM danhmuc ORDER BY id ASC LIMIT 6";
    $result = pdo_query($sql);
    return $result;
}