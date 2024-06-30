

        <main class="margin-cart-order main-introduce">
            <article>
                <div class="title-cart">
                    <span class="btn-back"><a href="index.php?route=my-orders">Quay lại</a></span>
                    <h5 style="color: #db0000" class="cart-title active-title-cart">Chi tiết đơn hàng <?php echo $orderID?></h5>
                </div>
                
                <div class="content-pay active-content-cart">
                        <div class="content-theorder">
                            <div class="theorder">
                                
                                <?php if(isset($result)) { foreach($result as $row) { ?>
                                <div class="your-order">
                                    <div class="title-your-order">
                                        <div class="your-address">
                                            <div class="title-adress">
                                                <strong>Thông tin người nhận</strong>
                                            </div>
                                            <div class="name"><strong>Tên: </strong><?php echo $row['fullname']?></div>
                                            <div class="phone-number"><strong>Sđt:</strong> <?php echo $row['phonenumber']?></div>
                                            <div class="address-detail"><strong>Địa chỉ: </strong> <?php echo $row['street'] . '-' . $row['ward'] . '-' . $row['district'] . '-' . $row['city']?></div>
                                        </div>
                                    </div>
                                    
                                    <div class="content-your-order">
                                        <div class="img-order">
                                            <img src="../../image/products/<?php echo $row['image'] ?>" alt="">
                                        </div>
                                        <div class="name-size-order">
                                            <strong>G-Shock <?php echo $row['productname'] ?></strong>
                                            <div class="quantity-order"><small>Số lượng: <?php echo $row['quantity'] ?></small></div>
                                        </div>
                                        <div class="price-order">
                                            <span class="color-order"><?php echo number_format($row['price'])?> vnd</span>
                                        </div>
                                    </div>
                                    
                                    <div class="end-your-order">
                    
                                        <div class="sum-price-order">
                                            <span>Số tiền phải trả: <strong class="color-order"><?php echo number_format($row['quantity'] * $row['price']) ?> vnd</strong></span>
                                        </div>
                                    </div>
                                </div>
                                <?php } } else { echo "Bạn chưa đăng nhập tài khoản!!!" ?>
                                    <?php }?>
                            </div>
                        </div>
                </div>
            </article>
        </main>