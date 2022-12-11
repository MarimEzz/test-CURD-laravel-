<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>show product</title>
    <link href="{{ asset('css/showstyle.css') }}" rel="stylesheet">

</head>
<body>
    <div class="card-body">
    <button class='btn' name='upload' type="submit"><a href='/addProduct'>Add Product</a></button>

        <h1>Show Product</h1>
        <table id="example2" style='margin-left:60px;'>
            <thead >
                <tr>
                <th>Name</th>
                <th>Serial</th>
                <th>Description</th>
                <th>Price</th>
                <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($records as $record)
                <tr>
                    <td>{{$record->name}}</td>
                    <td>{{$record->serial}}</td>
                    <td>{!!$record->description!!}</td>
                    <td>$ {{$record->price}}</td>
                    <td><a href='/deleteProduct/{{$record->id}}' aria-hidden='true'><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="24" height="24"
viewBox="0 0 48 48"
style=" fill:#000000;"><path fill="#f44336" d="M44,24c0,11.045-8.955,20-20,20S4,35.045,4,24S12.955,4,24,4S44,12.955,44,24z"></path><path fill="#fff" d="M29.656,15.516l2.828,2.828l-14.14,14.14l-2.828-2.828L29.656,15.516z"></path><path fill="#fff" d="M32.484,29.656l-2.828,2.828l-14.14-14.14l2.828-2.828L32.484,29.656z"></path></svg></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>
</body>