<div class="comments">
    <h1>Quản lý bình luận</h1>
    <table class="table table-striped table-light">
            <thead>
                <tr>
                    <th scope="col">Product Name</th>
                    <th scope="col">Total Comment</th>
                    <th scope="col">New Date Comment</th>
                    <th scope="col">Old Date Comment</th>
                    <th scope="col" class="th">More</th>
                </tr>
            </thead>
            <?php foreach ($results as $row) { ?>
            <tbody>
                <tr>
                    <td scope="row"><?php echo $row['productname']; ?></td>
                    <td scope="row"><?php echo $row['comment_count']; ?></td>
                    <td><?php echo $row['newest_commentAt']; ?></td>
                    <td><?php echo $row['oldest_commentAt']; ?></td>
                    <td class="more">
                        <a href="index.php?route=comment-detail&productid=<?php echo $row['productid'] ?>">Xem thêm</a>
                    </td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
</div>
