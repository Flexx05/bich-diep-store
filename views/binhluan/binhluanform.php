<?php
session_start();
include "../../models/pdo.php";
include "../../models/Binhluan.php";
$idpro = $_REQUEST['idpro'];
$listbinhluan= loadbl_binhluan($idpro);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>title</title>
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <!-- <style>
        .binhluan table {
            width: 90%;
        }

        .binhluan table td:nth-child(1) {
            width: 50%;
        }

        .binhluan table td:nth-child(2) {
            width: 20%;
        }

        .binhluan table td:nth-child(3) {
            width: 30%;
        }
    </style> -->
</head>

<body>
    <div class="card">
        
        <div class="binhluan">
            <table>
                <?php
                foreach ($listbinhluan as $bl) {
                    extract($bl);
                    echo '<tr><td>' . $noidung_bl . '</td>';
                    echo '<td> Ngày tháng : ' . $ngay_bl . '</td></tr>';

                }
                ?>
            </table>
        </div>
        <div>
            <?php
            if (isset($_SESSION['user']) && is_array($_SESSION['user'])) {
                extract($_SESSION['user']);
                ?>
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                    <input type="hidden" name="idpro" value="<?= $idpro ?>">
                    <input name="noidung" type="text" placeholder="Nhập bình luận...">
                    <div class="btn-cmt" style="padding-left: 10px;">
                        <input name="btn_guibl" type="submit" value="Bình luận">
                    </div>
                </form>
            <?php } else { ?>
                <p style=color:red;>Bạn phải đăng nhập để bình luận!</p>
            <?php } ?>
        </div>
        <?php
        if (isset($_POST['btn_guibl']) && $_POST['btn_guibl']) {
            $noidung_bl = $_POST['noidung_bl'];
            $idpro = $_POST['idpro'];
            $id_user = $_SESSION['id_user']['id_bl'];
            $ngay_bl = date("Y-m-d H:i:s");
            insertBinhluan($id_bl,$noidung_bl,$id_sp,$id_khachhang,$ngay_bl);
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }
        ?>
    </div>
</body>

</html>