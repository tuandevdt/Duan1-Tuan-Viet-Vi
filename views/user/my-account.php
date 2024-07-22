
        <main class="margin-cart-order main-introduce">
            <article>
                <div class="title-cart">
                    <h5 style="color: #db0000" class="cart-title active-title-cart">Tài khoản của tôi</h5>
                </div>
                <div class="content-account <?php echo $none_address ?>">
                    <div class="img-account">
                        <img src="../../image/products/<?php echo $row['image']?>" alt="">
                    </div>
                    <div class="information-account">
                        <div class="row-account">
                            <div class="content-row">
                                <span class="strong">Tên tài khoản:</span>
                                <span><?php echo $row['username']?></span>
                            </div>
                        </div>
                        <div class="row-account">
                            <div class="content-row">
                                <span class="strong">Họ và tên:</span>
                                <span><?php echo $row['fullname']?></span>
                            </div>
                        </div>
                        <div class="row-account">
                            <div class="content-row">
                                <span class="strong">Email:</span>
                                <span><?php echo $row['email']?></span>
                            </div>
                        </div>
                        <div class="row-account">
                            <div class="content-row">
                                <span class="strong">Số điện thoại:</span>
                                <span><?php echo $row['phonenumber']?></span>
                            </div>
                        </div>
                        <div class="row-account">
                            <div class="content-row">
                                <span class="strong">Địa chỉ:</span>
                                <span><?php echo $row['street'] . ' - ' . $row['ward'] . ' - ' .$row['district'] . ' - ' .$row['city']?></span>
                            </div>
                        </div>
                        <div class="row-account">
                            <a href="index.php?route=edit-my-account">Chỉnh sửa thông tin</a>
                        </div>
                    </div>
                </div>
                <div class="account <?php echo $block_form_address ?>">
                    <form class="form-content-pay form-account" action="index.php?route=update-my-account" method="POST">
                        <h6>Bạn chưa có thông tin địa chỉ, vui lòng cập nhật</h6>
                        <div class="left-content-pay content-account">
                            <div class="name-pay">
                                <div class="first-name">
                                    <label for="">Họ và tên <span>*</span></label>
                                    <input type="text" name="firstname" class="firstname" value="<?php echo $row['fullname']?>">
                                    <small class="error"></small>
                                </div>
                            </div>
                            <div class="address">
                                <div class="form-group">
                                    <label for="">Tỉnh/TP <span>*</span></label>
                                    <input type="text" name="city" class="city" value="<?php echo $row['city']?>">
                                    <small class="error"></small>
                                </div>
                                <div class="form-group">
                                    <label for="">Quận/Huyện <span>*</span></label>
                                    <input type="text" name="district" class="district" value="<?php echo $row['district']?>">
                                    <small class="error"></small>
                                </div>
                                <div class="form-group">
                                    <label for="">Xã/Phường <span>*</span></label>
                                    <input type="text" name="ward" class="ward" value="<?php echo $row['ward']?>">
                                    <small class="error"></small>
                                </div>
                                <div class="form-group">
                                    <label for="">Địa chỉ <span>*</span></label>
                                    <input type="text" placeholder="Địa chỉ chi tiết" name="address-detail" class="address-detail" value="<?php echo $row['street']?>">
                                    <small class="error"></small>
                                </div>
                                <div class="form-group">
                                    <label for="">Số điện thoại <span>*</span></label>
                                    <input type="text" name="phone" class="phone" value="<?php echo $row['phonenumber']?>">
                                    <small class="error"></small>
                                </div>
                            </div>
                            <div class="btn-pay-cart">
                                <button type="submit" name="submit" value="update">Cập nhật</button>
                            </div>
                        </div>
                    </form>
                </div>
            </article>
        </main>