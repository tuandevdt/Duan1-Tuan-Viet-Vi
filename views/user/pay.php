
        <main class="margin-cart-order main-introduce">
            <article>
                <div class="title-cart">
                    <h5 class="cart-title active-title-cart">Thanh toán</h5>
                </div>
                
                <div class="content-pay active-content-cart">
                    <form class="form-content-pay " action="index.php?route=update-address-order" method="POST">
                        <div class="left-content-pay <?php echo $none_address ?>">
                            <div class="title-cont-pay">
                                <h4>THÔNG TIN THANH TOÁN</h4>
                            </div>
                            <div class="name-pay">
                                <div class="first-name">
                                    <label for="">Họ và tên <span>*</span></label>
                                    <input type="text" name="firstname" class="firstname" value="<?php echo $fullname?>">
                                    <small class="error"></small>
                                </div>
                            </div>
                            <div class="address">
                                <div class="country">
                                    <b>Quốc gia/Khu vực</b>
                                    <b class="Vietnam">Việt Nam</b>
                                </div>
                                <div class="form-group">
                                    <label for="">Tỉnh/TP <span>*</span></label>
                                    <input type="text" name="city" class="city" value="<?php echo $city?>">
                                    <small class="error"></small>
                                </div>
                                <div class="form-group">
                                    <label for="">Quận/Huyện <span>*</span></label>
                                    <input type="text" name="district" class="district" value="<?php echo $district?>">
                                    <small class="error"></small>
                                </div>
                                <div class="form-group">
                                    <label for="">Xã/Phường <span>*</span></label>
                                    <input type="text" name="ward" class="ward" value="<?php echo $ward?>">
                                    <small class="error"></small>
                                </div>
                                <div class="form-group">
                                    <label for="">Địa chỉ <span>*</span></label>
                                    <input type="text" placeholder="Địa chỉ chi tiết" name="address-detail" class="address-detail" value="<?php echo $street?>">
                                    <small class="error"></small>
                                </div>
                                <div class="form-group">
                                    <label for="">Số điện thoại <span>*</span></label>
                                    <input type="text" name="phone" class="phone" value="<?php echo $phonenumber?>">
                                    <small class="error"></small>
                                </div>
                                <div class="form-group">
                                    <label for="">Ghi chú đơn hàng (tùy chọn)</label>
                                    <textarea name="note" class="note" id="" cols="50" rows="10" placeholder="Ghi chú về đơn hàng, ví dụ: Thời gian hay địa chỉ chi tiết để nhận hàng..."> </textarea>
                                </div>
                            </div>
                            <div class="submit">
                                <button type="submit" name="btn-update-address">Cập nhật</button>
                            </div>
                        </div>
                        <div class="left-content-pay name-address <?php echo $block_form_address ?>">
                            <div class="name-contai">
                                <div class="name">Họ Tên: <?php echo $row_address['fullname']?></div>
                                <input type="hidden" name="firstname-a" class="firstname" value="<?php echo $row_address['fullname']?>">
                                <input type="hidden" name="id-address" value="<?php echo $row_address['id']?>">

                                <div class="name">Số điện thoại: <?php echo $row_address['phonenumber']?></div>
                                <input type="hidden" name="phone-a" class="phone" value="<?php echo $row_address['phonenumber']?>">

                                <div class="name">Địa chỉ: <?php echo $row_address['street'] . ' - ' . $row_address['ward'] . ' - ' .$row_address['district'] . ' - ' .$row_address['city']?></div>
                                <input type="hidden" name="address" class="phone" value="<?php echo $row_address['street'] . ' - ' . $row_address['ward'] . ' - ' .$row_address['district'] . ' - ' .$row_address['city']?>">
                            </div>
                            <div class="edit-name">
                                <a href="index.php?route=pay&edit-address=a">Chỉnh sửa địa chỉ giao hàng</a>
                            </div>
                        </div>
                        <div class="right-content-pay">
                            <div class="title-cont-pay">
                                <h4>ĐƠN HÀNG CỦA BẠN</h4>
                            </div>
                            <table border="0">
                                <tr>
                                    <th>SẢN PHẨM</th>
                                    <th>SỐ LƯỢNG</th>
                                    <th>TẠM TÍNH</th>
                                </tr>
                                <?php foreach($result as $row) { ?>
                                <tr>  
                                    <td class="name-shoe"><img src="../../image/products/<?php echo $row['image']?>" alt=""></td>
                                    <input type="hidden" name="productname[]" value="<?php echo $row['productname']?>">
                                    <input type="hidden" name="productid[]" value="<?php echo $row['productid']?>">
                                    <td style="text-align:left"><?php echo $row['totalItem']?></td>
                                    <input type="hidden" name="quantity[]" value="<?php echo $row['totalItem']?>">
                                    <td class="price-checkout" style="text-align: right;"><?php echo number_format($row['totalItem'] * $row['price'])?>VNĐ</td>
                                    <input type="hidden" name="price-a[]" value="<?php echo $row['price']?>">
                                </tr>
                                <?php $sum_price += $row['totalItem'] * $row['price'] ?>
                                <?php } ?>
                                <tr>
                                    <td>Tạm tính</td>
                                    <td></td>
                                    <td class="price-checkout" style="text-align: right;"><?php echo number_format($sum_price) ?>VNĐ</td>
                                    <input type="hidden" name="sum_price" value="<?php echo $sum_price ?>">
                                </tr>
                                <tr>
                                    <td>Giao hàng</td>
                                    <td></td>
                                    <td>Miễn phí</td>
                                </tr>
                                <tr>
                                    <td class="sum-price">Tổng</td>
                                    <td></td>
                                    <td class="price-checkout"><?php echo number_format($sum_price) ?>VNĐ</td>
                                </tr>
                            </table>
                            <!-- <div class="pay-cart">
                                    <div class="form-check">
                                        <div class="input">
                                            <input class="radio-check" checked="checked" type="radio" name="checka" value="Thanh toán khi nhận hàng"> Thanh toán khi nhận hàng (COD)
                                        </div>
                                        <span class="note-checkout active-check">
                                            Quý khách hàng xem và kiểm tra hàng thoải mái trước khi quyết định thanh toán. Chúng tôi khuyến khích khách hàng vui lòng bóc kiện hàng, xem và kiểm tra hàng trước khi thanh toán ( một số trường hợp quý khách để lộ thông tin đặt hàng trên bài post fanpage facebook hoặc tại một số trang giả mạo, họ sẽ gửi hàng nhái, hàng giả tới địa chỉ nhận hàng của quý khách hàng mà không cho xem hàng). <div class="blue-check">**Lưu ý: Chỉ áp dụng cho đơn hàng có tổng giá trị nhỏ hơn 50 triệu đồng. Nếu đơn hàng trên 50 triệu đồng, quý khách vui lòng chọn hình thức thanh toán khác.</div> Vui lòng tham khảo thêm chính sách thanh toán tại <a class="blue-check" href="">Chính sách thanh toán.</a>
                                        </span>
                                    </div>
                                    <div class="form-check">
                                        <div class="input">
                                            <input class="radio-check" type="radio" name="checka" value="Nhận sản phẩm tại cửa hàng"> Nhận sản phẩm tại cửa hàng
                                        </div>
                                        <span class="note-checkout none-note-check">
                                            Quý khách hàng muốn xem và nhận sản phẩm tại cửa hàng vui lòng ghi chú địa chỉ cửa hàng muốn nhận sản phẩm tại phần ghi chú đơn hàng
                                            
                                            <ul class="list-address-note-check">
                                                <li><i class='bx bxs-map'></i> 65 Phạm Như Xương, Liên Chiểu, Tp Đà Nẵng</li>
                                                <li><i class='bx bxs-map'></i> 170 Xã Đàn, Quận Đống Đa, Hà Nội</li>
                                                <li><i class='bx bxs-map'></i> Tầng G, The Garden, Nam Từ Liêm, Hà Nội</li>
                                                <li><i class='bx bxs-map'></i> 278 Chu Văn An, Bình Thạnh, TP.HCM</li>
                                            </ul>
                                            
                                        </span>
                                    </div>
                                    <div class="form-check">
                                        <div class="input">
                                            <input class="radio-check" type="radio" name="checka" value="Thanh toán qua Momo"> Thanh toán qua Momo
                                        </div>
                                        <span class="note-checkout none-note-check">
                                            Hãy mở App Momo lên và nhấn Đặt Hàng để quét mã thanh toán
                                        </span>
                                    </div>
                                    <div class="form-check">
                                        <div class="input">
                                            <input class="radio-check" type="radio" name="checka" value="Thanh toán qua ZaloPay"> Thanh toán qua ZaloPay
                                        </div>
                                        <span class="note-checkout none-note-check">
                                            Hãy mở App ZaloPay lên và nhấn Đặt Hàng để quét mã thanh toán
                                        </span>
                                    </div>
                                    <div class="form-check">
                                        <div class="input">
                                            <input class="radio-check" type="radio" name="checka" value="Thanh toán qua ShopeePay"> Thanh toán qua ShopeePay
                                        </div>
                                        <span class="note-checkout none-note-check">
                                            Hãy mở App ShopeePay lên và nhấn Đặt Hàng để quét mã thanh toán
                                        </span>
                                    </div>
                                    <div class="form-check">
                                        <div class="input">
                                            <input class="radio-check" type="radio" name="checka" value="Thanh toán qua ATM/VISA/MasterCard-Thanh toán trả góp"> Thanh toán qua ATM/VISA/MasterCard-Thanh toán trả góp
                                        </div>
                                        <span class="note-checkout none-note-check">
                                            Chọn một phương thức thanh toán
                                            <div class="pay-by">
                                                <div class="radio-pay-by">
                                                    <input type="radio" name="check-pay" value="Visa/MasterCard"> Thanh toán ngay bằng thẻ quốc tế Visa/MasterCard
                                                </div>
                                                <div class="radio-pay-by">
                                                    <input type="radio" name="check-pay" value="Thanh toán trả góp linh hoạt"> Thanh toán trả góp linh hoạt
                                                </div>
                                                <div class="radio-pay-by">
                                                    <input type="radio" name="check-pay" value="ATM/Internet Banking/QRCode"> Thanh toán ngay bằng thẻ ATM/Internet Banking/QRCode
                                                </div>
                                            </div>
                                        </span>
                                    </div>    
                            </div> -->
                            <div class="btn-pay-cart">
                                <button type="submit" name="submit">Đặt hàng</button>
                            </div>
                            <div class="sup-checkout">
                                <span>Khi cần hỗ trợ về cách thức đặt hàng hoặc hình thức thanh toán, quý khách vui lòng liên hệ fanpage, zalo hoặc gọi <b>036-293-1719</b> (09h00 - 21h00)</span>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </article>
        </main>
