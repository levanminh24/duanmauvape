<?php
function bill_chi_tiet($listbill)
{
    $img_path = "public/images/";
    $tong = 0;
    $i = 0;
    foreach ($listbill as $cart) {
        $hinh = $img_path . $cart['img'];
        $tong += $cart['thanhtien'];
        echo '
        <li class="list-group-item d-flex justify-content-between bg-black align-items-center">
            <div class="product-details d-flex align-items-center">
                <img src="' . $hinh . '" alt="" height="80px" class="me-3">
                <span>' . $cart['name'] . '</span>
            </div>
            <div class="product-quantity">
                <span>' . $cart['soluong'] . '</span>
            </div>
            <div class="product-price">
                <span>' . number_format($cart['price']) . ' VND</span>
            </div>
            <div class="product-line-price">
                <span>' . number_format($cart['thanhtien']) . ' VND</span>
            </div>
        </li>';
        $i += 1;
    }
}
function  tongdonhang()
{
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
    }
    return $tong;
}
function insert_bill($iduser,$name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang)
{
    $sql = "INSERT INTO bill (iduser,bill_name, bill_email, bill_address, bill_tel, bill_pttt, ngaydathang, total) 
            VALUES ($iduser,'$name', '$email', '$address', '$tel', '$pttt', '$ngaydathang', '$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}

function loadone_bill($id)
{
    $sql = "select * from bill where id=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill)
{
    $sql = "insert into cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill) values('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}

function loadall_cart($idbill)
{
    $sql = "select * from cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return $bill;
}


function loadall_cart_count($idbill)
{
    $sql = "select * from cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}


function loadall_bill($iduser) {
    $sql = "SELECT * FROM bill WHERE iduser=" . $iduser;
    $listbill = pdo_query($sql);
    return $listbill;
}

function get_ttdh($bill_status) {
    $status = [
        0 => 'Đang xử lý',
        1 => 'Đã xác nhận',
        2 => 'Đang giao hàng',
        3 => 'Đã giao hàng',
        4 => 'Đã hủy'
    ];
    return $status[$bill_status] ?? 'Không xác định';
}

