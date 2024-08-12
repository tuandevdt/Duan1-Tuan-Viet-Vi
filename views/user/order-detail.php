

        <main class="margin-cart-order main-introduce">
            <article>
                <div class="title-cart">
                    <h5 style="color: #db0000" class="cart-title active-title-cart">Đơn đặt hàng</h5>
                </div>
                
                <div class="content-pay active-content-cart">
                        <div class="content-theorder">
                            <div class="theorder">
                                
                                <?php foreach($result as $row) { ?>

                                <div class="order-contai">
                                <h1>Thông tin đơn hàng</h1>
                                    <div class="title-your-order">
                                        
                                        <div class="your-address">
                                            
                                            <div class="title-adress">
                                                <strong>Xem thêm:</strong>
                                                <div class="edit-title-adress"><a href="index.php?route=show-order-item&orderID=<?php echo $row['id']?>">Chi tiết đơn hàng</a></div>
                                            </div>
                                            <div class="phone-number"><strong>Mã đơn hàng:</strong> <?php echo $row['id']?></div>
                                            <div class="note"><strong>Ghi chú: </strong> <?php echo $row['note']?></div>
                                        </div>
                                        <span class="color-order"><?php echo $row['orderstatus']?></span>
                                    </div>
                                    <div class="end-your-order">
                                        <div class="date-order">
                                            <span style="font-weight:550;">Ngày đặt hàng:</span>
                                            <span style="font-style: italic;color: rgb(75, 75, 75); font-size: 14px;"><?php echo $row['orderdate']?></span>
                                        </div>
                                        <div class="sum-price-order">
                                            <span>Số tiền phải trả: <strong class="color-order"><?php echo number_format($row['totalamount'])?> vnd</strong></span>
                                            <div class="btn-cancel">
                                                <?php 
                                                    if($row['orderstatus'] == 'Đã hủy đơn') {
                                                    $none_address = "none-address";
                                                    $block_form_address = "";
                                                    } else {
                                                        $none_address = "";
                                                        $block_form_address = "none-address";
                                                    }
                                                ?>
                                                <button class="<?php echo $none_address?>"><a href="index.php?route=cancel-order&id=<?php echo $row['id']?>&status=<?php echo $row['orderstatus']?>">Hủy đơn hàng</a></button>
                                                <button class="<?php echo $block_form_address?>"><a href="index.php?route=delete-order&id=<?php echo $row['id']?>">Xóa đơn hàng</a></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                </div>
            </article>
        </main>