<script>

    //CHECKOUT
    // let noteCheckouts = document.querySelectorAll('.note-checkout');
    // let radioChecks = document.querySelectorAll('.radio-check');
    // radioChecks.forEach(function(n, i) {
    //     n.addEventListener('click', () => {
    //         document.querySelector('.active-check').classList.add('none-note-check');
    //         document.querySelector('.active-check').classList.remove('active-check');
    //         itemNoteCheck = noteCheckouts[i];
    //         itemNoteCheck.classList.remove('none-note-check');
    //         itemNoteCheck.classList.add('active-check');
    //     });
    // });


    // let firstname = document.querySelector('.firstname');
    // let city = document.querySelector('.city');
    // let district = document.querySelector('.district');
    // let ward = document.querySelector('.ward');
    // let address_detail = document.querySelector('.address-detail');
    // let phone = document.querySelector('.phone');
    // let validFormCheckout = document.querySelector('.form-content-pay');
    // let is_firstname = true;
    // let is_lastname = true;
    // let is_city = true;
    // let is_district = true;
    // let is_ward = true;
    // let is_address_detail = true;
    // let is_phone = true;

    // validFormCheckout.addEventListener('submit', e => {
    
    
    // validateInputss();
    // if(
    //     is_firstname == true
    //     && is_city == true
    //     && is_district == true
    //     && is_ward == true
    //     && is_address_detail == true
    //     && is_phone == true
    // ) {
    //     e.submit();
    // } else {
    //     e.preventDefault();
    // }
    // });

    // function isValidPhone(phone) {
    // var re = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;

    //     return re.test(phone);
    // }


    // let setSuccesss = element => {
    //     let inputControl = element.parentElement;
    //     let errorDisplay = inputControl.querySelector('.error');

    //     errorDisplay.innerText = '';
    //     inputControl.classList.add('success');
    //     inputControl.classList.remove('error');
    // };

    // let setErrors = (element, message) => {
    //     let inputControl = element.parentElement;
    //     let errorDisplay = inputControl.querySelector('.error');

    //     errorDisplay.innerText = message;
    //     inputControl.classList.add('error');
    //     inputControl.classList.remove('success');
    // };

    // let validateInputss = () => {
    //     let firstnamevalue = firstname.value.trim();
    //     let cityvalue = city.value.trim();
    //     let districtvalue = district.value.trim();
    //     let wardvalue = ward.value.trim();
    //     let addressDetailValue = address_detail.value.trim();
    //     let phonevalue = phone.value.trim();

    //     if(firstnamevalue === '') {
    //         setErrors(firstname, 'Firstname is required.');
    //         is_firstname = false;
    //     } else {
    //         setSuccesss(firstname);
    //         is_firstname = true;    
    //     }

    //     if(cityvalue === '') {
    //         setErrors(city, 'City is required');
    //         is_city = false;
    //     } else {
    //         setSuccesss(city);
    //         is_city = true;
    //     }

    //     if(districtvalue === '') {
    //         setErrors(district, 'District is required');
    //         is_district = false;
    //     } else {
    //         setSuccesss(district);
    //         is_district = true;
    //     }

    //     if(wardvalue === '') {
    //         setErrors(ward, 'Ward is required');
    //         is_ward = false;
    //     } else {
    //         setSuccesss(ward);
    //         is_ward = true;
    //     }

    //     if(addressDetailValue === '') {
    //         setErrors(address_detail, 'Ward is required');
    //         is_address_detail = false;
    //     } else {
    //         setSuccesss(address_detail);
    //         is_address_detail = true;
    //     }

    //     if(phonevalue === '') {
    //         setErrors(phone, 'Phone number is required');
    //         is_phone = false;
    //     } else if(!isValidPhone(phonevalue)) {
    //         setErrors(phone, 'Provide a valid phone number.');
    //         is_phone = false;
    //     } else {
    //         setSuccesss(phone);
    //         is_phone = true;
    //     }
    
    // };

</script>
