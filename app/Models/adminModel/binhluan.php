<?php
function loadall_binhluan($idpro)
{
    $sql = "SELECT * FROM binhluan WHERE is_delete = 0";
    if ($idpro > 0) $sql .= " AND idpro='" . $idpro . "'";
    $sql .= " ORDER BY id DESC";
    $listbl = pdo_query($sql);
    return $listbl;
}

function loadall_binhluan2()
{
    $sql = "SELECT *, binhluan.id as idbl, taikhoan.user as username 
            FROM binhluan 
            LEFT JOIN sanpham ON binhluan.idpro = sanpham.id
            LEFT JOIN taikhoan ON binhluan.iduser = taikhoan.id
            WHERE binhluan.is_delete = 0
            ORDER BY binhluan.id DESC";
    $listbl = pdo_query($sql);
    return $listbl;
}

function delete_binhluan($id)
{
    $sql = "UPDATE binhluan SET is_delete = 1 WHERE id = ".$id;
    pdo_execute($sql);
}