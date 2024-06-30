<?php
    $idStatus = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/admin.css?v= <?php echo time()?>">
    <title>Cập nhật trạng thái đơn hàng</title>
</head>
<body>
    <div class="container">
        <h3 style="margin-top: 50px">Cập nhật trạng thái đơn hàng <?php echo $idStatus?></h3>
        <form class="form-inline" action="../../model/admin/handle-update-status-for-admin.php" method="POST">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Status</label>
            <input type="hidden" name="id-order" value="<?php echo $idStatus?>">
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="status">
                <option value="Chờ xử lý">Chờ xử lý</option>
                <option value="Đã xác nhận">Đã xác nhận</option>
                <option value="Đang vận chuyển">Đang vận chuyển</option>
                <option value="Đã giao">Đã giao</option>
                <option value="Đã hủy đơn">Đã hủy đơn</option>
            </select>

            <button type="submit" name="submit" class="btn btn-primary my-1">Submit</button>
        </form>
    </div>
</body>
</html>