
        <div class="products">
            <h1>Quản lý sản phẩm</h1>
        <div class="first-search">
            <a href="index.php?route=create-product">Thêm sản phẩm mới</a>
            <a href="index.php?route=product"><?php echo $back ?></a> 
            
            <form class="form-search" action="" method="POST">
                <input type="text" name="search" placeholder="Enter Products Name">
                <button class="btna" name="btnSearch">Search</button>
            </form>
        </div>

        <table class="table table-striped table-light">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Productname</th>
                    <th scope="col">Image</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Sales Count</th>
                    <th scope="col">Category ID</th>
                    <th scope="col" colspan="2" style="text-align: center">More</th>
                </tr>
            </thead>

            <?php  foreach ($result as $row) { ?>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $row['id']; ?></th>
                    <td><?php echo $row['productname']; ?></td>
                    <td class="image"><img src="../../image/products/<?php echo $row['image']; ?>" alt=""></td>
                    <td><?php echo number_format($row['price']) ?> vnd</td>
                    <td><?php echo $row['quantity']; ?></td>
                    <td><?php echo $row['salescount']; ?></td>
                    <td><?php echo $row['categoryid']; ?></td>
                    <td class="more">
                    <a href="index.php?route=update-product&id=<?php echo $row['id'] ?>">Update </a>
                    </td>
                    <td class="more">
                        <button class="btn-delete-category" value="<?php echo $row['id'] ?>">Delete</button>                    
                    </td>
                </tr>
            </tbody>
            <?php } ?>
            <div class="form-edit form-delete none-active">
                <form action="index.php?route=handle-delete-product" method="POST"> 
                    <div class="form-group">
                        <span>Xác nhận xóa?</span>
                        <input id="id-update" type="hidden" name="id-xoa" value="">
                        <div class="confirm">
                            <button type="submit" name="submit" value="yes">Xóa</button>
                            <div class="none" value="no">Hủy</div>
                        </div>
                    </div>
                </form>
            </div>
        </table>
        <div class="next-page">
        <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
            <button class="active<?php echo $i?>" name="btn-active" value="<?php echo $i?>"><?php echo "<a href='index.php?route=product&page=$i'>$i</a> ";?></button>
        <?php } ?>
        </div>
        </div>
<script>
    let buttons = document.querySelectorAll('.btn-delete-category');
    let idUpdateInput = document.getElementById('id-update');
    buttons.forEach(function(button) {
        button.addEventListener('click', () => {
            document.querySelector('.form-edit').classList.remove('none-active');
            idUpdateInput.value = button.value;
            document.querySelector('.none').addEventListener('click', () => {
                document.querySelector('.form-edit').classList.add('none-active');
            });
        })
    });

</script>
        
                
                    
                
        
