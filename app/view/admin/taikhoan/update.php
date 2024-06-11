<?php
if(is_array($taikhoan)){
    extract($taikhoan);
}
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Thêm sản phẩm</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="index.php?act=updatetk" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="mota">Vai trò</label>
                    <select class="form-control" id="sel1" name="role">
                        <?php
                            if($role==0){
                                echo '<option value="0">Người dùng</option>     
                                      <option value="1">Admin</option>';
                            }else if($role==1){
                                echo '<option value="1">Admin</option>
                                    <option value="0">Người dùng</option>';
                            }
                        ?>
                        
                    </select>
                    
                </div>
                <div class="form-group">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" class="btn btn-success" name="capnhattk" value="Thêm mới">
               
                </div>
                <!-- Thông báo thành công -->
                <?php if (isset($thongbao) && $thongbao !== "") : ?>
                    <div class="alert alert-info"><?= $thongbao ?></div>
                <?php endif; ?>
            </form>
        </div>
    </div>

</div>
