
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
                    <th scope="col">Order Stauts</th>
                    <th scope="col">More</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($result)) {foreach ($result as $row) {  ?>
                <tr>
                    <th scope="row"><?php echo $row['id']?></th>
                    <td><?php echo $row['orderdate']?></td>
                    <td><?php echo number_format($row['totalamount'])?> vnđ</td>
                    <td><?php echo $row['shippingaddressID']?></td>
                    <td><?php echo $row['userid']?></td>
                    <td style="color: #db0000"><?php echo $row['orderstatus']?></td>
                    <input class="status" type="hidden" value="<?php echo $row['orderstatus']?>">
                    <td class="more">
                        <button class="btn-delete-category" value="<?php echo $row['id'] ?>">
                            Edit 
                        </button>
                        <a href="index.php?route=order-detail&id=<?php echo $row['id'] ?>">
                            View More 
                        </a>
                    </td>
                </tr>
                
                <?php } } ?>
            </tbody>
            <div class="form-edit form-orders none-active">
                
                    <form action="index.php?route=update-orders" method="POST"> 
                        <div class="form-group">
                            <label for="exampleInputPassword1">Chọn trạng thái đơn hàng</label>
                            <select class="custom-select my-1 mr-sm-2" name="status">
                                <option class="option-order" value="Chờ xử lý">Chờ xử lý</option>
                                <option class="option-order" value="Đã xác nhận">Đã xác nhận</option>
                                <option class="option-order" value="Đang vận chuyển">Đang vận chuyển</option>
                                <option class="option-order" value="Đã giao">Đã giao</option>
                                <option class="option-order" value="Đã hủy đơn">Đã hủy đơn</option>
                            </select>
                        </div>
                        
                        <input id="id-update" type="hidden" name="id" value="">
                        <input id="status-old" type="hidden" name="status-old" value="">
                        <button type="submit" name="btn-update-status" class="btn btn-primary">Update</button>
                    </form>
                    <div class="btn-close">
                        <i class='bx bx-x'></i>
                    </div>
                    
            </div>
        </table>
</div>
<script>

    document.querySelectorAll('.btn-delete-category').forEach(function(button, index) {
        button.addEventListener('click', () => {
            document.querySelector('.form-edit').classList.remove('none-active');
            document.getElementById('id-update').value = button.value;
            let itemstatus = document.querySelectorAll('.status')[index];
            document.getElementById('status-old').value = itemstatus.value;

            switch(itemstatus.value) {
                case 'Chờ xử lý': 
                    document.querySelector('.option-order[value="Đã xác nhận"]').disabled = false;
                    document.querySelector('.option-order[value="Đang vận chuyển"]').disabled = false;
                    document.querySelector('.option-order[value="Đã giao"]').disabled = false;
                    document.querySelector('.option-order[value="Đã hủy đơn"]').disabled = false;
                    break;
                case 'Đã xác nhận': 
                    document.querySelector('.option-order[value="Chờ xử lý"]').disabled = true;
                    document.querySelector('.option-order[value="Đã xác nhận"]').disabled = false;
                    document.querySelector('.option-order[value="Đang vận chuyển"]').disabled = false;
                    document.querySelector('.option-order[value="Đã giao"]').disabled = false;
                    document.querySelector('.option-order[value="Đã hủy đơn"]').disabled = true;
                    break;
                case 'Đang vận chuyển': 
                    document.querySelector('.option-order[value="Chờ xử lý"]').disabled = true;
                    document.querySelector('.option-order[value="Đã xác nhận"]').disabled = true;
                    document.querySelector('.option-order[value="Đang vận chuyển"]').disabled = false;
                    document.querySelector('.option-order[value="Đã giao"]').disabled = false;
                    document.querySelector('.option-order[value="Đã hủy đơn"]').disabled = true;
                    break;
                case 'Đã giao': 
                    document.querySelector('.option-order[value="Chờ xử lý"]').disabled = true;
                    document.querySelector('.option-order[value="Đã xác nhận"]').disabled = true;
                    document.querySelector('.option-order[value="Đang vận chuyển"]').disabled = true;
                    document.querySelector('.option-order[value="Đã giao"]').disabled = false;
                    document.querySelector('.option-order[value="Đã hủy đơn"]').disabled = true;
                    break;
                case 'Đã hủy đơn': 
                    document.querySelector('.option-order[value="Chờ xử lý"]').disabled = true;
                    document.querySelector('.option-order[value="Đã xác nhận"]').disabled = true;
                    document.querySelector('.option-order[value="Đang vận chuyển"]').disabled = true;
                    document.querySelector('.option-order[value="Đã giao"]').disabled = true;
                    break;
            }
        })
    });
    document.querySelector('.btn-close').addEventListener('click', () => {
        document.querySelector('.form-edit').classList.add('none-active');
    });

</script>