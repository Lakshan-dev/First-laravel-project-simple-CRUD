<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <br>
        <h1 class="text-center">Add Member</h1>
        @if(session('username'))
            <div class="alert alert-success" role="alert">
                {{session('username')}} has added.
            </div>
        @endif
        <form action="member" method="post">
            @csrf
            <div class="form-group">
                <label>UserName</label>
                <input type="text" name="username" class="form-control" placeholder="Enter username">
            </div><br>
            <div class="form-group">
                <label>Email address</label>
                <input type="text" class="form-control" name="email" placeholder="Enter email">
            </div><br>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div><br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>