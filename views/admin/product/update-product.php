
    <div class="category">
        <h1>Update Product</h1>
        <form id="form-update-product" action="index.php?route=handle-update-product" method="POST" enctype="multipart/form-data"> 
            <div class="form-group">
                <label for="exampleInputEmail1">Product Name</label>
                <input type="text" name="productname" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" value="<?php echo $row['productname']?>">
                <small id="emailHelp" class="error"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input class="upfile form-control" id="image" type="file" name="image" placeholder="Choose File">
                <small id="errorimg" class="error"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input type="text" name="price" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" value="<?php echo $row['price']?>">
                <small id="emailHelp" class="error"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <input type="text" name="description" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" value="<?php echo $row['description']?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Quantity</label>
                <input type="number" name="quantity" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" value="<?php echo $row['quantity']?>">
                <small id="emailHelp" class="error"><?php echo $quantityError ?></small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Category Name</label>          
                <select class="custom-select"  name="categoryid">
                    <?php foreach($resultCategory as $rowCategory) { ?>
                    <option value="<?php echo $rowCategory['id'] ?>"><?php echo $rowCategory['categoryname'] ?> </option>
                    <?php } ?>
                </select>      
            </div>
            <input type="hidden" name="id" value="<?php echo $row['id']?>">
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
<script>
    let form = document.getElementById('form-update-product');
    let img = document.getElementById('image');
    let error = document.getElementById('errorimg');
    let valid_img = true;
    form.addEventListener('submit', (e) => {
        if(img.value == '') {
            valid_img = false;
            error.innerHTML = "Missing Image!!!";
        } else {
            valid_img = true;
            error.innerHTML = "";
        }
        if(valid_img == true) {
            form.submit();
        } else {
            e.preventDefault();
        }
    })
</script>