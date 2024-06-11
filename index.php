<?php
session_start();
$err = "";
include 'app/view/Client/pdo.php';
include 'app/view/Client/gobal.php';
include 'app/Models/clientModel/sanpham.php';
include 'app/Models/clientModel/taikhoan.php';
include 'app/Models/clientModel/danhmuc.php';
include 'app/Models/clientModel/binhluan.php';
include 'app/Models/clientModel/cart.php';
include 'app/Models/clientModel/tintuc.php';
include 'app/view/Client/header.php';

if(!isset($_SESSION['mycart']))
$_SESSION['mycart']=[];

$spnew = loadallsp_home();

include  'app/Controller/clienController.php';