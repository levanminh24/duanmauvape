<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 mb-5">Danh sách sản phẩm</h1>
    <form action="index.php?act=listsp" method="post">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
          
                <div class="float-right">
               
                <div class="input-group">
                <input type="text" name="kyw" class="form-control" placeholder="Nhập tên sản phẩm..." aria-label="Search product" aria-describedby="button-search">
                <select name="iddm" id="" class="form-select">
                <option value="0" slected>Tất cả </option>
              <?php 
                 foreach ($listdanhmuc as $danhmuc) {
                 extract($danhmuc);
                 echo '<option value="'.$id.'">'.$name.'</option>';
                   }
              ?>
            </select>
            <input type="submit" name="listok" class="btn btn-primary" value="tim kiem">
            </div>
    </form>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                               
                                <th>Mã loại</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá</th>
                                <th>Ảnh</th>
                                <th>mota</th>
                                <th>Lượt xem</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($listsanpham as $sanpham) {
    extract($sanpham);
    $suasp = "index.php?act=suasp&id=" . $id;
    $xoasp = "index.php?act=xoasp&id=" . $id;
    $hinhpath = "../../images/".$img;  // Đường dẫn đến ảnh
    $hinh = is_file($hinhpath) ? $hinhpath : "path/to/default/image.jpg"; 

    echo '<tr>
        <td>' . $id . '</td>
        <td>' . $name . '</td>
        <td>' . $price . '</td>
        <td><img src="' . $hinh . '" width="100px"></td>
        <td>' . $mota. '</td>
        <td>' . $luotxem . '</td>

      
        <td>
            <a href="' . $suasp . '" class="btn btn-primary btn-sm">Sửa</a>
            <a href="' . $xoasp . '" class="btn btn-danger btn-sm">Xóa</a>
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