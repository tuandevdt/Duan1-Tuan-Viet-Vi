
<div class="category">
    <h1>Add New Category</h1>
        <form action="index.php?route=handle-create-category" method="POST"> 
            <div class="form-group">
                <label for="exampleInputEmail1">Category Name</label>
                <input type="text" name="category-name" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="Enter Category Name">
                <small id="emailHelp" class="error"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <input type="text" name="description" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="Enter Description">
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
</div>
