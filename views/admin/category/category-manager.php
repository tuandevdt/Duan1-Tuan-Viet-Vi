
        <div class="categories">
        <h1>Quản lý danh mục</h1>
        <div class="first-search">
            <a href="index.php?route=create-category">Thêm danh mục mới</a>
            <a href=""><?php echo $error, $not404 ?></a>
        </div>


        <table class="table table-striped table-light">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Create Date</th>
                    <th scope="col">Description</th>
                    <th scope="col" class="th" colspan="2" style="text-align: center;">More</th>
                </tr>
            </thead>
            <?php foreach ($results as $row) { ?>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $row['id']; ?></th>
                    <td><?php echo $row['categoryname']; ?></td>
                    <td><?php echo $row['createdate']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td class="more">
                        <a href="index.php?route=update-category&id=<?php echo $row['id'] ?>">Update </a>
                    </td>
                    <td class="more">
                        <button class="btn-delete-category" value="<?php echo $row['id'] ?>">Delete</button>
                    </td>
                </tr>
            </tbody>
            <?php } ?>
            <div class="form-edit form-delete none-active">
                <form action="index.php?route=handle-delete-category" method="POST"> 
                    <div class="form-group">
                        <span>Xác nhận xóa?</span>
                        <input id="id-update" type="hidden" name="id-xoa" value="">
                        <div class="confirm">
                            <button type="submit" name="submit" value="yes">Xóa</button>
                            <div class="none" >Hủy</div>
                        </div>
                    </div>
                </form>
            </div>
        </table>

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
