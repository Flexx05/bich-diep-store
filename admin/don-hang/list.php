<?php
require_once '../models/Donhang.php';
require_once 'index.php';
require_once '../global.php';
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-lg-4">
                <input type="text" class="form-control" placeholder="Tìm đơn hàng theo tên, email, điện thoại">
            </div>
            <div class="col-1">
                <button type="submit" class="btn btn-light"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
        </div>
        <div class="card">
            <div class="card-header container-fluid text-uppercase font-weight-bold bg-dark text-white">
                <div class="row">
                    <div class="col-lg-1">ID</div>
                    <div class="col-2">Trạng thái</div>
                    <div class="col-1">Người đặt hàng</div>
                    <div class="col-2">Tổng tiền</div>
                    <div class="col-2">Email</div>
                    <div class="col-2">Số điện thoại</div>
                    <div class="col-2">Ngày đặt</div>
                </div>
            </div>
            <div class="card-body">
            <?php foreach ($list as $value) { ?>
                    <a href="?act=chitiet-donhang&id=<?php echo $value->id_donhang ?>" class="row text-dark text-decoration-none mb-3">
                        <div class="col-lg-1"><?php echo $value->id_donhang ?></div>
                        <div class="col-2"><?php echo $value->trang_thai ?></div>
                        <div class="col-2"><?php echo $value->nguoi ?></div>
                        <div class="col-2"><?php echo number_format($value->total_amount, 0, ",", ".") ?>đ</div>
                        <div class="col-2"><?php echo $value->email ?></div>
                        <div class="col-2"><?php echo $value->phone ?></div>
                        <div class="col-1"><?php echo $value->order_date ?></div>
                    </a>
                <?php } ?>
            </div>
                <a href="<?= $ADMIN_URL ?>/?act=chitiet-donhang" class="row text-dark text-decoration-none">
                    <div class="col-lg-1">ID</div>
                    <div class="col-2">Trạng thái</div>
                    <div class="col-1">Người đặt hàng</div>
                    <div class="col-2">Tổng tiền</div>
                    <div class="col-2">Email</div>
                    <div class="col-2">Số điện thoại</div>
                    <div class="col-2">Ngày đặt</div>
                </a>
            </div>
        </div>
    </div> <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>