<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 mb-5">Danh sách tin tức </h1>
  
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <a type="button" class="btn btn-primary" href="index.php?act=addtt">Thêm mới tin tức</a>
                        <thead class="thead-light">
                            <tr>
                               
                                <th>ID</th>
                                <th>Tiêu đề</th>
                                <th>Ảnh</th>
                                <th>Nội dung</th>
                                <th>Tác giả</th>
                                <th>Ngày đăng</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($listtintuc as $tintuc) {
    extract($tintuc);
    $suatintuc = "index.php?act=suatintuc&id=" . $id;
    $xoatintuc = "index.php?act=xoatintuc&id=" . $id;
    $hinhpath = "../../images/".$img;  // Đường dẫn đến ảnh
    $hinh = is_file($hinhpath) ? $hinhpath : "path/to/default/image.jpg"; 

    echo '<tr>
        <td>' . $id . '</td>
        <td>' . $tieude . '</td>
        <td><img src="' . $hinh . '" width="100px"></td>
        <td>' . $noidung. '</td>
        <td>' . $tacgia. '</td>
        <td>' . $ngaydang . '</td>

      
        <td>
            <a href="' . $suatintuc . '" class="btn btn-primary btn-sm">Sửa</a>
            <a href="' . $xoatintuc . '" class="btn btn-danger btn-sm">Xóa</a>
        </td>
    </tr>';
} ?>
                        </tbody>
                    </table>
                  
                </div>
            </div>
        </div>
    
</div>
<!-- /.container-fluid -->