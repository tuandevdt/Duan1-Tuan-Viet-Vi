
<div class="dashboard">
    <div class="title-dashboard">
        <h1>Tổng quan về website</h1>
    </div>
    <div class="statistical">
        <div class="data">
            <div class="content-data">
                <div class="first-data">
                    <div class="quantity-data">
                        <h5><a href="../../controller/index.php?url=user"><?php echo $countUsers ?></a></h5>
                    </div>
                    <div class="infor">
                        <span>Khách hàng</span>
                    </div>
                </div>
                <div class="second-data">
                    <a href="../../controller/index.php?url=user"><i class='bx bxs-user'></i></a>
                </div>
            </div>
        </div>
        <div class="data">
            <div class="content-data">
                <div class="first-data">
                    <div class="quantity-data">
                        <h5><a href="../../controller/index.php?url=product"><?php echo $countProducts ?></a></h5>
                        
                    </div>
                    <div class="infor">
                        <span>Sản phẩm</span>
                    </div>
                </div>
                <div class="second-data">
                    <a href="../../controller/index.php?url=product"><i class='bx bxs-bar-chart-alt-2'></i></a>
                </div>
            </div>
        </div>
        <div class="data">
            <div class="content-data">
                <div class="first-data">
                    <div class="quantity-data">
                        <h5><?php echo $countViews ?></h5>
                        
                    </div>
                    <div class="infor">
                        <span>Lượt xem</span>
                    </div>
                </div>
                <div class="second-data">
                    <i class='bx bxs-low-vision'></i>
                </div>
            </div>
        </div>
        <div class="data">
            <div class="content-data">
                <div class="first-data">
                    <div class="quantity-data">
                        <h5><a href="../../controller/index.php?url=order"><?php echo $countOrders ?></a></h5>
                        
                    </div>
                    <div class="infor">
                        <span>Đơn hàng</span>
                    </div>
                </div>
                <div class="second-data">
                    <a href="../../controller/index.php?url=order"><i class='bx bxs-file-export' ></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="canvas-container">
        <div class="first-canvas">
            <div class="canvas-width">
                <h4>Thống kê giá sản phẩm theo danh mục</h4>
                <canvas class="chair-width" id="canvas-top" width="200" height="130"></canvas>
            </div> 
            
            <div class="canvas-circle">
                <h4>Thống kê đơn hàng</h4>
                <canvas class="chair-width" id="canvas-circle" width="200" height="100"></canvas>
            </div> 
        </div>  
        <div class="first-canvas">
            
            <div class="canvas-width width-a">
                <h4>Đơn hàng mới nhất</h4>
                <div class="content-canvas">
                    <table class="table table-striped table-light">
                        <thead>
                            <tr>
                                <th scope="col">Mã Đơn</th>
                                <th scope="col">Tổng Tiền</th>
                                <th scope="col">Ngày Đặt</th>
                                <th scope="col">Trạng Thái</th>
                            </tr>
                        </thead>
                        <?php foreach ($newOrders as $row) { ?>
                        <tbody>
                            <tr>
                                <th scope="row">00<?php echo $row['id']; ?></th>
                                <td><?php echo number_format($row['totalamount']) ?></td>
                                <td><?php echo $row['orderdate']; ?></td>
                                <td><?php echo $row['orderstatus']; ?></td>
                            </tr>
                        </tbody>
                        <?php } ?>
                    </table>
                </div>
            </div> 
            <div class="canvas-circle width-b">
                <h4>Top 10 sản phẩm lượt xem cao nhất</h4>
                <canvas class="chair-width" id="canvas" width="200" height="180"></canvas>
            </div> 
        </div>  
    </div>
    <div class="content-dashboard">
        <div class="content-first">
            <div class="title-content">
                <h3></h3>
            </div>
        </div>
    </div>
