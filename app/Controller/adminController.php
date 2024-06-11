<?php

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include 'danhmuc/list.php';
            break;
        case 'adddm':
            if (isset($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                $hinh = "";  // Mặc định là không có tệp
                if (isset($_FILES['hinh']) && $_FILES['hinh']['error'] == UPLOAD_ERR_OK) {
                    $hinh = basename($_FILES["hinh"]["name"]);
                    $target_dir = "../../images/";
                    $target_file = $target_dir . $hinh;
                    move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                }
                insert_danhmuc($tenloai, $hinh);
                $thongbao = "Thêm mới thành công";
            }
            include "danhmuc/add.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include 'danhmuc/update.php';
            break;
        case 'updatedm':
            if (isset($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];

                if (isset($_FILES['hinh']) && $_FILES['hinh']['error'] == UPLOAD_ERR_OK) {
                    $hinh = basename($_FILES["hinh"]["name"]);
                    $target_dir = "../../images/";
                    $target_file = $target_dir . $hinh;
                    move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                    update_danhmuc($id, $tenloai, $hinh); // Chỉ cập nhật hình ảnh nếu có tệp mới
                } else {
                    update_danhmuc($id, $tenloai, $hinh); // Không thay đổi hình ảnh
                }
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }

            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }

            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $iddm);

            include "sanpham/list.php";
            break;
        case 'addsp':
            $err = $tensp = $giasp =  $mota = "";
            //kiểm tra xem ng dùng có click add ko ?
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                if (empty($_POST['tensp'])) {
                    $err = "Không được để trống tên sản phẩm ! <br>";
                }
                if (empty($_POST['giasp'])) {

                    $err1 = "Không được để trống giá sản phẩm ! <br>";
                }
                if (empty($_POST['mota'])) {

                    $err2 = "Không được để trống mô tả sản phẩm ! <br>";
                } else {
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    if (isset($_FILES['hinh']) && $_FILES['hinh']['error'] == UPLOAD_ERR_OK) {
                        $hinh = basename($_FILES["hinh"]["name"]);
                        $target_dir = "../../images/";
                        $target_file = $target_dir . $hinh;
                        move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                    }

                    insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                    $thongbao = "Thêm thành công";
                }
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id']);
            }

            $listdanhmuc = loadall_danhmuc();
            include "sanpham/update.php";
            break;
            // UPDATE SAN PHAM
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                if (isset($_FILES['hinh']) && $_FILES['hinh']['error'] == UPLOAD_ERR_OK) {
                    $hinh = basename($_FILES["hinh"]["name"]);
                    $target_dir = "../../images/";
                    $target_file = $target_dir . $hinh;
                    move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                    // Chỉ cập nhật hình ảnh nếu có tệp mới
                } else {
                    $hinh = "";
                }
                update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;
        case 'listtk':
            $listtaikhoan = loadall_taikhoan();
            include 'taikhoan/list.php';
            break;
        case 'addtk':
            if (isset($_POST['themmoi'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $role = $_POST['role'];
                insert_taikhoan($user, $pass, $address, $email, $tel, $role);
                $thongbao = "them thanh cong";
            }
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/add.php";
            break;
        case 'listtk':
            $listtaikhoan = loadall_taikhoan();
            include 'taikhoan/list.php';
            break;
        case 'suatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $taikhoan = loadone_taikhoan($_GET['id']);
            }

            include "taikhoan/update.php";
            break;

        case 'updatetk':
            if (isset($_POST['capnhattk']) && ($_POST['capnhattk'])) {
                $role = $_POST['role'];
                $id = $_POST['id'];
                update_taikhoan($id, $role);
                $thongbao = "Cập nhật thành công";
            }
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'xoatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_taikhoan($_GET['id']);
            }
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'listbl':
            include "binhluan/list.php";
            break;
        case 'xoabl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_binhluan($_GET['id']);
            }

            $listbinhluan = loadall_binhluan(0);
            $listbinhluan = loadall_binhluan2();
            include "binhluan/list.php";
            break;
        case 'donhang':
            $listbill = loadall_bill();
            include "bill/list.php";
            break;
        case 'xoabill':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_bill($_GET['id']);
            }
            $listbill = loadall_bill();
            include "bill/list.php";
            break;
        case 'suatt':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $bill = loadone_bill($_GET['id']);
            }
            $list_tt = loadall_tt();
            include "bill/updatett.php";
            break;

        case 'updatett':
            include "bill/updatett.php";
            if (isset($_POST['capnhat'])) {
                $status = $_POST['bill_status'];
                $id = $_GET['id'];
                updatett($id, $status);
                echo '<script>window.location.href="index.php?act=donhang"</script>';
            }
            break;
            case 'qltintuc':
               $listtintuc = load_alltintuc();
                include "tintuc/listTinTuc.php";
                break;
                case 'addtt':
                    if(isset($_POST['themmoitt'])){
                        $tieude = $_POST['tieude'];
                        $hinh = "";  // Mặc định là không có tệp
                        if (isset($_FILES['hinh']) && $_FILES['hinh']['error'] == UPLOAD_ERR_OK) {
                            $hinh = basename($_FILES["hinh"]["name"]);
                            $target_dir = "../../images/";
                            $target_file = $target_dir . $hinh;
                            move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                        }
                        $noidung = $_POST['noidung'];
                        $tacgia = $_POST['tacgia'];
                        $ngaydang = $_POST['ngaydang'];
                        addTinTuc($tieude,$hinh,$noidung,$tacgia,$ngaydang);
                      $thongbao = " Thêm thành công";
                    }
                    include "tintuc/addTinTuc.php";
                    break;
                    case 'suatintuc':
                        if(isset($_GET['id'])){
                            $tintuc = loadone_TinTuc($_GET['id']);
                        }
                        include "tintuc/updateTinTuc.php";
                    case 'updatetintuc':
                        if(isset($_POST['capnhattintuc']) && ($_POST['capnhattintuc'])){
                        $id= $_POST['id'];
                        $tieude = $_POST['tieude'];
                        if (isset($_FILES['hinh']) && $_FILES['hinh']['error'] == UPLOAD_ERR_OK) {
                            $hinh = basename($_FILES["hinh"]["name"]);
                            $target_dir = "../../images/";
                            $target_file = $target_dir . $hinh;
                            move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                            // Chỉ cập nhật hình ảnh nếu có tệp mới
                        } else {
                            $hinh = "";
                        }
                  
                        $noidung = $_POST['noidung'];
                        $tacgia = $_POST['tacgia'];
                        $ngaydang = $_POST['ngaydang'];
                        update_TinTuc($id,$tieude,$hinh,$noidung,$tacgia,$ngaydang);
                        $thongbao = "Cập nhật thành công";
                        $listtintuc = load_alltintuc();
                    include "tintuc/listTinTuc.php";
                    }

                    
                    break;
                    case 'xoatintuc':
                        if(isset($_GET['id'])){
                            delete_TinTuc($_GET['id']);
                        }
                        $listtintuc = load_alltintuc();
                        include "tintuc/listTinTuc.php";
        case 'home':
            $listthongke = loadall_thongke3();
            $thongkebl = loadall_thongkebl();
            $thongkedm = loadall_thongkedm();
            $thongkedh = thongke_donhang();
            include "home.php";
            break;
    }
} else {
    include "../view/admin/home.php";
}
