<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Thêm sản phẩm</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="index.php?act=addtk" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="tensp">Tên đăng nhập</label>
                    <input type="text" class="form-control" id="user" name="user">
                </div>
                <div class="form-group">
                    <label for="giasp">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="mota">Mât khẩu</label>
                    <input type="text" class="form-control" name="pass">
                    
                </div>
                <div class="form-group">
                    <label for="mota">Địa chỉ</label>
                    <input type="text" class="form-control" name="address">
                    
                </div>
                <div class="form-group">
                    <label for="mota">Số điện thoại</label>
                    <input type="text" class="form-control" name="tel">
                    
                </div>
                <div class="form-group">
                    <label for="mota">Vai trò</label>
                    <select class="form-control" id="sel1" name="role">
                        <option value="0">Thành viên</option>     
                        <option value="1">Quản trị viên</option>
                    </select>
                    
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" name="themmoi" value="Thêm mới">
               
                </div>
                <!-- Thông báo thành công -->
                <?php if (isset($thongbao) && $thongbao !== "") : ?>
                    <div class="alert alert-info"><?= $thongbao ?></div>
                <?php endif; ?>
            </form>
        </div>
    </div>

</div>
