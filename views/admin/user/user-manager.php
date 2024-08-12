<div class="users">
    <h1>Quản lý người dùng</h1>
<table class="table table-striped table-light">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Image</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Status</th>
                    <th scope="col">Date</th>
                    <th scope="col">More</th>
                </tr>
            </thead>

            <?php if ($results !== false && !empty($results)) {
                    // Xử lý dữ liệu người dùng ở đây
                    foreach ($results as $row) { 
                    if($row['status'] == 0) {
                        $user_none = "style='background: rgb(199, 199, 199);'";
                    } else {
                        $user_none = "";
                    }
                ?>
                        <tbody>
                            <tr <?php echo $user_none?>>
                                <th scope="row"><?php echo $row['id']; ?></th>
                                <td><?php echo $row['username']; ?></td>
                                <td class="image"><img src="../../image/products/<?php echo $row['image']; ?>" alt=""></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['role']; ?></td>
                                <td><?php echo $row['status']; ?></td>
                                <td><?php echo $row['date']; ?></td>
                                <td><button class="btn-update" value="<?php echo $row['id'] ?>">Update Status</button></td>
                            </tr>
                        </tbody>
                <?php
                        }
                    } 

                ?>
            <div class="form-edit none-active">
                <form action="index.php?route=update-status-users" method="POST"> 
                    <div class="form-group">
                        <label for="exampleInputPassword1">Chọn trạng thái người dùng</label>
                        <select name="status" id="">
                            <option value="1">1 (Hoạt động)</option>
                            <option value="0">0 (Ngừng hoạt động)</option>
                        </select>
                    </div>
                    
                    <input id="id-update" type="hidden" name="id" value="">
                    <button type="submit" name="btn-update-status" class="btn btn-primary">Send</button>
                </form>
                <div class="btn-close">
                    <i class='bx bx-x'></i>
                </div>
            </div>
        </table>
</div>
<script>
    let buttons = document.querySelectorAll('.btn-update');
    let idUpdateInput = document.getElementById('id-update');
    let closeForm = document.querySelector('.btn-close');
    buttons.forEach(function(button) {
        button.addEventListener('click', () => {
            document.querySelector('.form-edit').classList.remove('none-active');
            idUpdateInput.value = button.value;
        })
    });
    closeForm.addEventListener('click', () => {
        document.querySelector('.form-edit').classList.add('none-active');
    });

</script>