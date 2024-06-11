<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật trạng thái đơn hàng</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col">
            <h3 class="text-center">Tình trạng đơn hàng</h3>
        </div>
    </div>
    
    <div class="row mb-4">
        <div class="col">
            <div class="boxcontent cart p-3 border rounded">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                        </tr>
                    </thead>
                </table>

                <?php 
                $kttt = kttt();
                foreach($kttt as $row):
                extract($row); ?>

                <?php if($bill_status == 0): ?>
                <form method="post" class="mb-3">
                    <div class="form-group">
                        <label for="bill_status_0">Trạng thái</label>
                        <select class="form-control" name="bill_status" id="bill_status_0">
                            <option value="0">Chờ xác nhận</option>
                            <option value="1">Chờ lấy hàng</option>
                            <option value="2">Đang giao hàng</option>
                            <option value="3">Giao thành công</option>
                        </select>
                    </div>
                    <button type="submit" name="capnhat" class="btn btn-primary">CẬP NHẬT</button>
                </form>
                <?php endif; ?>

                <?php if($bill_status == 1): ?>
                <form method="post" class="mb-3">
                    <div class="form-group">
                        <label for="bill_status_1">Trạng thái</label>
                        <select class="form-control" name="bill_status" id="bill_status_1">
                            <option value="1">Chờ lấy hàng</option>
                            <option value="2">Đang giao hàng</option>
                            <option value="3">Giao thành công</option>
                        </select>
                    </div>
                    <button type="submit" name="capnhat" class="btn btn-primary">CẬP NHẬT</button>
                </form>
                <?php endif; ?>

                <?php if($bill_status == 2): ?>
                <form method="post" class="mb-3">
                    <div class="form-group">
                        <label for="bill_status_2">Trạng thái</label>
                        <select class="form-control" name="bill_status" id="bill_status_2">
                            <option value="2">Đang giao hàng</option>
                            <option value="3">Giao thành công</option>
                        </select>
                    </div>
                    <button type="submit" name="capnhat" class="btn btn-primary">CẬP NHẬT</button>
                </form>
                <?php endif; ?>

                <?php if($bill_status == 3): ?>
                <form method="post" class="mb-3">
                    <div class="form-group">
                        <label for="bill_status_3">Trạng thái</label>
                        <select class="form-control" name="bill_status" id="bill_status_3">
                            <option value="3">Giao thành công</option>
                        </select>
                    </div>
                    <button type="submit" name="capnhat" class="btn btn-primary">CẬP NHẬT</button>
                </form>
                <?php endif; ?>

                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
