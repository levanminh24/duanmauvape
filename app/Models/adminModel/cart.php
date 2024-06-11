<?php

function loadall_cart_count($idbill)
{
    $sql = "select * from cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}
function get_ttdh($n)
{
    switch ($n) {
        case '0':
            $tt = "Chờ xác nhận";
            break;
        case '1':
            $tt = "Đang lấy hàng";
            break;

        case '2':
            $tt = "Đang giao hàng";
            break;

        case '3':
            $tt = "Giao hàng thành công";
            break;

        case '4':
            $tt = "Đã nhận được hàng";
            break;
    }
    return $tt;
}

function loadall_bill()
{
    $sql = "SELECT *,bill.id as idbill from bill
    JOIN taikhoan ON taikhoan.id = bill.iduser
    order by bill.id desc";
    $listbill = pdo_query($sql);
    return $listbill;
}
function delete_bill($id)
{
    $sql = "delete from bill where id=" . $id;
    pdo_execute($sql);
}
function kttt(){
    $idbill = $_GET['id'];
    $sql = "SELECT bill_status FROM bill WHERE id = $idbill";
    $result = pdo_query($sql);
    return $result;
}

function loadone_bill($id)
{
    $sql = "select * from bill where id=" . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}

function loadall_tt()
{
    $sql = "select * from tinhtrang order by id desc"; //mới nhập đưa lên trên
    $list_tt = pdo_query($sql);
    return $list_tt;
}
function updatett($id,$status){
    $sql = "UPDATE bill SET bill_status = '$status' WHERE id = $id";
    pdo_execute($sql);
}