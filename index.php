<?php
session_start();
ob_start();
require_once "global.php";
require_once "models/pdo.php";
include_once "models/taikhoan.php";
include_once "views/header.php";

if (isset($_GET['act']) && $_GET['act'] !== '') {
    $act = $_GET['act'];
    switch ($act) {
        case 'ao':
            include_once "views/Ao/index.php";
            break;
        case 'quan':
            include_once "views/Quan/index.php";
            break;
        case 'lienhe':
            include_once "views/lienhe.php";
            break;
        case 'gioithieu':
            include_once "views/gioithieu.php";
            break;
        case 'dangnhap':
            if (isset($_POST["dangnhap"]) ) {
                $ten_dang_nhap = $_POST["ten_dang_nhap"];
                $mat_khau = $_POST["mat_khau"];
                $checkuser = check_user($ten_dang_nhap, $mat_khau);
                if (is_array($checkuser)) {
                    $_SESSION["ten_dang_nhap"] = $checkuser;
                    header("location:index.php");
                    exit;
                } else {
                    $thongbao = "Tài khoản không tồn tại , vui lòng kiểm tra hoặc đăng ký !";
                }
            }
            include_once "views/taikhoan/dang-nhap.php";
            break;
        case 'dangky':
            // print_r(($_POST));
            if (isset($_POST["dangky"]) ) {
                $ten_user = $_POST["ten_user"];
                $email = $_POST["email"];
                $ten_dang_nhap = $_POST["ten_dang_nhap"];
                $mat_khau = $_POST["mat_khau"];
                // $hinh_anh = $_POST["hinh_anh"];
                $dia_chi = $_POST["dia_chi"];
                $sdt = $_POST["sdt"];
                insert_taikhoan($ten_user, $email, $ten_dang_nhap, $mat_khau,  $dia_chi, $sdt);
                $thongbao = "Đăng ký thành công . Vui lòng đăng nhập để bình luận hoặc mua hàng";
            }
            include_once "views/taikhoan/dang-ky.php";
            break;
        case 'edit-tk':
            include_once "views/taikhoan/edit-tk.php";
            break;
        case 'quenmk':
            include_once "views/taikhoan/quenmk.php";
            break;
        default:
            include_once "views/trangchu.php";
            break;
    }
} else {
    include_once "views/trangchu.php";
}

include_once "views/footer.php";
ob_end_flush(); 