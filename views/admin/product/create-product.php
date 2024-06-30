
    <div class="category">
        <h1>Add New Product</h1>
        <form id="form-create" action="index.php?route=handle-create-product" method="POST" enctype="multipart/form-data"> 
            <div class="form-group">
                <label for="exampleInputEmail1">Product Id</label>
                <input type="text" name="product-id" class="form-control" id="id"  aria-describedby="emailHelp" placeholder="Enter Product Id">
                <small id="smallid" class="error"><?php echo $duplicateID ?></small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Product Name</label>
                <input type="text" name="product-name" class="form-control" id="name"  aria-describedby="emailHelp" placeholder="Enter Product Name">
                <small id="smallname" class="error"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input class="upfile form-control" type="file" id="image" name="image-a" value="Choose File">
                <small id="smallimage" class="error"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input type="text" name="price" class="form-control" id="price"  aria-describedby="emailHelp" placeholder="Enter Price">
                <small id="smallprice" class="error"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <input type="text" name="description" class="form-control" id="description"  aria-describedby="emailHelp" placeholder="Enter Description">
                <small id="smalldescription" class="error"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Quantity</label>
                <input type="number" name="quantity" class="form-control" id="quantity"  aria-describedby="emailHelp" value="">
                <small id="smallquantity" class="error"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Category Name</label>          
                <select class="custom-select"  name="categoryid">
                    <?php foreach($result as $row) { ?>
                    <option value="<?php echo $row['id'] ?>"><?php echo $row['categoryname'] ?> </option>
                    <?php } ?>
                </select>      
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
    <script> 
        let id = document.getElementById('id');
        let name = document.getElementById('name');
        let image = document.getElementById('image');
        let price = document.getElementById('price');
        let description = document.getElementById('description');
        let quantity = document.getElementById('quantity');
        let form = document.getElementById('form-create');

        let valid_id = true;
        let valid_name = true;
        let valid_image = true;
        let valid_price = true;
        let valid_description = true;
        let valid_quantity = true;

        
        
        form.addEventListener('submit', function(e) {
           
            //ID
        if(id.value == '') {
            valid_id = false;
            document.getElementById('smallid').innerHTML = 'ID is required.';
        } else {
            valid_id = true;
            document.getElementById('smallid').innerHTML = '';
        }

        //valid_name
        if(name.value == '') {
            valid_name = false;
            document.getElementById('smallname').innerHTML = 'ProductName is required.';
        } else {
            valid_name = true;
            document.getElementById('smallname').innerHTML = '';
        }

        //image
        if(image.value == '') {
            valid_image = false;
            document.getElementById('smallimage').innerHTML = 'Image is required.';
        } else {
            valid_image = true;
            document.getElementById('smallimage').innerHTML = '';
        }

        //price
        if(price.value == '') {
            valid_price = false;
            document.getElementById('smallprice').innerHTML = 'Price is required.';
        } else {
            valid_price = true;
            document.getElementById('smallprice').innerHTML = '';
        }

        //description
        if(description.value == '') {
            valid_description = false;
            document.getElementById('smalldescription').innerHTML = 'Description is required.';
        } else {
            valid_description = true;
            document.getElementById('smalldescription').innerHTML = '';
        }

        //quantity
        if(quantity.value == '') {
            valid_quantity = false;
            document.getElementById('smallquantity').innerHTML = 'Quantity is required.';
        } else {
            valid_quantity = true;
            document.getElementById('smallquantity').innerHTML = '';
        }

            if(
                valid_id == true &&
                valid_name == true &&
                valid_image == true &&
                valid_price == true &&
                valid_description == true &&
                valid_quantity == true
            ) {
                form.submit();
            } else {
                e.preventDefault();
            }
        });
        
            
    </script>