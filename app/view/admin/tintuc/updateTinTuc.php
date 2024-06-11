<?php
if(is_array($tintuc)){
    extract($tintuc);
}

$hinhpath="../../images/".$img;
if(is_file($hinhpath)){
$hinh="<img src='".$hinhpath."' width='80px'height='80px'>";
}else{
  $hinh="no photo";
}
?>


<div class="container">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cập nhật tức</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="index.php?act=updatetintuc" method="post" enctype="multipart/form-data">
          
            
                <div class="form-group">
                    <label for="tensp">Tiêu đề</label>
                    <input type="text" class="form-control" id="" name="tieude" value="<?=$tieude?>">
                    <span class="text-danger">
                        <?php if (isset($err) && $err !== "") echo $err; ?>
                    </span>
                </div>
                <div class="form-group">
                    <label for="hinh">Hình</label>
                    <input type="file" class="form-control" id="hinh" name="hinh"> <br><br>
                    Ảnh cũ <br>
                    <img style="width: 100px;" src="../../images/<?= $img ?>" alt="">
                    <span class="text-danger">
                        <?php if (isset($err3) && $err3 !== "") echo $err3; ?>
                    </span>
                </div>
                <div class="form-group">
                    <label for="mota">Nội dung</label>
                    <textarea class="form-control" id="mota" name="noidung" rows="5" ><?=$noidung?></textarea>
                    <span class="text-danger">
                        <?php if (isset($err2) && $err2 !== "") echo $err2; ?>
                    </span>
                </div>
                <div class="form-group">
                    <label for="giasp">Tác giả</label>
                    <input type="text" class="form-control" id="" name="tacgia" value="<?=$tacgia?>">
                    <span class="text-danger">
                        <?php if (isset($err1) && $err1 !== "") echo $err1; ?>
                    </span>
                </div>
                <div class="form-group">
                    <label for="giasp">Ngày đăng</label>
                    <input type="date" class="form-control" id="" name="ngaydang" value="<?=$ngaydang?>">
                    <span class="text-danger">
                        <?php if (isset($err1) && $err1 !== "") echo $err1; ?>
                    </span>
                </div>
                <div class="form-group">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" class="btn btn-success" name="capnhattintuc" value="Cập nhật tin tức">
               
                </div>
                <!-- Thông báo thành công -->
                <?php if (isset($thongbao) && $thongbao !== "") : ?>
                    <div class="alert alert-info"><?= $thongbao ?></div>
                <?php endif; ?>
            </form>
        </div>
    </div>

</div>
