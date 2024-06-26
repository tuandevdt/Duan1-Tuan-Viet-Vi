<main class="home">
<article>
                <!-- SLIDER MAIN -->
                <div class="slider-contai">
                    <div id="slider-main" class="slider">       
                        <div class="img-slider">
                            <img src="https://gshock.casio.com/content/experience-fragments/casio/en/feature/timepiece/watch/g-shock/mt_g/mtg_b2000/features02/us/_jcr_content/root/container_963753939/teaser.casiocoreimg.jpeg/1659473003966/mtg-b2000-tile-img-2-1600x900.jpeg" alt="">
                            <div class="bground-slider"></div>
                            <div class="content-slider">
                                <h1>G-Shock VIỆT NAM</h1>
                                <span>Chuyên phân phối đồng hồ Casio Mỹ/Nhật chính hãng giá cạnh tranh nhất</span>
                                <button><a href="">MUA NGAY</a></button>
                            </div>
                        </div>
                        <div class="img-slider">
                            <video preload playsinline muted autoplay loop width="1349px" height="760px">
                                <source src="https://www.g-store.vn/wp-content/uploads/2023/07/MUDMASTER-GWG-2000-CASIO-G-SHOCK.mp4">
                            </video>
                        </div>
                        <div class="img-slider">
                            <img src="http://donghotuandt.vnn.mn/userfiles/img/604453/banner01.jpg" alt="">
                            <div class="bground-slider"></div>
                            <div class="content-slider">
                                <h1>G-Shock VIỆT NAM</h1>
                                <span>Chuyên phân phối đồng hồ Casio Mỹ/Nhật chính hãng giá cạnh tranh nhất</span>
                                <button><a href="">MUA NGAY</a></button>
                            </div>
                            
                        </div> 
                        <div class="img-slider">
                            <img src="http://donghotuandt.vnn.mn/userfiles/img/604453/banner02.jpg" alt="">
                            <div class="bground-slider"></div>
                            <div class="content-slider">
                                <h1>G-Shock VIỆT NAM</h1>
                                <span>Chuyên phân phối đồng hồ Casio Mỹ/Nhật chính hãng giá cạnh tranh nhất</span>
                                <button><a href="">MUA NGAY</a></button>
                            </div>
                        </div>
                    </div>

                    <div class="btn-slider">
                        <div id="left1" class="left-slider">
                        <i class='bx bx-chevron-left'></i>
                        </div>
                        <div id="right1" class="right-slider">
                        <i class='bx bx-chevron-right'></i>
                        </div>
                    </div> 
                </div>
                

                <div class="title-models">
                    <div class="content-title">
                        <div class="title-md">
                            <img src="../../image/logo/24hoursphoneservice300x300.png" alt="">
                            <strong>Phục vụ 24/7</strong>
                        </div>
                        <div class="title-md">
                            <img src="../../image/logo/logisticsdeliverytruckinmovement300x300.png" alt="">                 
                            <strong>Giao hàng tận nơi</strong>
                        </div>
                        <div class="title-md">
                            <img src="../../image/logo/gift300x300.png" alt="">
                            <strong>Miễn phí vận chuyển</strong>
                        </div>
                    </div>
                </div>

                <!-- DANH MỤC SẢN PHẨM -->
                <div class="title-danhmuc">
                    <h2>DANH MỤC SẢN PHẨM</h2>
                </div>
                <div class="slider-models-contai">
                    <div id="models-slid" class="slider-models">
                        <?php foreach($resultsProductGAIR as $row) {?>
                        <div class="img-model">
                            <a href="../../controller/index.php?url=detail&idproduct=<?php echo $row['id']?>">
                                <img src="../../image/products/<?php echo $row['image'] ?>" alt="">
                            </a>
                            <div class="name-model">
                                <a href="../../controller/index.php?url=detail&idproduct=<?php echo $row['id']?>">
                                    <h3><?php echo $row['productname'] ?></h3>
                                </a>
                            </div>
                        </div>
                        <?php } ?>
                        
                    </div>
                    <div class="btn-models">
                            <div id="left-model" class="left-models btn-mod">
                                <i class='bx bx-chevron-left'></i>
                            </div>
                            <div id="right-model" class="right-models btn-mod">
                                <i class='bx bx-chevron-right'></i>
                            </div>
                    </div>
                </div>

                <div class="img-title">
                    <img src="http://donghotuandt.vnn.mn/userfiles/img/604453/gps_mainbanner1.jpg" alt="">
                </div>

                <!-- SẢN PHẨM GIẢM GIÁ -->
                <div class="title-danhmuc">
                    <h2>SẢN PHẨM GIẢM GIÁ</h2>
                </div>
                <div class="slider-models-contai">
                    <div id="models-sale" class="slider-models">  
                        <?php foreach($resultsProductGLAND as $row) { ?> 
                        <div class="sale-model">
                            <div class="model-sl">
                                <a href="../../controller/index.php?url=detail&idproduct=<?php echo $row['id']?>">
                                    <img src="../../image/products/<?php echo $row['image'] ?>" alt="">
                                </a>
                                <div class="name-model">
                                    <a href="../../controller/index.php?url=detail&idproduct=<?php echo $row['id']?>">
                                        <h4><?php echo $row['productname'] ?></h4>
                                    </a>
                                    <h6>17.450.000 VND</h6>
                                    <h5><?php echo $row['price'] ?></h5>
                                    <button><a href="">Mua hàng</a></button>
                                </div>
                                <div class="sale-off">
                                    <span>25%</span>
                                </div>
                            </div>
                        </div>   
                        <?php } ?>  
                            
                                             
                    </div>
                    <div class="btn-models">
                            <div id="left-sale" class="left-models btn-mod">
                                <i class='bx bx-chevron-left'></i>
                            </div>
                            <div id="right-sale" class="right-models btn-mod">
                                <i class='bx bx-chevron-right'></i>
                            </div>
                    </div>
                </div>

                <div style="margin: 0 auto; margin-top: 80px" class="img-title">
                    <img src="https://gshock.casio.com/content/casio/locales/intl/en/brands/gshock/_jcr_content/root/responsivegrid/container/image_716323714_copy_546278471.casiocoreimg.jpeg/1708933102568/kv.jpeg" alt="">
                </div>
                <div style="margin: 0 auto;" class="img-title">
                    <img src="https://gshock.casio.com/content/casio/locales/intl/en/brands/gshock/_jcr_content/root/responsivegrid/container/image_1170766954_cop.casiocoreimg.jpeg/1708933102629/pc-w1920h816-logo.jpeg" alt="">
                </div>

                <!-- TIN TỨC VÀ MẪU MỚI RA-->
                <div class="title-danhmuc">
                    <h2>TIN TỨC VÀ MẪU MỚI RA MẮT</h2>
                </div>
                <div class="slider-models-contai">
                    <div id="models-selling" class="slider-models">             
                        <div class="selling-model">
                            <div class="model-sl">
                                <div class="img-sell">
                                <a href=""><img src="https://gshock.casio.com/content/casio/locales/intl/en/brands/gshock/_jcr_content/root/responsivegrid/container_1790102794/content_panel_list/content_panel_202104_1608992912/image.casiocoreimg.jpeg/1708933104104/og-w800h800-notext.jpeg" alt=""></a>
                                </div>
                                <div class="name-model-sell">
                                    <a href=""><h5>MULTICOLOR ACCENTS</h5></a>
                                    <span>Monochromatic color schemes with a playful touch: Multicolor designs with a pop flair</span>                              </div>
                            </div>
                        </div>                      
                        <div class="selling-model">
                            <div class="model-sl">
                                <div class="img-sell">
                                    <a href=""><img src="https://gshock.casio.com/content/casio/locales/intl/en/brands/gshock/_jcr_content/root/responsivegrid/container_1790102794/content_panel_list/content_panel_202107_1741450022/image.casiocoreimg.jpeg/1708933103431/4-2.collabo-web-mo-800x800%28px%29.jpeg" alt=""></a>
                                </div>
                                <div class="name-model-sell">
                                    <a href=""><h5>ITZY x G-SHOCK</h5></a>
                                    <span>Collaboration watches featuring K-POP Girl Group ITZY</span>
                                </div>
                            </div>
                        </div>                      
                        <div class="selling-model">
                            <div class="model-sl">
                                <div class="img-sell">
                                    <a href=""><img src="https://gshock.casio.com/content/casio/locales/intl/en/brands/gshock/_jcr_content/root/responsivegrid/container_1790102794/content_panel_list/content_panel_202104_636517217/image.casiocoreimg.jpeg/1708933103462/og-w800h800-notext.jpeg" alt=""></a>
                                </div>
                                <div class="name-model-sell">
                                    <a href=""><h5>GST - B600</h5></a>
                                    <span>Smallest G-STEEL yet</span>
                                </div>
                            </div>
                        </div>                      
                        <div class="selling-model">
                            <div class="model-sl">
                                <div class="img-sell">
                                    <a href=""><img src="https://gshock.casio.com/content/casio/locales/intl/en/brands/gshock/_jcr_content/root/responsivegrid/container_1790102794/content_panel_list/content_panel_202309_1184308030/image.casiocoreimg.jpeg/1708933103493/og-w800h800-notext.jpeg" alt=""></a>
                                </div>
                                <div class="name-model-sell">
                                    <a href=""><h5>G-Shock HIDDEN GLOW</h5></a>
                                    <span>Phosphorescent faces for designs that shine</span>
                                </div>
                            </div>
                        </div>                      
                        <div class="selling-model">
                            <div class="model-sl">
                                <div class="img-sell">
                                    <a href=""><img src="https://gshock.casio.com/content/casio/locales/intl/en/brands/gshock/_jcr_content/root/responsivegrid/container_1790102794/content_panel_list/content_panel_202309_746782933/image.casiocoreimg.jpeg/1708933103523/og-w800h800-notext.jpeg" alt=""></a>
                                </div>
                                <div class="name-model-sell">
                                    <a href=""><h5>TEAM LAND CRUISER TOYOTA AUTO BODY</h5></a>
                                    <span>Team Land Cruiser collaboration model: Partnering with a veteran Dakar Rally challenger</span>
                                </div>
                            </div>
                        </div>                      
                        <div class="selling-model">
                            <div class="model-sl">
                                <div class="img-sell">
                                    <a href=""><img src="https://gshock.casio.com/content/casio/locales/intl/en/brands/gshock/_jcr_content/root/responsivegrid/container_1790102794/content_panel_list/content_panel_202302_161576374/image.casiocoreimg.jpeg/1708933103554/thumb-b1000.jpeg" alt=""></a>
                                </div>
                                <div class="name-model-sell">
                                    <a href=""><h5>G-SHOCK MAGAZINE</h5></a>
                                    <span>HODINKEE | GWC - B1000</span>
                                </div>
                            </div>
                        </div>                      
                        <div class="selling-model">
                            <div class="model-sl">
                                <div class="img-sell">
                                    <a href=""><img src="https://gshock.casio.com/content/casio/locales/intl/en/brands/gshock/_jcr_content/root/responsivegrid/container_1790102794/content_panel_list/content_panel_202401/image.casiocoreimg.jpeg/1708933103584/thumb-pl.jpeg" alt=""></a>
                                </div>
                                <div class="name-model-sell">
                                    <a href=""><h5>G-SHOCK MAGAZINE</h5></a>
                                    <span>HYPEBEAST | POLYCHROMATIC ACCENTS</span>
                                </div>
                            </div>
                        </div>                      
                        <div class="selling-model">
                            <div class="model-sl">
                                <div class="img-sell">
                                    <a href=""><img src="https://gshock.casio.com/content/casio/locales/intl/en/brands/gshock/_jcr_content/root/responsivegrid/container_1790102794/content_panel_list/content_panel_202105_1373303742/image.casiocoreimg.jpeg/1708933103632/og-w800h800-notext.jpeg" alt=""></a>
                                </div>
                                <div class="name-model-sell">
                                    <a href=""><h5>TONE-ON-TONE SERIES</h5></a>
                                    <span>Bold, yet delicate : Monochromatic color for a touch of flair</span>
                                </div>
                            </div>
                        </div>                      
                        <div class="selling-model">
                            <div class="model-sl">
                                <div class="img-sell">
                                    <a href=""><img src="https://gshock.casio.com/content/casio/locales/intl/en/brands/gshock/_jcr_content/root/responsivegrid/container_1790102794/content_panel_list/content_panel_202204_1792891031/image.casiocoreimg.jpeg/1708933103669/og-w800h800-notext.jpeg" alt=""></a>
                                </div>
                                <div class="name-model-sell">
                                    <a href=""><h5>GMD - S5600CT</h5></a>
                                    <span>Nature-minded cloth-band watches in comfortable colors and materials</span>
                                </div>
                            </div>
                        </div>                      
                        <div class="selling-model">
                            <div class="model-sl">
                                <div class="img-sell">
                                    <a href=""><img src="https://gshock.casio.com/content/casio/locales/intl/en/brands/gshock/_jcr_content/root/responsivegrid/container_1790102794/content_panel_list/content_panel_202312/image.casiocoreimg.jpeg/1708933103699/og-w800h800-notext.jpeg" alt=""></a>
                                </div>
                                <div class="name-model-sell">
                                    <a href=""><h5>RANGEMAN GPR-H1000</h5></a>
                                    <span>6 sensors + GPS functionality to track movement in real time</span>
                                </div>
                            </div>
                        </div>                      
                        <div class="selling-model">
                            <div class="model-sl">
                                <div class="img-sell">
                                    <a href=""><img src="https://gshock.casio.com/content/casio/locales/intl/en/brands/gshock/_jcr_content/root/responsivegrid/container_1790102794/content_panel_list/content_panel_copy_c/image.casiocoreimg.jpeg/1708933104009/gm-s1100bp-5a-11.jpeg" alt=""></a>
                                </div>
                                <div class="name-model-sell">
                                    <a href=""><h5>BEAUTIFULL PEOPLE x G-SHOCK</h5></a>
                                    <span>Collaboration</span>
                                </div>
                            </div>
                        </div>                      
                        <div class="selling-model">
                            <div class="model-sl">
                                <div class="img-sell">
                                    <a href=""><img src="https://gshock.casio.com/content/casio/locales/intl/en/brands/gshock/_jcr_content/root/responsivegrid/container_1790102794/content_panel_list/content_panel_202107_1591627180/image.casiocoreimg.jpeg/1708933104039/og-w800h800-notext.jpeg" alt=""></a>
                                </div>
                                <div class="name-model-sell">
                                    <a href=""><h5>CHARLES DARWIN FOUNDATION PARTNERSHIP MODEL</h5></a>
                                    <span>Colllaboration</span>
                                </div>
                            </div>
                        </div>                      
                        <div class="selling-model">
                            <div class="model-sl">
                                <div class="img-sell">
                                    <a href=""><img src="https://gshock.casio.com/content/casio/locales/intl/en/brands/gshock/_jcr_content/root/responsivegrid/container_1790102794/content_panel_list/content_panel_202201_1943968438/image.casiocoreimg.jpeg/1708933104072/og-w800h800-notext.jpeg" alt=""></a>
                                </div>
                                <div class="name-model-sell">
                                    <a href=""><h5>NATURE'S COLOUR</h5></a>
                                    <span>Natural colours and botanical designs harmoniously complement stress-free lifestyles</span>
                                </div>
                            </div>
                        </div>                      
                    </div>
                    <div style="color: #FF0000;" class="btn-models">
                            <div id="left-selling" class="left-models btn-mod">
                                <i class='bx bx-chevron-left'></i>
                            </div>
                            <div id="right-selling" class="right-models btn-mod">
                                <i class='bx bx-chevron-right'></i>
                            </div>
                    </div>
                </div>
            </article>
