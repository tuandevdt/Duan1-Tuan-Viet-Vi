<main class="margin-cart-order main-introduce">
    <article>
                <div class="form-edit-account">
                    <form class="form-content-pay form-account" action="../../model/user/handle-add-address.php" method="POST" enctype="multipart/form-data">
                        <h6 style="margin-top: 40px;">Cập nhật thông tin tài khoản <?php echo $row['username'] ?></h6>
                        <div class="left-content-pay content-account">
                            <div class="name-pay">
                                <div class="first-name">
                                    <label for="">Họ và tên <span>*</span></label>
                                    <input type="text" name="fullname" class="firstname" value="<?php echo $row['fullname'] ?>">
                                    <small class="error"></small>
                                </div>
                            </div>
                            <div class="name-pay">
                                <div class="first-name">
                                    <label for="">Hình ảnh <span>*</span></label>
                                    <input type="file" name="image-edit" class="form-input image-input">
                                    <small class="error"></small>
                                </div>
                            </div>
                            <div class="address">
                                <div class="form-group">
                                    <label for="">Tỉnh/TP <span>*</span></label>
                                    <input type="text" name="city" class="city" value="<?php echo $row['city'] ?>">
                                    <small class="error"></small>
                                </div>
                                <div class="form-group">
                                    <label for="">Quận/Huyện <span>*</span></label>
                                    <input type="text" name="district" class="district" value="<?php echo $row['district'] ?>">
                                    <small class="error"></small>
                                </div>
                                <div class="form-group">
                                    <label for="">Xã/Phường <span>*</span></label>
                                    <input type="text" name="ward" class="ward" value="<?php echo $row['ward'] ?>">
                                    <small class="error"></small>
                                </div>
                                <div class="form-group">
                                    <label for="">Địa chỉ <span>*</span></label>
                                    <input type="text" placeholder="Địa chỉ chi tiết" name="street" class="address-detail" value="<?php echo $row['street'] ?>">
                                    <small class="error"></small>
                                </div>
                                <div class="form-group">
                                    <label for="">Số điện thoại <span>*</span></label>
                                    <input type="text" name="phone" class="phone" value="<?php echo $row['phonenumber'] ?>">
                                    <small class="error"></small>
                                </div>
                            </div>
                            <div class="btn-pay-cart">
                                <button type="submit" name="submit" value="submit-update-account">Cập nhật</button>
                            </div>
                        </div>
                    </form>
                </div>
    </article>
</main>