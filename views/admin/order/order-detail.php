<div class="orders">
    <div class="title-detail">
        <div class="prev-order"><a href="index.php?route=order">Quay lại</a></div>
        <h1>Chi tiết đơn hàng <?php echo $orderId?></h1>
    </div>
    <div class="infor-order">
        <div class="name"><strong>Họ và tên:</strong> <?php echo($customer['fullname'])?></div>
        <div class="name"><strong>Sđt:</strong> <?php echo($customer['phonenumber'])?></div>
        <div class="name"><strong>Địa chỉ:</strong> <?php echo($customer['street'] . ' ' . $customer['ward'] . ' ' . $customer['district'] . ' ' . $customer['city'])?></div>
    </div>
    <table class="table table-striped table-light">
        <thead>
            <tr>
                <th>Image</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
        </thead>

        <tbody>
            <?php if(isset($result)) { foreach ($result as $row) {?>
            <tr>
                <td class="img-detail"><img src="../../image/products/<?php echo $row['image']?>" alt=""></td>
                <td>
                    <div class="price"><?php echo $row['price']?></div>
                </td>
                <td>
                    <div class="quantity"><?php echo $row['quantity']?></div>
                </td>
                <td>
                    <div class="total"><?php echo ($row['quantity'] * $row['price'])?></div>
                </td>
            </tr>
            <?php } }?>
        </tbody>
    </table>
</div>