<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 mb-5">Danh sách tài khoản</h1>
    <form action="index.php?act=listtk" method="post">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
          
                <div class="float-right">
               
    </form>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                               
                                <th>id</th>
                                <th>Tên đăng nhập</th>
                                <th>Mật khẩu</th>
                                <th>Email</th>
                                <th>Địa chỉ</th>
                                <th>Số điệnt thoại</th>
                                <th>Trạng thái</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($listtaikhoan as $taikhoan) {
    extract($taikhoan);
    $suatk = "index.php?act=suatk&id=" . $id;
    $xoatk = "index.php?act=xoatk&id=" . $id;
$role = get_role($taikhoan['role']);
    echo '<tr>
        <td>' . $id . '</td>
        <td>' . $user . '</td>
        <td>' . $pass . '</td>
        <td>' . $email . '</td>
        <td>' . $address . '</td>
        <td>' . $tel . '</td>
        <td>' . $role. '</td>
       

      
        <td>
            <a href="' . $suatk . '" class="btn btn-primary btn-sm">Sửa</a>
            <a href="' . $xoatk . '" class="btn btn-danger btn-sm">Xóa</a>
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