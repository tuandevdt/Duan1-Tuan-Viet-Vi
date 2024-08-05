
        <main class="main-introduce">
            <article>
                <div class="img-title-introduce">
                    <img src="../../image/bg-detail.avif" alt="">
                </div>

                <div class="content-detail-contai">
                    <div class="first-detail-content">
                        <div class="img-first-content"  id="left">
                            <img src="../../image/products/<?php echo $rows['image'] ?>" alt="">
                        </div>
                        <div class="infor-first-content" id="right">
                            <form action="add-cart.php" method="POST">
                                <div class="title-detail">
                                    <div class="name-detail">G-SHOCK</div>
                                    <input type="hidden" name="name_product" value="<?php echo $rows['productname'] ?>">
                                    <input type="hidden" name="id" value="<?php echo $rows['id']?>">
                                    <div class="name-detail title-name"><?php echo $rows['productname'] ?></div>
                                </div>
                                <div class="vote-star">
                                    <div class="star">
                                        <i class='bx bxs-star' ></i>
                                        <i class='bx bxs-star' ></i>
                                        <i class='bx bxs-star' ></i>
                                        <i class='bx bxs-star' ></i>
                                        <i class='bx bxs-star-half' ></i>
                                    </div>
                                    <div class="vote">
                                        50 đánh giá
                                    </div>
                                </div>
                                <div class="img-right-detail">
                                    <div class="price"><?php echo number_format($rows['price']) ?> đ</div>
                                    <input type="hidden" value="<?php echo $rows['price'] ?>" name="price-add">
                                    <div class="VAT">(Giá trên đã bao gồm VAT)</div>
                                    <input type="hidden" name="img_product" value="<?php echo $rows['image'] ?>">
                                </div>
                                <div class="content-detail">
                                    <p><?php echo $rows['description'] ?></p>
                                </div>
                                <div class="btn-detail">
                                    <div class="views-and-sales">
                                        <div class="views-count">
                                            <span>Lượt xem: <?php echo $rows['viewcount'] ?></span>
                                        </div>
                                        <div class="views-count">
                                            <span>Số lượng: <?php echo $rows['quantity'] ?></span>
                                        </div>
                                    </div>
                                        <!-- <div class="soluong">
                                                <span type="text" class="minus-numbercart">-</span> -->
                                                <input class="numberProduct" type="hidden" value="1" name="number-detail">
                                                <!-- <span type="text" class="plus-numbercart">+</span>
                                        </div> -->
                                        <?php 
                                            $addCart = "addcart";
                                            $soldOut = "none-open";
                                            if($rows['quantity'] == 0) {
                                                $addCart = "none-open";
                                                $soldOut = "";
                                            }
                                        ?>
                                        <button class="<?php echo $addCart ?>">Thêm vào giỏ hàng</button>
                                        <span class="btn-sold-out <?php echo $soldOut ?>">Hết hàng</span>
                                        <span class="favourite"><i class='bx bxs-phone-call'></i> Hoặc liên hệ qua số điện thoại: 036.293.1719 </span>
                                        
                                </div>
                            </form>
                            
                        </div>
                    </div>
                    <div class="check-tick-content">
                        <div class="check-small">
                            <i class='bx bxs-check-shield one'></i>
                            <span>100% HÀNG CHÍNH HÀNG</span>
                        </div>
                        <div class="check-small">
                            <i class='bx bxs-truck two'></i>
                            <span>MIỄN PHÍ VẬN CHUYỂN</span>
                        </div>
                        <div class="check-small">
                            <i class='bx bxs-badge-check three'></i>
                            <span>BẢO HÀNH 5 NĂM</span>
                        </div>
                        <div class="check-small">
                            <i class='bx bx-transfer-alt four'></i>
                            <span>ĐỔI HÀNG TRONG 7 NGÀY</span>
                        </div>
                    </div>
                    <div class="title-detail-content">
                        <h2>Thông tin chi tiết</h2>
                    </div>
                    <div class="infor-detail">
                            <div class="img-inf">
                                <img src="https://www.casio.com/content/dam/casio/global/common/selling-point/timepieces/59_made_in_japan.png" alt="">
                                <div class="name-inf">
                                    Made in Japan
                                </div>
                            </div>
                            <div class="img-inf">
                                <img src="https://www.casio.com/content/dam/casio/global/common/selling-point/timepieces/62_shock.png" alt="">
                                <div class="name-inf">
                                    Shock resistant
                                </div>
                            </div>
                            <div class="img-inf">
                                <img src="https://www.casio.com/content/dam/casio/global/common/selling-point/timepieces/04_20bar.png" alt="">
                                <div class="name-inf">
                                    20 bar water resistant
                                </div>
                            </div>
                            <div class="img-inf">
                                <img src="https://www.casio.com/content/dam/casio/global/common/selling-point/timepieces/23_in_time.png" alt="">
                                <div class="name-inf">
                                    Keeps yourself in time
                                </div>
                            </div>
                            <div class="img-inf">
                                <img src="https://www.casio.com/content/dam/casio/global/common/selling-point/timepieces/24_solar.png" alt="">
                                <div class="name-inf">
                                    Stable solar power
                                </div>
                            </div>
                            <div class="img-inf">
                                <img src="https://www.casio.com/content/dam/casio/global/common/selling-point/timepieces/40_polished_metal.png" alt="">
                                <div class="name-inf">
                                    Beautiful polished metal
                                </div>
                            </div>
                    </div>
                    <div class="infor-detail-last">
                            <div class="item-infor-last">
                                <img src="https://www.casio.com/content/experience-fragments/casio/en/feature/timepiece/watch/g-shock/mr_g/mrg-b2000/features2/master/_jcr_content/root/container/container_1146878886_177773948/container_copy_12820/image.casiocoreimg.jpeg/1642484971124/img2.jpeg" alt="">
                                <h6>Clad Guard Structure for durability and operability</h6>
                                <span>The Clad Guard Structure builds shock resistance into the crown and buttons, ensuring toughness and ease of operation while reducing the case size. αGEL® inserted into the head cover of the crown helps to absorb shocks.</span>
                                <span class="last-span">*αGEL is a registered trademark of Taica Corporation.</span>
                            </div>
                            <div class="item-infor-last">
                                <img src="https://www.casio.com/content/experience-fragments/casio/en/feature/timepiece/watch/g-shock/mr_g/mrg-b2000/features2/master/_jcr_content/root/container/container_1146878886_309646725/container_copy/image.casiocoreimg.jpeg/1642484979069/img3.jpeg" alt="">
                                <h6>Super Illuminator (high-brightness LED light) for readability in the dark</h6>
                                <span>*Image shows the MRG-B2000BS-3A.</span>
                            </div>
                            <div class="item-infor-last">
                                <img src="https://www.casio.com/content/experience-fragments/casio/en/feature/timepiece/watch/g-shock/mr_g/mrg-b2000/features2/master/_jcr_content/root/container/container_1146878886_309646725/container_copy_12820/image.casiocoreimg.jpeg/1642484985846/img4.jpeg" alt="">
                                <h6>Solar-powered timekeeping module with Bluetooth® and radio control for enhanced accuracy and reliability</h6>
                                <span>Features an MR-G dedicated module with gold plating applied to the retainer plate for the circuit board to reduce electrical resistance.</span>
                            </div>
                            <div class="item-infor-last">
                                <img src="https://www.casio.com/content/experience-fragments/casio/en/feature/timepiece/watch/g-shock/mr_g/mrg-b2000/features2/master/_jcr_content/root/container/container_1146878886/container_copy/image.casiocoreimg.jpeg/1642485165619/img5.jpeg" alt="">
                                <h6>Scratch-resistant, highly transparent sapphire crystal with an anti-reflective coating</h6>
                            </div>
                    </div>
                    <div class="download-app">
                            <div class="first-app">
                                <div class="img-app">
                                    <img src="https://www.casio.com/content/experience-fragments/casio/en/feature/timepiece/watch/application/application/master/_jcr_content/root/container_1424700279/container_1836272977/container_1978137376/container/container/image.casiocoreimg.png/1669773433654/ico-casio-watches.png" alt="">
                                </div>
                                <div class="content-app">
                                    <b>Multiple functions, all at your fingertips</b>
                                    <h4>CASIO WATCHES</h4>
                                    <span>(Smartphone app)</span>
                                </div>
                            </div>
                            <div class="second-app">
                                <div class="img-second-app">
                                    <a href=""><img src="https://www.casio.com/content/experience-fragments/casio/en/feature/timepiece/watch/application/application/master/_jcr_content/root/container_1424700279/container_1836272977/container_318296927/container_copy/image.casiocoreimg.png/1669779650180/btn-appstore.png" alt=""></a>
                                </div>
                                <div class="img-second-app">
                                    <a href=""><img src="https://www.casio.com/content/experience-fragments/casio/en/feature/timepiece/watch/application/application/master/_jcr_content/root/container_1424700279/container_1836272977/container_318296927/container_copy_copy/image.casiocoreimg.png/1669779667729/btn-googleplay.png" alt=""></a>
                                </div>
                            </div>
                    </div>
                    <div class="infor-last">
                            <h3>SPECIFICATIONS</h3>
                            <div class="content-infor-last">
                                <div class="first-inf-last">
                                    <ul>
                                        <li><b>Shock-resistant structure</b></li>
                                        <li><b>ISO 764-compliant magnetic resistance</b></li>
                                        <li><b>20-bar water resistance</b></li>
                                        <li><b>Tough Solar</b> (Solar powered)</li>
                                        <li><b>Smartphone Link</b> (automatic connection)</li>
                                        <li><b>Radio-controlled</b> (Multi Band 6)</li>
                                        <li><b>Auto hand home position correction</b></li>
                                    </ul>
                                </div>
                                <div class="first-inf-last">
                                    <ul>
                                        <li><b>Dual time</b></li>
                                        <li><b>Stopwatch</b></li>
                                        <li><b>Countdown timer</b></li>
                                        <li><b>Alarm</b></li>
                                        <li><b>LED light</b> (Super Illuminator)</li>
                                        <li><b>Date display</b></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="last-inf">
                                <b>Note: Bluetooth® is a registered trademark or trademark of Bluetooth SIG, Inc.</b>
                            </div>
                    </div>

                    <?php
                            $productid_comment = $rows['id'];
                            $result_comment = $db->select("SELECT users.username, users.id AS iduser, comment.*
                                                                    FROM comment
                                                                    INNER JOIN users ON comment.userid = users.id
                                                                    WHERE comment.productid = '$productid_comment' AND comment.text <> ''"); 

                        ?>
                    <div class="comment-product">
                        <div class="title-comment">
                            <h3>Đánh giá, bình luận về đồng hồ G-Shock <?php echo $rows['productname'] ?></h3>
                        </div>
                        
                        
                        <div class="write-your-comment">
                            <form action="index.php?route=new-comment" method="POST">
                                <textarea rows="10" cols="100" name="comment" placeholder="Viết bình luận của bạn ở đây..."></textarea>
                                <input type="hidden" name="productid" value="<?php echo $rows['id'] ?>">
                                <button class="btn-comment" name="submit" type="submit" value="send-cmt">Gửi</button>
                            </form>
                        </div>
                        <?php $count = 0; ?>

                        <div class="list-comments">
                            
                            <?php foreach($result_comment as $row_comment) { 
                                $count++
                                ?>
                            <!-- Phần Popup -->
                            <div id="editCommentPopup" style="display: none;">
                                <form action="index.php?route=edit-comment" method="POST"> <!-- Thay "update_comment.php" bằng tên trang PHP xử lý -->
                                    <input type="text" name="editedCommentText" id="editedCommentText">
                                    <div class="btn-edit">
                                        <div class="close-edit aa">Trở lại</div>
                                        <button class="aa" type="submit" name="submit">Lưu</button>
                                    </div>
                                    <input type="hidden" name="commentID" id="commentID" value="">
                                    <input type="hidden" name="productid" value="<?php echo $rows['id']?>">
                                </form>
                            </div>   
                            <?php 
                                if($userid === $row_comment['iduser']) {
                                    $edit_cmt = "chỉnh sửa";
                                    $xoa = "xóa";

                                } else {
                                    $edit_cmt = "";
                                    $xoa = "";
                                }
                            ?>
                            <div class="comment">
                                <div class="name-user">
                                    <h6>
                                        <?php echo $row_comment['username'] ?> <i class='bx bxs-check-circle'></i>
                                    </h6>
                                </div>
                                <div class="content-cmt">
                                    <span><?php echo $row_comment['text'] ?> </span>
                                    <div class="edit-cmt" data-comment-id="<?php echo $row_comment['id'] ?>"><i><?php echo $edit_cmt ?></i></div>
                                    <div><i><a href="index.php?route=delete-comment&cmtid=<?php echo $row_comment['id'] ?>&productid=<?php echo $row_comment['productid']?>"><?php echo $xoa ?></a></i></div>
                                </div>
                                <div class="date-cmt">
                                    <i><?php echo $row_comment['commentAt'] ?> </i>
                                </div>
                            </div>

                            <?php } ?>
                            

                        </div>
                        <span class="sum-comment">Có 
                                <strong>
                                    <?php echo $count ?>
                                </strong> bình luận, đánh giá về sản phẩm
                        </span>
                    </div>

                </div>
                
   
            </article>
        </main>
<script src="../../public/Js/edit-cmt.js?v= <?php echo time();?>"></script>
<script src="../../public/Js/detail.js?v= <?php echo time();?>"></script>
<script>
        window.addEventListener('scroll', () => {
        const left = document.getElementById("left")
        const right = document.getElementById("right")

        if (window.scrollY > 100) { // Điều chỉnh giá trị này tùy theo nhu cầu
            
            left.classList.add('scrolled1');
            right.classList.add('scrolled2');
            left.style.display = "block"
            right.style.display = "block"
        } else {
           
            left.classList.remove('scrolled1');
            right.classList.remove('scrolled2');
            left.style.display = "none"
            right.style.display = "none"
        }
    })
</script>
