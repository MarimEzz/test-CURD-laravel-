<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>add product</title>
    <link href="{{ asset('css/addstyle.css') }}" rel="stylesheet">

<body>
    <a href='/addCustomer' class='switchpage'>Go To Add Customer</a>
    <form role='form' action='/addProduct' method='post' enctype='multipart/form-data' class='form-body'>
        @csrf
        <h1>Add Product</h1>
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input name='name' type="text" id="exampleInputEmail1" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Serial</label>
                <input name='serial' type="text" id="exampleInputPassword1" placeholder="Serial">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <textarea name='description' placeholder="Descrip Here"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Price</label>
                <input name='price' type="text"  id="exampleInputPassword1" placeholder="Price">
            </div>
        </div>

        <div class="card-footer">
            <button class='btn' name='upload' type="submit">Submit</button>
            <button class='switchbtn'> <a href='/showProduct'>Show</a></button>

        </div>
    </form>
</body>

