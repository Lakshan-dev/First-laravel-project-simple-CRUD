<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        @if ($message = Session::get('success'))
            <div class="alert alert-danger">
                <strong>{{$message}}</strong>
            </div>
        @endif
        @if ($message = Session::get('update'))
            <div class="alert alert-primary">
                <strong>{{$message}}</strong>
            </div> 
         @endif
        <div class="text-center">
            <h1>User List</h1>
            <table class="table table-dark">
                <thead>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Address</td>
                    <td>Action</td>
                </thead>
                <tbody>
                    @foreach($Users as $User)
                        <tr>
                            <td>{{$User['id']}}</td>
                            <td>{{$User['name']}}</td>
                            <td>{{$User['email']}}</td>
                            <td>{{$User['address']}}</td>
                            <td>
                                <a href="{{"delete/".$User['id']}}" class="btn btn-danger">Delete</a>
                                <a href="{{"showData/".$User['id']}}" class="btn btn-primary">Update</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <span>
                {{$Users->links()}} <!--add pagination next and previous-->
            </span>
        </div>
        <form action="addData" method="post">
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="your name"><br>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="your email"><br>
            <label for="address">Address</label>
            <input type="text" name="address" id="address" class="form-control" placeholder="your address"><br>
            <input type="submit" value="Submit" class="btn btn-success">
        </form>
    </div>
</body>
<!--remove unwanted big arrows for prevoius and next-->
<style>
    .w-5{
        display: none; 
    }
</style>
</html>