</main>
<script>


    //SLIDER MAIN
        let leftSlider = document.getElementById('left1');
        let rightSlider = document.getElementById('right1');
            rightSlider.addEventListener('click', () => {
            let listSlider = document.querySelectorAll('.img-slider');
            document.getElementById('slider-main').appendChild(listSlider[0]);
        });
        leftSlider.addEventListener('click', () => {
            let listSlider = document.querySelectorAll('.img-slider');
            document.getElementById('slider-main').prepend(listSlider[listSlider.length-1]);
        });

        //SLIDER DANH MỤC SẢN PHẨM
        let btnLeftModel = document.getElementById('left-model');
        let btnRightModel = document.getElementById('right-model');
        btnRightModel.addEventListener('click', () => {
        let listSlider = document.querySelectorAll('.img-model');
        document.getElementById('models-slid').appendChild(listSlider[0]);

        });
        btnLeftModel.addEventListener('click', () => {
        let listSlider = document.querySelectorAll('.img-model');
        document.getElementById('models-slid').prepend(listSlider[listSlider.length-1]);
        });

        //SLIDER SAN PHAM GIẢM GIÁ
        let btnLeftSale = document.getElementById('left-sale');
        let btnRightSale = document.getElementById('right-sale');
        btnRightSale.addEventListener('click', () => {
        let listSlider = document.querySelectorAll('.sale-model');
        document.getElementById('models-sale').appendChild(listSlider[0]);
        });
        btnLeftSale.addEventListener('click', () => {
        let listSlider = document.querySelectorAll('.sale-model');
        document.getElementById('models-sale').prepend(listSlider[listSlider.length-1]);
        });

        //SLIDER SAN PHAM BÁN CHẠY
        let btnLeftSelling = document.getElementById('left-selling');
        let btnRightSelling = document.getElementById('right-selling');
        btnRightSelling.addEventListener('click', () => {
        let listSlider = document.querySelectorAll('.selling-model');
        document.getElementById('models-selling').appendChild(listSlider[0]);
        });
        btnLeftSelling.addEventListener('click', () => {
        let listSlider = document.querySelectorAll('.selling-model');
        document.getElementById('models-selling').prepend(listSlider[listSlider.length-1]);
        });

</script>