</div>
<?php 
    $xuly = count($db->select("SELECT * FROM orders WHERE orderstatus = 'Chờ xử lý'"));
    $xacnhan = count($db->select("SELECT * FROM orders WHERE orderstatus = 'Đã xác nhận'"));
    $danggiao = count($db->select("SELECT * FROM orders WHERE orderstatus = 'Đang vận chuyển'"));
    $dagiao = count($db->select("SELECT * FROM orders WHERE orderstatus = 'Đã giao'"));
    $huy = count($db->select("SELECT * FROM orders WHERE orderstatus = 'Đã hủy đơn'"));

    $top10view = $db->select(" SELECT * FROM products ORDER BY viewcount DESC LIMIT 10");

    for($i = 0; $i < count($top10view); $i++) {
        $row[$i] = $top10view[$i]['productname'];
        $view[$i] = $top10view[$i]['viewcount'];
    }

    $result_top = $db->select("SELECT categories.categoryname, 
                                COUNT(products.id) AS total_products, 
                                MAX(products.price) AS max_price, 
                                MIN(products.price) AS min_price, 
                                ROUND(AVG(products.price), 0) AS avg_price 
                                FROM products INNER JOIN categories 
                                ON products.categoryid = categories.id 
                                GROUP BY categories.categoryname");

?>
 <script>
    const ctx = document.getElementById('canvas');
    const ctx_circle = document.getElementById('canvas-circle');
    const ctx_top = document.getElementById('canvas-top');
    
    //Biểu đồ cột
    new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [
            <?php for($i = 0;$i < 9; $i++) {?>
            '<?php echo $row[$i]?>',
            <?php } ?>
            '<?php echo $row[9]?>'
        ],
        datasets: [{
        label: '',
        data: [
            <?php for($i = 0;$i < 9; $i++) {?>
            '<?php echo $view[$i]?>',
            <?php } ?>
            '<?php echo $view[9]?>', 
        ],
        
        borderWidth: 1,
    backgroundColor: [
        'rgba(165, 42, 42, 0.8)', 
        'rgba(0, 255, 255, 0.8)', 
        'rgba(255, 192, 203, 0.8)', 
        'rgba(255, 166, 0, 0.8)', 
        'rgba(128, 0, 128, 0.8)', 
        'rgba(0, 0, 0, 0.8)', 
        'rgba(255, 255, 0, 0.8)', 
        'rgba(255, 0, 0, 0.8)', 
        'rgba(0, 0, 255, 0.8)', 
        'rgba(0, 128, 0, 0.8)'
    ]
        }],
    },
    options: {
        scales: {
        y: {
            beginAtZero: true
        }
        }
    }
    });

    //Biểu đồ tròn
    new Chart(ctx_circle, {
    type: 'pie',
    data: {
        labels: ['Chờ xử lý', 'Đã xác nhận', 'Đang vận chuyển', 'Đã giao', 'Đã hủy đơn'],
        datasets: [{
        label: 'Tổng đơn: ',
        data: [
                    <?php echo $xuly?>, 
                    <?php echo $xacnhan?>, 
                    <?php echo $danggiao?>, 
                    <?php echo $dagiao?>, 
                    <?php echo $huy?>
                ],
        borderWidth: 1,
        backgroundColor: ['rgba(255, 0, 0, 0.7)', 'rgba(0, 0, 255, 0.7)', 'rgba(255, 255, 0, 0.7)', 'rgba(0, 128, 0, 0.7)', 'rgba(128, 0, 128, 0.7)']
    }],
    },
    options: {
        scales: {
        y: {
            beginAtZero: true
        }
        }
    }
    });

    //Biểu đồ top category
    new Chart(ctx_top, {
    type: 'bar',
    data: {
        labels: [
            <?php for($i = 0; $i < count($result_top); $i++) { ?>
            'Giá cao nhất <?php echo $result_top[$i]['categoryname']; ?>',
                'Giá thấp nhất <?php echo $result_top[$i]['categoryname']; ?>',
                'Giá trung bình <?php echo $result_top[$i]['categoryname']; ?>',
            <?php } ?>
        ],
        datasets: [{
            label: '',
            data: [
                <?php for($i = 0; $i < count($result_top); $i++) { ?>
                    '<?php echo $result_top[$i]['max_price']; ?>',
                    '<?php echo $result_top[$i]['min_price']; ?>',
                    '<?php echo $result_top[$i]['avg_price']; ?>',
                <?php } ?>
            ],
            borderWidth: 1,
            backgroundColor: ['rgba(255, 0, 0, 0.6)', 'rgba(0, 0, 255, 0.6)', 'rgba(255, 255, 0, 0.6)'] // Make sure this matches the number of data points
        }],
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
 </script>




