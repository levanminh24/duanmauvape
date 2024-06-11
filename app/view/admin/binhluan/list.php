<!-- Begin Page Content -->

<style>
    .nd{
        color: black;
        font-weight: 600;
    }
</style>
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 mb-5">Danh sách bình luận</h1>
    <form action="index.php?actt=listbl" method="post">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
          
                <div class="float-right">
                    <div class="input-group">
                       
                       
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                               
                                <th>Nội dung bình luận</th>
                                <th>Tài khoản</th>
                                <th>Sản phẩm</th>
                                <th>Ngày bình luận</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php
                $listbinhluan = loadall_binhluan2();
                foreach ($listbinhluan as $row) {
                    extract($row);?>
                    <tr >                
                    <td class="nd"><?= $noidung ?></td>
                    <td><?= $username ?></td>
                    <td><?= $name?></td>
                    <td><?=$ngaybinhluan?></td>
                    <td> <a href="index.php?act=xoabl&id=<?=$idbl?>"> <input style="border-radius:50px;padding:2px 10px;background-color:red;border:1px solid red;color:white;" type="button"  value="xóa"></a></td>
                    </tr>
                <?php } ?>
                    </table>
                   
                </div>
            </div>
        </div>
    </form>
</div>