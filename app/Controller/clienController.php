<?php
if (isset($_GET['actt'])) {
    $act = $_GET['actt'];
    switch ($act) {
        case 'spdanhmuc':

            include "app/view/Client/sanpham/sptheodm.php";
            break;
        case 'ctsp':

            include "app/view/Client/sanpham/spchitiet.php";
            break;
        case 'hot':

            include "app/view/Client/sanpham/sphot.php";
            break;

        case 'dangnhap':
            if (isset($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $taikhoan = dangnhap($user, $pass);
                if ($taikhoan['user'] == $user && $taikhoan['pass'] == $pass) {
                    $_SESSION['user'] = $user;
                    $_SESSION['role'] = $taikhoan['role'];
                    $_SESSION['iduser'] = $taikhoan['id'];
                    echo '<script>alert("Đăng nhập thành công")</script>';
                    echo '<script>window.location.href = "index.php"</script>';
                } else {
                    echo '<script>alert("Sai tài khoản hoặc mật khẩu")</script>';
                    echo '<script>window.location.href = "index.php?actt=dangnhap"</script>';
                }
            }
            include "app/view/Client/taikhoan/dangnhap.php";
            break;

        case 'dangky':
            if (isset($_POST['dangky'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $cfpass = $_POST['cfpass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $role = $_POST['role'];
                if ($cfpass == $pass) {
                    addtaikhoan($user, $pass, $email, $address, $tel, $role);
                    echo '<script>alert("Đăng ký thành công")</script>';
                    echo '<script>window.location.href = "index.php?actt=dangnhap"</script>';
                } else {
                    echo '<script>alert("Mật khẩu xác nhận không khớp")</script>';
                }
            }
            include "app/view/Client/taikhoan/dangky.php";
            break;
        case 'doimatkhau':
            if (isset($_POST['doimk'])) {
                $iduser = $_SESSION['iduser'];
                $pass = $_POST['pass'];
                $cfpass = $_POST['cfpass'];
                if ($pass == $cfpass) {
                    changPass($pass, $iduser);
                    echo '<script>alert("Đổi mật khẩu thành công")</script>';
                    echo '<script>window.location.href = "index.php"</script>';
                } else {
                    echo '<script>alert("Mật khẩu xác nhận không khớp")</script>';
                }
            }
            include "app/view/Client/taikhoan/doimatkhau.php";

            break;
        case 'dangxuat':
            unset($_SESSION['user']);
            unset($_SESSION['iduser']);
            unset($_SESSION['role']);
            echo '<script>window.location.href = "index.php"</script>';
            break;
        case 'quenmk':
            if (isset($_POST['laymk'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $check = layMatkhau($email, $user);
                if (!empty($check)) {
                    $pass = $check[0]['pass'];
                    $err = "mật khẩu của bạn là: $pass";
                } else {
                    $err = "Không tìm thấy tài khoản";
                }
            }
            include "app/view/Client/taikhoan/quenmatkhau.php";
            break;
        case 'addbinhluan':
            if (isset($_POST['binhluan'])) {
                if (isset($_SESSION['user'])) {
                    $noidung = $_POST['noidung'];
                    $ngaybinhluan = $_POST['ngaybinhluan'];
                    $iduser = $_POST['iduser'];
                    $idpro = $_POST['idpro'];
                    addbinhluan($noidung, $iduser, $idpro, $ngaybinhluan);
                    echo "<script>window.location.href='index.php?actt=ctsp&id=$idpro';</script>";
                } else {
                    echo '<script>alert("Chưa đăng nhập")</script>';
                    echo '<script>window.location.href="index.php?actt=dangnhap"</script>';
                }
            }
            break;
        case 'giohang':
            if (!isset($_SESSION['iduser'])) {
                echo '<script>alert("Chưa đăng nhập")</script>';
                echo '<script>window.location.href="index.php?actt=dangnhap"</script>';
            } else {
                include "app/view/Client/sanpham/giohang.php";
            }
            break;
            // ADD CART

            case 'addtocart':
                // Kiểm tra xem người dùng đã đăng nhập chưa
                if (!isset($_SESSION['iduser'])) {
                    // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập
                    echo '<script>window.location.href="index.php?actt=dangnhap"</script>';
                    exit();
                }
        
                // Thêm thông tin sản phẩm từ form "add to cart" vào session
                if (isset($_POST['addtocart']) && $_POST['addtocart']) {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $img = $_POST['img'];
                    $price = $_POST['price'];
                    $soluong = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 1;
                    $ttien = $soluong * $price;
        
                    // Kiểm tra xem giỏ hàng đã được khởi tạo chưa
                    if (!isset($_SESSION['mycart']) || !is_array($_SESSION['mycart'])) {
                        $_SESSION['mycart'] = [];
                    }
        
                    // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
                    $kiemtra = false;
                    foreach ($_SESSION['mycart'] as &$cartItem) {
                        if ($cartItem[0] == $id) {
                            // Cập nhật số lượng và tổng tiền
                            $cartItem[4] += $soluong;
                            $cartItem[5] = $cartItem[4] * $price;
                            $kiemtra = true;
                            break;
                        }
                    }

        
                    // Nếu sản phẩm chưa có trong giỏ hàng, thêm nó như một mục mới
                    if (!$kiemtra) {
                        $spadd = [$id, $name, $img, $price, $soluong, $ttien];
                        $_SESSION['mycart'][] = $spadd;
                    }
                    //xoá đơn hàng
                    $_SESSION['cart']=[];

        
                    // Tính tổng tiền của giỏ hàng
                   
                }
                include "app/view/Client/sanpham/giohang.php";
                break;



        case 'delcart':
            if (isset($_GET['idcart'])) {
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }

            include "app/view/Client/sanpham/giohang.php";
            // include "view/cart/viewcart.php";

            break;
        case 'billt':
            include "app/view/Client/bill/bill.php";
            break;
        case 'billct':
            if (isset($_POST['dongydathang'])) {
        if($_SESSION['iduser']) $iduser =$_SESSION['iduser'];
        else $id =0;
                $name = $_POST['name'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $pttt = $_POST['pttt'];
                $ngaydathang = date('Y-m-d H:i:s');
                $tongdonhang = tongdonhang();

                // Tạo bill
                $idbill = insert_bill($iduser,$name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang);

                // Insert vào cart

                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($_SESSION['iduser'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[5], $idbill);
                }

                // Xóa session cart
                $_SESSION['mycart'] = "";

                // Lấy thông tin bill và chi tiết bill
                $bill = loadone_bill($idbill);
                $billct = loadall_cart($idbill);

                // Kiểm tra nếu thông tin bill không tồn tại
                if (empty($bill) || empty($billct)) {
                    echo "Không có thông tin đơn hàng hoặc sản phẩm.";
                    break;
                }

                include "app/view/Client/bill/bit.php";
            }
            break;
            case 'donhangcuatoi':
               
                $listbill = loadall_bill($_SESSION['iduser']);
                include "app/view/Client/sanpham/donhangct.php";
                break;
                case 'tintuc':
                    $showTinTuc = showall_TinTuc();
                    include "app/view/Client/tintuc/tinTuc.php";
                    break;
             

    }
} else {
    include 'app/view/Client/home.php';
}
include 'app/view/Client/footer.php';
