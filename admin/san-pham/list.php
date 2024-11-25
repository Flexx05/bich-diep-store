    <!-- main -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <form action="index.php?act=listsp" method="POST">
                    <input type="text" name="keyword" placeholder="Nhập tên/id danh mục">
                    <select name="id_dm" id="">
                        <option value="0" selected>Tất cả</option>
                        <?php
                        foreach ($listdanhmuc as $dm) {
                            extract($dm);
                            echo "<option value =$id_dm>$ten_dm>$phan_loai</option>";
                        }
                        ?>
                    </select>
                    <input type="submit" name="listok" value="Lọc">
                </form>
                <div class="card">
                    <div class="card-header bg-dark text-white text-uppercase font-weight-bold">
                        Danh sách sản phẩm
                    </div>

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
                    $stt = 1;
                    foreach ($listsanpham as $san_pham) {
                        extract($san_pham);
                    ?>
                        <div class="container-fluid">
                            <div class="row d-flex align-items-center">
                                <p class="col-lg-1">
                                    <? $stt++ ?>
                                </p>
                                <p class="col-lg-1">
                                    <? $id_sp ?>
                                </p>
                                <p class="col-lg-2">
                                    <? $ten_sp ?>
                                </p>
                                <p class="col-lg-1">Hình ảnh</p>
                                <p class="col-lg-2">
                                    <? $mo_ta ?>
                                </p>
                                <p class="col-lg-1">
                                    <? $don_gia ?> VND
                                </p>
                                <p class="col-lg-1">
                                    <? $giam_gia ?> %
                                </p>
                                <p class="col-lg-1">
                                    <? $ngay_nhap ?>
                                </p>
                                <p class="col-lg-1">Hành động</p>

                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <form action="">
                    <div class=" form-group d-flex w-25 mx-auto mt-3">
                        <input type="button" name="" id="" class="btn btn-primary btn-sm mr-2" value="Chọn tất cả">
                        <input type="button" name="" id="" class="btn btn-secondary btn-sm mr-2" value="Bỏ chọn tất cả">

                        <a href="<?= $ADMIN_URL ?>/?act=them-sanpham" class="text-decoration-none btn btn-outline-dark">
                            Nhập thêm
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https:code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https:stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    </body>

    <script>
        function delCF(dellUrl) {
            if (confirm('Bạn chắc chứ?')) {
                document.location = dellUrl
            }
        }
    </script>

    </html>