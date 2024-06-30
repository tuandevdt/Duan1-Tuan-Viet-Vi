
        <div class="category">
            <h1>Update Category</h1>
            <form action="index.php?route=handle-update-category" method="POST"> 
                <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input type="text" name="name-category" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="Enter Category Name" value="<?php echo $update['categoryname'] ?>">
                    <small id="emailHelp" class="error"></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="text" name="description" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="Enter Description" value="<?php echo $update['description'] ?>">
                </div>
                <input type="hidden" name="id" value="<?php echo $update['id'] ?>">
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>