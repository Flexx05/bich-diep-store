    <!-- main -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-dark text-white text-uppercase font-weight-bold">
                        Danh sách sản phẩm
                    </div>
                    <form action="index.php?act=san_pham" method="POST">
        <input type="text" name="keyword" placeholder="Nhập tên/id danh mục">
        <select name="id_dm" id="">
            <option value="0" selected>Tất cả</option>
            <?php
            foreach ($listdanhmuc as $dm) {
                extract($dm);
                echo "<option value =$id>$name</option>";
            }
            ?>
        </select>
        <input type="submit" name="listok" value="Lọc">
    </form>
                    <div class="card-header text-uppercase font-weight-bold">
                        <div class="container-fluid">
                            <div class="row">
                            <p class="col-lg-1">STT</p>
                                <p class="col-lg-1">ID</p>
                                <p class="col-lg-2">Tên sản phẩm</p>
                                <p class="col-lg-1">Hình ảnh</p>
                                <p class="col-lg-2">Mô tả</p>
                                <p class="col-lg-1">Đơn giá</p>
                                <p class="col-lg-1">Giảm giá</p>
                                <p class="col-lg-1">Ngày nhập</p>
                                <p class="col-lg-1">Hành động</p>
                            </div>
                        </div>
                    </div>
                    <?php
                    // $count = 0;
                    // foreach ($list_hh as $key => $hanghoa) {
                    //     $STT = ++$count;
                    ?>
                    <div class="container-fluid">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-1 font-weight-bold">
                                <?php //echo $STT 
                                ?>
                            </div>
                            <div class="col-lg-1">
                                <!-- <form action="">
                                    <div class="form-group">
                                        <input type="checkbox" name="" id="" class="form-check-inline">
                                    </div>
                                </form> -->
                            </div>
                            <p class="col-lg-1"><?php //echo $hanghoa->ma_hh 
                                                ?></p>
                            <p class="col-lg-2"><?php //echo $hanghoa->ten_hh 
                                                ?></p>
                            <img class="col-lg-1" src="<?php //echo $hanghoa->hinh_anh 
                                                        ?>" alt="">
                            <p class="col-lg-2 multiline-truncate"><?php //echo $hanghoa->mo_ta 
                                                                    ?></p>
                            <p class="col-lg-1"><?php //echo $hanghoa->don_gia 
                                                ?> VND</p>
                            <p class="col-lg-1"><?php //echo $hanghoa->giam_gia 
                                                ?> %</p>
                            <p class="col-lg-1"><?php //echo $hanghoa->ngay_nhap 
                                                ?></p>
                            <div class="col-lg-1">
                                <!-- <form action="">
                                    <div class="form-group d-flex">
                                        <a href="index.php?btn_edit&id=<?php //echo $hanghoa->ma_hh 
                                                                        ?>" style="text-decoration: none;"><input
                                                type="button" name="" id="" class="form-control btn-outline-dark"
                                                value="Sửa"></a>
                                        <input onclick="delCF('index.php?btn_del&id=<?php //echo $hanghoa->ma_hh 
                                                                                    ?>')" type="button" name="" id=""
                                            class="form-control btn-outline-dark" value="Xóa">
                                    </div>
                                </form> -->
                            </div>
                        </div>
                    </div>
                    <?php
                    // }
                    ?>
                </div>
                <form action="">
                    <div class=" form-group d-flex w-25 mx-auto mt-3">
                        <input type="button" name="" id="" class="form-control btn btn-outline-dark"
                            value="Chọn tất cả">
                        <input type="button" name="" id="" class="form-control btn btn-outline-dark"
                            value="Bỏ chọn tất cả">
<<<<<<< HEAD
                        <a href="index.php/?act=them-sanpham" style="text-decoration: none;"><input
                                type="submit" name="" id="" class="form-control btn btn-outline-dark"
                                value="Nhập thêm"></a>
=======
                        <a href="<?= $ADMIN_URL ?>/?act=them-sanpham" class="text-decoration-none btn btn-outline-dark">
                            Nhập thêm
                        </a>
>>>>>>> aadec4c45842aace472e685580e6e0a61d7ca1d6
                    </div>
                </form>
            </div>
        </div>
    </div>