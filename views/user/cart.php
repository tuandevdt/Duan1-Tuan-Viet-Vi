
        <main class="margin-cart-order main-introduce">
            <article>
                <div class="title-cart">
                    <h5 class="cart-title active-title-cart">Giỏ hàng</h5>
                    <i class='bx bx-chevron-right'></i>
                    <h5><a href="index.php?route=my-orders">Đơn hàng của tôi</a></h5>
                </div>
                <div class="content-cart active-content-cart">
                    <form action="index.php?route=update-cart" method="POST">
                        <div class="left-content-cart">
                                <table border="0">
                                    <tr>
                                        <th class="name-sp" colspan="3">SẢN PHẨM</th>
                                        <th class="title1">GIÁ</th>
                                        <th class="title1 sluong">SỐ LƯỢNG</th>
                                        <th class="title1">TẠM TÍNH</th>
                                    </tr>
                                    <?php foreach($results as $row) { ?>
                                    <tr>
                                        <td><a href="index.php?route=delete-cart&id=<?php echo $row['id']?>"><i class='bx bx-x-circle'></i></a></td>

                                        <input type="hidden" value="<?php echo $row['id'] ?>">

                                        <input class="numbera" type="hidden" value="<?php echo $row['productid'] ?>" name="productid[]" data-product-id="<?php echo $row['productid'] ?>">
                                        <td><img src="../../image/products/<?php echo $row['image']?>" alt=""></td>
                                        <td class="name-shoe">G-Shock <?php echo $row['productname']?></td>
                                        <td class="price-checkout price-index"><?php echo number_format($row['price'])?>VNĐ</td>
                                        <input type="hidden" name="price-check[]" value="<?php echo $row['price']?>">
                                        <td class="number">
                                            <div class="soluong">
                                                <span type="text" class="minus-numbercart">-</span>
                                                <input class="numberProduct" type="text" value="<?php echo $row['totalItem'] ?>" name="totalItem[]">
                                                <span type="text" class="plus-numbercart">+</span>
                                            </div>
                                        </td>
                                        <td class="price-checkout price-num"><input type="hidden" style="border: none;background:transparent;"><?php echo number_format($row['price'] * $row['totalItem'])?>VNĐ</input></td>
                                    </tr>
                                    <?php $sum_price += $row['totalItem'] * $row['price'] ?>
                                    <?php } ?>
                                </table>
                                <div class="btn-checkout-of-buy">
                                    
                                    <button class="continue-buy" value="logout"><i class='bx bx-left-arrow-alt'></i> <a href="index.php?&route=list-products">Tiếp tục xem sản phẩm</a></button>
                                    <button class="update-cart" name="submit" value="update">Cập nhật giỏ hàng</button>
                                </div>
                            
                        </div>
                        <div class="right-content-cart">
                            <table border="0">
                                <tr>
                                    <th class="name-sp" colspan="2">CỘNG GIỎ HÀNG</th>
                                </tr>
                                <tr>
                                    <td>Tạm tính</td>
                                    
                                    <td class="price-checkout-sum"><?php echo number_format($sum_price)?>VNĐ</td>
                                    <input type="hidden" value="<?php echo number_format($sum_price)?>" name="sum_price">
                                    
                                </tr>
                                <tr>
                                    <td>Phí giao hàng</td>
                                    <td class="price-checkout"><?php echo number_format(30000) ?>VNĐ</td>
                                </tr>
                                <tr>
                                    <td>Giao hàng</td>
                                    <td class="mini-font">Tùy chọn giao hàng sẽ được cập nhật trong quá trình thanh toán.</td>
                                </tr>
                                <tr>
                                    <td>Giảm giá</td>
                                    <td>Miễn phí ship</td>
                                </tr>
                                <tr>
                                    <td class="sum-price">Tổng</td>
                                    
                                    <td class="price-checkout-sum">
                                        <?php echo number_format($sum_price)?>VNĐ
                                    </td>
                                
                                </tr>
                                
                            </table>
                            <!-- <div class="discount">
                                <form class="form-discount" action="">
                                    <input type="text"placeholder="Nhập mã giảm giá">
                                    <button>Áp dụng</button>
                                </form>
                            </div> -->
                            <div class="btn-checkout" style="margin-top: 50px;">
                                <button type="submit" name="submit" value="pay">Tiến hành đặt hàng</button>
                            </div>
                        </div>
                    </form>
                </div>
            </article>
        </main>
<script>

    let numberButtons = document.querySelectorAll('.minus-numbercart, .plus-numbercart');

    numberButtons.forEach(function(button) {
        button.addEventListener('click', () => {
            // Lấy phần tử numberProduct tương ứng với nút được bấm
            let itemNumber = button.parentElement.querySelector('.numberProduct');
            let currentValue = parseInt(itemNumber.value);
            
            // Kiểm tra xem nút được bấm là minus hay plus và thực hiện tương ứng
            if (button.classList.contains('minus-numbercart')) {
                if (currentValue > 1) {
                    itemNumber.value = currentValue - 1;
                }
            } else if (button.classList.contains('plus-numbercart')) {
                itemNumber.value = currentValue + 1;
            }
        });
    });

</script>
