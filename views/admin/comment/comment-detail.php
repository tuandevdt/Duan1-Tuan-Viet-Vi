<div class="comments">
    <div class="title">
        <div class="prev"><a href="index.php?route=comment">Quay lại</a></div>
        <h1>Chi tiết bình luận</h1>
    </div>
    <table class="table table-striped table-light">
            <thead>
                <tr>
                    <th scope="col">Product Name</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Comment At</th>
                    <th scope="col">Content</th>
                    <th scope="col" class="th" style="text-align: center;">More</th>
                </tr>
            </thead>
            <?php foreach ($result as $row) { ?>
            <tbody>
                <tr>
                    <td scope="row"><?php echo $row['productname']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['commentAt']; ?></td>
                    <td><?php echo $row['text']; ?></td>
                    <td class="more">
                        <button class="btn-delete-category" value="<?php echo $row['id'] ?>">Delete</button>
                    </td>
                </tr>
            </tbody>
            <?php } ?>
            <div class="form-edit form-delete none-active">
                <form action="index.php?route=handle-delete-comment" method="POST"> 
                    <div class="form-group">
                        <span>Xác nhận xóa?</span>
                        <input id="id-update" type="hidden" name="id-xoa" value="">
                        <input type="hidden" name="productid" value="<?php echo $row['productid'] ?>">
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