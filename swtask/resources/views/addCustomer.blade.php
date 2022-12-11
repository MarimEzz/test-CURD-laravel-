<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>add product</title>
    <link href="{{ asset('css/addcstyle.css') }}" rel="stylesheet">

<body>
<a href='/addProduct' class='switchpage'>Go To Add Product</a>

    <form role='form' action='/addCustomer' method='post' enctype='multipart/form-data' class='form-body'>
        @csrf
        <h1>Add Customer</h1>
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input name='name' type="text" id="exampleInputEmail1" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Address</label>
                <input name='address' type="text" id="exampleInputPassword1" placeholder="Address">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">E-mail</label>
                <input name='email' type="email"  id="exampleInputPassword1" placeholder="E-mail">
            </div>
        </div>

        <div class="card-footer">
            <button class='btn' name='upload' type="submit">Submit</button>
            <button class='switchbtn'> <a href='/showCustomer'>Show</a></button>

        </div>
    </form>
</body>