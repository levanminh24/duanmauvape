<div class="container">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Thêm tin tức mới</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="index.php?act=addtt" method="post" enctype="multipart/form-data">
          
          
                <div class="form-group">
                    <label for="tensp">Tiêu đề</label>
                    <input type="text" class="form-control" id="" name="tieude">
                    <span class="text-danger">
                        <?php if (isset($err) && $err !== "") echo $err; ?>
                    </span>
                </div>
                <div class="form-group">
                    <label for="hinh">Hình</label>
                    <input type="file" class="form-control" id="hinh" name="hinh">
                    <span class="text-danger">
                        <?php if (isset($err3) && $err3 !== "") echo $err3; ?>
                    </span>
                </div>
                <div class="form-group">
                    <label for="mota">Nội dung</label>
                    <textarea class="form-control" id="mota" name="noidung" rows="5"></textarea>
                    <span class="text-danger">
                        <?php if (isset($err2) && $err2 !== "") echo $err2; ?>
                    </span>
                </div>
                <div class="form-group">
                    <label for="giasp">Tác giả</label>
                    <input type="text" class="form-control" id="" name="tacgia">
                    <span class="text-danger">
                        <?php if (isset($err1) && $err1 !== "") echo $err1; ?>
                    </span>
                </div>
                <div class="form-group">
                    <label for="giasp">Ngày đăng</label>
                    <input type="date" class="form-control" id="" name="ngaydang">
                    <span class="text-danger">
                        <?php if (isset($err1) && $err1 !== "") echo $err1; ?>
                    </span>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" name="themmoitt" value="Thêm mới">
               
                </div>
                <!-- Thông báo thành công -->
                <?php if (isset($thongbao) && $thongbao !== "") : ?>
                    <div class="alert alert-info"><?= $thongbao ?></div>
                <?php endif; ?>
            </form>
        </div>
    </div>

</div>
