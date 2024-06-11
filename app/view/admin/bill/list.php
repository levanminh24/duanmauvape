<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 mb-5">Danh sách đơn hàng</h1>
   
        <div class="card shadow mb-4">
            <div class="card-header py-3">
          
                <div class="float-right">
              

                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                               
                                <th>Mã loại</th>
                                <th>Khach hang</th>
                                <th>Thành tiền</th>
                                <th>Tinh trang</th>
                                <th>Ngày đặt</th>
                         
                                <th>Địa chỉ người nhận</th>
                                <th>Sđt</th>
                          
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <div action="index.php?act=updatett" method="post" enctype="multipart/form-data">

                        <?php

                        foreach ($listbill as $bill) {
                            extract($bill);
                            $xoabill = "index.php?act=xoabill&id=" . $idbill;
                            $suatt = "index.php?act=suatt&id=" . $idbill;
                            $user = $bill["user"];
                            $status = get_ttdh($bill["bill_status"]);
                            $billct = "index.php?act=billct&id=" . $idbill;
                            echo '  
                        <tr>   
                                      <td>' . $idbill . '</td>
                                      <td>' . $user . '</td>                                                                        
                                      <td>' . $bill["total"] . '.VNĐ</td>                                  
                                      <td>' . $status . '</td>                               
                                      <td>' . $bill["ngaydathang"] . '</td>   
                                      <td>' . $bill["bill_address"] . '</td>   
                                      <td>' . $bill["bill_tel"] . '</td>   
                                      <td><a href="index.php?act=updatett&id='.$idbill.'"><button style="border-radius:50px;padding:2px 10px;background-color:green;color:white">Cập nhật</button></a>
                                      <a  href="' . $xoabill . '"> <input style="border-radius:50px;padding:2px 10px;background-color:#E10000;border:1px solid #E10000;color:white;" type="button"  onclick="return abc()" value="xóa"></a> </td>
            
                                      </form>
                        </tr>';
                        }
                        ?>
</tbody>

                    </table>
                  
                </div>
            </div>
        </div>
       
</div>
<!-- /.container-fluid -->