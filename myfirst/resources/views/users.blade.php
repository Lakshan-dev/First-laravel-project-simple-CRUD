<h1>User Login</h1>

<!--@if($errors->any())
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
@endif-->

<form action="users" method="post">
    @csrf
    <input type="text" name="username" placeholder="enter username" value="{{old('username')}}"><br>
    <span style="color: red;">@error('username'){{$message}}@enderror</span><br>
    <input type="password" name="userpassword" placeholder="enter password"><br>
    <span style="color: red;">@error('userpassword'){{$message}}@enderror</span><br>
    <button type="submit">Login</button>
</form>