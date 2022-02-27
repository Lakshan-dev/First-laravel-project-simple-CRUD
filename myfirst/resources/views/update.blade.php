<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container ">
        <form action="/update" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$data['id']}}">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$data['name']}}" ><br>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control" value="{{$data['email']}}"><br>
            <label for="address">Address</label>
            <input type="text" name="address" id="address" class="form-control" value="{{$data['address']}}"><br>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>