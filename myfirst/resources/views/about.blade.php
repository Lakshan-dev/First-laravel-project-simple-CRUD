<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Data List</title>
</head>
<body>
    <div class="container text-center">
        <h1>Users List</h1>
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Profile Photo</th>
            </tr>
            @foreach($collection as $item)
                <tr>
                    <th>{{$item['id']}}</th>
                    <th>{{$item['first_name']}}</th>
                    <th>{{$item['email']}}</th>
                    <th><img src="{{$item['avatar']}}"></th>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>