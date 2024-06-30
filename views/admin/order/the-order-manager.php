
<div class="orders">
    <h1>Quản lý đơn hàng</h1>
        <table class="table table-striped table-light"> 
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Order Date</th>
                    <th scope="col">Total Amount</th>
                    <th scope="col">Address ID</th>
                    <th scope="col">User ID</th>
                    <th scope="col">Note</th>
                    <th scope="col">Order Stauts</th>
                    <th scope="col">More</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $row) {  ?>
                <tr>
                    <th scope="row"><?php echo $row['id']?></th>
                    <td><?php echo $row['orderdate']?></td>
                    <td><?php echo number_format($row['totalamount'])?> vnđ</td>
                    <td><?php echo $row['shippingaddressID']?></td>
                    <td><?php echo $row['userid']?></td>
                    <td><?php echo $row['note']?></td>
                    <td style="color: #db0000"><?php echo $row['orderstatus']?></td>
                    <td class="more"><button class="btn-delete-category" value="<?php echo $row['id'] ?>">Edit</button></td>
                </tr>
                <?php } ?>
            </tbody>
            <div class="form-edit form-orders none-active">
                <form action="index.php?route=update-orders" method="POST"> 
                    <div class="form-group">
                        <label for="exampleInputPassword1">Chọn trạng thái người dùng</label>
                        <select class="custom-select my-1 mr-sm-2" name="status">
                            <option value="Chờ xử lý">Chờ xử lý</option>
                            <option value="Đã xác nhận">Đã xác nhận</option>
                            <option value="Đang vận chuyển">Đang vận chuyển</option>
                            <option value="Đã giao">Đã giao</option>
                            <option value="Đã hủy đơn">Đã hủy đơn</option>
                        </select>
                    </div>
                    
                    <input id="id-update" type="hidden" name="id" value="">
                    <button type="submit" name="btn-update-status" class="btn btn-primary">Update</button>
                </form>
                <div class="btn-close">
                    <i class='bx bx-x'></i>
                </div>
            </div>
        </table>
</div>
<script>
    let buttons = document.querySelectorAll('.btn-delete-category');
    let idUpdateInput = document.getElementById('id-update');
    let closeForm = document.querySelector('.btn-close');
    buttons.forEach(function(button) {
        button.addEventListener('click', () => {
            document.querySelector('.form-edit').classList.remove('none-active');
            idUpdateInput.value = button.value;
        })
    });
    closeForm.addEventListener('click', () => {
        document.querySelector('.form-edit').classList.add('none-active');
    });

</script>